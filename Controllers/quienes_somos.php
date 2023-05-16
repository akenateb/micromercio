<?php
class quienes_somos extends Controllers {


    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function quienes_somos(){
        $data['title']='Bienvenido!';
        $data['body-page'] = 'Hola mundo!';
        $this->views->getView($this,"quienes_somos",$data);
    }

}