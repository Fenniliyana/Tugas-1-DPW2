<?php


class animal {
    public $jumlah_kaki, $bisa_terbang;
}

class Ayam extends animal 
{
    function bersuara ()
    {
        return "kukuruyukk";
    }
}

class Monyet extends animal 
{
    function bersuara ()
    {
        return "aakuukk";
    }
}

class Bebek extends animal 
{
    function bersuara ()
    {
        return "kuekkuek";
    }
}

class Burung_Pelatuk extends animal 
{
    function bersuara ()
    {
        return "toktoktokk";
    }
}

// Ayam
$rembo = new Ayam;
$rembo->jumlah_kaki = 2;
$rembo->bisa_terbang = "Tidak Bisa Terbang";

echo "rembo Adalah Ayam <br>";
echo "Punya Kaki Sebanyak: " . $rembo->jumlah_kaki . "<br>";
echo $rembo->bisa_terbang . "<br>";
echo "Suaranya: " . $rembo->bersuara() . "<br>";


echo "<hr>";

// Monyet
$kiko = new Monyet;
$kiko->jumlah_kaki = 2;
$kiko->bisa_terbang = "Tidak Bisa Terbang";

echo "kiko Adalah Monyet <br>";
echo "Punya Kaki Sebanyak: " . $kiko->jumlah_kaki . "<br>";
echo $kiko->bisa_terbang . "<br>";
echo "Suaranya: " . $kiko->bersuara() . "<br>";

echo "<hr>";

// Bebek
$Beris = new Bebek;
$Beris->jumlah_kaki = 2;
$Beris->bisa_terbang = "Tidak Bisa Terbang";

echo "Beris Adalah Bebek <br>";
echo "Punya Kaki Sebanyak: " . $Beris->jumlah_kaki . "<br>";
echo $Beris->bisa_terbang . "<br>";
echo "Suaranya: " . $Beris->bersuara() . "<br>";

echo "<hr>";

// Burung_Pelatuk
$cila = new Burung_Pelatuk;
$cila->jumlah_kaki = 2;
$cila->bisa_terbang = "Bisa Terbang";

echo "cila Adalah Burung_Pelatuk <br>";
echo "Punya Kaki Sebanyak: " . $cila->jumlah_kaki . "<br>";
echo $cila->bisa_terbang . "<br>";
echo "Suaranya: " . $cila->bersuara() . "<br>";

echo "<hr>";
 