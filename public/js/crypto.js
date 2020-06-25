    (function($) {
        // Start of use strict

 Apex.grid = {
        padding: {
            right: 0,
            left: 0
        }
    }

    Apex.dataLabels = {
        enabled: false
    }

    var randomizeArray = function(arg) {
        var array = arg.slice();
        var currentIndex = array.length,
            temporaryValue, randomIndex;

        while (0 !== currentIndex) {

            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }

    // data for the sparklines that appear below header area
    var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

    // the default colorPalette for this dashboard
    //var colorPalette = ['#01BFD6', '#5564BE', '#F7A600', '#EDCD24', '#F74F58'];
    var colorPalette = ['#00D8B6', '#008FFB', '#FEB019', '#FF4560', '#775DD0']

    var spark1 = {
        chart: {
            id: 'sparkline1',
            group: 'sparklines',
            type: 'area',
            height: 135,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            curve: 'straight'
        },
        fill: {
            opacity: 1,
        },
        series: [{
            name: 'Sales',
            data: randomizeArray(sparklineData)
        }],
        labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
        yaxis: {
            min: 0
        },
        xaxis: {
            type: 'datetime',
        },
        colors: ['#72ea99'],

    }

    var spark2 = {
        chart: {
            id: 'sparkline2',
            group: 'sparklines',
            type: 'area',
            height: 135,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            curve: 'straight'
        },
        fill: {
            opacity: 1,
        },
        series: [{
            name: 'Expenses',
            data: randomizeArray(sparklineData)
        }],
        labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
        yaxis: {
            min: 0
        },
        xaxis: {
            type: 'datetime',
        },
        colors: ['#f17312']

    }

    var spark3 = {
        chart: {
            id: 'sparkline3',
            group: 'sparklines',
            type: 'area',
            height: 135,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            curve: 'straight'
        },
        fill: {
            opacity: 1,
        },
        series: [{
            name: 'Profits',
            data: randomizeArray(sparklineData)
        }],
        labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
        xaxis: {
            type: 'datetime',
        },
        yaxis: {
            min: 0
        },
        colors: ['#008FFB'],
        //colors: ['#5564BE'],


    }




    new ApexCharts(document.querySelector("#spark1"), spark1).render();
    new ApexCharts(document.querySelector("#spark2"), spark2).render();
    new ApexCharts(document.querySelector("#spark3"), spark3).render();




    var spark4 = {
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
            text: 'Ripple',
            style: {
                fontSize: '26px'
            }
        },

        colors: ['#734CEA']
    }

    var spark5 = {
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
            text: 'Tron',
            style: {
                fontSize: '26px'
            }
        },
        colors: ['#34bfa3']
    }

    var spark6 = {
        chart: {
            id: 'sparkline3',
            type: 'line',
            height: 140,
            sparkline: {
                enabled: true
            },
            group: 'sparklines'
        },
        series: [{
            name: 'red',
            data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19]
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
        colors: ['#f4516c'],
        title: {
            text: 'EOS',
            style: {
                fontSize: '26px'
            }
        },
        xaxis: {
            crosshairs: {
                width: 1
            },
        }
    }

    var spark7 = {
        chart: {
            id: 'sparkline4',
            type: 'line',
            height: 140,
            sparkline: {
                enabled: true
            },
            group: 'sparklines'
        },
        series: [{
            name: 'teal',
            data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61]
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
        colors: ['#00c5dc'],
        title: {
            text: 'Steller',
            style: {
                fontSize: '26px'
            }
        },
        xaxis: {
            crosshairs: {
                width: 1
            },
        }
    }



    new ApexCharts(document.querySelector("#spark4"), spark4).render();
    new ApexCharts(document.querySelector("#spark5"), spark5).render();
    new ApexCharts(document.querySelector("#spark6"), spark6).render();
    new ApexCharts(document.querySelector("#spark7"), spark7).render();

    var data = []

    function getDayWiseTimeSeries(baseval, count, yrange) {
        var i = 0;
        while (i < count) {
            var x = baseval;
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

            data.push({
                x,
                y
            });
            lastDate = baseval
            baseval += 86400000;
            i++;
        }
    }

    getDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 10, {
        min: 10,
        max: 90
    })

    function getNewSeries(baseval, yrange) {
        var newDate = baseval + 86400000;
        lastDate = newDate
        data.push({
            x: newDate,
            y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
        })
    }

    function resetData() {
        data = data.slice(data.length - 10, data.length);
    }

    var options = {
        chart: {
            height: 250,
            type: 'line',
            animations: {
                enabled: true,
                easing: 'linear',
                dynamicAnimation: {
                    speed: 2000
                }
            },
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        series: [{
            data: data
        }],
        title: {
            text: 'Live Cryptocurrency Rate',
            align: 'left'
        },
        markers: {
            size: 0
        },
        xaxis: {
            type: 'datetime',
            range: 777600000,
        },
        yaxis: {
            max: 100
        },
        legend: {
            show: false
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#realtime"),
        options
    );

    chart.render();

    var dataPointsLength = 10;

    window.setInterval(function() {
        getNewSeries(lastDate, {
            min: 10,
            max: 90
        })

        chart.updateSeries([{
            data: data
        }])
    }, 2000)

    // every 60 seconds, we reset the data 
    window.setInterval(function() {
        resetData()
        chart.updateSeries([{
            data
        }], false, true)
    }, 60000)
})(jQuery); 