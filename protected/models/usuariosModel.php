<?php
/**
 *
 */
class usuariosModel extends CModel
{

  function __construct()
  {
    parent::__construct();
  }
  public function check_access($email, $password)
  {
    $this->where(
      array(
        'email'=>$email,
        'clave'=>CHash::make($password)
        )
      );
      $response=$this->all();
      if ($response<>null) {
      $keys = CToken::Generate();
      CSession::set('_USERID_',$response[0]['id_usuario']);
      $this->tableName('connections');
      $this->create(
        array(
          'id_usuario' => CSession::get('_USERID_'),
          'token_key' => $keys['token'],
          'secret_key' => $keys['secret'],
          'timestamp' => date("d-m-Y H:i:s")
          )
        );
        // echo $secret;exit;
      return true;
    }    
  }
}
