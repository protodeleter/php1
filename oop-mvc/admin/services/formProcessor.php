<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 11.02.2020
 * Time: 23:55
 */

namespace services;

class formProcessor
{

    public function __construct ( $form_data )
    {

        print_r ($form_data);

        $album = new \controllers\AlbumsController();

        $posted_data = [];
        foreach ($form_data as $item) {
            $posted_data[] = $item;
        }
        $album->insertAlbum ( $posted_data );


    }

}


