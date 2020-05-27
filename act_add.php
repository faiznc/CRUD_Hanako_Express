<?php
$title=$_POST['title'];
$type=$_POST['type'];
$episodes=$_POST['episodes'];
$status=$_POST['status'];
$picture=$_POST['picture'];
$thumbnail=$_POST['thumbnail'];

//Try to get data from POST method, to edit data.
class Curl {
	
	public function get($url){

		$ch = curl_init($url);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                                                                    
		$result = curl_exec($ch);
		return $result;
	}

	public function post($url, $data_string){

		$ch = curl_init($url);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
		curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                                
		    'Content-Length: ' . strlen($data_string))                                                                       
		);                                                                                                                   
		 
		$result = curl_exec($ch);
		return $result;
	}

	public function put($url, $data_string){

		$ch = curl_init($url);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT"); 
		curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                                
		    'Content-Length: ' . strlen($data_string))                                                                       
		);                                                                                                                   
		 
		$result = curl_exec($ch);
		return $result;
	}

	public function delete($url, $data_string){

		$ch = curl_init($url);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
		curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                                
		    'Content-Length: ' . strlen($data_string))                                                                       
		);                                                                                                                   
		 
		$result = curl_exec($ch);
		return $result;
	}

}

$curl = new Curl;

$data_string = '{"title":"'.$title.'","type":"'.$type.'","episodes":"'.$episodes.'","status":"'.$status.'","picture":"'.$picture.'","thumbnail":"'.$thumbnail.'"}';
$url = "http://hanako-express.herokuapp.com/api/anime/";
// echo $curl->post($url, $data_string);


if (empty($curl->post($url, $data_string))){
	echo "An error occured";
	echo "<br>";
	echo '<a href="javascript:history.go(-1)">Back</a>';
}
else{
	$uri_real =  (parse_url($urlAsli, PHP_URL_PATH));

	header("Location: ".$uri_real."./");
	exit();
}

?>