<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Video streaming</title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/small-business.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/signup.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
    integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/c10980ee97.js" crossorigin="anonymous"></script>
<style type="text/css">
    
</style>
<body class="image">
    <a href="{{ route('homepage') }}" class="p-3"><i class="fas fa-angle-left"> </i>BACK</a>
    <div >
        <div class="center">
            <div class="">
            <h1><strong>Become our member</strong> by</h1>
            <h2 class="text-center"><strong>Create</strong> an account.</h2>
            <hr style="border: 1px solid white">
            <form method="post" action="{{route('postsignup')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Full name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="pwd">
                </div>
                <div class="form-group">
                    <label for="repassword">Password repeat</label>
                    <input type="password" class="form-control" id="repassword" placeholder="Password repeat" name="repwd">
                </div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit"  href="{{route('postsignup')}}">Sign Up</button></div><a class="already" href="{{route('login')}}">You already have an account? Login here.</a>
            </form>
            <div>
                @include('block.error')
                 @if(isset($user))
                    <p>Name: {{$user['name']}}</p>
                    <p>Phone number: {{$user['phone']}}</p>
                    <p>Password: {{$user['password']}}</p>
                    <p>Password-repeat: {{$user['repassword']}}</p>
                @endif
            </div>
    </div>
    <div class="article-list"></div>
    <div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>