<?php include 'prefs.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Automato</title>
    <link rel="stylesheet" type="text/css" href="base.css">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="symmetry-<?php echo $symmetry ?> color-<?php echo $color ?> contrast-<?php echo $contrast ?> type-<?php echo $ctype ?> brightness-<?php echo $brightness ?> depth-<?php echo $depth ?> simplicity-<?php echo $simplicity ?>">
    <?php include 'header.php' ?>
    <main>
        <?php include 'banner.php' ?>
        <?php include 'boxes.php' ?>
        <?php include 'properties.php' ?>
        <?php include 'actions.php' ?>
    </main>
    <?php include 'footer.php' ?>
</body>
</html>