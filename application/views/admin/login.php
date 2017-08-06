
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="/public/image/icon.ico" />

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
    <!-- Custom styles for this template -->
    <link href="/public/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

        <?= form_open('login/login', 'class="form-signin"'); ?>
        <h2 class="form-signin-heading">Please sign in</h2>

        <?= validation_errors() ?>
        <p class="text-danger"><?= isset($invalid_user) ? $invalid_user : '' ?></p>
        
        <label for="username" class="sr-only">Username</label>
        <input value="<?= set_value('username') ?>" type="text" id="username" name="username" class="form-control" placeholder="Username">
 
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br />
        <center><a href="/">Back to home</a></center>
        <?= form_close();  ?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
