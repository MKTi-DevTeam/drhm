<?php
if(!isset($debugging)){$debugging=false;}
function mensaje($x){
	global $debugging;
	if($debugging){
		return $x;
	}else{
		$split = explode(":",$x);
		return ($split[0]."<br />");
	}
}
?>

<style>
	#logo{

	}

	.menu{

	}

	.menu a{
		text-decoration: none;
	}

	/*TABLETS*/
	@media screen and (max-width:1101px;) {
	}
	/*CELULARES*/
	@media screen and (max-width:761px) {
	}
</style>

<header class="row txl">
	<div class="c10 m9 mpa5">
		<img src="img/logo-doc.png" class="logo-dr" alt="">
	</div>
	<a href="#" class="menu-lines txc c1 t1 m1">
		<div class="line-m"></div>
		<div class="line-m"></div>
		<div class="line-m"></div>
	</a>
</header>


<!--LO QUE SIGUE ES PARA MOSTRAR MENSAJES, CASI NUNCA LO USO-->
<div id="men" onclick="men_visible = esconder_mensaje();" style="opacity: 0.0; display: none;"></div>
<script type="text/javascript">men_visible = false;</script>
<?php
	if(isset($men)){
		if($men==""){
			echo '<script type="text/javascript">men = "";</script>';
		}else{
			echo '<script type="text/javascript">men = "'.mensaje(utf8_encode($men)).'";</script>';
		}
	}else{
		echo '<script type="text/javascript">men = "";</script>';
	}
?>
