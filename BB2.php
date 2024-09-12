<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bon{
            margin-top: 10%;
            width: 500px;
            background-color: antiquewhite;
            height: 270px;
            border-radius: 20px;
            padding-top: 20px;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.1);
            transition: 1.5s;

        }
        .bon:hover{
            transform: scale(1.15);
            transition: 1.5s;
        }
        h1 {
            color: blue;
        }
        a{
            text-decoration: none;
            color: white;
        }
        button{
            background-color:darkturquoise;
            border:none;
            width: 90px;
            height: 40px;
            border-radius: 5px;
            box-shadow: 2px 2px black;
            color: white;
            margin-left: 10px;
        }
        button:active{
            transform: translate(2px, 2px);
            box-shadow: none;

        }
        .buttons{
            display: flex;
            justify-content: space-around;
        }
        @media print{
            .hapus{
                display: none;
            }
        }
    </style>
</head>
<body>
    <center>
    <div class="bon">
    <?php
    if (isset($_POST['submit'])) {
        $liter = $_POST['liter'];
        $jenis = $_POST['jenis'];

        $hargas = [
            "SSuper" => 14000,        
            "SVPower" => 16000,      
            "SVPowerDiesel" => 15000, 
            "SVPowerNitro" => 17000   
        ];

        class Data {
            protected $uang, 
                      $liter, 
                      $jenis, 
                      $ppn, 
                      $total_harga;

            public function __construct($jenis, $uang, $liter) {
                $this->jenis = $jenis;
                $this->uang = $uang;
                $this->liter = $liter;
                $this->ppn = 0.1; 
            }

            public function totalHarga() {
                return $this->total_harga = ($this->uang * $this->liter) * (1 + $this->ppn);
            }

            public function format() {
                echo "<h1>Bukti Transaksi Pembelian</h1>";
                echo "Jenis Bahan Bakar: " . $this->jenis . "<br>";
                echo "Jumlah Liter: " . $this->liter . " liter<br>";
                echo "Harga per Liter: Rp " . number_format($this->uang, 0, ',', '.') . "<br>";
                echo "Harga Dasar: Rp " . number_format($this->uang * $this->liter, 0, ',', '.') . "<br>";
                echo "PPN (10%): Rp " . number_format(($this->uang * $this->liter) * $this->ppn, 0, ',', '.') . "<br>";
                echo "Total Harga: Rp " . number_format($this->totalHarga(), 0, ',', '.') . "<br>";
            }
        }

       $formData = new Data($jenis, $hargas[$jenis], $liter);
       $formData->format();
    }
    ?>
    <br>
    <div class="hapus">
    <div class="buttons">
        <center>
    <button> <a href="BB.php">Kembali</a></button>
    <button onclick="window.print()">Cetak</button>
    </center>
    </div>
    </div>
    </div>
    </center>
</body>
</html>
