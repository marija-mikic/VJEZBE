<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <style>
    .sign-in-form {
    padding: 1rem 1.5em;
    border-radius: .5rem;
    background-color: #3d454f;
    width: 400px;

  }
  
  .sign-in-form h4 {
    color: black;
    margin-bottom: 1rem;
    font-weight: 600;
    text-transform: uppercase;
  }
  
  .sign-in-form-button {
    border-radius: 30px;
    border: 1px solid #fff;
    color: #fff;
    background-color: transparent;
    text-transform: uppercase;
    letter-spacing: 1px;
    width: 100%;
    padding: 1rem;
    transition: all ease .4s;
  }
  
  .sign-in-form-button:hover {
    background-color: #44c8ed;
    border-color: #44c8ed;
  }
    
    </style>
<body>
<div class="sign-in-form">
<div class="row">
    <div class="column large-4">
    <h4 class="text-center">PRIJAVA</h4>
    <form action="autoriziraj.php" method="post">
        <label for="id">UNESI KOD</label>
        <input type="text" name="id"  />
        <button type="submit" value="sign-in-form-button" class="sign-in-form-button">ULAZ</button>
    </form>
</body>
</html>