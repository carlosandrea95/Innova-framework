<?php
/**
 *
 */
class siteController extends CController
{

    public function __construct()
    {
        parent::__construct();
        $this->setCssDir('style.css', 'dist/css/');
        $this->setCssDir('style-starter.css', 'dist/css/');
        $this->setCssDir('all.min.css', 'plugins/fontawesome-free/css/');
    }
    public function index()
    {
        $m=$this->loadModel('sys_usuarios');
        // $m->update(
        //     array(
        //         'nombre'=>'jhorvis',
        //         'apellido'=>'sanchez'
        //     ),
        //     array(
        //         'id'=>'787'
        //     )
        // );
        echo $m->find(1);
        
        $this->render('index', array(
            'title' => AppName . ' - Inicio',
            'pageActive',
        ));
    }
    public function about()
    {
        $this->render('about');
    }
}
