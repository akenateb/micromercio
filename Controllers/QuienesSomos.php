<?php
class QuienesSomos extends Controllers {


    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function QuienesSomos(){
        $data['title']='Bienvenido!';
        $data['body-page'] = 'Hola mundo!';
        $this->views->getView($this,"QuienesSomos",$data);
    }

}