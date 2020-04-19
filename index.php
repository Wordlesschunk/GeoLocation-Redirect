<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$currencyCode = $a['geoplugin_currencyCode'];

$supported = array('GBP','USD','AUD','BRL','CAD','DKK','EUR','NOK','NZD','PLN','SEK');

if (in_array($currencyCode, $supported)) {
  header( 'Location: http://store.mc-ages.com/?currency='.$currencyCode ) ;
} else {
  header( 'Location: http://store.mc-ages.com/?currency=GBP' ) ;
}
?>