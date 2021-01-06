<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>

<body>
    <form action="converter.php" method="POST">
        
        <h3>Convert to Euro from French Pacific Franc</h3>
        Local price:<input type="text" name="amount" placeholder="Enter Price"><br>
        <input type="submit" name="convert" value="How much did I pay?">
    </form>
    <?php
        if(isset($_POST['convert'])){
            $amount = $_POST['amount'];
            echo "€ ".$amount * 0.00838;
        } 
    ?>
</body>

</html>