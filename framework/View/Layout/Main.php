<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Mi App' ?></title>
    <link rel="stylesheet" href="/libs/bootstrap-5.3.5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="/../../css/bootstrap.min.css"> -->

</head>
<body>

    <div class="container py-5">
        <?= $content ?? '' ?>
    </div>

    <script src="/libs/bootstrap-5.3.5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
