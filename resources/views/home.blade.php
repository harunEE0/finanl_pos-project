<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lapos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully";

    // Execute SQL query to get the count .
    $cartSql = "SELECT COUNT(*) as casrts FROM carts";
    $cartQuery = $conn->prepare($cartSql);
    $cartQuery->execute();
    $cartFetch = $cartQuery->fetch();

    
    $productSql = "SELECT COUNT(*) as products FROM products";
    $productQuery = $conn->prepare($productSql);
    $productQuery->execute();
    $productFetch = $productQuery->fetch();

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
            labels: ['carts', 'products', 'user', 'sale', 'client'],
            datasets: [{
                label: 'Dataset',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                data: [<?= $cartFetch['casrts'] ?>, <?= $productFetch['products'] ?>, <?= $usersFetch['users'] ?>, <?= $salesFetch['sales'] ?>,<?= $clientFatch['clients'] ?> ] 
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
    });
</script>
