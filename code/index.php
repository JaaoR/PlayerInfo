<title>PHP - Player</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
    * {
      font-family: 'Open Sans', sans-serif;
    }

    .player {
    	background-color: #EFEAEA;
    	display: inline-block;
    	margin: auto 20px;
    	padding: 35px;
    }

  </style>
<meta charset="UTF-8">
<?php

	require_once("Player.php");

	$p = new Player;

	if (isset($_GET["n"])){
		$name = $_GET["n"];
	}else{
		$name = "Steve";
	}

	$p->setName($name);

	//print_r($p);
?>
	<?php
	if (isset($_GET["n"])){
		echo "<div class='player'>";
		$skin = $p->getHeadSkin(80);
	echo "<img src='$skin'><br>";
	echo "<br><span><b>Nome:</b> " . $p->getName() . "</span>";
	if (!is_null($p->getUUID())){
		echo "<br><span><b>UUID:</b> " . $p->getUUID() . "</span>";
	}else{
		echo "<br><span><b>UUID:</b> não encontrado</span>";
	}
	echo "</div>";
	}
	?>
