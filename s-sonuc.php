SONUC.PHP (Sınav Sonuç Puanları Sayfası) Kodları;

<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Her şeyi sana yazdım!.. Her şeye seni yazdım!.. *Mustafa Kemal ATATÜRK -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sınav Sonucu</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Sayfa içeriği için stil */
        body {
            margin: 20px;
        }

        /* Kopyalandı mesajı için stil */
        #kopyalandiMesaji {
            display: none;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body class="text-center">
    <?php
        // formdan gelen input değerleri
        // htmlspecialchars ile xss koruma
        $konusma = htmlspecialchars($_GET['konusma']);
        $dinleme = htmlspecialchars($_GET['dinleme']);
        $yazili = htmlspecialchars($_GET['yazili']);

        // sınav yüzdeleri
        $konusma_yuzde = 15;
        $dinleme_yuzde = 15;
        $yazili_yuzde = 70;

        // toplam değeri hesapla
        $toplam = ($konusma * $konusma_yuzde / 100) + ($dinleme * $dinleme_yuzde / 100) + ($yazili * $yazili_yuzde / 100);
    ?>

    <div class="container mt-5">
        <h2 class="mb-4">Sınav Sonucunuz</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sınav Türü</th>
                    <th>Puan</th>
                    <th>Yüzde</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Konuşma</td>
                    <td><?php echo $konusma; ?></td>
                    <td><?php echo $konusma_yuzde; ?>%</td>
                </tr>
                <tr>
                    <td>Dinleme</td>
                    <td><?php echo $dinleme; ?></td>
                    <td><?php echo $dinleme_yuzde; ?>%</td>
                </tr>
                <tr>
                    <td>Yazılı</td>
                    <td><?php echo $yazili; ?></td>
                    <td><?php echo $yazili_yuzde; ?>%</td>
                </tr>
                <tr>
                    <td>Toplam</td>
                    <td colspan="2"><?php echo $toplam; ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Kopyalama ve Ana Sayfa button -->
        <a href="index.php" class="btn btn-primary ml-2">Ana Sayfa</a>
        <button class="btn btn-success" onclick="kopyala()">Toplam Puanı Kopyala</button>

        <!-- Kopyalandı mesajı -->
        <div id="kopyalandiMesaji" class="alert alert-success mt-3" role="alert">
            Toplam Puan Kopyalandı! Kopyalanan Puan: <?php echo $toplam; ?>
        </div>

        <!-- JavaScript start -->
        <script>
            function kopyala() {
                var text = "<?php echo $toplam; ?>";
                navigator.clipboard.writeText(text).then(function() {
                    // Kopyalandı mesajını göster
                    document.getElementById("kopyalandiMesaji").style.display = "block";

                    // Belirli bir süre sonra mesajı gizle
                    setTimeout(function(){
                        document.getElementById("kopyalandiMesaji").style.display = "none";
                    }, 3000); // 3 saniye sonra gizle
                }, function(err) {
                    console.error("Kopyalama Başarısız: ", err);
                });
            }
        </script>
    </div>

    <!-- Bootstrap JS ve Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
