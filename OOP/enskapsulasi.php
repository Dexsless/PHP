<?php

class epep{
    public $nama = "alok";

    private function alok(){
        echo "nama saya ";
    }
    public function kelly(){
        $this->alok();
    }
}

$epep = new epep();

echo $epep->kelly();
echo $epep->nama;

?>