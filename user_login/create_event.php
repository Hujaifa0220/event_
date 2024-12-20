<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Management</title>
    <link rel="stylesheet" href="./styles/create_event.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Event Registration Portal</h1>
        </header>

        <section class="add-venue">
            <form action="#" method="post">

                <label for="location">Venue:</label>
                <select id="location" name="location" required>
                    <option value="">Select Venue</option>
                    <option value="chittagong">Chittagong</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="coxs-bazar">Cox's Bazar</option>
                    <option value="khulna">Khulna</option>
                </select>

                <label for="capacity">Capacity:</label>
                <input type="number" id="capacity" name="capacity" required>

                <label for="photographers">Photographers:</label>
                <select id="photographers" name="photographers" required>
                    <option value="">Select Photographer</option>
                    <option value="dreamwaver">Dreamwaver</option>
                    <option value="reminiscence">Reminiscence Photography</option>
                    <option value="chitragolpo">Chitragolpo</option>
                    <option value="shutterbug">Shutterbug</option>
                </select>

                <label for="decorations">Decorations:</label>
                <input type="text" id="decorations" name="decorations" placeholder="Enter decoration details" required>

                <label for="catering">Catering:</label>
                <input type="text" id="catering" name="catering" placeholder="Enter catering details" required>

                <label for="transportation">Transportation:</label>
                <input type="text" id="transportation" name="transportation" placeholder="Enter transportation details" required>

                <label for="audio-video">Audio/Video Equipment:</label>
                <input type="text" id="audio-video" name="audio-video" placeholder="Enter A/V equipment details" required>

                <label for="guest-services">Guest Services:</label>
                <input type="text" id="guest-services" name="guest-services" placeholder="Enter guest service details" required>

                <label for="rental-services">Rental Services:</label>
                <input type="text" id="rental-services" name="rental-services" placeholder="Enter rental service details" required>

                <button type="submit" class="btn-submit">Add Venue</button>
            </form>
        </section>
    </div>
</body>
</html>
