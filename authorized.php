<?php
// index.php
require __DIR__ . '/vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
    'domain' => 'megafuse.auth0.com',
    'client_id' => 'sIJZOfGawfrKlGkYBmKVuTEMDRBv1AeE',
    'client_secret' => 'YWYfRtloT7AtKd-t3tbcG6RuNw1eRmwQF8NSb51mwvwmFVBNFc0MG_zn7knb1P6v',
    'redirect_uri' => 'http://myyagroup.com/games.php',
    'audience' => 'https://megafuse.auth0.com/userinfo',
    'scope' => 'openid profile',
    'persist_id_token' => true,
    'persist_access_token' => true,
    'persist_refresh_token' => true,
]);
$auth0->login();
