<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Kingston's Coffee</title>
        <link rel="browser tab icon" href="img/coffe-logo.png">
        <style>
            <?php include "style.css" ?>
        </style>
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
    </head>

    
    <body>
      <nav class="navbar">
        <div class="container">
          <div class="navbar-menu">
            <a href="admin.php">Input</a>
          </div>
        </div>
      </nav>

      <div class="description">
        <h2> Welcome To</h2>
        <h1>Kingston's Coffee</h1>
      </div>

        <div class=admin-output>
            <table width='50%' id='table_output'>
                <tr>
                    <td colspan=3 align=center height=80px style='background: var(--main-color);color: antiquewhite;' ><h1>Hasil Input</h1></td>
                </tr>
                <tr>
                    <td align=center height=40px>Merek Benda</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $merk = isset($_GET['merek']) ? $_GET['merek'] : "";
                            echo $merk;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Nama Benda</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $nama = isset($_GET['nama']) ? $_GET['nama'] : "";
                            echo $nama;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Tipe Benda</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $tipe = isset($_GET['trans']) ? $_GET['trans'] : "";
                            echo $trans;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Harga Benda</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $harga = isset($_GET['harga']) ? $_GET['harga'] : "";
                            echo "$harga";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Ketersediaan Barang</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $ketersediaan = isset($_GET['ketersediaan']) ? $_GET['ketersediaan'] : "";
                            echo $ketersediaan;
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

      <script>

        function changeBtn() {
        let change = document.getElementById("surprise");
        change.style.tipeform = "rotate(50deg)";
        change.style.margin = "10px";
    
      }
      </script>

    <footer id="footer">
        Copyright &copy; 2022
        Designed by Hadiee<br>
        <button onclick="changeBtn()" id="surprise">sstt!!</button>
    </footer>
    </body>
</html>