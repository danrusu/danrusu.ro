
<?php


class Base {

    public function sayHello() {

        echo 'Hello from Base! ';
    }
}


// Precedence:
// 1. Current class members
// 2. Traits
// 3. Inherited members
// (Inherited members -overrided-> Trait -overrided-> members from the current class)

trait TraitOne {

    public function sayHello() {

        parent::sayHello();
        echo 'Hello from TraitOne!';

        echo PHP_EOL . 'Called from ' . __class__;
    }
}

class MyHelloWorld extends Base {
    use TraitOne;
}


(new MyHelloWorld)->sayHello();
