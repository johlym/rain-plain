<?php
if (getenv('DATABASE_URL')) {
    $url = parse_url(getenv('DATABASE_URL'));
    
    putenv('DATABASE_URL='.getenv('DATABASE_URL'));
    putenv('DB_HOST='.$url['host']);
    putenv('DB_PORT='.$url['port']);
    putenv('DB_DATABASE='.substr($url["path"], 1));
    putenv('DB_PASSWORD='.$url['pass']);
}else{
    putenv('DB_HOST='.env('DB_HOST', '127.0.0.1'));
    putenv('DB_PORT='.env('DB_PORT', 5432));
    putenv('DB_DATABASE='.env('DB_DATABASE', 'taishan'));
    putenv('DB_PASSWORD='.env('DB_PASSWORD', 'postgres'));
    
    }

?>