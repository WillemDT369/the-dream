<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/converter.css">
    <title>Currency Converter</title>
</head>

<body>
    <?php
    // only for exercise, not in real life, errors are only for developer to see
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        // $output must be defined globally as well
        $output = "";
        if(isset($_POST['convert'])){
            $amount = (float)$_POST['amount'];
            $dropdown = $_POST["dropdown"];
            switch($dropdown){
                case "XPF":
                    $output = $amount * 0.00838;
                    break;
                case "USD":
                    $output = $amount * 0.812015;
                    break;
                case "GBP":
                    $output = $amount * 1.10259;
                    break;
            }
        } 
    ?>
    <div class="container">
        <form class="converter-form" action="" method="POST">
            <h2>Convert to Euro</h2>
            <label for="price">Local Price:</label>
            <input id="price" type="text" name="amount" placeholder="Enter Price"><br>
            <label for="currency">Choose your currency:</label>
            <select id="currency" type="text" name="dropdown">
                <option value="XPF">XPF</option>
                <option value="USD">USD</option>
                <option value="GBP">GBP</option>
            <input type="submit" name="convert" value="How much did I pay?">
        </form>
        <h3>€ <?= $output; ?></h3>
    </div>
</body>

</html>