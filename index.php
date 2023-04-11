<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/result.php" method="POST">
    <input type="text" name="numberOne">
    <select name="operation">
        <option value="+">плюс</option>
        <option value="-">минус</option>
    </select>
    <input type="text" name="numberTwo">
    <input type="submit" value="Посчитать">
</form>
</body>
</html>