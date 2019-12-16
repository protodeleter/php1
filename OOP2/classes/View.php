<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 13.12.2019
 * Time: 11:55
 */

class View
{

    protected $data = [];
    protected $template;

    public function __construct ()
    {
    }

    public function assign( $name, $value ) {

        // по имени шаблона
        $this -> data = [ $name => $value ];

    }

    public function display($template) {

        // Получает имя шаблона
        $this->template = $template;
        // Подключает шаблон
        include __DIR__.'/../tpl/'. $this->template.'.php';

    }

//    public function render($template) {
//
//        ob_start ();
//
//
//        $template = $this->path . '/../tpl/' . $template;
//
//        return ob_get_contents ();
//
//        ob_get_clean ();
//    }

}




