<?php 
function getMaterias() {
    $db = new PDO('mysql:host=localhost;dbname=bd_universidad;charset=utf8', 'root', '1234');
    $sentencia = $db->prepare('SELECT * FROM materia');
    $sentencia->execute();
    $materias = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $materias;
}

function buscarMaterias($nombre){
    $db = new PDO('mysql:host=localhost;dbname=bd_universidad;charset=utf8', 'root', '1234');
    $sentencia = $db->prepare('SELECT * FROM materia WHERE nombre LIKE ?');
    $sentencia->execute(["%$nombre%"]);
    $materias = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $materias;
}

function entablarMaterias($materias) {    
    echo "<table class='table'>";
    echo "<tr><td>Nombre</td><td>Profesor</td></tr>";
    foreach ($materias as $mat){
        echo "<tr>";
        echo "<td class='col'>".$mat->nombre."</td>";
        echo "<td class='col'>".$mat->profesor."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
