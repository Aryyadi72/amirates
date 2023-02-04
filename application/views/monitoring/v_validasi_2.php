<?php
    if ($this->session->flashdata('sukses')) {
    ?>
<div class="callout callout-success">
    <p style="font-size:14px">
        <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
    </p>
</div>
<?php
    }
    ?>
<br>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Kelengkapan Pengisian Kolom</div>
                <div class="card-body">
                    <h1 class="display-6"><?php echo $detail->k_kolom; ?></h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Perbaikan Error</div>
                <div class="card-body">
                    <h1 class="display-6"><?php echo $detail->perbaikan_error; ?></h1>
                </div>
            </div>
            <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Kesesuaian titik koordinat dan tarikan jaringan</div>
                <div class="card-body">
                    <h1 class="display-6"><?php echo $detail->k_koordinasi; ?></h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Kesesuaian lokasi GD/Penyulang</div>
                <div class="card-body">
                    <h1 class="display-6"><?php echo $detail->k_lokasi; ?></h1>
                </div>
            </div>
            <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Kesesuaian pengisian dengan template EAM</div>
                <div class="card-body">
                    <h1 class="display-6"><?php echo $detail->k_eam; ?></h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Kerapihan Gambar</div>
                <div class="card-body">
                    <h1 class="display-6"><?php echo $detail->k_gbr; ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <canvas id="myChart" style="width:100px;height:55px"></canvas><br>
</div>

<script>
var xValues = ["Kolom", "Perbaikan Error", "Koordinat", "Lokasi", "EAM", "Gambar"];
var yValues = [<?php echo $detail->k_kolom; ?>,
    <?php echo $detail->perbaikan_error; ?>,
    <?php echo $detail->k_koordinasi; ?>,
    <?php echo $detail->k_lokasi; ?>,
    <?php echo $detail->k_eam; ?>,
    <?php echo $detail->k_gbr; ?>
];
var barColors = ["black", "green", "red", "blue", "orange", "grey"];

new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Detail Validasi"
        }
    }
});
</script>