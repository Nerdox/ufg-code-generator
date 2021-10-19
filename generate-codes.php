<?php


function generateRandomString($length = 10) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateRandomNumber($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength)];
    }
    return $randomString;
}

function generateRandomCode(){
	$str = generateRandomString(3);
	$str .= generateRandomNumber(3);
	return $str;
}

function generateRandomCodes(){
	$arr = [];
	While(1){
	 $str = generateRandomCode();
	 $arr[$str] = $str;
	 if(count($arr)>=500) break;
	}
    
    writeToFile($arr);
}

function writeToFile($data){
    $file = 'codes.txt';
    $data = json_encode($data);
    file_put_contents($file, $data);
}

generateRandomCodes();
