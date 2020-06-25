
    (function($) {
     "use strict"; // Start of use strict

         window.Apex = {
        dataLabels: {
            enabled: false
        }
    };

    var spark1 = {
        chart: {
            id: 'sparkline1',
            type: 'line',
            height: 140,
            sparkline: {
                enabled: true
            },
            group: 'sparklines'
        },
        series: [{
            name: 'purple',
            data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
        }],
        stroke: {
            curve: 'smooth'
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: true,
                position: 'right'
            },
            x: {
                show: false
            }
        },
        title: {
            text: '439',
            style: {
                fontSize: '26px'
            }
        },
        colors: ['#734CEA']
    }

    var spark2 = {
        chart: {
            id: 'sparkline2',
            type: 'line',
            height: 140,
            sparkline: {
                enabled: true
            },
            group: 'sparklines'
        },
        series: [{
            name: 'green',
            data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
        }],
        stroke: {
            curve: 'smooth'
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: true,
                position: 'right'
            },
            x: {
                show: false
            }
        },
        title: {
            text: '387',
            style: {
                fontSize: '26px'
            }
        },
        colors: ['#34bfa3']
    }



    new ApexCharts(document.querySelector("#spark1"), spark1).render();
    new ApexCharts(document.querySelector("#spark2"), spark2).render();








    var optionsCircle4 = {
        chart: {
            type: 'radialBar',
            height: 280,
            width: '100%',
        },
        colors: ['#775DD0', '#00C8E1', '#FFB900'],
        labels: ['q4'],
        series: [71, 63, 77],
        labels: ['June', 'May', 'April'],
        theme: {
            monochrome: {
                enabled: false
            }
        },
        plotOptions: {
            radialBar: {
                offsetY: -30
            }
        },
        legend: {
            show: true,
            position: 'left',
            containerMargin: {
                right: 0
            }
        },
        title: {
            text: 'Growth'
        }
    }

    var chartCircle4 = new ApexCharts(document.querySelector('#radialBarBottom'), optionsCircle4);
    chartCircle4.render();

    function generateData(baseval, count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
            var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
            var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

            series.push([x, y, z]);
            baseval += 86400000;
            i++;
        }
        return series;
    }

    function getRandom() {
        return Math.floor(Math.random() * (100 - 1 + 1)) + 1;
    }


    var options = {
        chart: {
            height: 294,
            type: 'bubble',
            sparkline: {
                enabled: true
            },
        },
        plotOptions: {
            bubble: {
                dataLabels: {
                    enabled: false
                }
            }
        },
        colors: ["#734CEA", "#34bfa3", "#f4516c", "#00c5dc"],
        series: [{
                name: 'Facebook',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60
                })
            },
            {
                name: 'Twitter',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60
                })
            },
            {
                name: 'Youtube',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60
                })
            },
            {
                name: 'LinkedIn',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60
                })
            }
        ],
        fill: {
            opacity: 0.8,
            gradient: {
                enabled: false
            }
        },
        title: {
            text: 'SMR'
        },
        xaxis: {
            tickAmount: 12,
            type: 'category',
            min: -50,
            max: 850
        },
        yaxis: {
            max: 70
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#bubbleChart"),
        options
    );

    // a small hack to extend height in website sample dashboard
    chart.render().then(function() {
        var ifr = document.querySelector("#wrapper");
        if (ifr.contentDocument) {
            ifr.style.height = ifr.contentDocument.body.scrollHeight + 20 + 'px';
        }
    });

    var optionsArea = {
        chart: {
            height: 340,
            type: 'area',
            zoom: {
                enabled: false
            },
        },
        stroke: {
            curve: 'straight'
        },

        series: [{
                name: "Blog",
                data: [{
                    x: 0,
                    y: 0
                }, {
                    x: 4,
                    y: 5
                }, {
                    x: 5,
                    y: 3
                }, {
                    x: 9,
                    y: 8
                }, {
                    x: 14,
                    y: 4
                }, {
                    x: 18,
                    y: 5
                }, {
                    x: 25,
                    y: 0
                }]
            },
            {
                name: "Social Media",
                data: [{
                    x: 0,
                    y: 0
                }, {
                    x: 4,
                    y: 6
                }, {
                    x: 5,
                    y: 4
                }, {
                    x: 14,
                    y: 8
                }, {
                    x: 18,
                    y: 5.5
                }, {
                    x: 21,
                    y: 6
                }, {
                    x: 25,
                    y: 0
                }]
            },
            {
                name: "External",
                data: [{
                    x: 0,
                    y: 0
                }, {
                    x: 2,
                    y: 5
                }, {
                    x: 5,
                    y: 4
                }, {
                    x: 10,
                    y: 11
                }, {
                    x: 14,
                    y: 4
                }, {
                    x: 18,
                    y: 8
                }, {
                    x: 25,
                    y: 0
                }]
            }
        ],
        fill: {
            opacity: 1,
        },

        markers: {
            size: 0,
            style: 'hollow',
            hover: {
                opacity: 5,
            }
        },
        tooltip: {
            intersect: true,
            shared: false,
        },
        xaxis: {
            tooltip: {
                enabled: false
            },
            labels: {
                show: false
            },
            axisTicks: {
                show: false
            }
        },
        yaxis: {
            tickAmount: 4,
            max: 12,
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    color: '#78909c'
                }
            }
        },
        legend: {
            show: false
        }
    }
    var chartArea = new ApexCharts(document.querySelector('#area'), optionsArea);
    chartArea.render();

    // scatter-chart
    var options = {
        chart: {
            height: 340,
            type: 'scatter',
            zoom: {
                enabled: true,
                type: 'xy'
            }
        },

        series: [{
            name: "SAMPLE A",
            data: [
                [16.4, 5.4],
                [21.7, 2],
                [25.4, 3],
                [19, 2],
                [10.9, 1],
                [13.6, 3.2],
                [10.9, 7.4],
                [10.9, 0],
                [10.9, 8.2],
                [16.4, 0],
                [16.4, 1.8],
                [13.6, 0.3],
                [13.6, 0],
                [29.9, 0],
                [27.1, 2.3],
                [16.4, 0],
                [13.6, 3.7],
                [10.9, 5.2],
                [16.4, 6.5],
                [10.9, 0],
                [24.5, 7.1],
                [10.9, 0],
                [8.1, 4.7],
                [19, 0],
                [21.7, 1.8],
                [27.1, 0],
                [24.5, 0],
                [27.1, 0],
                [29.9, 1.5],
                [27.1, 0.8],
                [22.1, 2]
            ]
        }, {
            name: "SAMPLE B",
            data: [
                [6.4, 13.4],
                [1.7, 11],
                [5.4, 8],
                [9, 17],
                [1.9, 4],
                [3.6, 12.2],
                [1.9, 14.4],
                [1.9, 9],
                [1.9, 13.2],
                [1.4, 7],
                [6.4, 8.8],
                [3.6, 4.3],
                [1.6, 10],
                [9.9, 2],
                [7.1, 15],
                [1.4, 0],
                [3.6, 13.7],
                [1.9, 15.2],
                [6.4, 16.5],
                [0.9, 10],
                [4.5, 17.1],
                [10.9, 10],
                [0.1, 14.7],
                [9, 10],
                [12.7, 11.8],
                [2.1, 10],
                [2.5, 10],
                [27.1, 10],
                [2.9, 11.5],
                [7.1, 10.8],
                [2.1, 12]
            ]
        }, {
            name: "SAMPLE C",
            data: [
                [21.7, 3],
                [23.6, 3.5],
                [24.6, 3],
                [29.9, 3],
                [21.7, 20],
                [23, 2],
                [10.9, 3],
                [28, 4],
                [27.1, 0.3],
                [16.4, 4],
                [13.6, 0],
                [19, 5],
                [22.4, 3],
                [24.5, 3],
                [32.6, 3],
                [27.1, 4],
                [29.6, 6],
                [31.6, 8],
                [21.6, 5],
                [20.9, 4],
                [22.4, 0],
                [32.6, 10.3],
                [29.7, 20.8],
                [24.5, 0.8],
                [21.4, 0],
                [21.7, 6.9],
                [28.6, 7.7],
                [15.4, 0],
                [18.1, 0],
                [33.4, 0],
                [16.4, 0]
            ]
        }],
        xaxis: {
            tickAmount: 10,
        },
        yaxis: {
            tickAmount: 7
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#scatterchart"),
        options
    );

    chart.render();
      






    })(jQuery); // End of use strict