<?php
class Servicios extends Controllers {


    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function Servicios(){
        $data['title']='Bienvenido!';
        $data['body-page'] = 'Hola mundo!';
        $this->views->getView($this,"Servicios",$data);
    }

}