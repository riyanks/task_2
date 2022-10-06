<?php
$nama = $_GET["name"];
$harga = $_GET["harga"];
$berat = $_GET["berat"];
$kondisi = $_GET["kondisi"];
$warna = $_GET["warna"];
$kategori = $_GET["kategori"];

$gambar = $_GET["gambar"]

// $nama_gmb = $_FILES['gambar']['name'];
// $erorr_gmb = $_FILES['gambar']['error'];
// $tmp_gmb = $_FILES['gambar']['tmp_name'];
// $fileext = explode('.', $nama_gmb);
// $fileActual = strtolower(end($fileext));

// $allowed = array('jpg','jpeg','png','pdf');

// if (in_array($fileActual, $allowed)){
//     if ($erorr_gmb == 0){
//         $fileNameNew = uniqid('', true).".".$fileActual;
//         $filedestination = 'gmbr/'.$fileNameNew;
//         move_uploaded_file($tmp_gmb,$filedestination);
//     }else {
//         echo "File mu erorrr !!";
//     }
// } else {
//     echo "Kamu tidak dapat memasukkan jenis file ini !!";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
</head>
<body  style="font-family: 'Josefin Sans', sans-serif; background: linear-gradient(135deg, #71b7e6, #9b59b6);">
    <table align="center" width="500px" height="300">
        <tr>
            <td width="250px" bgcolor="#671d0d" style="color: white; padding: 20px; line-height: 5px;">
                <img src="<?php echo $gambar;?>" style =" margin-left: 20px; margin-bottom: 20px; " alt="ini foto saya" height="200px" width="200px">
                <h1><?php echo $nama;?></h1> <hr>
                
            </td>
            <td bgcolor="white" style="padding:20px ;">
                <h1 style="font-size: 20px;">Harga</h1><hr>
                <p><b>Rp.</b> <?php echo $harga;?></p>
                <br>
                <h1 style="font-size: 20px;">Berat</h1><hr>
                <p><?php echo $berat;?></p>
                <br>
                <h1 style="font-size: 20px;">Warna</h1><hr>
                <div class="square" style="height: 50px; width: 50px; border-radius:50%; background-color:<?php echo $warna;?>"></div>
                <h1 style="font-size: 20px;">Kondisi</h1><hr>
                <p><?php echo $kondisi;?></p>
                <h1 style="font-size: 20px;">Kategori</h1><hr>
                <p><?php echo $kategori;?></p>
                <br>
            </td>
        </tr>

    </table>
    
</body>
</html>