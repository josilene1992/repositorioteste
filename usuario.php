<?php 

class usuario {
 
 private $nome;
 private $tel;
 private $senha;
 
 
public function setNome($nome){
$this->nome=$nome; 
      }
public function getNome (){
return $this->nome;
   }
 
public function setTel ($tel){
$this->tel=$tel;
  }
public function getTel () {
return $this->tel;}
 
 public function setSenha ($senha){
$this->senha=$senha;
  }
public function getSenha () {
return $this->senha;}
 
 }




?> 