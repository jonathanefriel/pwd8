<?php 
   if ($_POST) {
    $bayaran = $_POST['bayaran'] ?? '';
    $jenis = $_POST['jenis'] ?? '';
    $harga = 600000;
    $message = array();
    $message2 = "";
    $bayaranKembali = 0;

    if (empty($bayaran) || empty($jenis)) {
        $message[] = "Harap Lengkapi Semua Data.";
    }

    if (!preg_match("/^[a-zA-Z]*$/", $jenis)) {
        $message[] = "Jenis Pembayaran Hanya Boleh Mengandung Huruf."; 
    }

    if (empty($message)) {
        foreach($message as $msg) {
            echo "<p style='color:red;'>!! " . htmlspecialchars($msg) . " !!</p>";
        }
    } else {
        function jenisPembayaran($jenis) {
            switch(strtolower($jenis)) {
                case 'a':
                    $potongan = 0.75;
                    break;
                case 'b':
                    $potongan = 0.50;
                    break;
                case 'c':
                    $potongan = 0.25;
                    break;
                case 'd':
                    $potongan = 0;
                    break;
                default:
                   $potongan = 0;
            }
            return $potongan;
        }

        function infoJenisPembayaran($jenis) {
            switch(strtolower($jenis)) {
                case 'a':
                    $info = "Cicilan 25%";
                    break;
                case 'b':
                    $info = "Cicilan 50%";
                    break;
                case 'c':
                    $info = "Cicilan 75%";
                    break;
                case 'd':
                    $info = "Lunas";
                    break;
                default:
                $info = "Jenis Pembayaran Tidak Valid.";
            }
            return $info;
        }

        $potongan = jenisPembayaran($jenis);
        $info = infoJenisPembayaran($jenis);

        function totalBayar($harga, $potongan) {
            return $harga - ($harga * $potongan);
        }
    }
   }
?>