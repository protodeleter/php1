<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 22.01.2020
 * Time: 23:40
 */


class View {



    protected $data = [];
    protected $template;


    public function assign( $name, $value ) {

        // по имени шаблона

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