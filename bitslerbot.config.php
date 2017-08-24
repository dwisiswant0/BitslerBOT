<?php
return array(
	"token" => "...", // SHA512. Go to www.bitsler.com & login, in console browser (PRESS F12) type: console.log(access_token)
	"uname" => "...", // your Bitsler username
	"amount" => "5", // betting amount (in Satoshi)

	/* for Cara Y Cruz
	true  -	true  -	true  -	true
	0-0-1 ,	0-0-0 ,	1-1-0 ,	1-1-1
	--
	But, you only choose max. 3 true.
	e.g: true-true-true-false = 0-0-1,1-1-1,1-1-0
	*/
	"choose" => "true-true-true-false",

	/* for Roll Dice
	on progress...
	*/
	// "condition" => "...",
	// "game" => "...",
);
