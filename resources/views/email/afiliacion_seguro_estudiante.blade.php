<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <p>Solicitud de Afiliacion al Seguro Estudiantil contra Accidentes</p>
    <br>
    <span><strong>Código de Solicitud: </strong>{!! $detalle->solicitud->Codigo!!}</span><br>
    <span><strong>Cliente: </strong>{!! $detalle->solicitado_por!!}</span><br>
    <span><strong>Telefono: </strong> {!! $detalle->Telefono !!}</span><br>
    <span><strong>Email: </strong> {!! $detalle->Email !!}</span><br>
</body>

</html>