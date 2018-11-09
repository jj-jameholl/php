<?php
/**
 * Created by PhpStorm.
 * User: zhanhong01
 * Date: 2018/11/9
 * Time: 10:07
 */

class Invoke
{
    protected function profun($var)
    {
        var_dump($var."\n");
        exit;
    }

    private function prifun($var)
    {
        echo $var."twice \n";
    }

    public function __invoke($name,$var)
    {
        // TODO: Implement __invoke() method.
        $this->$name($var);
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        $this->$name($arguments);
    }
}

$obj = new Invoke();
//$obj('prifun','fuck you!');
$obj->profun('hello!');