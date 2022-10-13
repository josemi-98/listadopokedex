<?php
$mysqli = include_once "bd.php";
$resultado = $mysqli->query("SELECT id, nombre, foto FROM pokedex");
$pokedexs = $resultado->fetch_all(MYSQLI_ASSOC);
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
                foreach ($pokedexs as $pokedex) { ?>
                    <tr>
                        <td><?php echo $pokedex["id"] ?>2332</td>
                        <td><?php echo $pokedex["nombre"] ?>nombre</td>
                        <td><?php echo $pokedex["foto"] ?>foto</td>
                        <td>
                            <a href="editar.php?id=<?php echo $pokedex["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $pokedex["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>