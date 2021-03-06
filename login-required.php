<?php include 'firstload.php'?>

  <div class="wrapper">
    <form class="form-signin" action="authenticate.php" method="post">       
      <h2 class="form-signin-heading" align="center">User Login</h2>
      <h6 style="color:red">You must have an account to make ticket reservation!</h6>
      <input type="text" class="form-control" id="username" name="username" placeholder="Your username" required="" autofocus="" />
        <br>
      <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required=""/>   
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
               <label>You don't have an account?<br>Click <a href="register.php">here</a> to register</label> 
    </form>
  </div>

  <style type="text/css">
    @import "bourbon";

body {

  background-image: url("img/login_background.jpg"); 
  background-size: 100%;
}

.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}

  </style>
<?php include 'footer.php'?>