<!DOCTYPE html>
<html>
<head>
	<title>Navbar</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!--Navbar-->
		<nav class="navbar navbar-light light-blue lighten-4">

		    <!-- Navbar brand -->
		    <!-- <a class="navbar-brand" href="#">Navbar</a> -->

		    <!-- Collapse button -->
		   <!--  <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
		        aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fa fa-bars fa-1x"></i></span></button>
		 -->
		 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		    <!-- Collapsible content -->
		    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		
		        <!-- Links -->
		        <ul class="navbar-nav mr-auto">
		            <li class="nav-item active">
		                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="#">Features</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="#">Pricing</a>
		            </li>
		        </ul>
		        <!-- Links -->

		    </div>
		    <!-- Collapsible content -->

		</nav>
		<div class="d1"></div>
		<div class="d2"></div>
		<!--/.Navbar-->
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown link
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		  </div>
		</nav> -->
	<br><br><br><br><br>
	<div class="grid-container">
		<div class="grid-item">1</div>
		<div class="grid-item">2</div>
		<div class="grid-item">3</div>
		<div class="grid-item">4</div>
		<div class="grid-item">5</div>
		<div class="grid-item">6</div>
	</div>
<br><br>
	<div class="grid-box">
		<div class="box1">1</div>
		<div class="box2">2</div>
		<div class="box3">3</div>
		<div class="box4">4</div>
	</div>
	<br><Br>
	<div class="imagem">
	    <span>object-fit: cover; (imagem recortada)</span>
	    <img class="objectImage" src="http://i.stack.imgur.com/gL1sB.jpg">
	    <img class="objectImage" src="gato-gravata-570x652.jpg">
	</div>

	<div class="imagem">
	    <span>imagem não recortada (altura da imagem encolhe) </span>
	    <img class="imagemNormal" src="http://i.stack.imgur.com/gL1sB.jpg">
	    <img class="imagemNormal" src="gato-gravata-570x652.jpg">
	</div>
	<div class="item">
	    <img src="dog-borboleta.jpg">
	    <div class="descricao">Este filme é excelente! Recomendado a todas as idades</div>
	</div>
</body>
</html>