<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fibonacci</title>
</head>
<body>

    <h1>Fibonacci</h1>
    <form action="index.php" method="post">
        <label>Input N: </label>
        <input type="text" name="n" min="1" required>
        <br><br>
        <input type="submit" name="submit">
    </form>
    
    <?php
    if(isset($_POST['n'])) {
        $n = (int) $_POST['n'];

        $a = 0;
        $b = 1;
        $c = 0;
        $total = 0;

        while ($c < (2 * $n)) { 
        if ($c % 2 == 1) {
            $total = $total + $c;
        }
        echo "<h3>deret fibonance: $c.-</h3>";
        $c = $a + $b;
        $a = $b;
        $b = $c;
        
    }
    echo "<h3>Hasil: $total</h3>";
}
?>
</body>
</html>