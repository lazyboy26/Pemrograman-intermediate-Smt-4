<?php

// Membuat manusia
class manusia{
    public function __construct($nama="Adam")
    {
        $this->nama = $nama;
    }

    public function status(){
        return "Manusia pertama";
    }
    public function getNama(){
        return $this->nama;
    }
}

// Membuat aktifitas manusia
class aktifitas extends manusia{
    public function lapar(){
        return "Memakanan makanan";
    }
    public function haus(){
        return "Meminum minuman";
    }
}
class keluarga extends manusia{
    public function istri(){
        return "Hawa";
    }
    public function anak(){
        return "Qabil, Habil dan Syits";
    }
}

class mobil{
    public function gas(){
        return "Mobil Di gas";
    }

    public function rem(){
        return "Mobil Di rem";
    }
}

class spek extends mobil{
    public function merk(){
        return "BMW";
    }
    public function warna(){
        return "merah";
    }
}

class spek2 extends mobil{
    public function merk(){
        return "Volvo";
    }
    public function warna(){
        return "Hitam";
    }
}


//manusia
$manusia = new aktifitas();
$manusia2 = new keluarga();

echo "Nama : " . $manusia->getNama();
echo "<br>";
echo "Status : " . $manusia->status();
echo "<br>";
echo "<br>";
echo "Jika haus : " . $manusia->haus();
echo "<br>";
echo "Jika lapar : " .$manusia->lapar();
echo "<br>";
echo "<br>";
echo "Istri Adam : " .$manusia2->istri();
echo "<br>";
echo "Anak Adam : " .$manusia2->anak();


echo "<hr>";

// Mobil
$mobil = new spek();
$mobil2 = new spek2();

echo $mobil->gas();
echo "<br>";
echo $mobil->rem();
echo "<br>";
echo "<br>";
echo $mobil->merk();
echo "<br>";
echo $mobil->warna();
echo "<br>";
echo "<br>";
echo $mobil2->merk();
echo "<br>";
echo $mobil2->warna();