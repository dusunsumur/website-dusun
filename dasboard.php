<!DOCTYPE html>
<html>
<head>
    <title>Website Dusun Sumur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
			background-image:url(suci.png)
        }
        #header {
            background-color: #3498db;
            color: white;
            padding: 20px;
            position: relative;
            text-align: center;
        }
        @keyframes move {
            0% { transform: translateX(100%); }
            50% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
        #address {
            position: absolute;
            top: 65px;
            right: 126px;
            transform: translateY(-50%);
            animation: move 5s infinite;
            width: 616px;
        }
        #logo {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
        }
        #menu {
            width: 200px;
            background-color: #f2f2f2;
            padding: 10px;
            float: left;
            height: 100vh; /* Full height */
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        #menu ul {
            list-style-type: none;
            padding: 0;
        }
        #menu ul li {
            margin-bottom: 10px;
        }
        #menu button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            display: block;
            text-decoration: none;
        }
        #menu button:hover {
            background-color: #2980b9;
        }
        #menu button a {
            color: white;
            text-decoration: none;
            display: block;
        }
        #content {
            margin-left: 220px;
            padding: 20px;
        }
        #footer {
            background-color: #f2f2f2;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div id="header">
        <div id="logo"><img src="logo.png" alt="Logo Rumah Sakit" width="100" height="100"></div>
        <h1>WEBSITE DUSUN SUMUR</h1>
        <p id="address">Dusun Sumur, Desa Suci, Kecamatan Pracimantoro, Kabupaten Wonogiri</p>
    </div>

    <div id="menu">
        <ul>
            <li><button onClick="loadContent('home')">Home</button></li>
          	<li><button onClick="loadContent('profil')">Profil</button></li>
            <li><button onClick="loadContent('fasilitas')">Fasilitas Umum</button></li>
            <li><button onClick="loadContent('potensi')">Potensi Desa</button></li>
            <li><button onClick="loadContent('umkm')">UMKM Desa</button></li>
			<li><button onClick="loadContent('kontak')">Kontak</button></li>
        </ul>
    </div>

    <div id="content">
        <?php
        // Memeriksa halaman yang diminta
        $page = isset($_GET['page']) ? $_GET['page'] : '';

        // Memuat konten sesuai dengan halaman yang diminta
        switch ($page) {
            case 'profil':
                include 'profil.php';
                break;
            case 'fasilitas':
                include 'fasilitas.php';
                break;
            case 'potensi':
                include 'potensi.php';
                break;
			case 'umkm':
                include 'umkm.php';
                break;
            case 'kontak':
                include 'kontak.php';
                break;
            default:
                include 'home.php';
                break;
        }
        ?>
    </div>
    <div>
        <p align="center">Hak Cipta &copy; <?php echo date("Y"); ?> KKNT UDB 2024 KELOMPOK 28 DESA SUCI</p>
    </div>

    <script>
        function loadContent(page) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", page + ".php", true); // Mengganti URL dengan page + ".php"
            xhttp.send();
        }
    </script>
</body>
</html>
