<?php
$mysqli = include_once "bd.php";
$resultado = $mysqli->query("SELECT id, nombre, foto FROM pokedex");
$pokedex = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td {
            border-collapse: collapse;
	        border: 1px solid black;
            margin: 30px;
            text-align: center;
      }
    </style>

</head>
<body>
    <div>
        <h1>Listado de pokedexs</h1>

        <input type="submit" name="agregarNuevo" id="agregarNuevo" value="Agregar Nuevo">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Foto</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            
                <?php
                foreach ($pokedex as $pokede) { ?>
                    <tr>
                        <td><?php echo $pokede["id"] ?></td>
                        <td><?php echo $pokede["nombre"] ?></td>
                        <td><?php echo $pokede["foto"] ?></td>
                        <td>
                            <a href="Editar?id=<?php echo $pokede["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="Eliminar.php?id=<?php echo $pokede["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>