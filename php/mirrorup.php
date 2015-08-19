
    <?php
    $resp=200;
    if ($_SERVER['REMOTE_ADDR']=="50.177.28.211") {
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
	if (isset($_GET['door_up'])) {
		$tval=$_GET['door_up'];
		if ($tval!="undefined") {
	    	apc_store('door_up', $tval);
	} 
	if (isset($_GET['door_down'])) {
		$tval=$_GET['door_down'];
		if ($tval!="undefined") {
	    	apc_store('door_down', $tval);
	} 
	if (isset($_GET['fridge'])) {
		$tval=$_GET['fridge'];
		if ($tval!="undefined") {
	    	apc_store('fridge', $tval);
	} 
    	$resp=200;
	} 
}
	http_response_code($resp);
	echo '{"Fargo:["';
	$result0 =apc_fetch('Fargo0')
	$result1 =apc_fetch('Fargo1')
	$result2 =apc_fetch('Fargo2')
	$result3 =apc_fetch('Fargo3')
	$result4 =apc_fetch('Fargo4')
	$result5 =apc_fetch('Fargo5')
	$result6 =apc_fetch('Fargo6')
	$result7 =apc_fetch('Fargo7')
	if ($result0==false) {
		echo "0,"
	} else {
		echo "1,"
	}
	if ($result1==false) {
		echo "0,"
	} else {
		echo "1,"
	}
	if ($result2==false) {
		echo "0,"
	} else {
		echo "1,"
	}
	if ($result3==false) {
		echo "0,"
	} else {
		echo "1,"
	}
	if ($result4==false) {
		echo "0,"
	} else {
		echo "1,"
	}
	if ($result5==false) {
		echo "0,"
	} else {
		echo "1,"
	}
	if ($result6==false) {
		echo "0,"
	} else {
		echo "1,"
	}
	if ($result7==false) {
		echo "0"
	} else {
		echo "1"
	}
	echo '],"RFDevs":[';
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
	echo '},"temperature":';
	echo apc_fetch('temp');
	echo ',"pressure":';
	echo apc_fetch('pressure');
	echo ',"humidity":';
	echo apc_fetch('humidity');
	echo ',"motion":{"door_up":';
	echo apc_fetch('door_up');
	echo ',"door_down":';
	echo apc_fetch('door_down');
	echo ',"fridge":';
	echo apc_fetch('fridge');
	echo ',"lastmove":';
	echo apc_fetch('lastmove');
	echo "}}";
?>
