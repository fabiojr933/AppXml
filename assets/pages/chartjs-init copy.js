/**
 * Theme: Syntra Admin Template
 * Author: Mannat-themes
 * chartjs
 */


(function($) {
        "use strict";
        //Sales chart

        var total = [];
        var tipo = [];
        var mes = [];
        var ano = [];

        $.ajax({
            url: base_url + "grafico/entradaSaidaMes",
            type: "POST",
            dataType: "json",
            data: {},
            success: function(data) {
                for (var i = 0; i < data.length; i++) {
                    total.push(data[i].valor);
                    mes.push(data[i].mes);
                    ano.push(data[i].ano);
                    tipo.push(data[i].tipo);
                }
            }
        });
        console.log(tipo);
        var ctx = document.getElementById("sales-chart");
        ctx.height = 150;
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                type: 'line',
                defaultFontFamily: 'Montserrat',
                datasets: [{
                    label: "Foods",
                    data: [0, 30, 10, 120, 50, 63, 10],
                    backgroundColor: 'transparent',
                    borderColor: '#b9dcec',
                    borderWidth: 3,
                    pointStyle: 'circle',
                    pointRadius: 5,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: '#b9dcec',
                }, {
                    label: "Electronics",
                    data: [0, 50, 40, 80, 40, 79, 120],
                    backgroundColor: 'transparent',
                    borderColor: '#f572a1',
                    borderWidth: 3,
                    pointStyle: 'circle',
                    pointRadius: 5,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: '#f572a1',
                }]
            },
            options: {
                responsive: true,
                tooltips: {
                    mode: 'index',
                    titleFontSize: 12,
                    titleFontColor: '#000',
                    bodyFontColor: '#000',
                    backgroundColor: '#fff',
                    titleFontFamily: 'Montserrat',
                    bodyFontFamily: 'Montserrat',
                    cornerRadius: 3,
                    intersect: false,
                },
                legend: {
                    display: false,
                    labels: {
                        usePointStyle: true,
                        fontFamily: 'Montserrat',
                    },
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                },
                title: {
                    display: false,
                    text: 'Normal Legend'
                }
            }
        });
        //bar chart
        var ctx = document.getElementById("barChart");
        ctx.height = 160;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    borderColor: "rgba(67, 107, 56, 1)",
                    borderWidth: "0",
                    backgroundColor: "rgba(102, 166, 84, 1)"
                }, {
                    label: "My Second dataset",
                    data: [28, 48, 40, 19, 86, 27, 90],
                    borderColor: "rgba(34, 56, 100, 1)",
                    borderWidth: "0",
                    backgroundColor: "rgba(34, 56, 100, 1)"
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    }

)(jQuery);