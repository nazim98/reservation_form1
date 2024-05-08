<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Reservation</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-color: #ff9900;">
    <div class="container">
        <h2 style="color: #333;">Restaurant Reservation</h2>
        <form action="reserve_table.php" method="post">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone" required>
            <input type="date" name="date" required>
            <input type="time" name="time" required>
            <input type="number" name="party_size" placeholder="Number of Persons" min="1" required>
            <label for="location" style="color: #333;">Location:</label>
            <select name="location" required>
                <option value="indoor">Indoor</option>
                <option value="outdoor">Outdoor</option>
            </select>
            <input type="submit" value="Make Reservation" style="background-color: #4CAF50;">
        </form>
    </div>
</body>
</html>
