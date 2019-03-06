<style> <?php include 'style.css'; ?> </style>
<?php

//get data from submit
$gelato = $_POST['gelatoQ'];
$sigfox = $_POST['sigfoxQ'];
$book = $_POST['bookQ'];
$shipMethod = $_POST['shipping'];
$userName = $_POST['userName'];
$password = $_POST['password'];

//store subtotals
$gelatoPrice = $gelato * 12.00;
$sigfoxPrice = $sigfox * 293.99;
$bookPrice = $book * 124.99;

$shipPrice = 0.0;
if ($shipMethod == "7-Day")
{
  $shipPrice = 0.00;
}
else if ($shipMethod == "3-Day")
{
  $shipPrice = 5.00;
}
else if ($shipMethod == "Overnight")
{
  $shipPrice = 50.00;
}


//calculate total cost
$totalCost = $gelatoPrice + $sigfoxPrice + $bookPrice + $shipPrice;



echo "<h1>Welcome User</h1>";
echo"<h3>";
echo "Email: ";
echo "$userName<br>";
echo "Password: ";
echo "$password<br><br>";
echo"</h3>";

echo"<table border='1'>";
echo "<tr><th>Item</th><th>Quantity</th><th>Cost per Item</th><th>Subtotal</th></tr>";
//gelato line
echo "<tr><th>Gelato</th><td>$gelato</td><td>$12.00</td><td>$$gelatoPrice</td></tr>";
//sigfox line
echo "<tr><th>LV Sigfox Tracker</th><td>$sigfox</td><td>$293.99</td><td>$$sigfoxPrice</td></tr>";
//book line
echo "<tr><th>Modernist Cuisine Book</th><td>$book</td><td>$124.99</td><td>$$bookPrice</td></tr>";
//shipping line
echo "<tr><th>Shipping</th><td colspan=\"2\">$shipMethod</td><td>$$shipPrice</td></tr>";
//total line
echo "<tr><th colspan=\"3\">Total Cost</th><th>$$totalCost</th></tr>";


echo "</table>";




?>
