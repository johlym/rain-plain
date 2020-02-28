<?php
$url = getenv('DATABASE_URL');

if (getenv('DATABASE_URL')) {
    echo "DATABASE_URL FOUND";
    var_dump(parse_url($url));
    var_dump(parse_url($url, PHP_URL_SCHEME));
    var_dump(parse_url($url, PHP_URL_USER));
    var_dump(parse_url($url, PHP_URL_PASS));
    var_dump(parse_url($url, PHP_URL_HOST));
    var_dump(parse_url($url, PHP_URL_PORT));
    var_dump(parse_url($url, PHP_URL_PATH));
    var_dump(parse_url($url, PHP_URL_QUERY));
    var_dump(parse_url($url, PHP_URL_FRAGMENT));
} 
else {
    echo "DATABASE_URL NOT FOUND.";
}

?>