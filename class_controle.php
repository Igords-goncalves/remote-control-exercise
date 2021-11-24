<?php
    require_once "interface_controlador.php";

    class ControleRemoto implements Controlador { //O erro sumirá após implementar

        private $volume;
        private $ligado;
        private $tocando;

        public function __construct() {
            $this->volume = 30;
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
            echo "<br> Está ligado?: " . $this->getLigado() ? "Sim" : "Não";
            echo "<br> Está tocando?: " . $this->getTocando() ? "Sim" : "Não";
            echo "<br> Volume: " . $this->getVolume();
            for ($i=0; $i <= $this->getVolume(); $i=+ 10) {
                echo "|";
            }
            echo "<br>";
        }

        public function fecharMenu() {
            print("Menu fechado ...");
        }

        public function maisVolume() {
            if (!!$this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            }
        }

        public function menosVolume(){
            if (!!$this->getLigado()) {
                $this->setVolume($this->getVolume() - 5);
            }
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