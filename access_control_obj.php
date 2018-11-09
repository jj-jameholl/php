<?php
/**
 * Created by PhpStorm.
 * User: zhanhong01
 * Date: 2018/11/9
 * Time: 13:39
 */
class P {
    protected function t1()
    {
        echo "t1\n";
    }

    private function t2()
    {
        echo "t2\n";
    }
}

class Test extends P
{
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo 'Accessed the private method.';
    }

    public function baz(Test $other)
    {
        // We can change the private property:
        $other->foo = 'hello';
        var_dump($other->foo);

        // We can also call the private method:
        $other->t2();
    }
}

$test = new Test('test');

$test->baz(new Test('other'));
?>