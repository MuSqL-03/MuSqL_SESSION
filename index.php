
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Session</title>

  <style>

.container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    
    .card {
        width: 100%;
        max-width: 400px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card h1, .card img, .card form {
        margin-bottom: 20px;
    }

    
    .btn {
        width: 50%;
    }

    
    img {
        max-width: 400px;
        width: 100%;
        height: 200px;
    }

    
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        max-width: 300px;
        margin-bottom: 15px;
        padding: 8px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

   
    .form button {
        width: 100%;
        max-width: 150px;
    }
    body {
        background-color: black;
    }
  </style>
</head>
<body>

<?php
 include 'session.php';

?>

  <div class="container mt-3">

  <div class="card">


    <h1>Session</h1>
    <hr>
    <img src="<?php echo $_SESSION['user']['image']; ?>" alt="Image " width="150" height="150">
    <hr>

    
        <h1>Mettre A Jour</h1>
        <hr>
    <form method="post" action="">
        <label for="image">URL de l'image  :</label>
        <input type="text" name="image" id="image" value="<?php echo $_SESSION['user']['image']; ?>"><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <form method="post" action="">
        <button type="submit" name="logout" class="btn btn-danger">Delete</button>
    </form>
    <p>Made_By: MuSqL</p>
  </div>
  
  </div>
  

</body>
</html>