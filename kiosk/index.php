<?php
include("C:\\inetpub\\wwwroot\\password_protect\\password_protect.php"); 
require('../sentry_db.php');

$reset_usr = isset($_POST["reset_usr"])?$_POST["reset_usr"]:'';
$usr_srch = isset($_POST["usr_srch"])?$_POST["usr_srch"]:'';

echo '<html>
		<head>

			<title>Sentry User Information</title>

			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/base-min.css">
			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/forms-min.css">

			<!--[if lte IE 8]>
    			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
			<![endif]-->
			<!--[if gt IE 8]><!-->
    			<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
			<!--<![endif]-->

			<style>
				.l-box{
						padding: 1em;
					}
			</style>

		</head>';

echo '<body>
		<div class="container">
			<div class="pure-g">
				    <div class="pure-u-1">
    				<div class="l-box">
   					';


if($reset_usr !== ''){
	include('reset_user_total.php');
}

elseif($usr_srch !== ''){
	include('usr_srch.php');
}

else{
	echo '<form method="post" action="#" class="pure-form pure-form-stacked">
			<fieldset>
			<legend>Sentry Lookup User:</legend>
					<input type="text" name="usr_srch" placeholder="University ID" />
				<div class="pure-controls">
					<input type="submit" value="Sumbit" class="pure-button pure-button-primary" />
				</div>
			</fieldset>
		   </form>';
}


echo '				</div>
				</div>
			</div>
		</div>
	  </body>';

echo '</html>';
?>