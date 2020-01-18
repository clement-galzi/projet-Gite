<?php
require_once File::build_path(array('model','Model.php'));

    class ModelAccueil
    {
        private $idAccueil;
        private $nomAccueil;
        private $descAccueil;
        private $url1;
        private $url2;
        private $url3;

        public function getIdAccueil() {return $this->idAccueil;}
        public function getNomAccueil() {return $this->nomAccueil;}
        public function getDescAccueil() {return $this->descAccueil;}
        public function getUrl1() {return $this->url1;}
        public function getUrl2() {return $this->url2;}
        public function getUrl3() {return $this->url3;}

        public static function getAll() {
            try{
                $sql = Model::$pdo -> query("SELECT * FROM Accueil");
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
            $tab = $sql->fetch();
            return $tab;
        }

        public static function getDescription() {
            try{
                $sql = Model::$pdo -> query("SELECT * FROM Accueil");
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
            $desc = $sql->fetch();
            return $desc['descAccueil'];
        }

        public static function getImage1() {
            try{
                $sql = Model::$pdo -> query("SELECT * FROM Accueil");
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
            $desc = $sql->fetch();
            return $desc['url1'];
        }

        public static function getImage2() {
            try{
                $sql = Model::$pdo -> query("SELECT * FROM Accueil");
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
            $desc = $sql->fetch();
            return $desc['url2'];
        }
        public static function getImage3() {
            try{
                $sql = Model::$pdo -> query("SELECT * FROM Accueil");
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
            $desc = $sql->fetch();
            return $desc['url3'];
        }

        public static function getNom() {
            try{
                $sql = Model::$pdo -> query("SELECT * FROM Accueil ");
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
            $nom = $sql->fetch();
            return $nom['nomAccueil'];
        }
    }