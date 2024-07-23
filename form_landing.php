<?php 

$text = $_POST['text'];
$badword = $_POST['badword'];

$reviewed_text = str_replace($badword, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP Badwords Result</title>
</head>
<body>


<div>
    <h2>Testo Originale</h2>
    <p>
        <?php echo $text ?>
    </p>
    <span>Il tuo testo è lungo <?php echo strlen($text) ?> caratteri </span>
</div>

<div>
    <h2>Testo Censurato</h2>
    <p>
        <?php echo $reviewed_text ?>
    </p>
    <span>Il tuo testo è lungo <?php echo strlen($reviewed_text) ?> caratteri </span>
</div>
   
   
    
   
    
    


</body>
</html>