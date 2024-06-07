<!DOCTYPE html>
<html>

<head>
    <title>Hotel Rent Calculator</title>
    <?php include './data/style.php'; ?>
</head>

<body>
    <div class="header-container">
        <?php include './includes/header.html'; ?>
    </div>

    <div class="box">
        <h2>Calculate Hotel Rent:</h2>
        <form id="rentForm">
            <label for="nights">Number of Nights:</label>
            <input type="number" id="nights" name="nights" min="1" required><br><br>

            <label for="rate">Rate per Night (RM):</label>
            <input type="number" id="rate" name="rate" min="1" required><br><br>

            <label for="tax">Tax Rate (%):</label>
            <input type="number" id="tax" name="tax" min="0" required><br><br>

        </form>

        <h3>Total Rent price: RM <span id="totalRent">0.00</span></h3>

        <input type="button" value="Calculate" class="submit-btn" onclick="calculateRent()">
        <input type="button" value="Clear" class="submit-btn" onclick="clearForm()">
        <button type="button" class="submit-btn" onclick="window.location.href='index.php'">Go to Bus Booking</button>

    </div>

    <script>
        function calculateRent() {
            var nights = document.getElementById("nights").value;
            var rate = document.getElementById("rate").value;
            var tax = document.getElementById("tax").value;

            if (nights && rate && tax) {
                var subtotal = nights * rate;
                var totalTax = subtotal * (tax / 100);
                var total = subtotal + totalTax;

                document.getElementById("totalRent").innerText = total.toFixed(2);
            } else {
                alert("Please fill in all fields.");
            }
        }
        

        function clearForm() {
            document.getElementById("rentForm").reset();
            document.getElementById("totalRent").innerText = "0.00";
        }
    </script>
    
    <div class="footer-container">
        <?php include './includes/footer.html'; ?>
    </div>
</body>

</html>
