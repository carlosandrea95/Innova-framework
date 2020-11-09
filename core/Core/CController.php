<?php

class CController
{
    private $_controlador, $_Smarty, $_peticion, $_modulo, $_rutas, $CssDir, $JsDir;
    protected $_Authenticator, $layout, $menu, $ImgDir;

    public function __construct()
    {
        $this->_peticion = new CRequest();
        $this->_Smarty = CSmarty::instance();
        $this->_Authenticator = new CAuthenticator();

        $this->_controlador = $this->_peticion->getControlador();
        $this->_modulo = $this->_peticion->getModulo();
        $this->_rutas = array();
        if ($this->_modulo) {
            $this->_rutas['view'] = WebRoot . 'protected' . DS . 'modules' . DS . $this->_modulo . DS . 'views' . DS . $this->_controlador . DS;
        } else {
            $this->_rutas['view'] = WebRoot . 'protected' . DS . 'views' . DS . $this->_controlador . DS;
        }
    }   
    protected function render($vista, $dataTransfer = null)
    {

        $this->_Smarty->template_dir = WebRoot . 'protected' . DS . 'views' . DS . 'layouts' . DS . $this->layout . DS;
        $this->_Smarty->config_dir = WebRoot . 'protected' . DS . 'views' . DS . 'layouts' . DS . $this->layout . DS . 'configs' . DS;
        $this->_Smarty->cache_dir = WebRoot . 'protected' . DS . 'temp' . DS . 'cache' . DS;
        $this->_Smarty->compile_dir = WebRoot . 'protected' . DS . 'temp' . DS . 'template' . DS;

        if (is_array($dataTransfer)) {
            foreach ($dataTransfer as $k => $v) {
                $this->_Smarty->assign($k, $v);
            }
        }
        if (!$this->layout) {
            $this->layout = DEFAULT_LAYOUT;
        }
        $template = array(
            'baseUrl'=>CUrl::baseUrl(),
            'assetsDir' => CUrl::baseUrl() . 'assets/',      
            'app'=>array(
               'name'=>_APPNAME_,
               'js'=>self::appJs()
            )      
        );

        $rutaLayout = WebRoot . 'protected' . DS . 'views' . DS . 'layouts' . DS . $this->layout . '.tpl';
        $this->_Smarty->assign('pageContent', $this->_rutas['view'] . $vista . '.tpl');
        $this->_Smarty->assign('template', $template);
        if (is_readable($rutaLayout)) {
            $this->_Smarty->display($rutaLayout);
        } else {
            throw new Exception('VISTA NO ENCONTRADA');
        }

    }
    public static function appJs()
    {
        $dir=WebRoot.'core'.DS.'js';  
        $names=array(); 
        if (is_dir($dir)) { //Comprovamos que sea un directorio Valido
            if ($dir = opendir($dir)) {//Abrimos el directorio


                while (($archivo = readdir($dir)) !== false){ //Comenzamos a leer archivo por archivo

                    if ($archivo != '.' && $archivo != '..'){//Omitimos los archivos del sistema . y ..

                        $nuevaRuta = $dir.$archivo.'/';//Creamos unaruta con la ruta anterior y el nombre del archivo actual 


                            if (is_dir($nuevaRuta)) { //Si la ruta que creamos es un directorio entonces:
                                // echo '<b>'.$nuevaRuta.'</b>'; //Imprimimos la ruta completa resaltandola en negrita
                                  self::appJs($nuevaRuta);//Volvemos a llamar a este metodo para que explore ese directorio.

                            } else { //si no es un directorio:
                                $names[]=CUrl::baseUrl().'core/js/'.$archivo; //simplemente imprimimos el nombre del archivo actual
                            }


                    }

                }//finaliza While

                closedir($dir);//Se cierra el archivo
            }
        }else{//Finaliza el If de la linea 12, si no es un directorio valido, muestra el siguiente mensaje
            echo 'No Existe el directorio';
        }
        return $names;			     
        // return CScanDir::scan($dir,'js');
    }
    protected function setCssDir($file, $dir)
    {
        $this->CssDir[] = CUrl::baseUrl() . 'assets/' . $dir . $file;
    }
    protected function setJsDir($file, $dir)
    {
        $this->JsDir[] = CUrl::baseUrl() . 'assets/' . $dir . $file;
    }
    protected function layout($layout)
    {
        $this->layout = $layout;
    }
    protected function loadModel($modelo)
    {

        $modelo = $modelo . 'Model';
        if ($this->_modulo) {
            $rutaModelo = WebRoot . 'protected' . DS . 'modules' . DS . $this->_modulo . DS . 'models' . DS . $modelo . '.php';
        } else {
            $rutaModelo = WebRoot . 'protected' . DS . 'models' . DS . $modelo . '.php';
        }
        if (is_readable($rutaModelo)) {
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        } else {
            throw new Exception('Error al Procesar la Penticion <=" Modelo No Encontrado "=>', 1);
        }
    }
    protected function loadLib($libs)
    {
        $rutalibs = WebRoot . 'Core' . DS . 'Libs' . DS . $libs . '.php';
        if (is_readable($rutalibs)) {
            require_once $rutalibs;
        } else {
            throw new Exception('Error al Procesar la Penticion <=" Libreria No Encontrado "=>', 1);
        }
    }
    protected function methodPost($clave)
    {
        if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
            // $_POST[$clave]=htmlspecialchars($_POST[$clave],END_QUOTES);
            return trim($_POST[$clave]);
        }
        return '';
    }
    protected function methodGet($int)
    {
        $int = (int) $int;
        if (is_int($int)) {
            return $int;
        } else {
            return 0;
        }
    }
    protected function isAjaxRequest()
    {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }
    protected function ajaxResponse($arr)
    {
        echo json_encode($arr);
    }
    public static function redirect($ruta = false)
    {
        if ($ruta) {
            header("location:" . CUrl::baseUrl() . $ruta);
            exit();
        } else {
            header("location:" . CUrl::baseUrl());
            exit();
        }
    }
}
