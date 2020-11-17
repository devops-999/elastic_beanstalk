<?php
// получим ip адрес клиента
$ip = $_SERVER['REMOTE_ADDR'];
// переменная $access_key должна содержать ваш API Access Key
$access_key = '2cdbee85f25f4afb66674edc3279f80a';
// инициализируем новый сеанс cURL
$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
// если нужно выбрать только страну, то можно так
//$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'&fields=country_code');
// устанавливаем параметр для указанного сеанса cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// выполняем запрос cURL и сохраняем данные в $json
$json = curl_exec($ch);
// завершаем сеанс cURL
curl_close($ch);
// декодируем JSON ответ
$api_result = json_decode($json, true);

// получаем ISO-код страны
$county_code = $api_result['country_code'];
// получаем название региона
$region_name = $api_result['region_name'];
// получаем название города
$city = $api_result['city'];
