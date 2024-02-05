<?php
		if (isset($_POST['action'])) {
				switch ($_POST['action']) {
						case 'insert':
								insert();
								break;
						case 'select':
								select();
								break;
				}
		}

		function select() {
				echo "The select function is called.";
				exit;
		}
		
?>

//Credit https://stackoverflow.com/questions/20738329/how-to-call-a-php-function-on-the-click-of-a-button
