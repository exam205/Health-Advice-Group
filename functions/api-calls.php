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

function getWeather(){
    $api_key = "";
    $get_coord_json = file_get_contents("https://api.openweathermap.org/geo/1.0/zip?zip=TR96RU,GB&appid=".$api_key."");
    $get_coord_json = json_decode($get_coord_json, true);
    $lat = $get_coord_json["lat"];
    $lon = $get_coord_json["lon"];
    $get_weather_json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$lon."&appid=".$api_key."");
    $get_weather_json = json_decode($get_weather_json, true);
   

}

function getAirQuality(){
    $api_key = "";
    $get_coord_json = file_get_contents("https://api.openweathermap.org/geo/1.0/zip?zip=TR96RU,GB&appid=".$api_key."");
    $get_coord_json = json_decode($get_coord_json, true);
    $lat = $get_coord_json["lat"];
    $lon = $get_coord_json["lon"];
    $get_air_json = file_get_contents("https://api.openweathermap.org/data/2.5/air_pollution?lat=".$lat."&lon=".$lon."&appid=".$api_key."");
    $get_air_json = json_decode($get_air_json, true);
}

if (isset($_GET["postcode"])) {
    echo getCity($_GET["postcode"]);
}
