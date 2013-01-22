<html>
<head>
	<title>My favourite videos</title>
	<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
	<style>
		body {
			font-family: 'Swanky and Moo Moo', cursive;
			font-size: 14pt;
			background-color: #e8e8e8; 
		}
		h1 { 
			font-size: 1.5em;
			color: #555; 
			background-color: #c8c8c8; 
			padding: 3% 2%;
			border: 2px dotted #aaa;
			text-align: center;
		}
		p {
			text-align: justify;
			line-height: 1.2em;
		}
		a {
			color: black;
			text-decoration: underline;
			font-weight: bold;
		}
		a:hover { color: #ccc; }
		h1 a { text-decoration: none; }
		h1 a:hover { color: #888; }

		div.main {
			width: 1000px;
			margin: auto;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1>
			<a href="">My favourite videos</a>
			<span style="float: right">
				<a href="http://www.imdb.com" target="_blank">
					<img src="img/imdb_logo.png" alt="Goto IMDB" title="Goto IMDB" />
				</a>
			</span>
		</h1>
		<h2>Login form</h2>
		<form action="process-login.php" method="POST">
			<fieldset>
				<legend>User data</legend>
				Username: <input type="text" name="username"/><br/>
				Password: <input type="password" name="password"/><br/>
			</fieldset>
			<input type="submit" value="Login" />
		</form>
	</div>
</body>
</html>
