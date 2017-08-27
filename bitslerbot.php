<?php
require_once("bitslerbot.lib.php");
use \dwisiswant0\BitslerBOT As BitslerBOT;
session_start();
$_SESSION['amount'] = 0;
$_SESSION['lose'] = 0;
$config = include "bitslerbot.config.php";
$bitslerbot = new BitslerBOT\ngepet($config['token'], $config['uname']);
// $balance = $bitslerbot->getbalance();

#############################
echo "\n  # BitslerBOT v1.1";
echo "\n  # @ 2017, dw1\n\n";
#############################

while (true) {
	$amount = ($_SESSION['amount'] == 0 ? ($config['amount'] * 0.00000001) : $_SESSION['amount']);
	$type = (int) $config['type'];
	$bet = ($type == 1 ? $bitslerbot->roll_dice($amount, $config['condition'], $config['game']) : ($type == 2 ? $bitslerbot->caraycruz($amount, $config['choose']) : exit("You've not configured the bet type or incorrect.\n")));

	if ($bet['success'] !== "true") exit($bet['value'] . "\n");
	$status = strpos($bet['amount_return'], "-");
	echo (OS ? "\x1b[2;3" . ($status === false ? "2" : "1") . ";7;47m" : null) . "[" . $bet['time'] . "] " . ($status === false ? "WIN!" : "LOSE!") . " " . ($type == 1 ? "ROLL " . $bet['roll_number'] . " | GAME " . $bet['condition'] . $bet['game'] : ($type == 2 ? "RESULT " . $bet['result_coins'] . " | CHOOSE " . $bet['choose_coins'] : exit())) . " | BET: " . $bet['amount'] . " | BALANCE: " . $bet['new_balance'] . (OS ? "\x1b[0m" : null) . "\n";

	if ($status === false) {
		$_SESSION['amount'] = 0;
		$_SESSION['lose'] = 0;
	} else {
		$_SESSION['amount'] = ((float) $bet['amount'] * (int) $config['multiply']);
		$_SESSION['lose']++;
		sleep($_SESSION['lose']);
	}
}
