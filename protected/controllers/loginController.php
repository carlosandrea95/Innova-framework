<?php
class loginController extends CController 
{
    public function __construct()
    {
        parent::__construct();
        $this->layout='login';
        
    }
    public function index()
    {   
        CCode::makeTable('sys_usuarios');
        $model=$this->loadModel('usuarios');
        $response=$model->check_access(
            $this->methodPost('email'),
            $this->methodPost('password')
        );
        if($response==true)
            $this->redirect('user');
        else
        $this->render('index');
    }
    public function logout()
    {
        CSession::destroy();
        $this->redirect();
    }
}
