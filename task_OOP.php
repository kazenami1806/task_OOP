<?php

class lingkaran{
    public $nama = "Lingkaran";
    public float $jarijari = 10;
    public float $phi = 3.14;
    public float $scale = 4;
    public function area(){
        $luas = $this->phi*$this->jarijari*$this->jarijari;
        return $luas;
    }
    public function circumference(){
        $keliling = $this->phi*($this->jarijari*2);
        return $keliling;
    }
    public function enlarge(){
        $En_r = $this->jarijari*$this->scale;
        return $En_r;
    }
    public function shrink(){
        $Sh_r = $this->jarijari/$this->scale;
        return $Sh_r;
    }
}

class persegi{
    public $nama = "Persegi";
    public float $sisi = 10;
    public float $scale = 4;
    public function area(){
        $luas = $this->sisi*$this->sisi;
        return $luas;
    }
    public function circumference(){
        $keliling = 4*$this->sisi;
        return $keliling;
    }
    public function enlarge(){
        $En_sisi = $this->sisi*$this->scale;
        return $En_sisi;
    }
    public function shrink(){
        $Sh_sisi = $this->sisi/$this->scale;
        return $Sh_sisi;
    }
}

class persegi_panjang{
    public $nama = "Persegi Panjang";
    public float $panjang = 10;
    public float $lebar = 5;
    public float $scale = 4;
    public function area(){
        $luas = $this->panjang*$this->lebar;
        return $luas;
    }
    public function circumference(){
        $keliling = 2*($this->panjang+$this->lebar);
        return $keliling;
    }
    public function enlarge(){
        
        $En_panjang = $this->panjang*$this->scale;
        $En_lebar = $this->lebar*$this->scale;
        $besar[] = [$En_panjang, $En_panjang];
        return $besar;
    }
    public function shrink(){
        
        $Sh_panjang = $this->panjang/$this->scale;
        $Sh_lebar = $this->lebar/$this->scale;
        $kecilin[] = [$Sh_panjang, $Sh_panjang];
        return $kecilin;
    }
}

$circle = new lingkaran();
$square = new persegi();
$rectangle = new persegi_panjang();

class descriptor {
    public static function describe($bangunDatar) {
      return "Bangun Datar ini adalah ".$bangunDatar->nama." yang memiliki luas ".$bangunDatar->area()." dan keliling ".$bangunDatar->circumference();
    }
}

$descriptor = new descriptor;

echo $descriptor->describe($circle);
echo "<br/>";
echo $descriptor->describe($square);
echo "<br/>";
echo $descriptor->describe($rectangle);
echo "<br/>";

?>