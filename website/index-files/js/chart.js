import CONFIG from '../../../../config.json' assert {type: 'json'};
var url = CONFIG.arduino.arduinoApiUrl;

function fetchHistoryData(dataName, target) {
    var chartData = new Array();
    fetch(url + 'getData.php?history=' + dataName, {
        credentials: "same-origin"
    }).then(function (response, fetchData) {
        return response.json();
    }).then(function (fetchData) {
        fetchData.forEach(d => {
            chartData.push([new Date(d[1]), parseInt(d[0])]);
        });
        google.charts.load('current', {
            packages: ['corechart', 'line']
        });
        google.charts.setOnLoadCallback(function () {
            drawBasic(target, chartData);
            $(window).resize(function () {
                drawBasic(target, chartData);
            });
        });
    }).catch(function (err) {
        console.warn('Something went wrong.', err);
    });
}
fetchHistoryData("voltage", "chart-voltage");
fetchHistoryData("temperature", "chart-humid");

/*google.charts.load('current', {
    callback: function() {
        drawBasic();
        $(window).resize(drawBasic);
    },
    packages: ['corechart', 'line']
});*/


//google.charts.load('current', {packages: ['corechart', 'line']});
//google.charts.setOnLoadCallback(drawBasic);

function drawBasic(target, chartData) {
    var data = new google.visualization.DataTable();
    data.addColumn('date', 'Godzina');
    data.addColumn('number', '');

    data.addRows(chartData);
    var options = {
        hAxis: {
            textStyle: {
                color: 'white'
            },
            baselineColor: 'none',
            gridlineColor: 'none',
            textPosition: 'none'
        },
        vAxis: {
            textStyle: {
                color: 'white',
                fontSize: '12'
            },
            gridlineColor: 'none',
            baselineColor: 'none'
        },
        legend: {
            position: 'none'
        },
        backgroundColor: 'none',
        height: '140',
        lineWidth: 4,
        colors: ['#fff'],
        chartArea: {
            width: '80%'
        },
        width: '100%'
    };

    var chart = new google.visualization.LineChart(document.getElementById(target));
    chart.draw(data, options);
}