<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style type="text/css">
    	.conten {
	display: none;
}
.hidden {
	display: none;
}
.tampil {
	display: block !important;
}
    	.flex {
    		display: flex;
    		margin-left: 41%;
    		margin-top: 20px;
    	}
    	.icon1:hover {
    		box-shadow: 0px 0px 7px 1px black;
    		cursor: pointer;
    		background-color: green;
    	}
    	.icon1 {
    		padding: 12px;
    		background-color: white;
    		margin-left: 30px;
    		border: 2px solid black;
    		text-align: center;
    		border-radius: 10px;
    		  	}
    	body {
    		margin: 0;
    		padding: 0;
    		background-color: #E1FFB1;
    	}
    	header {
    		text-align: center;
    		padding: 7px;
    		background-color: #B6E388;
    	}
    	.btn {
    		border-radius: 10px;
    		padding: 10px;
    		background-color: #C7F2A4;
    	}
    	.btn:hover {
    		box-shadow: 2px 0px 15px 0px rgba(0,0,0,0.75);
    		cursor: pointer;
    		background-color: yellow;
    	}
    	
    	h2 {
    		text-align: center;
    	}
       form {
   	margin: auto;
   	box-shadow:  2px 2px 19px 3px rgba(0,0,0,0.75);
	width: 280px;
	height: 200px;
	background-color:  #38E54D;
	border-radius: 12px;

}
    </style>
</head>
<body>
	<header>
		<h1>Halaman Login</h1>
	</header>
	<form class="from-login" id="menu-1-conten" action="login2.php" method="post">
		<h2>silahkan login</h2>
		<table>
			<tr>
				<td>username :</td>
				<td><input type="text" name="user" placeholder="masukkan user"></td>
			</tr>
			<td>password :</td>
			<td><input type="password" name="pw" placeholder="password"></td>
		
		</table>
		<br>
		<table align="center">
			<tr>
				<td><input class="btn" type="submit" name="login" value="kirim"></td>
			</tr>
		</table>
		
	</form>
</body>

