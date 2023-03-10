<html lang="en">
<link rel="stylesheet" href="tax.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculator</title>
</head>
<body class = "center">
    <h1>The Best Salary Calculator in the Galaxy</h1>
    <form method="get">
    <label for="number">Salary: </label>
    <input class = "input-field" type="number" id="salary" name="salary" required><br>
    <br>
    Type: 
    <input type="radio" id="input" name="input" value="bi-monthly" required>
    <label for="bi-monthly">Bi-Monthly</label>
    <input type="radio" id="input" name="input" value="monthly" required>
    <label for="monthly">Monthly</label>
    <br>
    <br>
    <input class = "compute-btn" type="submit" value="Compute">
</form>
<?php
    $annual = 0;
    $anntax = 0;
    $monthtax = 0;
    $salary = 0;

    if (isset($_GET['salary']) && isset($_GET['input'])) {
        $salary = $_GET['salary'];
        $input = $_GET['input'];

    if($input == "bi-monthly"){
        $annual = $salary * 24;
    }
    else if($input == "monthly"){
        $annual = $salary * 12;
    }

    if($annual < 250000){
        $anntax = 0;
        $monthtax = 0;
    }
    else if(250000 <= $annual && $annual < 400000){
        $anntax = (($annual - 250000) * 0.2);
        $monthtax = (($annual - 250000) * 0.2)/12;
    }
    else if(400000 <= $annual && $annual < 800000){
        $anntax = 30000 + (($annual - 400000) * 0.25);
        $monthtax = (30000 + ($annual - 400000) * 0.25)/12;
    }
    else if(800000 <= $annual && $annual < 2000000){
        $anntax = 130000 + (($annual - 800000) * 0.3);
        $monthtax = (130000 + ($annual - 800000) * 0.3)/12;
    }
    else if(2000000 <= $annual && $annual < 8000000){
        $anntax = 490000 + (($annual - 2000000) * 0.32);
        $monthtax = (490000 + ($annual - 2000000) * 0.32)/12;
    }
    else if(8000000 <= $annual){
        $anntax = 2410000 + (($annual - 8000000) * 0.35);
        $monthtax = (2410000 + ($annual - 8000000) * 0.35)/12;
    }
    else{
        alert("Please type an appropriate input.");
    }
}
?>
<br>
Annual Salary: <h4>PHP <?php echo number_format($annual, 2); ?></h4>
Est. Annual tax: <h4>PHP <?php echo number_format($anntax, 2); ?></h4>
Est. Monthly Tax: <h4>PHP <?php echo number_format($monthtax, 2); ?></h4>
</body>
</html>