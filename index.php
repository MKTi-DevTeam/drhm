<?php
	$ROOT = "."
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html lang="es-MX" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Dr. Hector G. Miramontes - SMAS Facelift Master</title>
	<meta name="description" content="Descripción" />

	<?php
	include_once("$ROOT/html/metatags-configurations.php");
	include_once("$ROOT/html/metatags-stylesheets.php");
	include_once("$ROOT/html/javascript-files.php");
	include_once("$ROOT/html/tracking-head.php");
	?>

	<!-- CSS SOLO PARA LA PÁGINA ACTUAL  -->
	<style type="text/css">
	</style>

</head>

<body onresize="" onload="">
	<?php include_once("$ROOT/html/main-menu.php"); ?>
	<?php include_once("$ROOT/blocks/carousel.php") ?>

  <div class="container" style="">

  </div>

	<?php
	include_once("$ROOT/html/footer.php");
	include_once("$ROOT/html/tracking-body.php");
	?>
	<script src="<?php echo $ROOT;?>/javascript/main.js"></script>
</body>

</html>
