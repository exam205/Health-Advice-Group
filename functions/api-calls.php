<?php
function getCity($postcode) //Use this function to get the city from the postcode
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);

    $data = [
        "codes" => $postcode
    ];

    curl_setopt($ch, CURLOPT_URL, "https://app.zipcodebase.com/api/v1/search?" . http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "apikey: b57b96c0-bdbb-11ed-bab4-61f85a34e352",
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($response, true);
    $return_value = $json["results"][$postcode]["0"];
    return json_encode($return_value);
}

function getWeather($postcode){
    error_reporting(0);
    $weather_api_key = "e2e8aca550094ed194a94435231503";
    $get_weather_json = file_get_contents("https://api.weatherapi.com/v1/forecast.json?key=".$weather_api_key."&q=".$postcode."&aqi=yes&alerts=yes");
    if ($get_weather_json == false) {
        return false;
    }
    $get_weather_json = json_decode($get_weather_json, true);
    return $get_weather_json;
}

if (isset($_GET["postcode"])) {
    echo getCity($_GET["postcode"]);
}
