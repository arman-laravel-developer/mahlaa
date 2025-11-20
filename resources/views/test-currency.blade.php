<!DOCTYPE html>
<html>
<head>
    <title>Test Currency</title>
</head>
<body>
    <h1>Currency Test</h1>
    <p>Current Currency Code: {{ getCurrencyCode() }}</p>
    <p>Current Currency Symbol: {{ getCurrencySymbol() }}</p>
    <p>Formatted Price (100.50): {{ formatPrice(100.50) }}</p>
</body>
</html>