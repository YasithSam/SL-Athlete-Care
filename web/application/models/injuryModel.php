<?php

class injuryModel extends database
 {
    public function getInjuryData(){
        if($this->Query("SELECT i.injury,d.full_name,d.city FROM injury i , doctor_profile d")){
            $injury=[];
            $doctor=[];
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                $j=0;
                foreach ($row as $obj)
                {
                    $injury[$i]=$obj->injury;
                    $i++;
                     
                } 
                foreach($row as $obj){
                    if(!in_array($obj->full_name." - ".$obj->city,$doctor)){
                        $doctor[$j]=$obj->full_name." - ".$obj->city;
                        $j++;

                    }      
                    

                }          
            
            }
            return ['injury'=>$injury,'doctor'=>$doctor];
            
            
        }
        else {
            return ['status' => 'n'];
        }

     }
     public function postInjury($athleteId,$injuryId,$date,$con,$d){
        
        if($this->Query("INSERT INTO athlete_reported_injury (athlete_id,injury_id,date,status,con,description) VALUES (?,?,?,?,?,?)",[$athleteId,$injuryId,$date,0,$con,$d])){
            return true;
        }else{
            return false;
        }
     }

}