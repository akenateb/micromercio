<?php
class Contactar extends Controllers {


    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function Contactar(){
        $data['title']='Bienvenido!';
        $data['body-page'] = 'Hola mundo!';
        $this->views->getView($this,"Contactar",$data);
    }

}