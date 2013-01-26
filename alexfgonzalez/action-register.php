<?php

    session_start();

    $userName = $_POST["username"];
    $password = $_POST["password"];
    
    $userFile = "./users/".$userName.".txt";
    if(file_exists($userFile))
    { 
        $storedPassword = "";
    
        foreach(file($userFile) as $line)
        {
            $parts = explode(":", trim($line));
            $fieldName = $parts[0];
            $fieldValue = $parts[1];
            
            if($fieldName == "password")
            {
                $storedPassword = $fieldValue;
            }
        }
        
        if($password == $storedPassword)
        {
            $logged = true;
            $_SESSION["logged"] = true;
        }
        else
        {   
            $logged = false;
            $_SESSION["logged"] = false;
            $error = "Wrong password";
        }
    }
    else
    {
        $logged = false;
        $_SESSION["logged"] = false;
        $error = "User does not exist";
    }
?>

<html>
<head>
	<title>Alejandro Ferreiro Gonz&aacute;lez</title>
	<style>
		body
		{
			background-color: #FFFFFF;
			font-family: Verdana;	
			font-size: 15px;
		}
		h1 
		{ 
            text-align: center;
       		font-size: 30px;
		}
        
        li
        {
            margin-left: 10px;
            margin-right: 10px;
            display: inline;
        }
		#top
		{
			background-image: url('resources/pattern/grey.png');
            background-repeat: repeat-x;
            background-position: center;
            height: 150px;

		}
        
        .line
        {
            background-image: url('resources/pattern/banner_btm.png');
            height:36px;
        }
        
        .menu
        {
            text-align: center;
            padding-top: 1px;
        }
        
	</style>
</head>
<body>
    <div align="center"><!-- Toda la página -->
        <div id="top"><!-- La parte de arriba -->
            <h1>ALEJANDRO FERREIRO</h1>
        </div>
        <div class="line"><!-- Debajo de la parte de arriba, centrar. Barra de enlaces-->
        <?php if($logged){ ?>
            <div class="menu"><!-- Caja que contiene los enlaces-->
                <ul class="listaEnlaces">
                    <li>
                        <a href="galleries.html">Galer&iacute;as</a>
                    </li>
                    <li>
                        <a href="index-admin.html">Inicio</a>
                    </li>
                </ul>
            </div>
        </div> 
        <div>
            <!-- Aquí irá el contenido -->
            <p>
                Contenido
            </p>
        </div>
        <?php } else { ?>
        </div>
        <div style="color:red; margin-top: 100px">
            <?php echo $error;} ?>
        </div>
    </div>
</body>
</html>