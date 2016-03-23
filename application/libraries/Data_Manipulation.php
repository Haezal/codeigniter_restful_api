<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of DatabaseOperation
 *
 * @author Sabarinathan Kalidass
 */
class Data_Manipulation {
      
    function __construct() {
        $this->obj = & get_instance(); // get the CodeIgniter object
    }

    /*
    * Change value ' to '' before insert into table
    * Only for oracle db use
    */
    function escape_quote($string) {

        if($this->obj->db->dbdriver=='oci8') {
            if(is_array($string)){
                foreach($string as $key=>$val) {
                    if(is_string($val)) {

                        $string[$key]=str_replace("'", "''",$val); 
                        //$string[$key]=  strtoupper($val);
                    }
                }	
            }
            else{
                if(is_string($string)) {

                    $string=str_replace("'", "''",$string); 
                    //$string=  strtoupper($string);
                }
            }		
        }
        return $string;
    }

    /*
    * Change character to Upper case 
    */
    public function toUpper($string){
        if(is_array($string)){
            foreach($string as $key=>$val) {
                if(is_string($val)) {

                    $string[$key]=  strtoupper($val);
                }
            }   
        }
        else{
            if(is_string($string)) {

                $string=  strtoupper($string);
            }
        }    
        return $string;
    }
}
?>