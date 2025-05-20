d:\Pemograman\FEC5026231066\PertemuanPWEB\js2.html<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function hello() {
            alert("Selamat Anda mendapatkan 1 Milyar");
        }
        function tambah() {
            var bilangan1 = parseFloat(document.getElementById("bil1").value);
            var bilangan2 = parseFloat(document.getElementById("bil2").value);
            var hasil = bilangan1 + bilangan2;

            document.getElementById("hasil").innerHTML = hasil;
        }
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary" onclick="hello()">Klik Disini</button>
        <p>
            Bilangan pertama :
            <input type="text" class="form-control" id="bil1" value="0">
            <br>
            Bilangan kedua :
            <input type="text" class="form-control" id="bil2" value="0">
            <br>
            Hasil Penjumlahan :
            <div id="hasil" style="border: 1px solid rgb(209, 206, 206); border-radius: 5px; ; padding: 4px; color: black;"></div>
        <br>
        <button class="btn btn-success" onclick="tambah()">Tambah</button>
        </p>
    </div>
</body>

</html>
