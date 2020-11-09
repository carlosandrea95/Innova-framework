<?php

class CModel
{
    protected $db;
    private $_sql,$_filds,$_where,$table;
    public function __construct()
    {
        $this->db = new CDatabase();
        $child = get_called_class();
        $this->table = str_replace('Model','',$child);
        $this->table= _DB_PREFIX_. $this->table;
        // $this->table = 'sys_'.$this->table;
    }
    protected function tableName($name)
    {
        $this->table= _DB_PREFIX_.$name;
    }
    public function create($arr)
    {
        if (is_array($arr)) {
            foreach ($arr as $f => $v) {
                $filds[]=$f;
                $keys[]=':'.$f;
                $values[]=$v;
            }        
            $fild=implode('`,`',$filds);
            $key=implode(",",$keys);
            $sql='INSERT INTO '.$this->table." (`".$fild."`) VALUES (".$key.")";
            $stmt= $this->db->prepare($sql);
            for ($k=0; $k < count($keys); $k++) { 
                for ($x=0; $x < count($values); $x++) { 
                    if ($k==$x)
                    // echo $keys[$k].'=>'.$values[$x];
                    $stmt->bindParam($keys[$k],$values[$x]);  
                }
            }
            $stmt->execute();
        }
    }
    public function update($vars, $conds=null)
    {
        if (is_array($vars)) {
            foreach ($vars as $f => $v) {
                $var[]=$f."='".$v."'";
            }
            $sets=implode(",",$var);
            foreach ($conds as $f => $v) {
                $cond[]=$f."='".$v."'";
            }
            $condi=implode(",",$cond);
            $sql='UPDATE '.$this->table." SET ".$sets." WHERE ".$condi;
            $this->db->query($sql);
        }
    }
    public function filds($arr)
    {
        if (is_array($arr)) {
            $filds=implode(",",$arr);
            $this->_filds=$filds;        
        }
    }
    public function where($conds=null)
    {
        if (is_array($conds)) {
            foreach ($conds as $f => $v) {
                $cond[]=$f."='".$v."'";
            }
            $condi=implode(" AND ",$cond);
            $this->_where=$condi;
        }
    }
    public function delete($id)
    {
        $sql="DELETE FROM ".$this->table." WHERE 1=?";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
    }
    public function find($id)
    {
        if($this->_filds){
            $sql="SELECT ".$this->_filds." FROM ".$this->table." WHERE 1=?";
        }else{
            $sql="SELECT * FROM ".$this->table." WHERE 1=?";
        }
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $rtn  = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rtn;
    }
    public function all()
    {
        if($this->_where){
            if($this->_filds){
                $sql="SELECT ".$this->_filds." FROM ".$this->table." WHERE ".$this->_where;
            }else{
                $sql="SELECT * FROM ".$this->table ." WHERE ".$this->_where;
            }
        }else{
            if ($this->_filds){
                $sql="SELECT ".$this->_filds." FROM ".$this->table;
            }else{
                $sql="SELECT * FROM ".$this->table;
            }
        }
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $rtn  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rtn;
    }
}
