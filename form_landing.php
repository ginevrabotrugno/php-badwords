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