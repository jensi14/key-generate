<?php
session_start();
include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>key</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" id="" style="display:none;">
      <h1 class="form-title">KeyGenerate</h1>
      <form method="post" action="">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="MachineID" required>
           <label for="fname">Machine ID</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Days" required>
            <label for="lName">Days</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="key" required>
            <label for="email">Keys</label>
        </div>
        
       <input type="submit" class="btn" value="Key Generate" name="KeyGenerate">
      </form>
      
      
</body>
</html>