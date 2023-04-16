<?php

spl_autoload_register(function ($class){
    $arr=['goods','interfaces','orders','reviews','serve','customer'];
    foreach ($arr as $val) {
        $path=__DIR__."/../$val/$class.php";
        if (file_exists($path))
            require_once $path;
    }
});

interface FileInterface
{
    /**
     * @return bool 
     */
    public function isTemp():bool;

    /**
     * @param Condition|null $co
     * @return bool 
     */
    public function move(Condition $co=null):bool;
}