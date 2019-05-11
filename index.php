
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#000000">
  <!--
      manifest.json provides metadata used when your web app is added to the
      homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
    -->
  <link rel="manifest" href="%PUBLIC_URL%/manifest.json">
  <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <style>
    body {
      margin: 0;
      padding: 0;
      background: #fff;

    }

    .body {
      position: absolute;
      top: -20px;
      left: -20px;
      right: -40px;
      bottom: -40px;
      width: auto;
      height: auto;

      background-size: cover;
      background: url(background.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;

      z-index: 2;
    }







    .panel {
      position: absolute;
      border-radius: 50px 50px 50px 50px;
      top: calc(30% - 75px);
      left: calc(31% - 50px);
      height: 450px;
      width: 700px;
      padding: 10px;
      z-index: 5;
      background-color: rgb(255, 255, 255);
      opacity: 0.8;
      filter: alpha(opacity=80)
    }

    .logo {
      position: absolute;

      left: calc(50% - 50px);
      height: 100px;
      width: 100px;
      padding: 10px;
      z-index: 5;

    }

    .logotext {
      position: absolute;
      top: calc(43% - 75px);
      left: calc(45% - 50px);

      width: 600px;

      z-index: 5;

    }

    .google {
      position: absolute;
      top: calc(55% - 75px);
      left: calc(10% - 50px);
      height: 150px;
      width: 300px;
      padding: 10px;
      z-index: 5;

    }

    .login {
      position: absolute;
      top: calc(55% - 75px);
      right: calc(15% - 100px);
      height: 150px;
      width: 350px;
      padding: 10px;
      z-index: 5;

    }
  </style>
  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id"
    content="624602059574-qsv45kcgn89v376114ql2ps2t5rljfd7.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
  <script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
      console.log('statusChangeCallback');
      console.log(response);
      // The response object is returned with a status field that lets the
      // app know the current login status of the person.
      // Full docs on the response object can be found in the documentation
      // for FB.getLoginStatus().
      if (response.status === 'connected') {
        // Logged into your app and Facebook.
        testAPI();
      } else {
        // The person is not logged into your app or we are unable to tell.
        document.getElementById('status').innerHTML = 'Please log in ' +
          'to Facebook.';
      }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
      FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
      });
    }

    window.fbAsyncInit = function () {
      FB.init({
        appId: '2307080779348137',
        cookie: true,  // enable cookies to allow the server to access 
        // the session
        xfbml: true,  // parse social plugins on this page
        version: 'v3.3' // The Graph API version to use for the call
      });

      // Now that we've initialized the JavaScript SDK, we call 
      // FB.getLoginStatus().  This function gets the state of the
      // person visiting this page and can return one of three states to
      // the callback you provide.  They can be:
      //
      // 1. Logged into your app ('connected')
      // 2. Logged into Facebook, but not your app ('not_authorized')
      // 3. Not logged into Facebook and can't tell if they are logged into
      //    your app or not.
      //
      // These three cases are handled in the callback function.

      FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
      });

    };

    // Load the SDK asynchronously
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
      console.log('Welcome!  Fetching your information.... ');
      FB.api('/me', function (response) {
        console.log('Successful login for: ' + response.name);
        document.getElementById('status').innerHTML ="<a href='/catch.php?user="+response.name+"'><button> <i class='fab fa-facebook' style='font-size:38px;color:blue'></i> Continue as: " +response.name+"</button></a>" ;
      });
    }
  </script>

  <div>

    <div class="body"></div>

    <div class="panel">
      <div class="logo">

        <img src="logo.png" height="65" width="90" />


      </div>
      <div class="logotext">

        <h5>SJSU Market Place</h5>

      </div>
      <div class="google">
	<div id="status">
        </div>
<br>
        <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with"
          data-auto-logout-link="true" data-use-continue-as="true" scope="public_profile,email" onlogin="checkLoginState();"></div>
	<br>
        
        <br>
        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" id="google"></div>
        
        <br /><br />

      </div>
      <div class="login">
        <p> <b>Login</b></p>
        <form action="validation.php" method="POST">
          <div class="form-group">

            <input type="email" onChange={this.usernameChangeHandler} class="form-control" id="exampleInputEmail1"
              aria-describedby="emailHelp" placeholder="Email" required name="email"/>

          </div>
          <div class="form-group">

            <input type="password" onChange={this.passwordChangeHandler} class="form-control" id="exampleInputPassword1"
              placeholder="Password" required name="password"/>
          </div>

          <input type="submit" class="btn btn-primary" value="Login" />  
        </form>
        <font color="red"><div id="php"></div></font>
        <font color="blue">New User <a href="signup.php"> Click Here</a></font>
      </div>

    </div>





  </div>


  <script>
    function onSignIn(googleUser) {
      // Useful data for your client-side scripts:
      var profile = googleUser.getBasicProfile();
      console.log("ID: " + profile.getId()); // Don't send this directly to your server!
      console.log('Full Name: ' + profile.getName());
      console.log('Given Name: ' + profile.getGivenName());
      console.log('Family Name: ' + profile.getFamilyName());
      console.log("Image URL: " + profile.getImageUrl());
      console.log("Email: " + profile.getEmail());

      // The ID token you need to pass to your backend:
      var id_token = googleUser.getAuthResponse().id_token;
      console.log("ID Token: " + id_token);
      document.getElementById("google").innerHTML = '<div class="btn white darken-4 col s10 m4"><a href="/catch.php?user='+ profile.getName()+'" style="text-transform:none"><div class="left"><img width="20px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/></div>Continue As: '+ profile.getName()+'</a></div>';
    }
  </script>


