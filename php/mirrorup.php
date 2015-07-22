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
	if (isset($_GET['RFDev0'])) {
		$tval=$_GET['RFDev0'];
		if ($tval==0) {
	    	apc_store('RFDev0', 0);
	    } else {
	    	apc_store('RFDev0', 1);
	    }
    	$resp=200;
	}else if (isset($_GET['RFDev1'])) {
		$tval=$_GET['RFDev1'];
		if ($tval==0) {
	    	apc_store('RFDev1', 0);
	    } else {
	    	apc_store('RFDev1', 1);
	    }
    	$resp=200;
	}else if (isset($_GET['RFDev2'])) {
		$tval=$_GET['RFDev2'];
		if ($tval==0) {
	    	apc_store('RFDev2', 0);
	    } else {
	    	apc_store('RFDev2', 1);
	    }
    	$resp=200;
	}else if (isset($_GET['Temp1'])) {
		$tval=$_GET['Temp1'];
		if ($tval!="undefined") {
	    	apc_store('Temp1', $tval);
	    } 
    	$resp=200;
	}else if (isset($_GET['Humidity'])) {
		$tval=$_GET['Humidity'];
		if ($tval!="undefined") {
	    	apc_store('Humidity', $tval);
	    } 
    	$resp=200;
	}else
    	// Fallback behaviour goes here
	}
	http_response_code($resp);
?>
  </body>
</html>