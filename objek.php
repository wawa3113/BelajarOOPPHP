<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objek</title>
</head>
<body>
    <?php
class Mobil {
    private $merk;
    private $model;
    private $tahun;

    public function __construct($merk, $model, $tahun) {
        $this->merk = $merk;
        $this->model = $model;
        $this->tahun = $tahun;
    }

    public function getInfo() {
        return "Mobil: " . $this->merk . " " . $this->model . ", Tahun: " . $this->tahun;
    }

    public function setTahun($tahun) {
        $this->tahun = $tahun;
    }

    public function getTahun() {
        return $this->tahun;
    }
}

$mobil1 = new Mobil("Toyota", "Avanza", 2020);
echo $mobil1->getInfo();

$mobil1->setTahun(2021);
echo "\nSetelah diubah, " . $mobil1->getInfo();
?>
</body>
</html>