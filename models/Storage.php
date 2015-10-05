<?php

class Storage

    implements Countable, Iterator
{
    private $__data = [];
    public function __set($key, $val)
    {
        $this -> __data[$key] = $val;
    }
    public function __get($key)
    {
        return $this -> __data[$key];
    }
    public function count()
    {
        return  count($this -> __data);
    }

    public function current()
    {
        return current($this -> __data);
    }
    public function next()
    {
        next($this -> __data);
    }
    public function key()
    {
        return key($this -> __data);
    }
    public function valid()
    {
        if (key($this -> __data)!==null)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function rewind()
    {
        reset($this -> __data);
    }

}