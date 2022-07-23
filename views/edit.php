<!DOCTYPE html>
<html>

<head>
    <title>Change Status Pembayaran</title>
</head>



<body> <?php foreach ($tampil_user as $tu) { ?>
    <center>
        <h1></h1>
        <h3> Status Bayar Nomor Nota <?php echo "$tu->nonota"?></h3>
        <p>Total Pembayaran Rp. <?php echo "$tu->total"?></p>
        <p>Sudah Membayar Rp. <?php echo "$tu->bayar"?></p>
        <p>Belum Terbayar Rp. <?php echo "$tu->kembalian"?></p>
    </center>

   


        <form action="<?php echo base_url('index.php/update/update_user/' . $tu->nonota); ?>" method="post">
            <table style="margin:20px auto;">
            <tr>
                    <td>Membayar</td>
                    
                    <td><input type="number" name="bayar" required></td>
                    
                   <!-- -->
                </tr>

                <tr>
                    <td>Belum Terbayar</td>
                    
                    <td><input type="number" name="kembalian" required></td>
                    
                   <!-- -->
                </tr>

                <tr>
                    <td>Status Bayar</td>
                    <td>
                    <select name="status_pembayaran" required>
          <option value="">Pilih Status Bayar</option>
          <option value="Lunas"><b>Lunas</b></option>
          <option value="Hutang"><b>Hutang</b></option>
          
        </select></td>
                   <!-- <td><input type="text" name="status_pembayaran" value="<?php echo $tu->status_pembayaran ?>" required></td>-->
                </tr>
                 <br><br>
                 <td><br> </td>
                <tr>
                    <td></td>
                    <td><input type="submit" onclick="return confirm('Apakah anda yakin merubah data ?')" value="Ubah status pembayaran"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href="<?php echo base_url();?>laporan/lap_penjualan">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>