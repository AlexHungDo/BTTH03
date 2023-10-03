<?php
class Lop{
    private $id;
    private $tenLop;
    public function __construct($id, $tenLop)
    {
        $this->id = $id;
        $this->tenLop = $tenLop;
    }
    public function GetId(){
        return $this-> id;
    }
    public function SetId($id){
        $this->id = $id ;
    }
    public function GetTenLop(){
        return $this-> tenLop;
    }
    public function SetTenLop($tenLop){
        $this->tenLop = $tenLop ;
    }
}
