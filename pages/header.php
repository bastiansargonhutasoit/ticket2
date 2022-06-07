<?php include("function/bulan.php"); ?>
<?php include("function/format_rupiah.php"); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">inventory</i>
                    </div>

                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">jumlah Paket </p>
                        <h5 class="mb-0">200 Paket</h5>
                    </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">Jumlah paket <span class="text-success text-sm font-weight-bolder"><?php echo namabulan(date('m'))." ".date('Y'); ?> </span></p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">money</i>
                    </div>

                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Pendapatan dari Paket</p>
                        <h4 class="mb-0"><?php echo rupiah(2000000) ?></h4>
                    </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">Pendapatan paket <span class="text-success text-sm font-weight-bolder"><?php echo namabulan(date('m'))." ".date('Y') ?></span></p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>

                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Jumlah Tiket Terjual</p>
                        <h4 class="mb-0">3,462</h4>
                    </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0">Pendapatan tiket <span class="text-danger text-sm font-weight-bolder"><?php echo namabulan(date('m'))." ".date('Y') ?></span></p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>

                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Sales</p>
                        <h4 class="mb-0">$103,430</h4>
                    </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
                </div>
            </div>
        </div>
    </div>
</div>