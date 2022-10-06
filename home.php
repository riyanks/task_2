<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type= "text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Registration Produk</div>
            <form action="detail.php" method="get" enctype="multipart/form-data">
            <div class="produk_details">
                <div class="input_box">
                    <span class="details">Nama Produk</span>
                    <input type="text" name="name" placeholder="Nama Produk">
                </div>
                <div class="input_box">
                    <span class="details">Harga</span>
                    <input type="text" name="harga" placeholder="Ketik Angka">
                </div>
                <div class="input_box">
                    <span class="details">Berat</span>
                    <input type="text" name="berat" placeholder="satuan gram">
                </div>
                <div class="input_box">
                    <span class="details">Kondisi</span>
                    <input type="radio" id="baru" name="kondisi" value="baru">
                    <label for="baru">baru</label><br>
                    <input type="radio" id="bekas" name="kondisi" value="bekas">
                    <label for="bekas">bekas</label><br>
                </div>
                <div class="input_box">
                    <span class="details">warna</span>
                    <input type="color" name="warna">
                </div>
                <div class="input_box">
                    <span class="details">Kategori</span>
                    <select id="cars" name="kategori" >
                        <option value="makanan">Makanan</option>
                        <option value="elektronik">Elektronik</option>
                        <option value="fashion">Fashion</option>
                        <option value="musik">Musik</option>
                        <option value="mainan">Mainan</option>
                    </select>
                </div>
                <div class="input_box">
                    <span class="details">Masukkan URL gambar</span>
                    <input type="text" name="gambar">
                </div>

                
            </div>
            <div class="button">
            <input type="submit" value="Detail"></button>
            </div>
            
            </form>
        </div>
</body>
</html>