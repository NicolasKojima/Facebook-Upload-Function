<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?php echo e($information->name); ?> - <?php echo e(config('app.name')); ?></title>

    <!-- Open Graph Meta Tags for Facebook Sharing -->
    <meta property="og:title" content="<?php echo e($information->name); ?> - <?php echo e(config('app.name')); ?>">
    <meta property="og:description" content="<?php echo e($information->email); ?> - <?php echo e($information->introduction); ?>">
    <meta property="og:image" content="<?php echo e(asset('storage/image/'.$information->profilepic)); ?>">
    <meta property="og:url" content="<?php echo e(route('information.show', $information->id)); ?>">
    <meta property="og:type" content="article">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">

    <style>
        /* Add your custom CSS styles here */
    </style>
</head>

<body>

<header>
    <!-- Your header content here -->
</header>

<main role="main">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2><?php echo e($information->name); ?></h2>
                <p>Email: <?php echo e($information->email); ?></p>
                <p>Introduction: <?php echo e($information->introduction); ?></p>
                <div class="profilepicture">
                    <img class="card-img-top mx-auto" src="<?php echo e(asset('storage/image/'.$information->profilepic)); ?>" alt="Profile Picture" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="text-muted">
    <!-- Your footer content here -->
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
</body>
</html>
<?php /**PATH C:\XXAMP\htdocs\facebookpost\resources\views/information/show.blade.php ENDPATH**/ ?>