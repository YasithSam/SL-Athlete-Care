<?php

class injuryModel extends database
 {
    public function getInjuryData(){

        if($this->Query("SELECT injury FROM injury")){
            $injury=[];
           
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                
                foreach ($row as $obj)
                {
                    $injury[$i]=$obj->injury;
                    $i++;
                     
                } 
               
                         
            }
            if($this->Query("SELECT full_name,province FROM doctor_profile")){
                $doctor=[];
                if($this->rowCount()>0){
                    $row=$this->fetchall();
                    $j=0;
                    foreach($row as $obj){
                        if(!in_array($obj->full_name." - ".$obj->province,$doctor)){
                            $doctor[$j]=$obj->full_name." - ".$obj->province;
                            $j++;
                        }
                    }
    
                }
                      
                    
    
            }
            return ['injury'=>$injury,'doctor'=>$doctor];
            
            
        }
        else {
            return ['status' => 'n'];
        }

     }
     public function postInjury($athleteId,$injuryId,$doc,$con,$d){
        $doctor=$this->findDoctor($doc);    
        $injuryId=$this->findInjury($injuryId);

        if($this->Query("INSERT INTO athlete_reported_injury(athlete_id,injury_id,status,doctor_id,con,description) VALUES (?,?,?,?,?,?)",[$athleteId,$injuryId,0,$doctor,$con,$d])){
            return ['status' => 'ok'];
        }else{
            return false;
        }
     }
     public function findDoctor($doc){
        $x=explode('-',$doc);
        $doctorId=$x[0];
        if($this->Query("SELECT * FROM doctor_profile WHERE full_name=?",[$doctorId])){
            $row=$this->fetch();
          
            return $row->uuid;
        }
     }
     public function findInjury($injury){
        if($this->Query("SELECT * FROM injury WHERE injury=?",[$injury])){
            $r=$this->fetch();
           
            return $r->id;
        }

    }

}