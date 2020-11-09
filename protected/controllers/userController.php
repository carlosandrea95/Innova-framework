<?php

class userController extends CController
{
    public function __construct()
    {
        parent::__construct();
        
        if(!CSession::get('_TOKEN_')){
            $this->redirect();
        }
    }
    public function index()
    {
        if (CSession::get('_TOKEN_')) {
        }
        $m=$this->loadModel('usuarios');
        
        $usuarios=$m->all();    
        $this->render('index',
        array(
            'usuarios'=>$usuarios,
            )
        );
        
    }
    public function postDesdeOtraUrl()
    {
        if ($this->methodPost('text')){
            $text=$this->methodPost('text');
              $this->render('index',array(
                'message'=>$text,
            ));
        }
    }
    public function usandoGet($id)
    {
       if ($this->methodGet($id)==1){
        echo "hola desde el GET";
       }
    }
}
