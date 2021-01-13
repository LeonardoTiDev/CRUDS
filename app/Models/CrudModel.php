<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class CrudModel extends Model {
		public function listarNombres() {
			$Nombres = $this->db->query("SELECT * FROM t_usuarios");
			return $Nombres->getResult();
    }
    


    public function insertar($datos) {
			$Nombres = $this->db->table('t_usuarios');
			$Nombres->insert($datos);

			return $this->db->insertID(); 
    }
    

    public function obtenerNombre($data) {
      $Nombres =  $this->db->table('t_usuarios');
      $Nombres->where($data);
      return $Nombres->get()->getResultArray();
    }
    
		
  }
  



  


