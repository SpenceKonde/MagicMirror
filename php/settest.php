
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
  </head>
  <body>
    <?php
    $resp=400;
	if (isset($_GET['FOO'])) {
		$tval=$_GET['FOO'];
		apc_store('foo', $tval);
    $resp=200;
	}
	http_response_code($resp);
  echo 'test';
?>
test2
  </body>
</html>