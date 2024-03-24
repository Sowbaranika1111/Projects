<?php $title = "Taste the taste";

$cssFiles = array(
    "css/bootstrap.min.css",
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
    <!-- the pop-up for adding new admin is displayed only after adding the below inclusion in the header  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</head>
<body>
