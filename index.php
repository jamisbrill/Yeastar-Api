
<!DOCTYPE html>
<html>
<h1> Yeastar API test </h1>
<p> This will be a program rather than  a website.... somepoint </p>



<form method="post">
        <input type="submit" name="button1"
                value="Button1"/>

<form method="post">
        <input type="submit" name="button2"
                value="Button2"/>
				
				<form method="post">
        <input type="submit" name="button3"
                value="Button3"/>
				
			<form method="post">
        <input type="submit" name="button4"
                value="Button4"/>		
 <?php
      
        if(isset($_POST['button1'])) {
            echo "Get_Access Token";
			
		
$url = "https://trust-yeastar.ras.yeastar.com/openapi/v1.0/trunk/get_token";
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Host: trust-yeastar.ras.yeastar.com",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "username": "55555",
	"password": "555"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);




//BUTTON z2

        }
        if(isset($_POST['button2'])) {
            echo "This is Button2 that is selected";
			
			$url = 'https://trust-yeastar.ras.yeastar.com/openapi/v1.0/get_token';
$data = array('key1' => 'value1', 'key2' => 'value2');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
        
		
		
		
		
		}
		
		
		function httpPost($url, $data)
{
 $url = 'http://server.com/path';
$data = array('key1' => 'value1', 'key2' => 'value2');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
}

		
			  
		  if(isset($_POST['button1'])) {
            echo "Get_Access Token";
		  
		  //The url you wish to send the POST request to
$url = "https://trust-yeastar.ras.yeastar.com/openapi/v1.0/get_token";

//The data you want to send via POST
$fields = [
    '__VIEWSTATE '      => $state,
    '__EVENTVALIDATION' => $valid,
    'btnSubmit'         => 'Submit'
];

//url-ify the data for the POST
$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
echo $result;
		
		
		
		  
		
		  }
		
		
		if(isset($_POST['button4'])) {
			echo "hi";
			
		
			
			
		}
		
		
		
		
    ?>
	
	
	<p>  if(isset($_POST['button2'])) {
            echo "This is Button2 that is selected";
			
			$url = 'https://trust-yeastar.ras.yeastar.com/openapi/v1.0/get_token';
$data = array('key1' => 'value1', 'key2' => 'value2');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
        }
		
		
		function httpPost($url, $data)
{
 $url = 'http://server.com/path';
$data = array('key1' => 'value1', 'key2' => 'value2');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
}
		
		</p>
		
