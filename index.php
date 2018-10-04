<?php 
    include_once("dbconnect.php");
    
    $conn->close();
?>

<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Back Order Front Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/main.css">
    </head>
<body>
    <div class="wrapper">
        <h1>Input Back Order</h1>
        <p>
            <label for="style_number">Style # : </label>
            <input type="text" name="style_number" class="style_number">
        </p>
        <p>
            <label for="customer_name">Customer Name : </label>
            <input type="text" name="customer_name" class="customer_name">
        </p>
        <p>
            <label for="phone_number">Phone Number : </label>
            <input type="text" name="phone_number" class="phone_number" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12">
        </p>
        <p>
            <label for="email">Email : </label>
            <input type="text" name="email" class="email">
        </p>
        <input type="submit" value="Submit" class="submit">
    </div>
    <div class="wrapper" style="margin-top: 30px;">
        <h1>Get Back Order Info</h1>
        <p>
            <label for="style_number">Style # : </label>
            <input type="text" name="style_number" class="styleNumber">
        </p>
        <input type="submit" class="getSubmit">
    </div>
    <table class="wrapper display" style="margin-top: 30px;">

    </table>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>