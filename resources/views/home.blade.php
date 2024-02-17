<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lapos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully";

    // Execute SQL query to get the count
    $cartSql = "SELECT COUNT(*) as casrts FROM carts";
    $cartQuery = $conn->prepare($cartSql);
    $cartQuery->execute();
    $cartFetch = $cartQuery->fetch();

    $productSql = "SELECT name, product_left FROM products"; // Fetch name along with product_left
    $productQuery = $conn->prepare($productSql);
    $productQuery->execute();
    $productFetch = $productQuery->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
    
    $usersSql = "SELECT COUNT(*) as users FROM users";
    $usersQuery = $conn->prepare($usersSql);
    $usersQuery->execute();
    $usersFetch = $usersQuery->fetch();

    $salesSql = "SELECT COUNT(*) as sales FROM sales";
    $salesQuery = $conn->prepare($salesSql);
    $salesQuery->execute();
    $salesFetch = $salesQuery->fetch(); 

    $clientsql = "SELECT COUNT(*) as clients FROM clients ";
    $clientQuery = $conn->prepare($clientsql);
    $clientQuery->execute();
    $clientFatch = $clientQuery->fetch();

     // Fetch product_left data
     $productLeftSql = "SELECT product_left FROM products";
     $productLeftQuery = $conn->prepare($productLeftSql);
     $productLeftQuery->execute();
     $productLeftFetch = $productLeftQuery->fetchAll(PDO::FETCH_COLUMN);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

@extends('layouts.app')
@section('content')

<div class="masthead-followup row m-0 text-center lead">
    <div class="col-12 col-md-6 p-3 text-left">
        <div class="graph">
            <canvas id="myChart"></canvas> <!-- This canvas will be used by Chart.js to render the chart -->
        </div>

        <div class="graph_show-product">
            <canvas id="productLeftChart"></canvas> <!-- This canvas will be used to render the product_left graph -->
        </div>
    </div>

    <div class="col-12 col-md-3 p-3 text-left">
        <!-- Your HTML content -->
    </div>
</div>

@endsection

<!-- Script for Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Get the context of the canvas element
    var ctx = document.querySelector('.graph canvas').getContext('2d');

    // Define the data for the chart
    var data = {
        labels: ['carts', 'products',  'user', 'sale', 'client'],
        datasets: [{
            label: 'Dataset',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            data: [
                <?= $cartFetch['casrts'] ?>,
                <?= isset($productFetch['products']) ? $productFetch['products'] : 0 ?>,
                <?= $usersFetch['users'] ?>,
                <?= $salesFetch['sales'] ?>,
                <?= $clientFatch['clients'] ?>
            ] 
        }]
    };

    // Define options for the chart
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    };

    // Create the chart
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });

    // Get the context of the product left canvas element
    var productLeftCtx = document.getElementById('productLeftChart').getContext('2d');

    // Extract product names and left quantities
    var productNames = <?= json_encode(array_column($productFetch, 'name')) ?>;
    var productLeftValues = <?= json_encode(array_column($productFetch, 'product_left')) ?>;

    // Define the data for the product left chart
    var productLeftChartData = {
        labels: productNames, // Use product names as labels
        datasets: [{
            label: 'Product Daily',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            data: productLeftValues
        }]
    };

    // Create the product left chart
    var productLeftChart = new Chart(productLeftCtx, {
        type: 'bar',
        data: productLeftChartData,
        options: options
    });
});

</script>
