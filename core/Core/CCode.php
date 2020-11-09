<?php 
class CCode
{
    public static function makeTable($name,$arr=array())
    {
        $sql="CREATE TABLE ".$name."";
        echo $sql;exit;
    }
    
}
