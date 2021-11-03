<?php

    abstract class karyawan {
        public $no, $nama, $ttl, $kelamin, $level, $status, $gaji;

    abstract public function getNama();
    abstract public function setNama($nama);
    }

    class fulltime extends karyawan{
        public $status = "Fulltime";

        public function getNama(){
            return $this->nama;
        }

        public function setNama($nama){
            $this->nama = $nama;
        }

        function __construct($no, $nama, $ttl, $kelamin, $level){
            $this->no = $no;
            $this->nama = $nama;
            $this->ttl = $ttl;
            $this->kelamin = $kelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000;
            }
            elseif($this->level == "Amature"){
                $this->gaji = 3500000; 
            }
            else{
                $this->gaji = 5000000;
            }
            
        }
    }

    class parttime extends karyawan{
        public $status = "Parttime";

        public function getNama(){
            return $this->nama;
        }

        public function setNama($nama){
            $this->nama = $nama;
        }

        function __construct($no, $nama, $ttl, $kelamin, $level){
            $this->no = $no;
            $this->nama = $nama;
            $this->ttl = $ttl;
            $this->kelamin = $kelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000/2;
            }
            elseif($this->level == "Amature"){
                $this->gaji = 3500000/2; 
            }
            else{
                $this->gaji = 5000000/2;
            }
            
        }

    }

    $array = array();
    $array[0] = $karyawan1 = new parttime(1, "Rico", "Pati, 3 Maret 2001", "L", "Amature");
    $array[1] = $karyawan2 = new fulltime(2, "Bagus", "Kudus, 10 November 1999", "L", "Junior");
    $array[2] = $karyawan3 = new parttime(3, "Della", "Demak, 1 Januari 1999", "P", "Senior");
    $array[3] = $karyawan4 = new fulltime(4, "Andin", "Jakarta, 5 April 2002", "P", "Amature");
    $array[4] = $karyawan5 = new parttime(5, "Amel", "Pati, 20 Aguatus 2003", "P", "Junior");

?>

<!DOCTYPE html>
<html style ="background-color:black;">

<head>
    <style>
        *{
            front-family: 'Noto Serif', serif;
            color: white;
        }
        table{
            background: color #f5fffa;
        }
    </style>
</head>

<body>
    <h2 style="Color:yellow"> Daftar Karyawan</h2>
    <table class="father" border='1' style="border-radiuss:10;">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>Jenis Kelamin</td>
            <td>Level</td>
            <td>Status</td>
            <td>Gaji</td>
        </tr>

        <?php for ($i=0; $i<5; $i++) { ?>
            <tr>
                <td> <?php echo $array[$i]->no; ?> </td>
                <td> <?php echo $array[$i]->nama; ?> </td>
                <td> <?php echo $array[$i]->ttl; ?> </td>
                <td> <?php echo $array[$i]->kelamin; ?> </td>
                <td> <?php echo $array[$i]->level; ?> </td>
                <td> <?php echo $array[$i]->status; ?> </td>
                <td> <?php echo $array[$i]->gaji; ?> </td>
            </tr>

        <?php } ?>

    </table>
</body>
</html>