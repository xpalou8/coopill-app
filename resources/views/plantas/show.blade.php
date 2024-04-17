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
            background: linear-gradient(to bottom, #ffffff, #a3f39b);
            background-attachment: fixed;
        }


        .card {
            background-color: #fff;
            /* Color de fondo de las cards */
            border-radius: 15px;
            /* Esquinas curvadas */
            position: relative;
            /* Posición relativa para el botón */
            text-align: center;
            /* Centrar el contenido */
            padding: 20px;
            /* Añadir espacio interno */
        }

        .plant-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
            /* Espacio entre la imagen y el texto */
        }

        .card-title {
            font-size: 24px;
            /* Tamaño de fuente más grande */
            font-weight: bold;
            /* Negrita */
        }

        .card-text {
            margin-top: 25px
        }

        .price-text {
            font-size: 20px;
            /* Tamaño de fuente más grande */
        }

        .btn-return {
            margin-top: 20px;
            /* Espacio superior */
        }

        .card-img-top {
            max-width: 30%;
            /* Adjust the percentage as needed */
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
            /* Espacio entre la imagen y el texto */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $plant->name }}</h5>
                <p class="card-text">{{ $plant->description }}</p>
                <img src="{{ asset('storage/images/' . $plant->img) }}" class="card-img-top card-img"
                    alt="{{ $plant->namenpm }}">
                <p class="price-text"><strong>Precio por Lote:</strong> {{ $plant->price_per_lot }}€</p>
                <!-- Botón de regreso al listado de plantas -->
                <a href="{{ url('/listaplantas') }}" class="btn btn-success btn-return">Volver al Listado de Plantas</a>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS (opcional, solo si necesitas funcionalidades de JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
