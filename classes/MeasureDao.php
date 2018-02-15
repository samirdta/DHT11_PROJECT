<?php

include 'DaoBase.php';

class MeasureDao extends DaoBase
{
    public function __construct($config) {
        
        parent::__construct($config);               
    }
    public function insertMeasure ($measure) {
       $request= $this->bdd->prepare("INSERT INTO Relevees (humidite, temperature) VALUES (:humidite, :temperature)"); 
       var_dump ($request);
       $request->bindParam(":humidite",$measure->humidite);
       $request->bindParam(":temperature",$measure->temperature);
       echo $request->execute();
       $id= $this->bdd->lastInsertid();
       $measure->id= $id;
       return $id;
        
    }
   
    public function deleteMeasure($id) {
        
        $request = $this->bdd->prepare("DELETE FROM Relevees WHERE id = :id");
        
        $request->bindParam(":id", $id);

        $request->execute();
    }
    
    public function updateMeasure($id) {
        
        $result;
        
        $update = $this->bdd->prepare("UPDATE Relevees SET humidite = :humidite, temperature = :temperature WHERE id = :id");
        
        $update->bindParam(":humidite", $id->humidite);
        
        $update->bindParam(":temperature", $id->temperature);
        
        
        $update->execute();
    }
}

