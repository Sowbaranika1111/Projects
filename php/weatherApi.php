<?php
$apiKey = "211a928dfae0854787a63680b29436d5";
$lat = "11.016844";
$lon = "76.955833";
$apiUrl = "https://api.openweathermap.org/data/3.0/onecall?lat={lat}&lon={lon}&exclude={part}&appid={API key}";
"https://api.openweathermap.org/data/3.0/weather?lat=" .$lat. "&lon=" .$lon. "&lang=en&units=metric&APPID=".$apiKey;

$curlInitialise = curl_init();

curl_setopt($curlInitialise,CURLOPT_HEADER,0);
curl_setopt($curlInitialise,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curlInitialise,CURLOPT_URL,$apiUrl);
curl_setopt($curlInitialise,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($curlInitialise,CURLOPT_VERBOSE,0);
curl_setopt($curlInitialise,CURLOPT_SSL_VERIFYPEER,false);
$response = curl_exec($curlInitialise);

curl_close($curlInitialise);
$data = json_decode($response);
$currentTime = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - FETCH WEATHER DATA FROM OPEN WEATHER MAP API</title>
</head>
<body>
    <div class = "report-container">
        <h2><?php echo $data -> name;?>Weather Status</h2>
        <div class="time"><?php echo date("l g: i a",$currentTime);?></div>
        <div class="time"><?php echo date("jS F , Y",$currentTime);?></div>
        <div class="time"><?php echo ucwords($data -> weather[0]->description);?></div>
        <div class="weather-forecast">
            <?php echo $data-> main -> temp_max;?>&deg;C
            <span class="min-temperature"><?php echo $data->main->temp_min;?>&deg;</span>
        </div>
        <div class="time">
            <div>Humidity:<?php echo $data->main->humidity; ?>%</div>
            <div>Wind:<?php echo $data->wind->speed; ?>km/h</div>
        </div>
    </div>
</body>
</html>