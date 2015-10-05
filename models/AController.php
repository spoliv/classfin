<?php

abstract class AController{

    public function action($name/*, $st*/)
    {
        $actionName = 'action' . ucfirst($name);
        if(method_exists($this, $actionName)) {
            $this->$actionName();//метод с именем в переменной $actionName
        }
    }
}