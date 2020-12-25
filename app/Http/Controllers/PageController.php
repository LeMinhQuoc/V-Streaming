<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phim;
use App\type;
use App\User;
use App\comment;
use App\Phim_type;
use App\film_actor;
use App\actor;
use App\Reply;
use App\Wishlist;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //home page
    public function index()
    {



        session_start();

        $this->error();
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] != -1) {
                $users = User::where('id', '=', $_SESSION['user'])->first();
                $phim = Phim::all();
                $type = Type::all();

                return view('page.home', compact('phim', 'users','type'));
            } else {
                $phim = Phim::all();
                $type = Type::all();


                // echo hash('ripemd160', '123456');

                return view('page.home', compact('phim','type'));
            }
        } else {

            $_SESSION['user'] = -1;
            $phim = Phim::all();
            $type = Type::all();



            return view('page.home', compact('phim','type'));
        }
    }
    public function getCategory()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $u_id = $_SESSION['user'];
        $users = User::where('id', '=', $u_id)->first();
        $datas = [];
        $phims = Phim::all();
        foreach ($phims as $phim) {
            $phim_types = $phim->phim_type()->get();
            $types = [];
            foreach ($phim_types as $phim_type) {
                array_push($types,  ['name' => $phim_type->type()->get()[0]['type']]);
            }
            $data = $phim;
            $data['type'] = $types;
            array_push($datas, $data);
        }



        // $phims = Phim::where('p_id',2)->first();
        // $phim_types = $phims->phim_type()->get();
        // $types = [];
        // foreach ($phim_types as $phim_type) {
        //   array_push($types,  ['name' => $phim_type->type()->get()[0]['type']]);
        // }
        // $data = $phims;
        // $data['type'] = $types;

        return view('page.categories', compact('datas', 'users'));
    }
    //get detail's film 
    public function getDetail($id)
    {

        session_start();
        $u_id = $_SESSION['user'];

        $users = User::where('id', '=', $u_id)->first();
        $comments = [];
        $comment = comment::where('p_id', '=', $id)->get();
        foreach ($comment as $c) {
            $user = $c->user()->get();
            $replys = Reply::where('c_id', '=', $c->id)->get();


            $reply = [];
            foreach ($replys as $re) {

                $re_user = $re->user()->get();
                $data = $re;
                $data['re_user'] = $re_user;
                array_push($reply, $data);
            }


            $data = $c;
            $data['user'] = $user;
            $data['reply'] = $reply;
            array_push($comments, $data);
        }
        $likes = Wishlist::where('u_id', '=', $u_id)->get();

        $wishlist = [];

        foreach ($likes as $like) {

            $wishphim = $like->phim()->get();

            array_push($wishlist, $wishphim);
        }


        $phim = Phim::where('id', '=', $id)->get();


        $actor_ar = [];
        $actors = $phim[0]->getactor()->get();

        foreach ($actors as $actor) {
            $da = $actor->actor()->get();
            $da['role'] = $actor->role;

            array_push($actor_ar, $da);
        }


        $phim_types = $phim[0]->phim_type()->get();
        $types = [];
        foreach ($phim_types as $phim_type) {
            array_push($types,  ['name' => $phim_type->type()->get()[0]['type']]);
        }



        $film = Phim::all();




        return view('page.detail', compact('phim', 'actor_ar', 'comments', 'users', 'film', 'types', 'wishlist'));
    }

    //streaming
    public function getStreaming($id)
    {


        session_start();
        $u_id = $_SESSION['user'];

        $users = User::where('id', '=', $u_id)->first();
        $comments = [];
        $comment = comment::where('p_id', '=', $id)->get();
        foreach ($comment as $c) {
            $user = $c->user()->get();
            $replys = Reply::where('c_id', '=', $c->id)->get();




            $reply = [];
            foreach ($replys as $re) {

                $re_user = $re->user()->get();
                $data = $re;
                $data['re_user'] = $re_user;
                array_push($reply, $data);
            }


            $data = $c;
            $data['user'] = $user;
            $data['reply'] = $reply;
            array_push($comments, $data);
        }

        $likes = Wishlist::where('u_id', '=', $u_id)->get();

        $wishlist = [];

        foreach ($likes as $like) {

            $wishphim = $like->phim()->get();

            array_push($wishlist, $wishphim);
        }


        $phim = Phim::where('id', '=', $id)->get();
        $film = Phim::all();
        return view('page.streaming', compact('phim', 'comments', 'users', 'film', 'wishlist'));
    }
    //get Admin view
    public function getAdmin()
    {
        $datas = [];
        $phims = Phim::all();
        foreach ($phims as $phim) {
            // use function phim_type to get type in per film object 
            $phim_types = $phim->phim_type()->get();
            $types = [];
            foreach ($phim_types as $phim_type) {
                array_push($types,  ['name' => $phim_type->type()->get()[0]['type']]);
            }

            $data = $phim;
            $data['type'] = $types;
            array_push($datas, $data);
        }


        return view('admin.admin_home', compact('datas'));
    }
    public function getLogin()
    {
        $this->error();

        return view('page.login');
    }

    public function getSignup()
    {
        return view('page.signup');
    }
    public function postSignup(signupRequest $request)
    {


        $check = 0;

        $dataUser = User::all();

        foreach ($dataUser as $user) {

            if ($request->phone == $user->phonenumber) {
                session_start();
                $_SESSION["Erro"] = 3;

                return redirect('homepage');
                break;
            }
        }
        $user = new User();
        $user->name = $request->name;
        $user->phonenumber = $request->phone;
        $pwd = $request->pwd;
        $repwd = $request->repwd;
        if ($pwd != $repwd) {
            return $this->getSignup()->with('thongbao', 'incorrect password');
        } else {
            // $user->password = password_hash ($repwd, PASSWORD_DEFAULT);
            $user->password = hash('ripemd160', $repwd);
            $user->save();
            return redirect('getlogin');
        }
    }
    // <admin's function>   delete a film 
    public function delete($p_id)
    {
        DB::table('film_type')->where('p_id', $p_id)->delete();
        DB::table('film')->where('id', $p_id)->delete();

        return redirect('admin');
    }
    // <admin's function>   Edit film's information 
    public function edit($p_id)
    {
        //get information about film with id
        $phim = Phim::where('id', $p_id)->get();

        $data = $phim;
        //call function in model to get type per film
        $phim_types = $phim[0]->phim_type()->get();
        $types = [];
        foreach ($phim_types as $phim_type) {
            array_push($types,  ['name' => $phim_type->type()->get()[0]['type']]);
        }

        $data['type'] = $types;


        return view('admin.edit_phim', compact('phim'));
    }
    public function editsubmit(Request $re)
    {
        //get information about film with id



        DB::table('film')
            ->where('id', $re->input('id'))
            ->update('');


        return redirect('admin');
    }

    //add a comment
    public function addComment(Request $re)
    {


        if ($re->input('u_id') != -1) {
            $u_id = $re->input('u_id');
            $p_id = $re->input('p_id');
            $comment = $re->input('comment');
            // ad a commend with commenter have user id =u_id , in film have film id=p_id
            DB::table('comment')->insert(['p_id' => $p_id, 'u_id' => $u_id, 'comment' => $comment]);
            return redirect()->back();
        } else {
            session_start();
            $_SESSION["Erro"] = 4;

            return $this->getLogin();
        }
    }

    //<admin's function> management user 
    public function userM()
    {
        //get all users in table
        $datas = User::all();
        return view('admin.userManagement', compact('datas'));
    }
    //<admin's function> delete a comment 
    public function deleteComment($c_id)
    {
        $reply = DB::table('reply')->where('c_id', $c_id)->get();
        if ($reply) {
            DB::table('reply')->where('c_id', $c_id)->delete();
        }
        //delete a comment where with id 
        DB::table('comment')->where('id', $c_id)->delete();
        return redirect()->back();
    }
    //<admin's function> delete a user
    public function deleteUser($id)
    {
        //delete a comment where with id 
        DB::table('user')->where('id', $id)->delete();
        return redirect()->back();
    }
    //login
    public function login(Request $re)
    {



        $user = User::where('phonenumber', '=', $re->input('phonenumber'))->first();
        //check login
        if ($user) {
            //login complete
            $in_pass = $re->input('password');
            $data_password = $user->password;
            $input_pass = hash('ripemd160', $in_pass);
            if ($data_password == $input_pass) {
                session_start();
                $_SESSION["user"] = $user->id;
                return redirect('homepage')->with(compact('user'));
            } else {
                //incorrect password
                session_start();
                $_SESSION["Erro"] = 2;

                return redirect('homepage');
            }
        } else {

            // unknow accout
            session_start();
            $_SESSION["Erro"] = 1;

            return redirect('homepage');
        }
    }
    //logout delete session
    public function logout()
    {
        session_start();
        $_SESSION['user'] = -1;
        return redirect('homepage');
    }

    //search

    public function search(Request $re)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $u_id = $_SESSION['user'];
        $users = User::where('id', '=', $u_id)->first();
        $search_in = $re->input('search');
        $results = Phim::Where('p_name', 'like', '%' . $search_in . '%')->get();
        return view('page.searchresult', compact('results', 'users','search_in'));
    }
    //add a comment
    public function reply(Request $re)
    {
        session_start();
        if ($_SESSION['user'] != -1) {


            $u_id = $re->input('u_id');
            $c_id = $re->input('c_id');
            if ($re->input('re_comment')) {
                $comment = $re->input('re_comment');
            } else {

                $comment = '';
            }


            // ad a commend with commenter have user id =u_id , in film have film id=p_id
            DB::table('reply')->insert(['c_id' => $c_id, 'u_id' => $u_id, 're_comment' => $comment]);
            return redirect()->back();
        } else {
            $_SESSION["Erro"] = 4;
            return $this->getLogin();
        }
    }



    // Error checker
    public function error()
    {
        $_SESSION['poision'] = 0;

        if (isset($_SESSION['Erro'])) {

            //error code 0 = no proplem!
            //           1 = login failse phonenumber dose not exist!
            //           2 = login failse incorrect password !
            //           3 = signin failse phonenumber aready exist!
            //           4 = need login before comment!
            //           5= unknow user name
            if ($_SESSION['Erro'] != 0) {
                if ($_SESSION['Erro'] == 1) {
                    echo "<script type='text/javascript'>alert('Unknow accout has this phone number!');</script>";
                }
                if ($_SESSION['Erro'] == 2) {
                    echo "<script type='text/javascript'>alert('Incorrect password !');</script>";
                }
                if ($_SESSION['Erro'] == 3) {
                    echo "<script type='text/javascript'>alert('This phonenumber aready exist !');</script>";
                }
                if ($_SESSION['Erro'] == 4) {
                    echo "<script type='text/javascript'>alert('You must to login before comment !');</script>";
                }
                if ($_SESSION['Erro'] == 5) {
                    echo "<script type='text/javascript'>alert('Unknow that name!');</script>";
                }
                echo "<script>console.log('Error code : " . $_SESSION['Erro'] . "' );</script>";
                $_SESSION['Erro'] = 0;
            }
        }
    }




    //get add film


    public function getAddFilm()
    {
        return view('admin.add_phim');
    }
    //addFilm
    public function addFilm(Request $re)
    {

        $type = $re->input('type');
        $phim = new Phim;
        $phim->p_name = $re->input('name');
        $photo = "./public/images/images.png";
        if ($re->hasFile('image')) {
            $data = $re->input('image');
            $photo = $re->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/images';
            $re->file('image')->move($destination, $photo);
        }

        $phim->p_image = $photo;
        $phim->p_director = $re->input("director");
        $phim->p_released_year = $re->input("released");
        $phim->p_link = $re->input("link");
        $phim->p_sumary = $re->input("sumary");
        $phim->p_serie = $re->input("serie");
        $phim->p_nation = $re->input("nation");
        $phim->save();

        $phims = Phim::all();
        $j = count($phims);
        $i = 0;

        foreach ($phims as $article) {
            if ($j <= 1) {
                $id = $phims[$i]->id;
            }
            $i++;
            $j--;
        }

        DB::table('film_type')->insert(['p_id' => $id, 't_id' => $type]);

        return $this->getAdmin();
    }


    //add a wishlist







    public function like($id)
    {
        session_start();
        $temp = 0;
        $this->error();
        if ($_SESSION['user'] != -1) {

            $likes = DB::table('like')->get();
            foreach ($likes as $like) {
                if (($like->p_id == $id) && ($like->u_id == $_SESSION['user'])) {
                    DB::table('like')->where([
                        ['p_id', '=', $id],
                        ['u_id', '=', $_SESSION['user']],
                    ])->delete();
                    $temp = 1;
                }
            }
            if ($temp == 0) {
                DB::table('like')->insert(['p_id' => $id, 'u_id' => $_SESSION['user']]);
            }
        } else {
           
            $_SESSION["Erro"] = 4;

            return $this->getLogin();
        }


        return redirect()->back();
    }


    //get regetPass view
    public function regetPass()
    {
        $this->error();
        return view('page.regetPass');
    }


    // setpassword
    public function setPass(Request $re)
    {
        $this->error();
        $user = User::where('phonenumber', '=', $re->input('phonenumber'))->first();

        if ($user) {


            if ($user->name == $re->input('name')) {
                $pwd = $re->password;
                $repwd = $re->repassword;
                if ($pwd != $repwd) {
                    return $this->setPass()->with('thongbao', 'incorrect password');
                } else {

                    DB::table('user')
                        ->where('id', $user->id)
                        ->update(['password' => hash('ripemd160', $repwd)]);
                         echo "<script type='text/javascript'>alert('Done !');</script>";
                    return redirect('getlogin');
                }
            } else {
                //incorrect password
                session_start();
                $_SESSION["Erro"] = 5;
                return redirect('regetPass');
            }
        } else {

            // unknow accout
            session_start();
            $_SESSION["Erro"] = 1;
            return redirect('regetPass');
        }
    }
    public function getWishlist(){
        session_start();
        $u_id = $_SESSION['user'];


        $users = User::where('id', '=', $u_id)->first();

        $likes = Wishlist::where('u_id', '=', $u_id)->get();

        $wishlist = [];

        foreach ($likes as $like) {

            $wishphim = $like->phim()->get();

            array_push($wishlist, $wishphim);
        }
        return view('page.wishlist',compact('wishlist','users'));
    }
}
