<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        body{
            background-color: #D4B8B0;
        }
        h1{
            color:red;
            margin-left: 20%;
            margin-right: 20%;
        }
        .button{
            text-align:center;
            text-decoration: none;
      font-family: 'Helvetica Neue', Helvetica, sans-serif;
      display:inline-block;
            color: #FFF;
            background: #7F8C8D;
            padding: 15px 30px;
            white-space: nowrap;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            margin: 10px 5px;
            -webkit-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            margin-left: 20%;
            margin-right: 20%;
}
      
.azul{
  background: #3498DB;
}
a{
    text-decoration: none;
    margin:auto;
}
    </style>
    <body>
        <?php
        session_start();
        $loginIncorrecto=$_SESSION['errorLogin'];
        ?>
        <h2 class="panel-title">
                        <?php
                            if ($loginIncorrecto === "Login incorrecto") {
                                echo "<h1>USUARIO O CONTRASEÑA INCORRECTOS, INTENTALO DE NUEVO</h1><br>";
                                echo "<a href='vistaLogin.php' class='button'>LogIn</a>";
                            }
                            
                            ?>
                    </h3>
    </body>
</html>
