<?php
/**
 * Created by PhpStorm.
 * User: zhanhong01
 * Date: 2018/11/9
 * Time: 11:03
 */
class A {
    private function foo() {
        echo "success!\n";
    }

    public function test1(){
        echo "this is A\n";
    }
    protected function hh(){
        echo "hhaha\n";
    }
    public function test() {
/*        print_r($this);
        exit;*/
        //$this->hh();
        static::hh();
    }
}

class B extends A {
    public function tt(){
        $this->test();
    }
    /* foo() will be copied to B, hence its scope will still be A and
     * the call be successful */
    private function foo(){
        echo 'fuck';
    }
    public function turn(){
        $this->foo();
    }

    public function test1(){
        echo "this is B \n";
    }

    protected function hh(){
        echo "B hh\n";
    }
}

$obj = new B();
$obj->tt();