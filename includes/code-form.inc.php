<!DOCTYPE html>
<html>
  <head>
    <title>Probo Bitbucket Configuration Generator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="content">
      <h1>Probo Bitbucket Configuration Generator</h1>
      To generate your Bitbucket access and refresh tokens, please enter the client id
      and client secret in the form spaces below and click the submit button. No data
      is saved by this form or website.<br /><br />
      <div class="form">
        <form method="post" action="index.php">
          <input type="hidden" name="code" value="<?php echo $_GET['code']?>" />
          <label for="client_key">Client Key</label>
          <input type="textfield" name="client_key" id="client_key" value="" />
          <div class="clear"></div>
          <label for="client_secret">Client Secret</label>
          <input type="textfield" name="client_secret" id="client_secret" value="" />
          <p align="center">
            <input type="submit" value="Submit" />
          </p>
        </form>
      </div>
    </div>
  </body>
</html>