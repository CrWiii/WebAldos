<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: #d6c6bb;
			font-family: "PT Sans", Helvetica, Arial, sans-serif;
		}
		.imagesty{
			padding-top: 30px;
		}
		.param{
			padding-top: 50px;
			padding-bottom: 50px;
		}
	</style>
</head>
<body>
<div style="background-color: #d6c6bb;">
	<center><a href="http://joyeria-aldo.com/"><img class="imagesty" src="{{url('img/logo_aldo.png')}}"></a></center>
	<center>
	<div class="param">
		<p>Una nueva persona se a suscrito al newletter:</p>
		<p>Nombre: {{$first_name}}  {{$last_name}}</p>
		<p>Email: {{$email}}</p>
		<p>Telefono: {{$celphone}}</p>
	</div>
	</center>
</div>
</body>
</html>