<?php 

$phrase = $_GET['phrase'];

$badword = $_GET['badword'];

$phrase_censored = str_replace($badword, "***", $phrase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bad Words</title>
</head>
<body>

<p>La lunghezza della parola " <?php echo $phrase ?> " è di <?php echo strlen($phrase) ?> caratteri</p>

<p>La lunghezza della frase censurata "  <?php echo $phrase_censored ?> " è di <?php echo strlen($phrase_censored) ?> caratteri </p>
    
</body>
</html>