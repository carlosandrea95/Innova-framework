<?php 
class CToken 
{   
    public static function Generate()
    {

      $secret=uniqid();
      CSession::destroy('_SECRET_');
      CSession::destroy('_TOKEN_');
      CSession::set('_SECRET_',$secret);
      CSession::set('_TOKEN_',CHash::make($secret));
      $keys['secret']=CSession::get('_SECRET_');
      $keys['token']=CSession::get('_TOKEN_');

      if (!CSession::get('_TOKEN_TIMER_')) {
        CSession::set('_TOKEN_TIMER_',time());
      }
      else if (time() - CSession::get('_TOKEN_TIMER_') > 60) {
        CSession::destroy('_SECRET_');
        CSession::destroy('_TOKEN_');
          /* Aquí redireccionas a la url especifica */
          die();  
      }
      CSession::set('_TOKEN_TIMER_',time());
      return $keys;
    }
    
  public static function verify()
  {
    $secret=CSession::get('_SECRET_');
    $token=CSession::get('_TOKEN_');
    $db=new CDatabase();
    // $verfy=CHash::make($secret);
    // if ($token===$verfy){
      $key=$db->query("SELECT id_connection FROM sys_connections WHERE  secret_key='".$secret."' AND token_key='".$token."'");
      $key=$key->fetch();
      if ($key<>0){
        return true;
      }else{
        return false;
      }       
    // }else{
    //   throw new Exception("Error Processing Token", 1);      
    // }
   
  }    
}
