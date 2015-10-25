
<!DOCTYPE html>
<html>
<head>
	<title>MyPhonex.com</title>
	<link rel="stylesheet" href="css/not-home.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/color.php" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style_load.php" type="text/css" media="screen">
    <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">

    <script src="js/jquery.js"></script>
    <style type="text/css">

    body{
    	background: url("//assets.ubuntu.com/sites/ubuntu/latest/u/img/backgrounds/image-background-paper.png") repeat-y center top #f7f7f7;
		color: #333;
		font-family: Ubuntu, Arial, "libra sans", sans-serif;
		font-weight: 300;

    }
    .contenido{
		margin: auto;
		width: 984px;
		height:auto; 

		-moz-box-shadow: 0 0 3px #c9c9c9;
		-webkit-box-shadow: 0 0 3px #c9c9c9;
		box-shadow: 0 0 3px #c9c9c9;
		background: #fff;

		border-radius: 4px;
		padding-bottom: 20px;

		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		clear: both;
		display: block;



		padding-bottom: 20px;
		position: relative;
		z-index: 1;

		box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
    }
    .cabecera{
    	margin: auto;
    	top:35px; 
    	width: 98%;
    	height: 250px;
    	-moz-box-shadow: 0 0 3px #c9c9c9;
		-webkit-box-shadow: 0 0 3px #c9c9c9;
		box-shadow: 0 0 3px #c9c9c9;
		background: #fff;
		background-image: url(img/image-unity8.svg);
    }
    .menu{
    	top:50px;
    	margin: auto;
    	width: 98%;
    	height: 45px;
    }
    .todo{
    	background: #dd4814;
    	width: 98%;
    	height: 100%;
    	margin: auto;
    	-moz-box-shadow: 0 0 3px #c9c9c9;
		-webkit-box-shadow: 0 0 3px #c9c9c9;
		box-shadow: 0 0 3px #c9c9c9;
		background: #fff;
		display: block;
    }
    .pie{
    	margin: auto;
    	background: #2A2A2A;
		display: block;
		height: 47px;
		width: 98%;
	}
    .nuevosProductos{
    	width: 300px;
    	height: 150px;
    	background: #353535;
    	display: inline-block;
    	background-image: url(img/image-unity8.svg);
    }
    .contenedorProductos{
    	width: 96%;
    	height: auto;
    	margin: auto;
    }.con{
    	display: block;
    }
    .otropie
    {
    	font-size: 12px;
    	color: white;
    	
    	margin: auto;
    	text-align: center;
    }
    div.otropie{
    	width: 250;
    	height: auto;
    }

    .md-modal {
    position: fixed;
    top: 50%;
    left: 50%;
    width: 50%;
    max-width: 630px;
    min-width: 320px;
    height: auto;
    z-index: 2000;
    visibility: hidden;
    backface-visibility: hidden;
    transform: translateX(-50%) translateY(-50%);
}
 
.md-show {
    visibility: visible;
}
 
.md-overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    visibility: hidden;
    top: 0;
    left: 0;
    z-index: 1000;
    opacity: 0;
    background: rgba(143,27,15,0.8);
    transition: all 0.3s;
}
 
.md-show ~ .md-overlay {
    opacity: 1;
    visibility: visible;
}
.md-perspective,
.md-perspective body {
    height: 100%;
    overflow: hidden;
}
 
.md-perspective body  {
    background: #222;
    perspective: 600px;
}
 
.container {
    background: #e74c3c;
    min-height: 100%;
}
/* Effect 5: newspaper */
.md-show.md-effect-5 ~ .md-overlay {
    background: rgba(0,127,108,0.8);
}
 
.md-effect-5 .md-content {
    transform: scale(0) rotate(720deg);
    opacity: 0;
    transition: all 0.5s;
}
 
.md-show.md-effect-5 .md-content {
    transform: scale(1) rotate(0deg);
    opacity: 1;
}
    </style>
    <script type="text/javascript">

    
    </script>
</head>
<body>
	<div class="contenido">
		<br>
		
		<header class="cabecera">
			
		</header>
		<br>
		<div class="fonca">
			<?php include "php/menu.php"; ?>
		</div>
		
		<br>
		<section class="todo">
			<div class="con">
				<div class="contenedorProductos">
					   


                <div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
            <p>This is a modal window. You can do the following things with it:</p>
            <ul>
                <li><strong>Read:</strong> Modal windows will probably tell you something important so don't forget to read what it says.</li>
                <li><strong>Look:</strong> modal windows enjoy a certain kind of attention; just look at it and appreciate its presence.</li>
                <li><strong>Close:</strong> click on the button below to close the modal.</li>
            </ul>
            <button class="md-close">Close me!</button>
        </div>
    </div>
</div>
 
.<button class="md-trigger" data-modal="modal-5">Newspaper</button>
 
<div class="md-overlay"></div>












				</div>
				<br>
			</div>
		</section>
		<footer class="pie">
			<div class="otropie"><br>
				<i class="otropie">Derechos reservados &copy Phonex.com</i>
			</div>
		</footer>

	</div>
</body>
</html>