<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Cifrado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <x-navbar />

    <div class="container mt-5">
        <h1 class="text-center">Detalles del Valor Cifrado</h1>
        <div class="text-center">
            <p>El número es: <strong>{{ $numero }}</strong></p>
            <p>El valor cifrado es: <strong>{{ $cifrado }}</strong></p>
            <a href="{{ route('cifrado') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
