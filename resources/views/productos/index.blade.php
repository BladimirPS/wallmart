<!-- resources/views/productos/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos en Oferta</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">

        <!-- Mostrar el nombre del cliente autenticado -->
        <h2 class="text-end">Bienvenido, {{ Auth::guard('cliente')->user()->nombre }}!</h2>

        <h1 class="text-center mb-4">Productos en Oferta</h1>

        <!-- Formulario de búsqueda -->
        <form method="GET" action="{{ route('productos.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por descripción o código" value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>

        <!-- Tabla de productos -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Precio Venta</th>
                        <th>Precio Oferta</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->codigo }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio_venta }}</td>
                            <td>{{ $producto->precio_oferta }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Botón de cerrar sesión -->
        <form method="POST" action="{{ route('cliente.logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger mt-3">Cerrar Sesión</button>
        </form>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
