<?php
    require_once "interface_controlador.php";

    abstract class ControleRemoto implements Controlador { // A classe também deve ser abstrata?

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