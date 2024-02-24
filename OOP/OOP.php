<?php
// ini adalah class
class manusia{
    // ini adalah property
    public $nama = "Bang Korga";
    public $nama2 = "alok";
// ini adalah method
    public function epep(){
            echo "$this->nama Suka main epep";
    }
    public function alok(){
            echo "$this->nama Giveaway bundle $this->nama2";
    }
}
// ini adalah object
$print = new manusia();

echo $print->epep();
echo "<br>";
echo $print->alok();

?>