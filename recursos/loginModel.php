<?php 

class login_model{
   /*  private $usuario;
    private $password; */


   
    public function getUsuarios(){
       
        $array =  array();
        $bd=fopen("../recursos/bd.txt","r")or die("error al acceder bdtxt");
        while(!feof($bd)){
        $linea = fgets($bd);
            array_push($array, trim($linea));
        }
        fclose($bd);
    
      
            return $array;
        

        
    }

    public function setUsuario($usu, $pass){
        $bd=fopen("../recursos/bd.txt","a")or die("error al acceder bdtxt");

        fwrite($bd,$usu);
        fwrite($bd,"\n");
        fwrite($bd,$pass);
        fwrite($bd,"\n");
    
    }

 /*    public function setUsuario($usuario){
        $this->usuario =$usuario;
        return $this;
    }

    public function setPassword($password){
        $this->passwor =$password;
        return $this;
    }
 */
}



?>