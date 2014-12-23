<?php
	ob_start();
?>
<html>
<?php
	require_once "../res/config.php";

	$page = "home";
	if(isset($_GET["page"])){
		$page = $_GET["page"];
		if(!preg_match("/[^a-zA-Z]/", $page)){
				
			if(!array_key_exists($page, $PAGES)){
				$page = "home";
			}
				
		}else{
			// Invalid page variable
			$page = "home";
		}
	}

	require $PAGES[$page];

	ob_end_flush();
?>
</html>