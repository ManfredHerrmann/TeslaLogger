<?PHP

	$logfile = "/etc/teslalogger/nohup.out";
	$time = date("d.m.Y H:i:s", time());
	$ret2 =	file_put_contents($logfile, $time . " : Reboot request!\r\n", FILE_APPEND);
	$ret2 =	file_put_contents($logfile, $time . " : --------------------------------------------\r\n\r\n", FILE_APPEND);
	
	sleep(2);

	$output  = shell_exec('sudo /sbin/reboot');
	if ($output === false) {
        // Handle the error
		echo "error"; 
    }
	else
		echo ("OK");
?>