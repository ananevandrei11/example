<?php
	if($_FILES['load']['size'] > 3*1024*1024) {
		exit('BIG SIZE');
	}

	if(move_uploaded_file($_FILES['load']['tmp_name'], $_FILES['load']['name'])) {
		echo "OK";
	} else {
		echo 'NO OK';
	}
?>