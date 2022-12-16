<?php

//make an class
class QueryBuilder
{
    //how to make construct for dependent thing, for this case we depand 'pdo' from outside for "select all methode"
    protected $pdo; // first step

    public function __construct($pdo) // second step
    {
        $this->pdo = $pdo; //third step
    }


    public function selectAll($table)
    {
        //mysql connect or prepare quarey
        $statement = $this->pdo->prepare("select *from {$table}");
        //execute 
        $statement->execute();
        //fetch all the data
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}