<style>
    .card-b {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #17a2b8;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .45rem;
    margin-right: 37px;
    margin-bottom: 20px;
    color:white;
    align-items:center;
}
.kanan{
    align-items:right;
}
#pth{
    color: #fff;
    text-align: right; 
}
</style>

<div class="page-content">
	<div class="page-header">
		<h1>
            <b>
		DASHBOARD
        </b>
		</h1>
	</div><!-- /.page-header -->

    <center>
    <div class="card-b col-md-2">
        <small><b>Inventory</b></small>
        <h1>
    <i class="menu-icon fa fa-cubes"></i>
         
    <?php echo $total_inventory; ?>
    </h1>
    
    <small><a id="pth" href="<?php echo base_url();?>inventory">View Details</a></small>
    
    </div>

    <div class="card-b col-md-2">
        <small><b>Kategori</b></small>
        <h1>
        <i class="menu-icon fa fa-database"></i>
         
    <?php echo $total_kategori; ?>
    </h1>
    <small><a id="pth" href="<?php echo base_url();?>kategori">View Details</a></small>
    </div>
     
    <div class="card-b col-md-2">
        <small><b>Sub-Kategori</b></small>
        <h1>
        <i class="menu-icon fa fa-archive"></i>
    <?php echo $total_merk; ?>
    </h1>
    <small><a id="pth" href="<?php echo base_url();?>kategori/sub_kat">View Details</a></small>
    </div>

    <div class="card-b col-md-2">
        <small><b>Laporan Pembelian</b></small>
        <h1>
        <i class="menu-icon fa fa-book"></i>
             <?php echo $pembelian; ?>
    </h1>
    <small><a id="pth" href="<?php echo base_url();?>laporan/lap_pembelian">View Details</a></small>
    </div>

    <div class="card-b col-md-2">
        <small><b>Laporan Penjualan</b></small>
        <h1>
        <i class="menu-icon fa fa-book"></i>
             <?php echo $penjualan; ?>
    </h1>
    <small><a id="pth" href="<?php echo base_url();?>laporan/lap_penjualan">View Details</a></small>
    </div>
    <div class="card-b col-md-2">
        <small><b>Fitur Transaksi Pembelian</b></small>
        <h1>
        <i class="menu-icon fa fa-money"></i>
              
    </h1>
    <small><a id="pth" href="<?php echo base_url();?>pembelian">View Details</a></small>
    </div>
    <div class="card-b col-md-2">
        <small><b>Fitur Transaksi Penjualan</b></small>
        <h1>
        <i class="menu-icon fa fa-money"></i>
              
    </h1>
    <small><a id="pth" href="<?php echo base_url();?>penjualan">View Details</a></small>
    </div>
</div>

</center>
<!--<canvas id="myChart" width="400" height="150"></canvas>-->
 
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Inventory', 'Kategori', 'Merk' ],
        datasets: [{
            label: 'Result Barang & Jasa',
            data: [<?php echo $total_inventory; ?>, <?php echo $total_kategori; ?>, <?php echo $total_merk; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)' 
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)' 
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

 
</script>	  


 