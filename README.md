## About BitslerBOT
BitslerBOT is a PHP tool designed betting automatically to maximize the chance of winning in gambling on [Bitsler.com](https://www.bitsler.com/?ref=iniakundwi). There are 4 games in [Bitsler.com](https://www.bitsler.com/?ref=iniakundwi), including: *Dice*, *Roullete*, *Multicolor* & *CaraYCruz*.

## Screenshots
> CaraYCruz BOT

![screenshot - 210817 - 05 40 41b](https://user-images.githubusercontent.com/25837540/29594926-7f060f30-87de-11e7-9ba9-227b4c8e58d1.png)

> Roll Dice BOT

![screenshot - 200817 - 23 23 11b](https://user-images.githubusercontent.com/25837540/29746284-441fd666-8aff-11e7-8552-151a755c899f.png)

## Installation
```
git clone https://github.com/dwisiswant0/BitslerBOT.git
```
Or download the archive in [releases tab](https://github.com/dwisiswant0/BitslerBOT/releases).

## Recommended PHP Version:
BitslerBOT required **PHP 5+**, and currently tested on **PHP 7.0.17-2** *(CLI)*.

## Configuration
>[bitslerbot.config.php](https://github.com/dwisiswant0/BitslerBOT/blob/v1.2/bitslerbot.config.php)
```php
	"token" => "...", // SHA512. Go to www.bitsler.com & login, in console browser (PRESS F12) type: console.log(access_token)
	"uname" => "...", // your Bitsler username
	"amount" => "2", // betting amount (in Satoshi)
	"multiply" => "2", // how many times multiplied if lose
	"type" => "1", // Bet type. 1 for Roll Dice & 2 for CaraYCruz
```

## Usage
```
$ php bitsler.php
```

## Help
If you are still confused, please go to the [Wiki page](https://github.com/dwisiswant0/BitslerBOT/wiki) or [open the issue](https://github.com/dwisiswant0/BitslerBOT/issues). 

## License
**BitslerBOT** is licensed under the MIT. Take a look at the [LICENSE](https://github.com/dwisiswant0/BitslerBOT/blob/master/LICENSE) for more information.

## Version
**Current version is 1.2** (fixed) and still development.
