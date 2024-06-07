<!DOCTYPE html>
<html>
<head>
    <title>Bus Ticket Booking - Result</title>
    <?php include './data/style.php'; ?>
</head>
<body>
    <div class="header-container">
        <?php include './includes/header.html'; ?>
    </div>

    <div class="form-container">
        <?php
        include './data/price.php';

        $departure_day = $_POST['departure_day'];
        $departure_time = $_POST['departure_time'];

        $ticket_price = $ticket_prices[$departure_day][$departure_time] ?? "Not available";

        echo "<h2>Selected Departure Details:</h2>";
        echo "<p>Departure Day: $departure_day</p>";
        echo "<p>Departure Time: $departure_time</p>";
        echo "<h2>Ticket Price:</h2>";
        echo "<p>RM $ticket_price</p>";
        ?>
        <br>
        <a href="index.php" class="back-btn">Back to Main Page</a>
    </div>

    <div class="footer-container">
        <?php include './includes/footer.html'; ?>
    </div>
</body>
</html>
