<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[TITLE]</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="text-center my-3">
        <img src="assets/images/logo.jpg" alt="logo" class="img-fluid" width="250px">
    </div>

    <!-- operations -->
    <div class="container">
        <hr>
        <div class="row">
            @foreach ($exercises as $exercise)
                <div class="col-3 display-6 mb-3">
                    <span class="badge bg-dark">{{ $exercise['exercise_number'] }}</span>
                    <span>{{ $exercise['exercise'] }}</span>
                </div>
            @endforeach
            <!-- each operation -->
        </div>
        <hr>
    </div>

    <!-- print version -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <a href="{{ route('home') }}" class="btn btn-primary px-5">VOLTAR</a>
            </div>
            <div class="col text-end">
                <a href="{{ route('exportExercises') }}" class="btn btn-secondary px-5">DESCARREGAR EXERCÍCIOS</a>
                <a href="{{ route('printExercises') }}" class="btn btn-secondary px-5">IMPRIMIR EXERCÍCIOS</a>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="text-center mt-5">
        <p class="text-secondary">MathX &copy; <span class="text-info">{{ date('Y') }}</span></p>
    </footer>

    <!-- bootstrap -->
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
