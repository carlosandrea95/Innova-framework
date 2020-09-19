<?php

class userController extends CController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $m=$this->loadModel('usuarios');
        $m->where(array(
            'id_rol'=>'1',
            ''
        ),);
        $usuarios=$m->all();

        $this->render('index',array(
            'usuarios'=>$usuarios
        ));
    }
}
