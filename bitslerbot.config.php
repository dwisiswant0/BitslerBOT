<?php
return array(
	"token" => "...", // SHA512. Go to www.bitsler.com & login, in console browser (PRESS F12) type: console.log(access_token)
	"uname" => "...", // your Bitsler username
	"amount" => "2", // betting amount (in Satoshi)
	"multiply" => "2", // how many times multiplied if lose
	"type" => "1", // Bet type. 1 for Roll Dice & 2 for CaraYCruz

	/* for Cara Y Cruz
	true  -	true  -	true  -	true
	0-0-1 ,	0-0-0 ,	1-1-0 ,	1-1-1
	--
	But, you only choose max. 3 true.
	e.g: true-true-true-false = 0-0-1,0-0-0,1-1-0
	*/
	"choose" => "true-false-true-true",

	/* for Roll Dice
	Minimum roll over 1.99 and max. under 98.00
	e.g: <49.50
	*/
	"game" => "49.50",
	"condition" => "<", // High/over (>) or Low/under (<) than
);
