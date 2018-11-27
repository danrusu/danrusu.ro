<?php


class AutoLoadUtils
{
    public function autoLoad($class_name)
    {
        var_dump($class_name);
        include $class_name . '.php';
    }


}