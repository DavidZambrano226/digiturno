<?php
namespace App\Model;

use App\Lib\Response;

class Turnos
{
    //private $db;
   // private $table = 'paises';
    private $response;
    private $aa;
    private $n = 0;
    private $a ;

    public function __CONSTRUCT()
    {
        
        $this->response = new Response();
        $this->aa = array();
        $this->a = array();
        //$this->datos 
    }
    public function ver()
    {

    	//$e = $this->getA();
    	return $this->getA();
    }
    public function registrar($data)
    {
    	//$this->datos = $data;
    	$this->setA($data);

    	if (count($data)>0) {
    		//$n = $n+1;
    		
    		/*$data['num']=$this->getN();

    		for ($i=0; $i < $this->getN(); $i++) { 
    			
    			$this->setN($i);*/
    			array_push($this->aa, $data);
    		//}
    	}
    	
    	//return $this->response->SetResponse(true);
    	return $this->aa;
    }
    private function tratar()
    {
    	$a = [
    		"hola" => $this->aa
    	];
    	return $a;
    }

    private function setA($data){
    	$this->a = array_push($this->a, $data); 
    }
    private function getA(){
    	return $this->a;
    }

    private function setN($n=1){
    	$this->n = $n + 1;
    }
    private function getN(){
    	return $this->n;
    }
    /*public function listar($l, $p)
    {
        $data = $this->db->from($this->table)
                         ->limit($l)
                         ->offset($p)
                         ->orderBy('NOMBRE_PAIS ASC')
                         ->fetchAll();
        
        $total = $this->db->from($this->table)
                          ->select('COUNT(*) Total')
                          ->fetch()
                          ->Total;
        
        return [
            'data'  => $data,
            'total' => $total
        ];
    }
    
    /*public function obtener($id_pais)
    {
        return $this->db->from($this->table)
                        ->where('ID_PAIS', $id_pais)
                        ->fetch();
    }
    
    public function registrar($data)
    {
        $this->db->insertInto($this->table, $data)
                 ->execute();
        
        return $this->response->SetResponse(true);
    }
    public function actualizar($data, $id_pais)
    {
            
        $this->db->update($this->table, $data, $id_pais)
                    ->execute();
            
        return $this->response->SetResponse(true);
    }
    public function eliminar($id_pais)
    {
        $this->db->deleteFrom($this->table)
                 ->where('ID_PAIS', $id_pais)
                 ->execute();
        
        return $this->response->SetResponse(true);
    } */
    
}