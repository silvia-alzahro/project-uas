<html>
    <head>
    <title>Pemesanan</title>
  </head>
  <body>
    <form action="akhirpesan.php" method="post">
        <input type="hidden" name="aksi" value="create">
    <center>
    <fieldset><h1 border="1" style="padding: 20px; background-color: pink;">
  <center>PEMESANAN TIKET KERETA API</center></h1></fieldset>
  <center>
    <fieldset>
  <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="pemesanan.php">PEMESANAN TIKET</a></li>
            <li><a href="transaksi.php">PEMBAYARAN</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    <img src = "" align = "center" width="300px" right="200px">
    </center>
  </body>
        <fieldset>
            <legend>Input Data Pemesan</legend>
            <form action="akhirpesan.php" method="post">
        <input type="hidden" name="aksi" value="create">
        <table>
             <tr>
                <th>Nama Pemesan</th>
                <td>:</td>
                <td><input type="text" name="nama_pemesan" required></td>
            </tr>
            <tr>
                    <td>Nama Kereta</td>
                    <td>:</td>
                     <td><select name="nama_kereta">
                <option value="">--Pilihan--</option>
               <option value="Serayu">1.Serayu</option>
             <option valuzze="Turangga">2.Turangga</option>
             <option value="Argo Wilis">3.Argo Wilis</option>
             <option value="Argo Parahyangan">4.Argo Parahyangan</option>
             <option value="Lodaya">5.Lodaya</option>
             <option value="Ciremai">6.Ciremai</option>
             <option value="Mutiara Selatan">7.Mutiara Selatan</option>
             <option value="Malabar">8.Malabar</option>
             <option value="Harina">9.Harina</option>
             </td>
            </select>
             </tr>
             <tr>
                <td>Jenis Kelas</td>
                <td>:</td>
                 <td><select name="jenis_kelas">
                   <option value="">--Pilihan--</option>
               <option value="Rp.95000/Ekonomi">1.Rp.95000/Ekonomi</option>
             <option value="Rp.110000/Bisnis">2.Rp.110000/Bisnis</option>
             <option value="Rp.120.000/Eksekutif">3.Rp.120.000/Eksekutif</option>
             </td>
            </select>
         </tr>
         <tr>
            <td>Asal dan Tujuan</td>
            <td>:</td>
             <td><select name="asal_tujuan">
               <option value="">--Pilihan--</option>
               <option value="Purwokerto-Pasar Senen">1.Purwokerto-Pasar Senen</option>
             <option value="Bandung-Surabaya Gubeng">2.Bandung-Surabaya Gubeng</option>
             <option value="Bandung-Surabaya Gubeng">3.Bandung-Surabaya Gubeng</option>
             <option value="Bandung-Gambir">4.Bandung-Gambir</option>
             <option value="Bandung-Solo">5.Bandung-Solo</option>
             <option value="Bandung-Cirebon">6.Bandung-Cirebon</option>
             <option value="Bandung-Malabar">7.Bandung-Malabar</option>
             <option value="Bandung-Malang">8.Bandung-Malang</option>
             <option value="Bandung-Surabaya Pasarturi">9.Bandung-Surabaya Pasarturi</option>
             </td>
            </select>
         </tr>
             <tr>
                <th>tanggal berangkat</th>
                <td>:</td>
                <td><input type="date" name="tanggal" required></td>
            </tr>
             <tr>
                <th><input type="submit" name="save" ></th>
            </tr>
        </table>
    </form>
    </fieldset>
    </body>
    <style type="text/css">
    a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
    ul{padding: 14px}
    li{list-style: none; display: inline;}
    li a{background: salmon; color:brown;}
</style>
</html>
