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
    <link rel="stylesheet" href="style.css">
    <title>Bad Words</title>
</head>
<body>


<div class="form-container p-5">
    <h2 class="text-white text-center fs-1 mt-5">Results</h2>
        <div class="container text-center d-flex">
            <div class="card my-card col-6 px-4 py-5 rounded-4 bg-transparent mx-auto position-absolute top-50 start-50 translate-middle text-white">
                <p class="py-2 fs-3 border-1 border-top">Phrase Inserted: <?php echo $phrase ?></p>
                <p class="py-2 fs-3 border-1 border-bottom">Lentgh of the phrase: <?php echo strlen($phrase) ?> characters</p>

                <p class="py-2 fs-3 rounded-3">Phrase censored: <?php echo $phrase_censored ?></p>
                <p class="py-2 fs-3 border-1 border-bottom">Lentgh of the censored phrase: <?php echo strlen($phrase_censored) ?>  characters </p>
            </div>
        </div>
</div>
    
</body>
</html>