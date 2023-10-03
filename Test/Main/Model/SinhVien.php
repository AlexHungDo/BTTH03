<?php
class SinhVien{
    private $id;
    private $tenSinhVien;
    private $email;
    private $ngaysinh;
    private $idLop;
    public function __construct($id, $tenSinhVien,$email,$ngaysinh,$idLop)
    {
        $this->id = $id;
        $this->tenSinhVien = $tenSinhVien;
        $this->email=$email;
        $this->ngaysinh=$ngaysinh;
        $this->idLop=$idLop;
    }
    public function GetId(){
        return $this-> id;
    }
    public function SetId($id){
        $this->id = $id ;
    }
    public function GetTenSinhVien(){
        return $this-> tenSinhVien;
    }
    public function SetTenSinhVien($tenSinhVien){
        $this->tenSinhVien = $tenSinhVien ;
    }
    public function GetEmail(){
        return $this-> email;
    }
    public function SetEmail($email){
        $this->id = $email ;
    }
    public function GetNgaySinh(){
        return $this-> ngaysinh;
    }
    public function SetNgaySinh($ngaysinh){
        $this->id = $ngaysinh ;
    }
    public function GetIdLop(){
        return $this-> idLop;
    }
    public function SetIdLop($idLop){
        $this->idLop = $idLop ;
    }
}

