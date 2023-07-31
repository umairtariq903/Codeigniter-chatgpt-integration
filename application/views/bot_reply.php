<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Chat
	</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;;
			outline: none;
		}

		.main {
			margin: 10px 20px;
			width: 350px;
		}
		.box textarea {
			width: 350px;
			height: 300px;
		}

		button {
			padding: 10px;
			width: 80px;
			font-weight: bold;
			float: right;
			
		}
        

		label,
		input {
			margin-top: 20px;
		}
		input {
			padding: 5px;
		}
	</style>
</head>
<body>
<div class="main">
     
   	<h1>BOT:</h1>
   	<div class="main">
          <?php echo $botReply; ?>
    </div>
   
</div>
</body>
</html>