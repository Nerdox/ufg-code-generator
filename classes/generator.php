<?php

namespace classes;

class Generator extends Validator
{
    private function generateRandomString($length = 10) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    private function generateRandomNumber($length = 10) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    private function generateRandomCode() {
        $str = $this->generateRandomString(3);
        $str .= $this->generateRandomNumber(3);

        return $str;
    }

    public function generateRandomCodes() {
        $Validator = parent::getInstance();
        
        if (file_exists($Validator->getFile()) && !empty($Validator->getCodes()))
            return false;

        $arr = [];
        while (1) {
            $str = $this->generateRandomCode();
            $arr[$str] = $str;

            if(count($arr)>=500)
                break;
        }
        
        $Validator->writeToFile($arr);
        return true;
    }
}