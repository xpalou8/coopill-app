<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Plantas</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])

</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5"> <!-- Margen arriba y abajo -->
            <div class="col-md-6 mx-auto mt-5 mb-5 text-center"> <!-- Centrado -->
                <div class="h4 bg-success text-white p-3 rounded-pill titulo-div"> <!-- Esquinas curvadas y fondo azul -->
                    Listado de Servicios
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card position-relative">
                        <img src="{{ asset('storage/images/' . $service->img) }}" class="card-img-top card-img" alt="{{ $service->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <p class="card-text">{{ $service->description }}</p>
                            <p class="card-text"><strong>Precio por Lote:</strong> {{ $service->price_hour}}</p>
                        </div>
                        <a href="{{ route('servicios.show', $service->id) }}" class="btn btn-success ver-detalles-btn">Ver Detalles</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Incluir Bootstrap JS (opcional, solo si necesitas funcionalidades de JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
