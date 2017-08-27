<?php
namespace dwisiswant0\BitslerBOT;
define("OS", (PHP_OS == "Linux" ? 1 : 0));

/**
* Bitsler BOT v1.1
* Please get updated on my GitHub (dwisiswant0)
* --
* Change the author name don't make you become a coder
* @ 2017 dw1
**/

const API = "https://www.bitsler.com/api";

class ngepet {
    public function __construct($access_token, $username) {
        $this->access_token = $access_token;
        $this->username = $username;
    }
    
    private function call($data, $endpoint) {
        $context = stream_context_create(array(
            "http" => array(
                "method" => "POST",
                "header" => implode("\r\n", array(
		            "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0",
		            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
		            "X-Requested-With: XMLHttpRequest"
		        )),
                "content" => "access_token=" . $this->access_token . "&username=" . $this->username . "&" . $data,
            ),
        ));

        $response = file_get_contents(API . $endpoint, false, $context);
        
        if (strpos($http_response_header[0], "200") == true) {
            return json_decode($response, true)['return'];
        } else {
            exit("Something wrong, but Idk why.\n");
        }
    }
    
    public function getbalance() {
        return $this->call("_", "/get-balances");
    }
    
    public function caraycruz($amount, $choose) {
        $data = "type=caraycruz&version=1&amount=" . $amount . "&choose=" . $choose . "&devise=btc";
        return $this->call($data, "/bet");
    }
    
    public function roll_dice($amount, $condition, $game) {
        $data = "type=dice&amount=" . $amount . "&condition=" . urlencode($condition) . "&game=" . $game . "&devise=btc";
        return $this->call($data, "/bet");
    }
}
