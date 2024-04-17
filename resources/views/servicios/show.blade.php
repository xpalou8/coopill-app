<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Servicio</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/show.css'])
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $service->name }}</h5>
                <p class="card-text">{{ $service->description }}</p>
                <img src="{{ asset('storage/images/' . $service->img) }}" class="card-img-top card-img"
                    alt="{{ $service->name }}">
                <p class="price-text"><strong>Precio por hora:</strong> {{ $service->price_hour }}€</p>
                <!-- Botón de regreso al listado de servicios -->
                <a href="{{ url('/listaservicios') }}" class="btn btn-success btn-return">Volver al Listado de
                    Servicios</a>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS (opcional, solo si necesitas funcionalidades de JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>