<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 02.02.2020
 * Time: 23:27
 */

namespace views;

class View
{

    protected $data = [];
    protected $template;

    public function __construct ()
    {
    }

    public function assign( $name, $value ) {

        // по имени шаблона

        print_r($value);

        $this->data[$name] = $value;

    }

    public function display($template) {

        // Получает имя шаблона
        $this->template = $template;
        $this->render($template);

    }

    public function render($template) {

        ob_start ();

        $this -> template = $template;

        include ( __DIR__.'\..\tpl\\'. $this->template.'.php' );

        $incl_temp = ob_get_contents ();

        return $incl_temp;

        ob_get_clean ();

    }

}




