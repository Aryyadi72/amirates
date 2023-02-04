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
<div class="container" style="margin-top:20px;">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#card" aria-selected="false" role="tab"
                tabindex="-1">Card</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#chart" aria-selected="true" role="tab">Chart</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade" id="card" role="tabpanel">
            <div class="container-fluid text-center"><br>
                <div class="row">
                    <div class="col">
                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Tiang Tegangan Rendah</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->tiang_tr; ?></h1>
                                <sub class="fst-italic">* batang</sub>
                            </div>
                        </div>
                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan JTR</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->jtr; ?></h1>
                                <sub class="fst-italic">* kms</sub>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan STL TM</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->stl_tm; ?></h1>
                                <sub class="fst-italic">* kms</sub>
                            </div>
                        </div>
                        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan SR STL/TR</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->stl_tr; ?></h1>
                                <sub class="fst-italic">* kms</sub>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan APP</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->app; ?></h1>
                                <sub class="fst-italic">* pelanggan</sub>
                            </div>
                        </div>
                        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan Asesories Pelanggan : Kotak APP</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->kotak_app; ?></h1>
                                <sub class="fst-italic">* pelanggan</sub>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan Asesories Pelanggan : Kotak KWH</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->kwh; ?></h1>
                                <sub class="fst-italic">* pelanggan</sub>
                            </div>
                        </div>
                        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan Asesories Pelanggan : Kotak MCB</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->mcb; ?></h1>
                                <sub class="fst-italic">* pelanggan</sub>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan Asesories Pelanggan : Kotak CT</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->ct; ?></h1>
                                <sub class="fst-italic">* pelanggan</sub>
                            </div>
                        </div>
                        <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                            <div class="card-header">Pendataan Asesories Pelanggan : Kotak PT</div>
                            <div class="card-body">
                                <h1 class="display-6"><?php echo $detail->pt; ?></h1>
                                <sub class="fst-italic">* pelanggan</sub>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade active show" id="chart" role="tabpanel">
            <div class="container">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                <canvas id="myChart" style="width:100px;height:55px"></canvas><br>
            </div>

            <script>
            var xValues = ["Tiang TR", "JTR", "STL TM", "STL TR", "APP", "Kotak APP", "Kotak KWH", "Kotak MCB",
                "Kotak CT",
                "Kotak PT"
            ];
            var yValues = [<?php echo $detail->tiang_tr; ?>,
                <?php echo $detail->jtr; ?>,
                <?php echo $detail->stl_tm; ?>,
                <?php echo $detail->stl_tr; ?>,
                <?php echo $detail->app; ?>,
                <?php echo $detail->kotak_app; ?>,
                <?php echo $detail->kwh; ?>,
                <?php echo $detail->mcb; ?>,
                <?php echo $detail->ct; ?>,
                <?php echo $detail->pt; ?>
            ];
            var barColors = ["black", "green", "red", "blue", "orange", "grey", "fuchsia", "lime", "crimson", "cyan"];

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
                        text: "Detail Jenis Aset"
                    }
                }
            });
            </script>
        </div>
    </div>
</div>