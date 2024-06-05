<?php
function getPagos() {
    $db = new PDO('mysql:host=localhost;dbname=bdpagos;charset=utf8', 'root', '1234');
    $sentencia = $db->prepare('SELECT * FROM pagos');
    $sentencia->execute();
    $pagos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $pagos;
}

function setPagos($deudor, $numero_cuota, $cuota, $fecha_pago) {
    $db = new PDO('mysql:host=localhost;dbname=bdpagos;charset=utf8', 'root', '1234');
    $sentencia = $db->prepare("INSERT INTO pagos (deudor, numero_cuota, cuota, fecha_pago) VALUES (?, ?, ?, ?)");
    $sentencia->execute([$deudor, $numero_cuota, $cuota, $fecha_pago]);
}
?>