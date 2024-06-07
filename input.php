<!DOCTYPE html>
<html>

<head>
    <title>Bus Ticket Booking</title>
    <?php include './data/style.php'; ?>
</head>
<div class="box form-container">
    <h2>Select Date & Time</h2>

    <form id="ticketForm" action="output.php" method="post">
        <label for="departure_day">Departure Day:</label>
        <select name="departure_day" required>
            <option value="" disabled selected>Select Departure Day</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
        </select>

        <label for="departure_time">Departure Time:</label>
        <select name="departure_time" required>
            <option value="" disabled selected>Select Departure Time</option>
            <option value="7:00">7:00</option>
            <option value="10:00">10:00</option>
            <option value="13:00">13:00</option>
            <option value="16:00">16:00</option>
            <option value="21:00">21:00</option>
        </select>

        <button type="submit" class="submit-btn">Submit</button>
        <button type="button" class="clear-btn" onclick="clearForm()">Clear</button>
        <button type="button" class="submit-btn" onclick="window.location.href='hotel.php'">Go to Hotel Rent Calculator</button>

    </form>
</div>

</html>