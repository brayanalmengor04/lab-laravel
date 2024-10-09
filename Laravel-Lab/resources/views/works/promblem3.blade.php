<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Cifrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <x-navbar />

    <div class="container mt-5">
        <h1 class="text-center">Laboratorio Problema 3 - Cifrado!</h1>
        <div class="table-responsive">
            <table class="table table-light table-striped table-hover table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Cifrado</th>
                        <th scope="col">Ver Cifrado</th>
                    </tr>
                </thead>
                <tbody> 
                    
                    @foreach ($numeros as $dato)
                        <tr>
                            <th scope="row">{{ $dato['numero'] }}</th>
                            <td>{{ $dato['hash'] }}</td>
                            <td> 
                            <a href="{{ route('verCifrado', ['n' => $dato['numero'], 'cifrado' => $dato['hash']]) }}">
                                <button type="button" class="btn btn-danger btn-sm">Ver</button>
                           </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
