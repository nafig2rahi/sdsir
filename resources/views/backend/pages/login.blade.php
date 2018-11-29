<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <link href="{{asset('backend/css/login.css')}}" rel="stylesheet">

  </head>

 <div class="box">
  <h1>Login</h1>
  <?php
                $message = Session::get('message');
                if($message){
                  echo $message;
                  Session::put('message',null);
                } 
              ?>
  
  <form action="{{URL::to('loginstore')}}" method="post">
    {{ csrf_field() }}
    <div class="inputBox">
      <input type="email" name="email" required="">
      <label>Email</label>


    </div>
    <div class="inputBox">
      <input type="password" name="password" required="">
      <label>password</label>
    </div>
    <div class="center">
            <button type="submit" name="" value="submit" class="a">Submit</button>
    </div>
  </form>
</div>

</html>
