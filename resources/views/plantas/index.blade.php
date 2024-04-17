<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Plantas</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5"> <!-- Margen arriba y abajo -->
            <div class="col-md-12 text-center"> <!-- Centrado -->
                <div class="h4 bg-primary text-white p-3 rounded-pill titulo-div"> <!-- Esquinas curvadas y fondo azul -->
                    Listado de Plantas
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($plants as $plant)
                <div class="col-md-4 mb-4">
                    <div class="card position-relative">
                        <div class="card-body">
                            <h5 class="card-title">{{ $plant->name }}</h5>
                            <p class="card-text">{{ $plant->description }}</p>
                            <p class="card-text"><strong>Precio por Lote:</strong> {{ $plant->price_per_lot }}</p>
                        </div>
                        <a href="{{ route('plantas.show', $plant->id) }}" class="btn btn-primary ver-detalles-btn">Ver Detalles</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Incluir Bootstrap JS (opcional, solo si necesitas funcionalidades de JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
