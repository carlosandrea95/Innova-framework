<?php
/**
 *
 */
class CBoot
{
    private $_rutas;
    public function __construct(CRequest $peticion)
    {


        $modulo = $peticion->getModulo();
        $controlador = $peticion->getControlador() . 'Controller';
        $metodo = $peticion->getMetodo();
        $args = $peticion->getArgumentos();
        $smarty= new Smarty();
        $this->_rutas['errors'] = WebRoot . 'protected' . DS . 'views' . DS . 'layouts' . DS.'errors'.DS;
        $smarty->template_dir = WebRoot . 'protected' . DS . 'views' . DS . 'layouts' . DS .'errors'. DS;
        $smarty->config_dir = WebRoot . 'protected' . DS . 'views' . DS . 'layouts' . DS . 'errors' . DS . 'configs' . DS;
        $smarty->cache_dir = WebRoot . 'protected' . DS . 'temp' . DS . 'cache' . DS;
        $smarty->compile_dir = WebRoot . 'protected' . DS . 'temp' . DS . 'template' . DS;

        
        if ($modulo) {
            $this->_rutas['controlador'] = WebRoot . 'protected' . DS . 'modules' . DS . $modulo . DS . 'controllers' . DS . $controlador . '.php';
        } else {
            $this->_rutas['controlador'] = WebRoot . 'protected' . DS . 'controllers' . DS . $controlador . '.php';
        }
        if(_MAINTENANCE_==true){
            $template = array(
                'baseUrl'=>CUrl::baseUrl(),
                'assetsDir' => CUrl::baseUrl() . 'assets/',            
            );
            $smarty->assign('template', $template);
            $error=$this->_rutas['errors'] . 'maintenance' . '.tpl';
            
            $smarty->display($error);
        }else
        if (is_readable($this->_rutas['controlador'])) {
            require_once $this->_rutas['controlador'];
            $controlador = new $controlador;
            if (is_callable(array($controlador, $metodo))) {
                $metodo = $peticion->getMetodo();
            } else {
                $metodo = DEFAULT_METHOD;
            }
            if (isset($args)) {
                call_user_func_array(array($controlador, $metodo), $args);
            } else {
                call_user_func(array($controlador, $metodo));
            }
        } else {

            $template = array(
                'baseUrl'=>CUrl::baseUrl(),
                'assetsDir' => CUrl::baseUrl() . 'assets/',            
            );
            $smarty->assign('template', $template);
            $error=$this->_rutas['errors'] . '404' . '.tpl';
            
            $smarty->display($error);
            // throw new Exception("CONTROLADOR NO ENCONTRADO", 1);
        }
    }
}
