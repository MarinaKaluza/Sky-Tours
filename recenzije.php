<?php

require_once 'recenzije_model.php';
class RecenzijeController
{
    private $connector;
    public function __construct()
    {
        $this->connector = DB();
    }
    public function create()
    {
        $Recenzije = new Recenzije();
        if(!empty($_POST)){
            $params = $_POST;
            $Recenzije->insert($params);
            header('Location: recenzije.php?action=read');
        }
    }
    public function read()
    {
        $Recenzije = new Recenzije();
        $params = $Recenzije->get();
        require_once 'recenzije_view.php';
    }
}

$RecenzijeController = new RecenzijeController();
if($_GET['action']==='create'){
    $RecenzijeController->create();
}else if($_GET['action']==='read'){
    $RecenzijeController->read();
}