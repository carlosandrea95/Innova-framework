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

        // if ($this->methodPost('text')){
        //     $text=$this->methodPost('text');
        //       $this->render('index',array(
        //         'usuarios'=>$usuarios,
        //         'message'=>$text,
        //     ));
        // }else {
        //     $this->render('index',array(
        //         'usuarios'=>$usuarios,
        //     ));
        // }
        $this->render('index',array(
                     'usuarios'=>$usuarios,
                ));
        
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
