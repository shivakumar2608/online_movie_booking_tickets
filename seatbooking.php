
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/seatbooking.css" />

    <title>Movie Seat Booking</title>
</head>

<body>
    <div class="movie-container">
        <label> Avaliable screenings</label>
        <select id="movie">
            <option value="Screen1">Screen 1</option>
            <option value="Screen2">Screen 2</option>
            <option value="Screen3">Screen 3</option>
            <option value="Screen4">Screen 4</option>
        </select>
    </div>
    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>N/A</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
        </li>
    </ul>
    <div class="container">
        <div class="screen"></div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto unbooked seat"> A1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat"> A2</div>
            <div class="col col-lg-1 place mx-auto unbooked seat"> A3</div>
            <div class="col col-lg-1 place mx-auto unbooked seat"> A4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat"> A5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat"> A6</div>

        </div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto unbooked seat">B1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">B2</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">B3</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">B4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">B5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">B6</div>
            
        </div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto unbooked seat">C1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">C2</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">C3</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">C4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">C5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">C6</div>
        </div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto unbooked seat">D1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">D2</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">D3</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">D4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">D5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">D6</div>
        </div>
        <div class="row">
            <div class="col col-lg-1 place mx-auto taken occupied seat">E1</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">E2</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">E3</div>
            <div class="col col-lg-1 place mx-auto taken occupied seat">E4</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">E5</div>
            <div class="col col-lg-1 place mx-auto unbooked seat">E6</div>
        </div>

    </div>
    <p class="text">You have selected <span id="count">0</span> seats
    </p>
    <div class="container order d-grid gap-2 mx-auto">
        <a href="confirm.php"> <button class="btn btn-secondary mx-auto" type="button" value="Confirm Booking" id="submit">Confirm Booking </button> </a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/seatbooking.js"></script>
</body>

</html>