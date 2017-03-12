<?php
//include 'DBManager.php';
//define("DB_HOST", "localhost");
//define("DB_USER", "yasser");
//define("DB_PASS", "");
//define("DB_NAME", "osddevelopers");
//
//$DB = new DBManager();

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 2:36 PM
 */
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
return [
    'database'=>[
        'name'=>substr($url["path"], 1),
        'username'=>$url["user"],
        'password'=>$url["pass"],
        'connection' => 'mysql:host='.$url["host"].';',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'options'=>[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ]
    ]
];

//return [
//    'database'=>[
//        'host'=>'127.0.0.1',
//        'name'=>'osddevelopers',
//        'username'=>'root',
//        'password'=>'root',
//        'connection' => 'mysql:host=127.0.0.1',
//        'charset' => 'utf8',
//        'collation' => 'utf8_unicode_ci',
//        'options'=>[
//            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
//        ]
//    ]
//];