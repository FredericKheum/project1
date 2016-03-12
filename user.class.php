<?php 
	class Authentification extends DB{
		private $connect = ""; 
		public $secu_social; 

		public function __construct(){
			$this->$connect = $this->pdo_connection(); 
		}

		public function encrypt_password($plain) {
	        $password = "rhododendron";
	        $salt = $this->salt_calc(sha1($password));
	        $Sl=strlen($salt);
	        $password = sha1($salt . $plain) . $Sl;
	        return $password;
	    }

	     public function match_password($password, $plain) {
	        if($password == $this->encrypt_password($plain)) {
	            return true;
	        } else {
	            return false;
	        }
	    }

	    public function salt_calc($salt){
	        $part1= substr($salt, 0, 1);
	        $part2 = substr($salt, 1, 1);
	        //check si les valeurs sont numeriques; s'il s'agit de lettre, on determine sa place dans l'alphabet via l'ordre en ascii
	        if(is_numeric($part1)){}else{$part1= 1 + ord(strtolower($part1)) - ord("a");}
	        if(is_numeric($part2)){}else{$part2= 1 + ord(strtolower($part2)) - ord("a");}
	        //regle de calcul salt: part1 + part2 * part1.part2
	        $part3= $part1.$part2;
	        $result= $part1 + $part2 * $part3;
	        return $result;    
	    }

	    public function connectPatient($secu_social,$password){
	    	$dbg = new DBG();
	    	$bdd = $dbg->connexionGlobale();
		
	        $query="SELECT password FROM patient WHERE secu_social= :secu_social";
				$query_statement = $bdd->prepare($query);
				$query_statement->bindValue(':secu_social',$secu_social,PDO::PARAM_STR);
				$query_statement->execute();
	       		$rows = $query_statement->fetch(PDO::FETCH_NUM);
	        
	        if($rows > 0) {
	            if($this->match_password($rows[0],$password)){
	                return true;
	            }else{
	            	$errmsg_arr[] = 'Le mot de passe est incorrect';
	                $errflag = true;
	            }
	        }else{
	            $errmsg_arr[] = 'Le numéro de sécurité social et le mot de passe sont introuvables';
	            $errflag = true;
	        }
	        
	        if($errflag) {
	            return false;
	        } else {
	        	return true;
	        }
	        
        
    }
	}
?>