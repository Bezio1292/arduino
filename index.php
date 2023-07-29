<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <link href="./index-files/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="w-100 primary-color-style" style="height:70px;">

    </div>
    <div class="container">
        <div class="row ">
            <h1 class="fw-bold"><i class="fa-solid fa-circle-info m-1"> </i>Przesyłane dane</h1>

            <div class="col-12 col-md-6  p-3">
                <div class="item primary-color-style h-100">
                    <div class="row p-2 primary-darker-color-style">
                        <div class="col-11 fs-2" id="data-name">
                            Napięcie <span class="ms-2 fw-bold">3.0V</span>
                        </div>
                        <div class="col-1 fs-3 d-flex justify-content-end align-items-center">
                            <i class="fa-solid fa-signal"></i>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-4 ">
                            <div class="col-12 fs-5">Maximum</div>
                            <div class="col-12 fs-2" id="data-value-max">3.3V</div>
                            <div class="col-12 fs-5">Minimum</div>
                            <div class="col-12 fs-2" id="data-value-min">2.9V</div>
                        </div>
                        <div class="col-8 ">
                            Ostatnie 24h
                            <div id="chart-voltage" class=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6  p-3">
                <div class="item primary-color-style h-100">
                    <div class="row p-2 primary-darker-color-style">
                        <div class="col-11 fs-2" id="data-name">
                            Wilgotność <span class="ms-2 fw-bold">20%</span>
                        </div>
                        <div class="col-1 fs-3 d-flex justify-content-end align-items-center">
                            <i class="fa-solid fa-signal"></i>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-4 ">
                            <div class="col-12 fs-5">Maximum</div>
                            <div class="col-12 fs-2" id="data-value-max">23%</div>
                            <div class="col-12 fs-5">Minimum</div>
                            <div class="col-12 fs-2" id="data-value-min">16%</div>
                        </div>
                        <div class="col-8 ">
                            Ostatnie 24h
                            <div id="chart-humid" class=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/00798403f6.js" crossorigin="anonymous"></script>
    <script type="module" src="index-files/js/chart.js"></script>
</body>

</html>