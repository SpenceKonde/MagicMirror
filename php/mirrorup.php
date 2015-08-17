
    <?php
    $resp=200;
	if (isset($_GET['RFDev0'])) {
		$tval=$_GET['RFDev0'];
		if ($tval==0) {
	    	apc_store('RFDev0', 0);
	    } else {
	    	apc_store('RFDev0', 1);
	    }
    	$resp=200;
	}
	if (isset($_GET['RFDev1'])) {
		$tval=$_GET['RFDev1'];
		if ($tval==0) {
	    	apc_store('RFDev1', 0);
	    } else {
	    	apc_store('RFDev1', 1);
	    }
    	$resp=200;
	}
	 if (isset($_GET['RFDev2'])) {
		$tval=$_GET['RFDev2'];
		if ($tval==0) {
	    	apc_store('RFDev2', 0);
	    } else {
	    	apc_store('RFDev2', 1);
	    }
    	$resp=200;
	}
	if (isset($_GET['clear'])) {
		$tval=$_GET['clear'];
		if ($tval!="undefined") {
	    	apc_store('light_clear', $tval);
	    } 
    	$resp=200;
	}
	if (isset($_GET['red'])) {
		$tval=$_GET['red'];
		if ($tval!="undefined") {
	    	apc_store('light_red', $tval);
	    } 
    	$resp=200;
	}
	if (isset($_GET['green'])) {
		$tval=$_GET['green'];
		if ($tval!="undefined") {
	    	apc_store('light_green', $tval);
	    } 
    	$resp=200;
	}
	if (isset($_GET['blue'])) {
		$tval=$_GET['blue'];
		if ($tval!="undefined") {
	    	apc_store('light_blue', $tval);
	    } 
    	$resp=200;
	}
	if (isset($_GET['Humidity'])) {
		$tval=$_GET['Humidity'];
		if ($tval!="undefined") {
	    	apc_store('humidity', $tval);
	    } 
    	$resp=200;
	} 
	if (isset($_GET['Temp'])) {
		$tval=$_GET['Temp'];
		if ($tval!="undefined") {
	    	apc_store('temp', $tval);
	    } 
    	$resp=200;
	}
	if (isset($_GET['Pressure'])) {
		$tval=$_GET['Pressure'];
		if ($tval!="undefined") {
	    	apc_store('pressure', $tval);
	    } 
    	$resp=200;
	} 
	if (isset($_GET['LastMove'])) {
		$tval=$_GET['LastMove'];
		if ($tval!="undefined") {
	    	apc_store('lastmove', $tval);
	    } 
    	$resp=200;
	} 

	http_response_code($resp);
	echo '{"RFDevs":[';
	echo apc_fetch('RFDev0');
	echo ',';
	echo apc_fetch('RFDev1');
	echo ',';
	echo apc_fetch('RFDev2');
	echo '], "light":{"clear":';
	echo apc_fetch("light_clear");
	echo ', "red":';
	echo apc_fetch('light_red');
	echo ', "green":';
	echo apc_fetch('light_green');
	echo ', "blue":';
	echo apc_fetch('light_blue');
	echo "},temperature:";
	echo apc_fetch('temp');
	echo ",pressure:";
	echo apc_fetch('pressure');
	echo ",humidity:";
	echo apc_fetch('humidity');
	echo ",lastmove:";
	echo apc_fetch('lastmove');
	echo "}";
?>