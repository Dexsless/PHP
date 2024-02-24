<?php

class contoh{
        public function __construct() {
            echo "Bang Korga Bang Korga <br>";
        }
        public function alok() {
            echo "Gip alok bang <br>";
        }
        public function __destruct() {
            echo "Aku pengen bundle alok bang korga <br>";
        }
}

$epep = new contoh();

echo $epep->alok();

?>