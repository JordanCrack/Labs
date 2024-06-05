<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <form action="index.php" method="POST" class="form-control">
        <div class="mb-3">
            <label for="deudor" class="form-label">Deudor</label>
            <input type="text" name="deudor" id="deudor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="NumeroC" class="form-label">Número de Cuota</label>
            <input type="text" name="NumeroC" id="NumeroC" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cuota" class="form-label">Cuota</label>
            <input type="text" name="cuota" id="cuota" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="FechaP" class="form-label">Fecha de Pago</label>
            <input type="date" name="FechaP" id="FechaP" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <?php
    require_once 'db.php';

    function entablarPagos() {
        $pagos = getPagos();
        echo '<table class="table mt-5">';
        echo '<thead><tr><th>Deudor</th><th>Número Cuota</th><th>Cuota</th><th>Fecha Pago</th></tr></thead>';
        echo '<tbody>';
        foreach ($pagos as $fila) {
            echo '<tr>';
            echo '<td>'.$fila->deudor.'</td>';
            echo '<td>'.$fila->numero_cuota.'</td>';
            echo '<td>'.$fila->cuota.'</td>';
            echo '<td>'.$fila->fecha_pago.'</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $deudor = $_POST['deudor'];
        $NumeroC = $_POST['NumeroC'];
        $cuota = $_POST['cuota'];
        $FechaP = $_POST['FechaP'];
        setPagos($deudor, $NumeroC, $cuota, $FechaP);
    }

    entablarPagos();
    ?>
</div>
</body>
</html>


