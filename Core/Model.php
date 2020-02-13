<?php

namespace Core;

class Model {
    protected $pdo;

    public function __construct(){
        global $config;

        $this->pdo = new PDO("mysql:dbname=".$config['dbname'].';host='.$config['host'],$config['dbuser'], $config['dbpass']);
    }
}