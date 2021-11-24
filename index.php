<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calculator</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet'>
</head>

<body>
    <h2 align="center">My Calculator</h2>
    <div class="container">
        <span id="history"></span>
        <input type="text" name="isi" id="result" placeholder="0" disabled>
        <button onclick="reset()" id="C">C</button>
        <button onclick="back()" id="N">N</button>
        <button onclick="insert('/')" id="bagi">/</button>
        <button onclick="insert('*')" id="kali">*</button>
        <button onclick="insert('+')" id="tambah">+</button>
        <button onclick="insert('-')" id="kurang">-</button>
        <button onclick="hitung()" id="total">=</button>
        <button onclick="insert('.')" id="titik">.</button>
        <?php for( $i = 0;$i<10;$i++){?>
        <button onclick="insert('<?= $i; ?>')" id="<?= 's'.$i; ?>"><?= $i; ?></button>
        <?php } ?>
    </div>

</body>
<script src="assets/js/main.js"></script>

</html>