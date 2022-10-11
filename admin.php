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
            <a href="admin-logout.php">Logout</a>
            <a href="admin_output.php">Output</a>
          </div>
        </div>
      </nav>

      <div class="description">
        <h2> Welcome To</h2>
        <h1>Kingston's Coffee</h1>
      </div>

      <div class='admin'>
        <div id='input_form'>
            <form action="admin-output.php" method='get' autocomplete="off">
                <table width='10%' id='table_input'>
                    <tr>
                        <td colspan=3 align=center height=80px style='background: brown'><h1>Input Data Coffee</h1></td>
                    </tr>
                    <tr>
                        <td align=center><label for="merek" style="font-size:20px">Merek Barang</label></td>
                        <td>:</td>
                        <td align=center><input type="text" id='merek' name='merek' placeholder='Merek Barang' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="nama" style="font-size:20px">Nama Barang</label></td>
                        <td>:</td>
                        <td align=center><input type="text" id='nama' name='nama' placeholder='Merek Barang' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="trans" style="font-size:20px">Tipe Barang</label></td>
                        <td>:</td>
                        <td align=center>
                            <input type="radio" id='Makanan' name='trans' value='Makanan' style="font-size:20px"  required>
                            <label for="Makanan" >Makanan</label>
                            <input type="radio" id='Minuman' name='trans' value='Minuman' style="font-size:20px" required>
                            <label for="Minuman" >Minuman</label>
                        </td>
                    </tr>
                    <tr>
                        <td align=center><label for="harga" style="font-size:20px, height:20px">Harga Benda</label></td>
                        <td>:</td>
                        <td align=center><input type="number" id='harga' name='harga' placeholder='Harga Benda' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="ketersediaan" style="font-size:20px">Ketersediaan Barang</label></td>
                        <td>:</td>
                        <td align=center><input type="number" id='ketersediaan' name='ketersediaan' placeholder='Ketersediaan Barang' class='input' required></td>
                    </tr>
                    <tr>
                        <td colspan=3 align=center height=70px><input type="submit" value="Submit" class="Button2"></td>
                    </tr>
                </table>
            </form>
        </div>
 

        <!-- <div>
            <table width='40%' id='table_input' style='margin-top: 50px; margin-left:auto; margin-right:auto;'>
                <tr>
                    <td colspan=3 align=center height=80px style='background-color:black;color:white;' ><h1>Hasil Input</h1></td>
                </tr>
                <tr>
                    <td align=center height=40px>Merek Mobil</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $merk = isset($_GET['merek']) ? $_GET['merek'] : "";
                            echo $merk;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Nama Mobil</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $nama = isset($_GET['nama']) ? $_GET['nama'] : "";
                            echo $nama;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Transmisi Mobil</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $trans = isset($_GET['trans']) ? $_GET['trans'] : "";
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
        </div> -->
    </div>

      <script>

        function changeBtn() {
        let change = document.getElementById("surprise");
        change.style.transform = "rotate(50deg)";
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