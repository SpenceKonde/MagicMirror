
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
  </head>
  <body>
    <?php
echo apc_fetch('foo');
echo 'test';
?>
test2
  </body>
</html>