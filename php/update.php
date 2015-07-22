if (isset($_GET['link'])) {
    echo $_GET['link'];
}else{
    // Fallback behaviour goes here
}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
  </head>
  <body>
    <?php
    $resp=400;
	if (isset($_GET['Relay0'])) {
		$tval=$_GET['Relay0'];
		if ($tval==0) {
	    	apc_store('Relay0', 0);
	    } else {
	    	apc_store('Relay0', 1);
	    }
    	$resp=200;
	}else{
    	// Fallback behaviour goes here
	}
	http_response_code($resp);
?>
  </body>
</html>