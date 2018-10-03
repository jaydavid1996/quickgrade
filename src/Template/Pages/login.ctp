<?php  $this->layout = false; #disable default layout ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />


    <title>Quick Grade</title>

    <?= $this->Html->css('bootstrap.min') ?>

    <?= $this->Html->css('fontawesome-free/css/all.min') ?>

    <?= $this->Html->css('sb-admin') ?>


  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Sign In</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <!-- <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label> -->
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="index.html">Sign In</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Sign Up</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            <?php 
            $request = $this->Url->build(['controller' => 'ajax', 'action' => 'test.json']);
            ?>
            <button id="button" rel="<?= $request ?>">Click me</button>
          </div>
        </div>
      </div>
    </div>
    <?= $this->Html->script("//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js") ?>
    <?= $this->Html->script('bootstrap.bundle.min') ?>
    <?= $this->Html->script('jquery.easing.min') ?>
    
    
    <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyDOZy-SG8f9hSoM2CY_PtiUtjsYXzzM9k8",
        authDomain: "quickgrade-26cde.firebaseapp.com",
        databaseURL: "https://quickgrade-26cde.firebaseio.com",
        projectId: "quickgrade-26cde",
        storageBucket: "quickgrade-26cde.appspot.com",
        messagingSenderId: "168163613333"
      };
      firebase.initializeApp(config);
      
      firebase.auth().onAuthStateChanged(function(user) {
       window.user = user; // user is undefined if no user signed in
      });

      
      
    </script>
    <script type="text/javascript">
    $(document).ready(function() 
    {
        $('#button').click(function() 
        {
            var targeturl = $(this).attr('rel');
            $.ajax({
                type: 'get',
                url: targeturl,
                beforeSend: function(xhr) 
                {
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                },
                success: function(response) 
                {
                        alert(response);
                },
                error: function(e) 
                {
                    alert("An error occurred: " + e.responseText.message);
                    console.log(e);
                }
            });
        });
    });
    </script>


  </body>

</html>
