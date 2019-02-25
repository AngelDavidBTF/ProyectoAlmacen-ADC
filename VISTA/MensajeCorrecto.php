<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
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
        $mensaje=$_GET["mensaje"];
        ?>
        <table>
            <tr>
                <th>MENSAJE</th>
            </tr>
            <tr>
                <td><?php $mensaje ?></td>
            </tr>
            <a href='MenuEntrada.php' class="button">Menu Principal</a>
</table>
    </body>
</html>
