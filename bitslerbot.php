<?php
require_once("bitslerbot.lib.php");
use \dwisiswant0\BitslerBOT As BitslerBOT;
session_start();
$_SESSION['amount'] = 0;
$_SESSION['lose'] = 0;
$config = include "bitslerbot.config.php";
$bitslerbot = new BitslerBOT\ngepet($config['token'], $config['uname']);

echo "\n  # BitslerBOT v1.0 (Beta)";
echo "\n  # @ 2017, dw1\n\n";

while (true) {
	$amount = ($_SESSION['amount'] == 0 ? ($config['amount']*0.00000001) : $_SESSION['amount']);
	$bet = $bitslerbot->caraycruz($amount, $config['choose']);

	if ($bet['status'] !== 1) exit($bet['error'] . "\n");
	echo (OS ? "\x1b[2;3" . ($bet['return'] == 1 ? "2" : "1") . ";7;47m" : null) . "[" . $bet['time'] . "] " . ($bet['return'] == 1 ? "WIN!" : "LOSE!") . " RESULT " . $bet['result_coins'] . " | CHOOSE " . $bet['choose_coins'] . " | BET: " . $bet['bet'] . " | BALANCE: " . $bet['balance'] . (OS ? "\x1b[0m" : null) . "\n";

	if ($bet['return'] == 1) {
		$_SESSION['amount'] = 0;
		$_SESSION['lose'] = 0;
	} else {
		$_SESSION['amount'] = (float) $bet['bet'] * 6;
		$_SESSION['lose']++;
		sleep($_SESSION['lose']);
	}
}
