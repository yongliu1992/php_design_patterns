<?php

class Button{}
class Border{}

class MacButton extends Button{}
class WinButton extends Button{}

class MacBorder extends Border{}
class WinBorder extends Border{}

/***
 * 接口里面定义 创建类对象的方法
 * 由工厂类去实现抽象接口
 * Interface AbstractFactory
 */
interface AbstractFactory {
    public function CreateButton();
    public function CreateBorder();
}

class MacFactory implements AbstractFactory{
    public function CreateButton(){ return new MacButton(); }
    public function CreateBorder(){ return new MacBorder(); }
}

class WinFactory implements AbstractFactory{
    public function CreateButton(){ return new WinButton(); }
    public function CreateBorder(){ return new WinBorder(); }
}

?>