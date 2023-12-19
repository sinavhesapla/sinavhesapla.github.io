<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- “Cumhuriyeti biz kurduk, onu yaşatacak ve yükseltecek olan sizlersiniz.” – Mustafa Kemal ATATÜRK -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sınav Hesaplama</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5 text-center">
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Bilgilendirme</h4>
            <p>Konuşma Sınavı ve Dinleme Sınavı'na girilen değerler %15 üzerinden, Yazılı Sınav'a girilen değer ise %70 üzerinden hesaplanacaktır.<br>Bütün yazılı puanlarını 100 üzerinden girmeniz gerekmektedir.</p>
            <hr>
            <p class="mb-0">“Cumhuriyeti biz kurduk, onu yaşatacak ve yükseltecek olan sizlersiniz.” – Mustafa Kemal ATATÜRK</p>
        </div>

        <form action="sonuc.php" method="get">
            <div class="form-group">
                <label for="konusma">Konuşma Sınavı:</label>
                <input type="number" class="form-control" name="konusma" id="konusma" min="0" max="100" maxlength="3" required>
            </div>

            <div class="form-group">
                <label for="dinleme">Dinleme Sınavı:</label>
                <input type="number" class="form-control" name="dinleme" id="dinleme" min="0" max="100" maxlength="3" required>
            </div>

            <div class="form-group">
                <label for="yazili">Yazılı Sınav:</label>
                <input type="number" class="form-control" name="yazili" id="yazili" min="0" max="100" maxlength="3" required>
            </div>

            <button type="submit" class="btn btn-primary">Hesapla</button>
            <a href="sourcecode.php" class="btn btn-secondary ml-2" target="_blank">Kaynak Kodları Gör</a>
        </form>
    </div>

    <!-- Bootstrap JS ve Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
