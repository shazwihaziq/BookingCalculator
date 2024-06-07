<!DOCTYPE html>
<html>

<head>
    <title>Combined Form</title>
    <?php include './data/style.php'; ?>
</head>

<body>
    <div class="header-container">
        <?php include './includes/header.html'; ?>
    </div>

    <?php include 'input.php'; ?>

    <!-- Rest of your HTML -->
<!-- Table Box -->
<div class="box">
        <h2>Ticket Prices:</h2>
        <table border="1">
            <tr>
                <th></th>
                <th>7:00</th>
                <th>10:00</th>
                <th>13:00</th>
                <th>16:00</th>
                <th>21:00</th>
            </tr>
            <tr>
                <td>Saturday</td>
                <td>RM 8</td>
                <td>RM 8</td>
                <td>RM 8</td>
                <td>RM 8</td>
                <td>RM 6</td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td>RM 8</td>
                <td>RM 8</td>
                <td>RM 8</td>
                <td>RM 8</td>
                <td>RM 6</td>
            </tr>
            <tr>
                <td>Monday</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 5</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 5</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 5</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 5</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 6</td>
                <td>RM 5</td>
            </tr>
        </table>
    </div>

    <script>
    function clearForm() {
        document.getElementById("ticketForm").reset();
    }
</script>

    <div class="footer-container">
        <?php include './includes/footer.html'; ?>
    </div>
</body>

</html>
