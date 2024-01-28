<?php
class Noticia extends CI_Model {
 private $id;
 private $titulo;
 private $descripcion;
 private $foto;
 private $texto;
 function __construct()
 {
    parent::__construct();
 }
 
 function GetId()
 {
     return $this->id;
 }
 
  function GetFoto()
 {
     return $this->foto;
 }
 
 
 function GetTitulo()
 {
     return $this->titulo;
 }
 
 function GetDescripcion()
 {
     return $this->descripcion;
 }
 
 function GetTexto()
 {
     return $this->texto;
 }
 
 function SetId($value)
 {
     $this->id = $value;
 }
 
  function SetFoto($value)
 {
     $this->foto = $value;
 }
 
 
 function SetTitulo($value)
 {
     $this->titulo = $value;
 }
 
 function SetDescripcion($value)
 {
     $this->descripcion = $value;
 }
 
 function SetTexto($value)
 {
     $this->texto = $value;
 }
 
 //////////////////////// CADS
 
 //Obtener una noticia mediante su ID
 function Obtener_Noticia($value)
 {
     $this->load->database();
     $query = $this->db->query('SELECT * from noticias where id =' .$value. ' LIMIT 1');
     if ($query->num_rows() > 0)
    {
        foreach ($query->result() as $row)
        {
            $this->id = $row->id;
            $this->titulo = $row->titulo;
            $this->descripcion = $row->descripcion;
            $this->foto = $row->foto;
            $this->texto = $row->texto;
        }
       
    }
 }
 
 function Insertar_Noticia()
 {
     $this->load->database();
     //Se supone que siempre será nueva.
     $sql = "INSERT INTO noticias (titulo, descripcion,foto,texto) VALUES (".$this->db->escape($titulo).", ".$this->db->escape($descripcion).",".$this->db->escape($foto).",".$this->db->escape($texto).")";
     $this->db->query($sql);

     
 }
 
 function Actualizar_Noticia($value)
 {
     $this->load->database();
     $sql = "update noticias set titulo = ".$this->db->escape($titulo).", descripcion=".$this->db->escape($descripcion).", foto = ".$this->db->escape($foto)." , texto = ".$this->db->escape($texto)." where id = ".$this->db->escape($id)."";
     $this->db->query($sql);
 }
 

}
?>