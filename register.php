<?php include 'firstload.php'?>

  <div class="wrapper">
    <form class="form-signin" action="registeroperation.php" method="post">       
      <h2 class="form-signin-heading" align="center">Register</h2>
      <input type="text" class="form-control" name="ad" placeholder="Name surname" required="" autofocus="" />
       <br>
             <input type="text" class="form-control" name="telefon" placeholder="Phone number" required="" autofocus="" />
       <br>
             <input type="text" class="form-control" name="email" placeholder="E-mail adress" required="" autofocus="" />
       <br>
             <input type="text" class="form-control" name="kadi" placeholder="Username" required="" autofocus="" />
       <br>
      <input type="password" class="form-control" name="sifre" placeholder="Password" required=""/>   
       <br>

      <button class="btn btn-lg btn-primary btn-block" name="btn-signup" id="btn-signup"type="submit">Register</button>   
    </form>
  </div>

  <style type="text/css">
    @import "bourbon";



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