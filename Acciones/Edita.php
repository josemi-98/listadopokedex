<!DOCTYPE html>
<html lang="es">
<head>
    <meta content="text/html; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php
        $dwes = new PDO('mysql:host=localhost;dbname=prueba', 'root', '');
    
    ?>
    <table>
        <form action="" method="post">
            <tr>
                <td><label for="">ID</label></td>
                <td><input type="text" id="id" disabled></td>
            </tr>
            <tr>
                <td><label for="">Nombre</label></td>
                <td><input type="text" id="nombre"></td>
            </tr>
            <tr>
                <td><label for="">Foto</label></td>
                <td><input type="text" id="foto"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar" name="btn" /></td>
            </tr>
        </form>
    </table>
</body>
</html>