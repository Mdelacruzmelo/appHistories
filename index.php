<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>History Board App</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
  </head>

  <body>
    <div id="container" class="container bg-danger position-relative">

      <div id="loginContainer" class="col-lg-3 col-md-4 col-sm-8 ml-lg-4 px-4 py-4 bg-warning rounded1rem">
        <form name="login" action="\login" method="POST">
          <div class="col-12 text-center">Login</div>
          <div class="form-group row mt-3">
            <div class="col-1 mt-2 ml-2 p-0 pr-2">
              <label for="email_login" class="widthHeight1rem rounded-circle bg-success float-right"></label>
            </div>
            <div class="col-10 p-0 px-2">
              <input type="email" 
                     class="form-control"
                     id="email_login" 
                     aria-describedby="emailHelp" 
                     placeholder="Enter email">
              <small id="emailHelp" 
                     class="form-text text-muted d-none">
                Email does not exst.
              </small>
            </div>

          </div>
          
          <div class="form-group row mt-3">
            <div class="col-1 mt-2 ml-2 p-0 pr-2">
              <label for="password_login" class="widthHeight1rem rounded-circle bg-success float-right"></label>
            </div>
            <div class="col-10 p-0 px-2">
              <input type="password" 
                     class="form-control"
                     id="password_login" 
                     aria-describedby="passwordHelp" 
                     placeholder="Password">
              <small id="passwordHelp" 
                     class="form-text text-muted d-none">
                Incorrect password
              </small>
            </div>

          </div>
          
          <div class="form-check">
            <input type="checkbox" 
                   class="form-check-input" 
                   id="remember_login">
            <label class="form-check-label" 
                   for="remember_login">
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
      </div>
    </div>
  </body>

</html>
