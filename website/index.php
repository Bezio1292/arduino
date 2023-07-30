<?php
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="./index-files/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="w-100 primary-color-style" style="height:70px;">
        <h1 class="p-2">Arduino Control Center</h1>
    </div>

    <div class="container">


        <div class="row">
            <div class="col-12 p-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae interdum nisl. Vestibulum mollis, nibh ac molestie posuere, ante sem varius justo, ac efficitur nisl metus vitae mauris. Aenean convallis, leo rhoncus condimentum pharetra, ex nisl commodo libero, sed finibus ipsum ligula quis nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce hendrerit efficitur euismod. Mauris dapibus malesuada metus. Curabitur sollicitudin pellentesque enim a vehicula. Phasellus sodales aliquet auctor. Donec at nisl purus. Vivamus tincidunt vitae leo et dignissim. Nullam et venenatis est, vitae lacinia dui. Praesent eleifend eros sed condimentum ultricies. Nam varius auctor erat, nec pharetra tortor blandit vel. Duis varius lorem in risus vehicula ornare.
            </div>
        </div>


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


        <div class="row">
            <div class="col-12 p-3">
                <div class="item primary-color-style h-100">
                    <div class="row p-2 primary-darker-color-style">
                        <div class="col-11 fs-2" id="data-name">
                            ServoMotor Controler
                        </div>
                        <div class="col-1 fs-3 d-flex justify-content-end align-items-center">
                            <i class="fa-solid fa-signal"></i>
                        </div>
                    </div>
                    <div class="row p-2 justify-content-center">
                        <div id="servomotor-container" class="col-12 col-md-5">
                            <div id="servomotor"></div>
                        </div>
                        <div class="slidecontainer">
                            <input type="range" min="0" max="180" value="0" class="slider" id="servomotorSlider">
                        </div>
                        <div>
                            Czas wykonywania:
                            <input id="durationInput" type="number" />
                            <button id="addStepBtn">Dodaj krok</button>
                            <button id="previewStepsBtn">Podgląd</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/00798403f6.js" crossorigin="anonymous"></script>
    <script type="module" src="index-files/js/chart.js"></script>
    <script src="index-files/js/servomotor.js"></script>
</body>

</html>