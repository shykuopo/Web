<?php

$city=$_GET['city'];

$city=str_replace(" ", "", $city);

$content=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match("/<\/b><span class=\"read-more-small\"><span class=\"read-more-content\"> <span class=\"phrase\">(.*?)<\/span>/s", $content, $matches);

echo $matches[0];

?>