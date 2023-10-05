<?php
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <title>Casa de Rico</title>
    <link type="image/png" sizes="96x96" rel="icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="basic.css">
  <body>
      <div class="header">
        <p class="text"><h1>Casa de Rico</h1></p>
        <p class="text"><h2>Yo if you can see this page, you must be cool.</h2></p>
      </div>
      <div class="devel">
        <p class="text">
          Server software: <samp><?php echo strip_tags(htmlentities($_SERVER['SERVER_SOFTWARE'], ENT_QUOTES, 'UTF-8')); ?></samp>  <br>
          Server name: <samp><?php echo strip_tags(htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8')); ?></samp>  <br>
          Document root: <samp><?php echo strip_tags(htmlentities($_SERVER['DOCUMENT_ROOT'], ENT_QUOTES, 'UTF-8')); ?></samp>  <br>
          Protocol: <samp><?php echo ((isset($_SERVER['HTTPS']) === true && $_SERVER['HTTPS'] !== 'off') ? '<abbr title="Hypertext Transfer Protocol Secure">https</abbr>' : '<abbr title="Hypertext Transfer Protocol">http</abbr>'); ?></samp><br>
          <abbr title="Hypertext Preprocessor">PHP</abbr>: <samp><?php echo phpversion(); ?></samp>
        </p>
        <p class="text" id="footnote-1"><small><sup>1</sup> File: <samp>index.php</samp></small></p>
      </div>
  </body>
</html>