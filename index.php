<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
    <h1 class="text-white text-center mt-5">Badwords Censored App</h1>
        <div class="container">
            <div class="card my-card col-6 p-2 rounded-4 bg-transparent mx-auto position-absolute top-50 start-50 translate-middle ">
                <form action="results.php" method="GET" >
  
                <div class="mb-3">
                    <label class="justify-content-between my-3 text-white fs-3 p-2" for="" class="form-label">Sentence</label>
                    <textarea name="phrase" type="text" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label my-3 text-white fs-3 p-2">Word to censore</label>
                    <input name="badword" type="text" class="form-control">
                </div>

                <div class="py-3">
                    <button type="submit" class="btn my-btn mx-auto">Censore word</button>
                </div>
        
                </form>
            </div>
        </div>
    </div>
</body>
</html>