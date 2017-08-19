<!DOCTYPE html>
<html>
  <head>
    <title>Probo Bitbucket Configuration Generator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="content">
      <h1>Probo Bitbucket Configuration Generator</h1>
      Your Probo Bitbucket configuration options are in the textarea below. Copy and paste the
      contents into your probo-bitbucket-handler YAML configuration file and start the daemon process
      to start receiving Bitbucket repositories. Refer to the Probo documentation for further
      information on the proper use and configuration of the Probo Bitbucket handler.<br /><br />
      <form>
        <textarea id="bitbucket_configuration"><?php echo $bitbucket_configuration;?></textarea>
      </form>
    </div>
  </body>
</html>