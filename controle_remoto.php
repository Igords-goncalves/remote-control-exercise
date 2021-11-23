<?php
    require_once 'controlador.php';

    class ControleRemoto implements Controlador {

        private $volume;
        private $ligado;
        private $tocando;

        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        
        private function getVolume() {
            return $this->volume;
        }
        private function setVolume($volume) {
            $this->volume = $volume;
        }
        private function getLigado() {
            return $this->ligado;
        }
        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }
        private function getTocando() {
            return $this->tocando;
        }
        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }
    }
?>