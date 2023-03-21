<?php
class Common {
    public static function goBack(){
        if(isset($_SERVER['HTTP_REFERER'])){
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }else{
            header("Location: index.php"); //If no referer, go back to index.php
            exit;
        }
    }

    public static function getWeatherData($postcode){
        $weather_data = Common::getWeather($postcode);

        if ($weather_data == false){ // If api call fails, set error message then provide weather for London or user's postcode
           $_SESSION['error'] = "Invalid Location";
           if (isset($_SESSION["postcode"])){;
            return Common::getWeatherData($_SESSION['postcode']);
           }else{
            return Common::getWeatherData("London");
           }
           
        }

        $is_day = $weather_data["current"]["is_day"]; // Get day or night icon
        switch ($is_day) {
            case 0:
                $is_day = "night";
                break;
            case 1:
                $is_day = "day";
                break;
        }

        $icon = $weather_data["current"]["condition"]["icon"]; // Setting icon URL
        $icon_exploded = explode("/", $icon);
        $icon_number = $icon_exploded[6];
        $icon_url = "images/weather-icons/".$is_day."/".$icon_number."";

        $local_time = $weather_data["location"]["localtime"]; // Setting local time
        $local_time_exploded = explode(" ", $local_time);
        $local_time = $local_time_exploded[1];

        if ($weather_data["alerts"]["alert"] == null){ // If there are no alerts, set alerts to "No alerts"
            $alerts_array = array(
                "alerts" => "No alerts",
            );
        }else{
            $alerts_array = array(
                "alerts" => $weather_data["alerts"],
            );
        }

        $weather_data_array = array( // Putting all data in array
            "location" => $weather_data["location"]["name"].", ".$weather_data["location"]["region"].", ".$weather_data["location"]["country"],
            "local_time" => $local_time,
            "temperature" => $weather_data["current"]["temp_c"],
            "weather" => $weather_data["current"]["condition"]["text"],
            "weather_icon" => $icon_url,
            "wind_speed" => $weather_data["current"]["wind_kph"],
            "wind_direction" => $weather_data["current"]["wind_dir"],
            "humidity" => $weather_data["current"]["humidity"],
            "feels_like" => $weather_data["current"]["feelslike_c"],
            "uv" => $weather_data["current"]["uv"],
            "aqi" => $weather_data["current"]["air_quality"]["gb-defra-index"],
            "co" => $weather_data["current"]["air_quality"]["co"],
            "no2" => $weather_data["current"]["air_quality"]["no2"],
            "o3" => $weather_data["current"]["air_quality"]["o3"],
            "so2" => $weather_data["current"]["air_quality"]["so2"],
            "pm2_5" => $weather_data["current"]["air_quality"]["pm2_5"],
            "pm10" => $weather_data["current"]["air_quality"]["pm10"],
            "alerts" => $alerts_array,
        );
        return $weather_data_array;

    }

    public static function getWeather($postcode){
        error_reporting(0); // Turn off error reporting
        $weather_api_key = "e2e8aca550094ed194a94435231503";
        $get_weather_json = file_get_contents("https://api.weatherapi.com/v1/forecast.json?key=".$weather_api_key."&q=".$postcode."&aqi=yes&alerts=yes");

        if ($get_weather_json == false) { // If api call fails, return false
            return false;
        }

        $get_weather_json = json_decode($get_weather_json, true);
        return $get_weather_json;
    }

}
 ?>