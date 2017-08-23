<?php
namespace dwisiswant0\BitslerBOT;
define("OS", (PHP_OS == "Linux" ? 1 : 0));

/**
* Bitsler BOT v1.0
* Please get updated on my GitHub (dwisiswant0)
* --
* Change the author name don't make you become a coder
* @ 2017 dw1
**/

const API = "https://script.google.com/macros/s/AKfycbx2A79duwrVxCua1n5ivMKsDG3N2qv0G4em8u9XGpgsNMuvZHUL/exec?";

class ngepet {
    public function __construct($access_token, $username) {
        $this->access_token = $access_token;
        $this->username     = $username;
    }
    
    private function get($data) {
        $context  = stream_context_create(array(
            "http" => array(
                "method" => "GET"
            )
        ));

        $response = file_get_contents(API . $data, false, $context);
        
        if (strpos($http_response_header[0], "302") == true) {
            return json_decode($response, true);
        } else {
            exit("Something wrong, but Idk why.");
        }
    }
    
    public function getbalance() {
        $data = "act=balance&token=" . $this->access_token . "&uname=" . $this->username;
        return $this->get($data);
    }
    
    public function caraycruz($amount, $choose) {
        $data = "act=bet&token=" . $this->access_token . "&uname=" . $this->username . "&amount=" . $amount . "&choose=" . $choose;
        return $this->get($data);
    }
    
    public function roll_dice($amount, $condition, $game) {
        // on progress
    }
}