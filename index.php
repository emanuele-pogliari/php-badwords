<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bad Words</title>
</head>
<body>

<form action="results.php" method="GET" >
  
<div class="mb-3">
    <label for="" class="form-label">Sentence</label>
    <input type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Word to censore</label>
    <input type="text" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Censore</button>
</form>
    
</body>
</html>