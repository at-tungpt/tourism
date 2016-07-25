<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>
		<meta charset="UTF-8">
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
		body {
		margin: 0;
		padding: 0;
		width: 100%;
		display: table;
		font-weight: 100;
		font-family: 'Lato';
		background: #ecf0f1;
		
		
		}
		th{
		text-align: center;
		color: red;
		}
		.nav{
		margin-right:auto;
		}
		.container {
		text-align: center;
		display: table-cell;
		padding-left: 20px;
		padding-right: 20px; 
		}
		.footer {
		text-align: center;
		background: #2ecc71;
		border: 0.25px solid  #c0392b;
		margin-top:auto;
		}
		.bottom{
		margin-left: auto;
		color :FFFF99;
		}
		.header{
		font-size: 14px;
		background: #BEBEBE;
		border: 0.25px solid  #c0392b;
		}
		.title{
		font-size: 50px;
		color: #c0392b;
		}
		.dropdown {
		text-right;
		}
		</style>
	</head>
</head>
<body>
	<div class="header">
		<h1 class="title text-center ">DEPARTMENT OF CULTURAL HERITAGE</h1>
		<ul class="nav navbar-right">
			@yield('dropdown')
			<li class="dropdown">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Hi Admin! <span class="caret"></span>
				</button>
				<ul class="dropdown-menu ">
					<li><a href="#">Profile</a></li>
					<li><a href="#">Messages</a></li>
					<li><a href="#">Help</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Login</a></li>
				</ul>
			</li>
		</ul>
		<ul class="nav nav-pills">
			<li role="presentation" class="active"><a href="#">Home</a></li>
			<li role="presentation"><a href="#">Introdution</a></li>
			<li role="presentation"><a href="#">Tourism</a></li>
			<li role="presentation"><a href="#">Gallery</a></li>
			<li role="presentation"><a href="#">Service</a></li>
			<li role="presentation"><a href="#">Contact Us</a></li>
			
			
		</ul>
	</div>
		@yield('bodyContent')
	<div class="footer">
		<div class="bottom">
			<p>Copyright @ THANH TUNG development web </p>
			<p>Address: Nguyen Luong Bang street, Lien Chieu distrit, Da Nang city</p>
			<p>Tel: 0511 384 308    Fax: 0511 384 2771</p>
		</div>
	</div>
	
	
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>