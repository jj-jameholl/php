<?php
/**
 * Created by PhpStorm.
 * User: zhanhong01
 * Date: 2018/11/10
 * Time: 15:45
 */
class ArrayIterator1 implements Iterator
{
    protected $var;

    private $position = 'property1';
    public function __construct($option)
    {
        $this->var = $option;
    }

    public function current()
    {
        // TODO: Implement current() method.
        echo "current\n";
        print_r($this->var[$this->position]);
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function rewind()
    {

        // TODO: Implement rewind() method.
        echo 'rewind';
        $this->position = 'property1' ;
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        echo 'valid';
        if($this->var[$this->current()]){
            return true;
        }
    }

}

class myData  implements IteratorAggregate ,ArrayAccess {
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        return $this->$offset;

    }

    public function offsetSet($offset, $value)
    {
        return $this->$offset = $value;
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function __construct() {
        $this->property4 = "last property";
    }

    public function getIterator() {
        return new ArrayIterator1($this);
    }
}

$obj = new myData;

foreach($obj as $key => $value) {
    echo $key.":".$value;
    echo "\n";
}

?>