<?php
/**
 * Created by PhpStorm.
 * User: dp
 * Date: 14-2-27
 * Time: 下午3:00
 */
class Json{
    static public function jsonDecode($jsonStr){
        return json_decode($jsonStr,true);
    }
}
?>