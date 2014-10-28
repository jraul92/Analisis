<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link  rel="stylesheet" href="<?php  echo base_url(); ?>/css/bootstrap.css"/>
	
</head>
<body>	
	<div class="container-fluid container jumbotron" >
	<h1 class="h1 centrado">ANALISIS FINANCIERO</h1>
	

	<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#home" role="tab" data-toggle="tab">Ingresos por ventas</a></li>
  <li><a href="#profile" role="tab" data-toggle="tab">Estado de Resultados</a></li>
  <li><a href="#messages" role="tab" data-toggle="tab">Balance General</a></li>
  </ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">	
  	<table class="table table-striped">
		<h3>TABLA DE INGRESOS POR VENTAS 2014</h3>
		<!-- On rows -->
<!-- On cells (`td` or `th`) -->
<tr>
  <td class="active">	</td> 
  <td class="active">Unidades</td> 
  <td class="active">Precio U</td> 
  <td class="active">	</td>
</tr>
<tr>
  <td class="active">Precio A</td>
  <td class="active">1000</td>
  <td class="active">20.00</td>
  <td class="active">20000.00</td> 
</tr>
<tr>
  <td class="active">Precio B</td>
  <td class="active">2000</td>
  <td class="active">40.00</td>
  <td class="active">80000.00</td> 
</tr>
<tr>
  <td class="active">	</td>
  <td class="active">	</td>
  <td class="active">Ingresos por ventas</td>
  <td class="active">100000.00</td> 
</tr>
	</table></div>
  <div class="tab-pane" id="profile"><table class="table table-striped">
		<h3>TABLA DE INGRESOS POR VENTAS 2014</h3>
		<!-- On rows -->
<!-- On cells (`td` or `th`) -->
<tr>
  <td class="active">	</td> 
  <td class="active">Unidades</td> 
  <td class="active">Precio U</td> 
  <td class="active">	</td>
</tr>
<tr>
  <td class="active">Precio A</td>
  <td class="active">1000</td>
  <td class="active">20.00</td>
  <td class="active">20000.00</td> 
</tr>
<tr>
  <td class="active">Precio B</td>
  <td class="active">2000</td>
  <td class="active">40.00</td>
  <td class="active">80000.00</td> 
</tr>
<tr>
  <td class="active">	</td>
  <td class="active">	</td>
  <td class="active">Ingresos por ventas</td>
  <td class="active">100000.00</td> 
</tr>
	</table></div>
  <div class="tab-pane" id="messages">...</div>
  <div class="tab-pane" id="settings">...</div>
</div>
	<button class="btn btn-danger> Aqui</button>
	</div> 
	
</body>
<footer><?php echo FOO();?></footer>
</html>