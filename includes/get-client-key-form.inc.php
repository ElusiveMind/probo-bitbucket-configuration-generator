<!DOCTYPE html>
<html>
  <head>
    <title>Probo Bitbucket Configuration Generator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="content">
      <h1>Probo Bitbucket Configuration Generator</h1>
      Enter your client key for the OAuth application you have configured in Bitbucket. If you have
      not done so, refer to the Probo documentation for instructions on how to do this step and come
      back to this page.<br /><br />
      <div class="form">
        <form method="post" action="index.php">
          <label for="client_key">Client Key</label>
          <input type="textfield" name="client_key" id="client_key" value="" />
          <div class="clear"></div>
          <p align="center">
            <input type="submit" value="Submit" />
          </p>
        </form>
      </div>
    </div>
  </body>
</html>