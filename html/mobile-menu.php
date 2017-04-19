<style>
	.mobile-menu{
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f4f4f4+3,f2f2f2+10,ffffff+33,ffffff+34 */
		background: #f4f4f4; /* Old browsers */
		background: -moz-linear-gradient(left, #f4f4f4 3%, #f2f2f2 10%, #ffffff 33%, #ffffff 34%); /* FF3.6-15 */
		background: -webkit-linear-gradient(left, #f4f4f4 3%,#f2f2f2 10%,#ffffff 33%,#ffffff 34%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to right, #f4f4f4 3%,#f2f2f2 10%,#ffffff 33%,#ffffff 34%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f4f4', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 */
	}
	.mobile-menu li a{
		font-weight: 700;
		font-size: 17px;
		border-left: 0px;
		border-right: 0px;
		border-top: 0px;
		border-bottom: 1px;
		border-color: #dadada;
		border-style: solid;
	}

	/*TABLET*/
	@media screen and (max-width:992px;) {
	}
	/*MOBILE*/
	@media screen and (max-width:600px) {
	}
	.waves-effect.waves-azul .waves-ripple {
		background-color: rgba(57, 87, 148, 0.65);
	}
</style>


<ul id="slide-out" class="side-nav mobile-menu" >
		<li><a class="waves-effect waves-azul" href="#">Home</a></li>
		<li><a class="waves-effect waves-azul" href="#">About Me</a></li>
</ul>

<script type="text/javascript">
 //$(".button-collapse").sideNav();
 $('.button-collapse').sideNav({
		 menuWidth: 260, // Default is 300
		 edge: 'left', // Choose the horizontal origin
		 closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		 draggable: true // Choose whether you can drag to open on touch screens
	 }
 );

//$('.button-collapse').sideNav('show');
//$('.button-collapse').sideNav('hide');
//$('.button-collapse').sideNav('destroy');
</script>
