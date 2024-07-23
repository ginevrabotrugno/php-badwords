<?php 

$text = $_POST['text'];
$badword = $_POST['badword'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Result</title>
</head>
<body>
    <h2>
        <?php echo $text ?>
    </h2>
    <h2>
    <?php echo $badword ?>
    </h2>
    <h1>
        <?php echo str_replace($badword, '***', $text) ?>
    </h1>


</body>
</html>