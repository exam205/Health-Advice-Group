<?php
include_once "functions/api-calls.php";
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
        date_default_timezone_set("Europe/London");
        $weather_data = getWeather($postcode);
        $main = $weather_data['main'];
        $weather = $weather_data['weather'];
        $wind = $weather_data['wind'];
        $dt = $weather_data['dt'];
        $sunrise = $weather_data['sys']['sunrise'];
        $sunset = $weather_data['sys']['sunset'];
        $time = date("H:i T", $dt);
        switch ($weather[0]['description']){
            case "clear sky":
                if ($dt > $sunrise && $dt < $sunset){
                    $weather_icon = "Sunny";
                }else{
                    $weather_icon = "Clear";
                }
                break;
            case "few clouds":
                if ($dt > $sunrise && $dt < $sunset){
                    $weather_icon = "PartlyCloudyDay";
                }else{
                    $weather_icon = "PartlyCloudyNight";
                }
                break;
            case "scattered clouds":
                if ($dt > $sunrise && $dt < $sunset){
                    $weather_icon = "PartlyCloudyDay";
                }else{
                    $weather_icon = "PartlyCloudyNight";
                }
                break;
            case "broken clouds":
                if ($dt > $sunrise && $dt < $sunset){
                    $weather_icon = "PartlyCloudyDay";
                }else{
                    $weather_icon = "PartlyCloudyNight";
                }
                break;
            case "light rain":
                    $weather_icon = "OccLightRain";
                    break;
            case "shower rain":
                $weather_icon = "Rain";
                break;
            case "rain":
                $weather_icon = "Rain";
                break;
            case "thunderstorm":
                $weather_icon = "CloudRainThunder";
                break;
            case "snow":
                $weather_icon = "ModSnow";
                break;
            case "mist":
                $weather_icon = "Mist";
                break;
            case "overcast clouds":
                $weather_icon = "Cloudy";
                break;
            default:
                $weather_icon = "Sunny";

        }
        $temp = $main['temp'];
        $temp = $temp - 273.15;
        $temp = round($temp, 1);
        $feels_like = $main['feels_like'];
        $feels_like = $feels_like - 273.15;
        $feels_like = round($feels_like, 1);
        $weather_data = array(
            "temp" => $temp,
            "temp_min" => $main['temp_min'],
            "temp_max" => $main['temp_max'],
            "feels_like" => $feels_like,
            "humidity" => $main['humidity'],
            "weather" => $weather[0]['main'],
            "weather_desc" => ucwords($weather[0]['description']),
            "wind_speed" => $wind['speed'],
            "wind_deg" => $wind['deg'],
            "weather_icon" => $weather_icon,
            "time" => $time,
        );
        return $weather_data;

    }
    
    public static function getAirQuality($postcode){
        $air_quality = getAirQuality($postcode);
        $aqi = $air_quality['list'][0]['main']['aqi'];
        $air_quality = $air_quality['list'][0]['components'];
        $air_quality = array(
            "aqi" => $aqi,
            "co" => $air_quality['co'],
            "no" => $air_quality['no'],
            "no2" => $air_quality['no2'],
            "o3" => $air_quality['o3'],
            "so2" => $air_quality['so2'],
            "pm2_5" => $air_quality['pm2_5'],
            "pm10" => $air_quality['pm10'],
            "nh3" => $air_quality['nh3'],
        );
        return $air_quality;

    }
}
 ?>