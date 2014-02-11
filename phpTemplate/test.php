<?php
/**
 * Created by PhpStorm.
 * User: DP
 * Date: 14-1-30
 * Time: 下午4:00
 */
abstract class a{
    public function __construct(){
        $this->b();
    }
    abstract protected function b();
}
class c extends a{
    public function __construct(){
       parent::__construct();
    }
    protected  function b(){
        echo "123";
    }
}
$d=new c();
?>