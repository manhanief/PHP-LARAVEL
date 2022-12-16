<?php

class Task{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description =$description;
    }

    public function complete(){
       return $this->completed = true;
    }

    public function iscompleted(){
        return $this->completed;
    }

}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

$tasks[0]->complete();

require 'index.view.php';

?>