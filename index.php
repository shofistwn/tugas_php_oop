<?php

class Kalkulator
{
    public int $daya = 0;
    public int $konsumsiDaya = 10;

    public function __construct(int $daya)
    {
        $this->daya = $daya;
    }

    public function penjumlahan($angka1, $angka2)
    {
        if ($this->cekDaya() == true) {
            $hasil = $angka1 + $angka2;

            $this->cekHasil($hasil, 'Penjumlahan');
        }
    }

    public function pengurangan($angka1, $angka2)
    {
        if ($this->cekDaya() == true) {
            $hasil = $angka1 - $angka2;

            $this->cekHasil($hasil, 'Pengurangan');
        }
    }

    public function perkalian($angka1, $angka2)
    {
        if ($this->cekDaya() == true) {
            $hasil = $angka1 * $angka2;

            $this->cekHasil($hasil, 'Perkalian');
        }
    }

    public function pembagian($angka1, $angka2)
    {
        if ($angka2 !== 0) {
            if ($this->cekDaya() == true) {
                $hasil = $angka1 / $angka2;

                $this->cekHasil($hasil, 'Pembagian');
            }
        } else {
            echo "Gagal! Tak dapat membagi angka $angka2";
        }
    }

    private function cekDaya()
    {
        if ($this->daya >= $this->konsumsiDaya) {
            $this->daya -= $this->konsumsiDaya;
            return true;
        }
        echo "Daya tidak cukup!";
        return false;
    }

    private function cekHasil($hasil, $type)
    {
        $hasilPemangkatan = $hasil * $hasil;
        if ($hasilPemangkatan > 1000000) {
            echo "Nilai diluar batas yang ditentukan";
        } else {
            echo "Hasil $type: $hasil dan Hasil Pemangkatan: $hasilPemangkatan";
        }
        return;
    }
}

class KalkulatorHemat extends Kalkulator
{
    public int $konsumsiDaya = 5;
}

$Kalkulator = new Kalkulator(10);
$Kalkulator->perkalian(20, 51);

$KalkulatorHemat = new KalkulatorHemat(5);
$KalkulatorHemat->perkalian(20, 51);
