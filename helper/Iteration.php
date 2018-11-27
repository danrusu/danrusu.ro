<?php


class MyClass {

    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 3;

    protected $protected = 'protected var';
    private $private = 'private var';


    function printVisible() {
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }


    public function getPrivate(): string {
        return $this->private;
    }

}



