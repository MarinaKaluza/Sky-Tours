<?php
    function DB() {
            return new mysqli("localhost", "root", "","skytours");
    }
    class Recenzije{
        private $connector;
        public function __construct()
        {
            $this->connector = DB();
        }
        public function insert($params=[])
        {
//            var_dump($params);
            $upit = "INSERT INTO `recenzije` (`ocjena`, `opis`, `ime`) VALUES (" . 
                " " . (!empty($params['ocjena'])?$params['ocjena']:'null') . " ," . 
                "'" . (!empty($params['opis'])?$params['opis']:'null') . "'," . 
                "'" . (!empty($params['ime'])?$params['ime']:'null') . "'" .
            ")";
//            var_dump($upit);
            $e = $this->connector->query($upit);
//            var_dump($e);
//            exit;
            if (!$e) {
                var_dump($this->connector->error);
            }
        }
        public function get()
        {
            $upit = "SELECT * FROM `recenzije`";
            $e = $this->connector->query($upit);
            if (!$e) {
                var_dump($this->connector->error);
            }
            return $e->fetch_all(MYSQLI_ASSOC);
        }
    }
?>
