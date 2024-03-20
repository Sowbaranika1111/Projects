<?php $title = "Experience the feel of travelling";

$cssFiles = array(
    "css/bootstrap.min.css",
    "css/homeP.css"
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>

    <?php foreach ($cssFiles as $cssFile) : ?>
        <link rel="stylesheet" href="<?php echo $cssFile; ?>">
    <?php endforeach; ?>
    
</head>
<body>
<header>