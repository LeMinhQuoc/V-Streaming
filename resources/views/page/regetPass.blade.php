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
<link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/style.css') }}">
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
    .new-form {
        margin: 200px 500px;
        background: lightgray;
    }
    .new-form input {
    width: 100%;
    
}
</style>

<body class="image">
    <a href="{{route('homepage')}}" class="p-3"><i class="fas fa-angle-left"> </i> BACK</a>
    
    <div class="center">
            <h1>No worries, we're here to <strong>help you</strong></h1>
            <h2><strong>Set</strong> new password</h2>
            <h2>Just provide us <strong>your information</strong> correctly</h2>
            <hr style="border: 1px solid white">
            <form action="{{route('setPass')}}" method="post" >
                @csrf
                <div class="form-group row">
                    <label for="phonenumber" class="col-sm-4 col-form-label">What's your phone number?</label>
                    <div  class="col-sm-8 form-group">
                        <input class="form-control" id="phonenumber"  name="phonenumber" >
                    </div>
                         
                    <label for="name" class="col-sm-4 col-form-label">How about your name?</label>
                    <div  class="col-sm-8 form-group">
                        <input class="form-control" name="name" >
                    </div>
                    <label for="password" class="col-sm-4 col-form-label">Try to type your new password</label>
                     <div  class="col-sm-8 form-group">
                        <input class="form-control" type="password" name="password" >
                    </div>
                    <label for="repassword" class="col-sm-4 col-form-label">Now, repeat your new password!</label>
                    <div  class="col-sm-8 form-group">
                        <input class="form-control" type="password" name="repassword">
                    </div>
                </div>
                
                <div class="">
                    <button class="btn btn-primary btn-block" type="submit">Set new Password</button>
                </div>
                
            </form>
       
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>