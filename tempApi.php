<?php
$url='api.worldweatheronline.com/premium/v1/weather.ashx?q=44.804%2C20.4651&format=json&num_of_days=5&key=fec7b7bbb71f450abd0111742191602';
$curl = curl_init($url);
//za FON-ovu mrezu treba podesiti proksi. Za ostale mreze linije za proksi treba da budu pod komentarom
//curl_setopt($curl, CURLOPT_PROXY, 'proxy.fon.rs:8080');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, false);
$curl_odgovor = curl_exec($curl);
curl_close($curl);
$parsiran_json = json_decode ($curl_odgovor);
$temperatura = $parsiran_json->data->current_condition[0]->temp_C;
?>