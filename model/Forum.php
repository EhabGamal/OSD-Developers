<?php

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/5/17
 * Time: 9:40 AM
 */
class Forum
{
    private $id;
    private $sectionid;
    private $name;
    private $desc;
    private $locked;
    private $createdate;
    private $views;
    private $threads = [];

    function __get($name){
        return $this->$name;
    }
    function __set ($name, $value){
        $this->$name = $value;
    }
}