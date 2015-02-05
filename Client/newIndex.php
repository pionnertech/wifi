<?php
/*  FACEBOOK LOGIN BASIC - PHP SDK V4.0
 *  file      - index.php
 *  Developer     - Krishna Teja G S
 *  Website     - http://packetcode.com/apps/fblogin-basic/
 *  Date      - 27th Sept 2014
 *  license     - GNU General Public License version 2 or later
*/

/* INCLUSION OF LIBRARY FILEs*/
  require_once( 'lib/Facebook/FacebookSession.php');
  require_once( 'lib/Facebook/FacebookRequest.php' );
  require_once( 'lib/Facebook/FacebookResponse.php' );
  require_once( 'lib/Facebook/FacebookSDKException.php' );
  require_once( 'lib/Facebook/FacebookRequestException.php' );
  require_once( 'lib/Facebook/FacebookRedirectLoginHelper.php');
  require_once( 'lib/Facebook/FacebookAuthorizationException.php' );
  require_once( 'lib/Facebook/GraphObject.php' );
  require_once( 'lib/Facebook/GraphUser.php' );
  require_once( 'lib/Facebook/GraphSessionInfo.php' );
  require_once( 'lib/Facebook/Entities/AccessToken.php');
  require_once( 'lib/Facebook/HttpClients/FacebookCurl.php' );
  require_once( 'lib/Facebook/HttpClients/FacebookHttpable.php');
  require_once( 'lib/Facebook/HttpClients/FacebookCurlHttpClient.php');

/* USE NAMESPACES */
  
  use Facebook\FacebookSession;
  use Facebook\FacebookRedirectLoginHelper;
  use Facebook\FacebookRequest;
  use Facebook\FacebookResponse;
  use Facebook\FacebookSDKException;
  use Facebook\FacebookRequestException;
  use Facebook\FacebookAuthorizationException;
  use Facebook\GraphObject;
  use Facebook\GraphUser;
  use Facebook\GraphSessionInfo;
  use Facebook\FacebookHttpable;
  use Facebook\FacebookCurlHttpClient;
  use Facebook\FacebookCurl;

/*PROCESS*/
  
  //1.Stat Session
   session_start();
  //2.Use app id,secret and redirect url
   $app_id = '476320229174036';
   $app_secret = '924c758460dd7ac0137847db5c2eba6e';
   $redirect_url='http://megustawifi.es/access.php';
   
   //3.Initialize application, create helper object and get fb sess
   FacebookSession::setDefaultApplication($app_id,$app_secret);
   $helper = new FacebookRedirectLoginHelper($redirect_url);
   $sess = $helper->getSessionFromRedirect();

  //4. if fb sess exists echo name 
    if(isset($sess)){
      //create request object,execute and capture response
    $request = new FacebookRequest($sess, 'GET', '/me');
    // from response get graph object
    $response = $request->execute();
    $graph = $response->getGraphObject(GraphUser::className());
    // use graph object methods to get user details
    $name= $graph->getName();
    echo "hi $name";
  } else {
    //else echo login
    echo '<a href='.$helper->getLoginUrl().'>Login with facebook</a>';
  }

?>
<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Smile Points</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->

        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />

        <style type="text/css">
       .logins{
        padding: 2em;
        margin:.7em;
        display: inline-block;
        vertical-align: top;
       }
       .logins:nth-child(1){
        background-color: #3C599F;
       /* twitter #42C5F6     google plus #CE1616*/
       }

       .logins:nth-child(2){
        background-color: #42C5F6;
       }
        .logins:nth-child(3){

        background-color: #CE1616;
       }
      .wrapper_logins{
        display: inline-block;
        vertical-align: top;
      }

        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="page-container">
        <h1 style="margin-bottom: 1.5em;">Me gusta Wi-Fi</h1>
            <h2></h2>
<div class="wrapper-logins">
   <div class="logins"><i class="fa fa-facebook fa-3x"></i></div>
   <div class="logins"><i class="fa fa-twitter fa-3x"></i></div>
   <div class="logins"><i class="fa fa-google-plus fa-3x"></i></div>
</div>
             
        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>