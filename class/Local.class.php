<?php

class Local
{
  private $id;
  private $data;

  public function __construct()
  {
    $this->bd = new BD();
    $this->tabela = "";
  }

  public function __destruct()
  {
     unset($this->bd);
  }

  public function __get($key)
  {
     return $this->$key;
  }

  public function __set($key, $value)
  {
     $this->$key = $value;
  }

  public function CreateLocal()
  {
    $sql     = "INSERT INTO $this->tabela (data) VALUES('$this->data')";
    $retorno = pg_query($sql);
    return $retorno;
  }

  public function ListLocal()
  {
    # code...
  }

  public function ListLocalByID()
  {
    # code...
  }

  public function UpdateLocal()
  {
    # code...
  }

  public function DeleteLocal()
  {
    # code...
  }

  public function EditLocal($value='')
  {

  }

}

?>