<?php

/**
 * pbbcg/index.php (Probo Bitbucket Config Generator)
 * by Michael R. Bagnall <mrbagnall@icloud.com> https://michaelbagnall.com
 */

 // Check to make sure we have cURL installed on our system and in PHP.
 if (!function_exists('curl_version')) {
   include 'includes/no-curl.inc.php';
   exit();
 }

// if the code is in our url, then we need to ask the user for the client id
// and the client secret in order to get the token and refresh token.
if (!empty($_GET['code'])) {
  include 'includes/code-form.inc.php';
}
else {
  // If the code is not in the URL but is in the posted data, then we have a 
  // submitted form and need to do our token/refresh token generation.
  if (!empty($_POST['code'])) {

    // The default parameters to send to Bitbucket.
    $post_fields = [
      'code' => $_POST['code'],
      'grant_type' => 'authorization_code',
    ];

    // Define out client authorization string.
    $client_auth = $_POST['client_key'] . ':' . $_POST['client_secret'];

    // Get the access_token and refresh_token from Bitbucket.
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://bitbucket.org/site/oauth2/access_token');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));;
    curl_setopt($ch, CURLOPT_USERPWD, $client_auth);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($ch);
    curl_close ($ch);
    
    // Decode the response from Bitbucket.
    $json = json_decode($response);
    
    // We had an error, so deliver the bad news.
    if (!empty($json->error)) {
      include 'includes/bitbucket-error.inc.php';
      exit();
    }

    // Deliver the good news.    
    $bitbucket_configuration  = "bbClientKey: " . $_POST['client_key'] . "\n";
    $bitbucket_configuration .= "bbClientSecret: " . $_POST['client_secret'] . "\n";
    $bitbucket_configuration .= "bbAccessToken: " . $json->access_token . "\n";
    $bitbucket_configuration .= "bbRefreshToken: " . $json->refresh_token;
    include 'includes/present-configuration.inc.php';
  }
  else {
    if (!empty($_POST['client_key'])) {
      header('location: https://bitbucket.org/site/oauth2/authorize?client_id=' . $_POST['client_key'] . '&response_type=code');
      exit();
    }
    else {
      // If the code is not present in the URL or the posted data, then we need to
      // request the client key so we can redirect to authorize the application.
      include 'includes/get-client-key-form.inc.php';
    }
  }
}