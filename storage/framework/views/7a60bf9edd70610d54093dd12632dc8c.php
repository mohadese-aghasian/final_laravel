<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <!--<link href="http://localhost/public/css/app.css" rel="stylesheet" />-->
    
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\my_web_project\resources\views/layouts/app.blade.php ENDPATH**/ ?>