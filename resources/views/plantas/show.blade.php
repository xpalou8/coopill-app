<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Planta</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para colorear el fondo y las card */
        body {
            background-color: #f0f0f0; /* Color de fondo */
        }

        .card {
            background-color: #fff; /* Color de fondo de las cards */
            border-radius: 15px; /* Esquinas curvadas */
            position: relative; /* Posición relativa para el botón */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $plant->name }}</h5>
                <p class="card-text">{{ $plant->description }}</p>
                <p class="card-text"><strong>Precio por Lote:</strong> {{ $plant->price_per_lot }}</p>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS (opcional, solo si necesitas funcionalidades de JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>