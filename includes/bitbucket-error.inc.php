<!DOCTYPE html>
<html>
  <head>
    <title>Probo Bitbucket Configuration Generator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="content">
      <h1>Probo Bitbucket Configuration Generator</h1>
      Bitbucket was unable to process your request. The details of the problem are below.<br /><br />
      <form>
        <textarea id="bitbucket_configuration"><?php echo $json->error_description;?></textarea>
      </form>
    </div>
  </body>
</html>