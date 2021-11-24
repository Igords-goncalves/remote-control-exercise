<?php
    require_once "interface_controlador.php";

    class ControleRemoto implements Controlador { //O erro sumirá após implementar

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

        // Implementação
        
        public function ligar(){
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abrirMenu() {

        }

        public function fecharMenu() {

        }

        public function maisVolume() {

        }

        public function menosVolume(){

        }

        public function ligarMudo(){

        }

        public function desligarMudo(){

        }

        public function play(){

        }

        public function pause(){

        }
    }
?>