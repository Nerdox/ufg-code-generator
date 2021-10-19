<?php

namespace classes;

class Validator extends Singleton
{
    private $file = "codes.txt";
    private $codes;

    public function __construct() {
        if (file_exists($this->file)) {
            $temp_codes = file_get_contents($this->file);
            $this->codes = json_decode($temp_codes, TRUE);
            unset($temp_codes);
        }
    }

    public function validateCode($code) {
        if(!empty($this->codes[$code])) {
            $this->deleteCode($code);
            return true;
        }

        return false;
    }

    private function deleteCode($code) {
        unset($this->codes[$code]);
        $this->writeToFile($this->codes);
    }

    protected function writeToFile($data){
        $data = json_encode($data);
        file_put_contents($this->file, $data);
    }

    protected function getCodes() {
        return $this->codes;
    }

    protected function getFile() {
        return $this->file;
    }
}
