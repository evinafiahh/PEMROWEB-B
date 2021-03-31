<?php 
    class Bola {
        private $jarijari;

        public function setJarijari($jari) {
            $this->jarijari = $jari;
        }

        public function getJarijari() {
            return $this->jarijari;
        }

        public function getLuas() {
            $luas = 0;
            $luas = 4 * pi() * pow($this->jarijari,2);
            return $luas;
        }

        public function getVolume() {
            $volume = 0;
            $volume = 4/3 * pi() * pow($this->jarijari,3);
            return $volume;
        }
    }
?>