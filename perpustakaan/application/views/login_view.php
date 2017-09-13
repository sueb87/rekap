<html style="background-image:url(./gambar/bottom.png);background-repeat:repeat-x;background-position:bottom;">
<head>
  <title>Sign In</title>
  <meta name="viewport" content="width=device-width, initial-scale=0.5">
  <link rel="shortcut icon" href="settings.png">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="assets/build/css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet
</head>

<body style="background-image: url(./gambar/bg.png);background-repeat:repeat-x;">
  <div class="container">
    <div class='row'>
      <div class='col s12 m12 l6 offset-l3'>
        <div class="card">
        <div class="card-image">
          <img src="assets/images/d.png">
          <span class="card-title">Sign in to your account</span>
        </div>
          <div class="card-content">
                     <form method="post" action="<?php echo base_url() ?>login/dologin" class="tengah">
              <?php
                $announce = $this->session->flashdata('announce');
                if(!empty($announce)){
                  echo '
                    <div class="alert alert-danger">
                    '.$announce.' 
                    </div>
                  ';
                }
              ?>
              <div class="input-field">
                <input type="text" placeholder="Username" class="form-control" name="username" autofocus>
              </div>

              <div class="input-field">
                <input type="password" placeholder="Password" class="form-control" name="password">
              </div>

              <input type="submit" name="login" class="btn grey darken-3 white-text waves-effect waves-light btn-flat" value="login"></input>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
