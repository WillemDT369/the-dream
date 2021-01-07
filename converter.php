<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/converter.css">
    <title>Currency Converter</title>
</head>

<body>
    <div class="container">
    <form class="converter-form" action="converter.php" method="POST">
        <h2>Convert to Euro</h2>
        <label for="price">Local Price:</label>
        <input id="price" type="text" name="amount" placeholder="Enter Price"><br>
        <label for="currency">Choose your currency:</label>
        <select id="currency" type="text" name="dropdown">
            <option value="XPF">XPF</option>
            <option value="USD">USD</option>
            <option value="GBP">GDP</option>
        <input type="submit" name="convert" value="How much did I pay?">
    </form>
    <?php
        if(isset($_POST['convert'])){
            $amount = $_POST['amount'];
            $dropdown = $_POST["dropdown"];
            if($dropdown == "XPF"){
                $output = $amount * 0.00838;
                echo "<h3>" ."€ ".$output  ."</h3>";
            } else if($dropdown == "USD"){
                $output = $amount * 0.812015;
                echo "<h3>" ."€ ".$output  ."</h3>";
            } else if($dropdown == "GBP"){
                $output = $amount * 1.10259;
                echo "<h3>" ."€ ".$output  ."</h3>";
            }
            
        } 
    ?>
    </div>
</body>

</html>