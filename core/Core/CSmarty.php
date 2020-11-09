<?php 
class CSmarty
{
	static private $instance;
	
	private function __construct() {}
	
	private function __clone() {}
	
	private function __wakeup() {}
	
	static public function instance()
	{
		if( !isset( self::$instance ) )
		{
			$smarty = new Smarty;
			
			$smarty->setTemplateDir( WebRoot.'temp/templates/' );
			$smarty->setCompileDir( WebRoot.'temp/templates_c/' );
			$smarty->setConfigDir( WebRoot.'temp/configs/' );
			$smarty->setCacheDir( WebRoot.'temp/cache/' );
			
			// $smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
            $smarty->debugging = true;			
            
			#define( 'CFG_DIR_TEMPLATES', $smarty->getTemplateDir(0) );
            
            $template = array(
                'baseUrl'=>CUrl::baseUrl(),
                'assetsDir' => CUrl::baseUrl() . 'assets/',      
                'app'=>array(
                   'name'=>_APPNAME_,
                   'js'=>CController::appJs()
                )      
            );

            $smarty->assign('template', $template);
			self::$instance = $smarty;
		};
		return self::$instance;
    }
    public function SetHola($var)
    {
       echo 'hola';
    }
	
}