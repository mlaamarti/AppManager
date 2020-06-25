       (function($) {
        "use strict"; // Start of use strict
        window.Apex = {
  chart: {
    foreColor: '#ccc',
    toolbar: {
      show: false
    },
  },
  stroke: {
    width: 3
  },
  dataLabels: {
    enabled: false
  },
  tooltip: {
    theme: 'dark'
  },
  grid: {
    borderColor: "#535A6C",
    xaxis: {
      lines: {
        show: true
      }
    }
  }
};
          $(function() {
        var data = [],
            totalPoints = 300;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk

            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res;
        }

        // Set up the control widget

        var updateInterval = 40;
        $("#updateInterval").val(updateInterval).change(function() {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1) {
                    updateInterval = 1;
                } else if (updateInterval > 2000) {
                    updateInterval = 2000;
                }
                $(this).val("" + updateInterval);
            }
        });

        var plot = $.plot("#real_time", [getRandomData()], {
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: '#f284b0'
            },
            grid: {
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            lines: {
                fill: true
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            }
        });

        function update() {

            plot.setData([getRandomData()]);

            // Since the axes don't change, we don't need to call plot.setupGrid()

            plot.draw();
            setTimeout(update, updateInterval);
        }

        update();

    });




var options = {
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                horizontal: false,
                endingShape: 'rounded',
                columnWidth: '55%',
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Net Profit',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: 'Revenue',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: 'Free Cash Flow',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
            title: {
                text: '$ (thousands)'
            }
        },
        fill: {
            opacity: 1

        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands"
                }
            }
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#barchart"),
        options
    );

    chart.render();
    var options = {
        chart: {
            height: 350,
            type: 'area',
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        series: [{
            name: 'series1',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'series2',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],

        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#areaspline"),
        options
    );

    chart.render();
    var options = {
        chart: {
            width: '100%',
            type: 'pie',
        },
        labels: ['Windows', 'Mac', 'Linux', 'Android', 'Chrome OS'],
        series: [44, 55, 13, 43, 22],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 170,
                    height:200
                },
                legend: {
                    show: false
                }
            }
        }]
    }

    var chart = new ApexCharts(
        document.querySelector("#piechart"),
        options
    );

    chart.render();
    var options = {
        chart: {
            height: 350,
            type: 'area',
        },
        dataLabels: {
            enabled: false
        },
        plotOptions: {
            area: {
                isRange: true
            }
        },
        stroke: {
            curve: 'straight'
        },
        series: [{
            name: 'range',
            data: [{
                    x: new Date(1538780400000),
                    y: [6632, 6643]
                },
                {
                    x: new Date(1538782200000),
                    y: [6630, 6648]
                },
                {
                    x: new Date(1538784000000),
                    y: [6635, 6651]
                },
                {
                    x: new Date(1538785800000),
                    y: [6638, 6640]
                },
                {
                    x: new Date(1538787600000),
                    y: [6624, 6636]
                },
                {
                    x: new Date(1538789400000),
                    y: [6624, 6632]
                },
                {
                    x: new Date(1538791200000),
                    y: [6617, 6627]
                },
                {
                    x: new Date(1538793000000),
                    y: [6605, 6608]
                },
                {
                    x: new Date(1538794800000),
                    y: [6604, 6614]
                },
                {
                    x: new Date(1538796600000),
                    y: [6608, 6610]
                },
                {
                    x: new Date(1538798400000),
                    y: [6608, 6618]
                },
                {
                    x: new Date(1538800200000),
                    y: [6612, 6615]
                },
                {
                    x: new Date(1538802000000),
                    y: [6612, 6624]
                },
                {
                    x: new Date(1538803800000),
                    y: [6603, 6623]
                },
                {
                    x: new Date(1538805600000),
                    y: [6611.69, 6618.74]
                },
                {
                    x: new Date(1538807400000),
                    y: [6611, 6622.78]
                },
                {
                    x: new Date(1538809200000),
                    y: [6614.9, 6626.2]
                }
            ]
        }],

        xaxis: {
            type: 'datetime',
        },

    }

    var chart = new ApexCharts(
        document.querySelector("#range1"),
        options
    );

    chart.render();


    // heatmap
    function generateData(count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

            series.push(y);
            i++;
        }
        return series;
    }

    var data = [{
            name: '10:00',
            data: generateData(15, {
                min: 0,
                max: 90
            })
        },
        {
            name: '10:30',
            data: generateData(15, {
                min: 0,
                max: 90
            })
        },
        {
            name: '11:00',
            data: generateData(15, {
                min: 0,
                max: 90
            })
        },
        {
            name: '11:30',
            data: generateData(15, {
                min: 0,
                max: 90
            })
        },
        {
            name: '12:00',
            data: generateData(15, {
                min: 0,
                max: 90
            })
        },
        {
            name: '12:30',
            data: generateData(15, {
                min: 0,
                max: 90
            })
        },
        {
            name: '13:00',
            data: generateData(15, {
                min: 0,
                max: 90
            })
        },
        {
            name: '13:30',
            data: generateData(15, {
                min: 0,
                max: 90
            })
        }
    ]

    data.reverse()


    var options = {
        chart: {
            height: 250,
            type: 'heatmap'
        },
        dataLabels: {
            enabled: false
        },
        plotOptions: {
            heatmap: {
                colorScale: {
                    inverse: true
                }
            }
        },
        colors: ["#F3B415", "#F27036", "#663F59", "#6A6E94", "#4E88B4", "#00A7C6", "#18D8D8", '#A9D794',
            '#46AF78', '#A93F55', '#8C5E58', '#2176FF', '#33A1FD', '#7A918D', '#BAFF29'
        ],
        series: data,
        xaxis: {
            type: 'category',
            categories: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10', 'W11', 'W12', 'W13',
                'W14', 'W15'
            ]
        },


    }

    var chart = new ApexCharts(
        document.querySelector("#heatmap"),
        options
    );

    chart.render();


    // stacked
      var options = {
      chart: {
        height: 250,
        type: 'area',
        stacked: true,
        events: {
          selection: function(chart, e) {
            
          }
        },

      },
      colors: ['#008FFB', '#00E396', '#CED4DC'],
      dataLabels: {
          enabled: false
      },
      stroke: {
        curve: 'smooth'
      },

      series: [{
          name: 'Angular',
          data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
            min: 10,
            max: 60
          })
        },
        {
          name: 'Vue',
          data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
            min: 10,
            max: 20
          })
        },
        
        {
          name: 'React',
          data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
            min: 10,
            max: 15
          })
        }
      ],
      fill: {
        type: 'gradient',
        gradient: {
          opacityFrom: 0.6,
          opacityTo: 0.8,
        }
      },
      legend: {
        position: 'top',
        horizontalAlign: 'left'
      },
      xaxis: {
        type: 'datetime'
      },
    }

    var chart = new ApexCharts(
      document.querySelector("#stackedchart"),
      options
    );

    chart.render();

    /*
      // this function will generate output in this format
      // data = [
          [timestamp, 23],
          [timestamp, 33],
          [timestamp, 12]
          ...
      ]
      */
    function generateDayWiseTimeSeries(baseval, count, yrange) {
      var i = 0;
      var series = [];
      while (i < count) {
        var x = baseval;
        var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

        series.push([x, y]);
        baseval += 86400000;
        i++;
      }
      return series;
    }





    google.charts.load('current', { 'packages': ['gauge'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Process', 25],
        ]);

        var options = {
            max: 40,
            min: 10,
            width: 400,
            height: 263,
            greenFrom: 19,
            greenTo: 25,
            redFrom: 30,
            redTo: 40,
            yellowFrom: 25,
            yellowTo: 30,
            //majorTicks: 4,
            minorTicks: 5,
            animation: {
                duration: 500,
                easing: 'in',
            },
        };








        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
            data.setValue(0, 1, 20 + Math.round(15 * Math.random()));
            chart.draw(data, options);
        }, 1300);
    }

    // socialchart
     var options = {
      chart: {
        height: 350,
        type: 'line',
        stacked: false,
      },
      stroke: {
        width: [0, 2, 5],
        curve: 'smooth'
      },
      plotOptions: {
        bar: {
          columnWidth: '50%'
        }
      },
      colors: ['#3A5794', '#A5C351', '#E14A84'],
      series: [{
        name: 'Facebook',
        type: 'column',
        data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
      }, {
        name: 'Vine',
        type: 'area',
        data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
      }, {
        name: 'Dribbble',
        type: 'line',
        data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
      }],
      fill: {
        opacity: [0.85,0.25,1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: "vertical",
                    opacityFrom: 0.85,
                    opacityTo: 0.55,
                    stops: [0, 100, 100, 100]
                }
      },
      labels: ['01/01/2003', '02/01/2003','03/01/2003','04/01/2003','05/01/2003','06/01/2003','07/01/2003','08/01/2003','09/01/2003','10/01/2003','11/01/2003'],
      markers: {
        size: 0
      },
      xaxis: {
        type:'datetime'
      },
      yaxis: {
        min: 0
      },
      tooltip: {
        shared: true,
        intersect: false,
        y: {
          formatter: function (y) {
            if(typeof y !== "undefined") {
              return  y.toFixed(0) + " views";
            }
            return y;
            
          }
        }
      },
      legend: {
        labels: {
          useSeriesColors: true
        },
        markers: {
          customHTML: [
            function() {
              return '<span><i class="fab fa-facebook"></i></span>'
            }, function() {
              return '<span><i class="fab fa-vine"></i></span>'
            }, function() {
              return '<span><i class="fab fa-dribbble"></i></span>'
            }
          ]
        }
      }
    }

    var chart = new ApexCharts(
      document.querySelector("#socialchart"),
      options
    );

    chart.render();

// network response chart
 var options = {
            chart: {
                height: 350,
                type: 'bar',
                stacked: true,
                stackType: '100%'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            series: [{
                name: 'PRODUCT A',
                data: [44, 55, 41, 67, 22, 43, 21, 49]
            },{
                name: 'PRODUCT B',
                data: [13, 23, 20, 8, 13, 27, 33, 12]
            },{
                name: 'PRODUCT C',
                data: [11, 17, 15, 15, 21, 14, 15, 13]
            }],
            xaxis: {
                categories: ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4'],
            },
            fill: {
                opacity: 1
            },
            
            legend: {
                position: 'right',
                offsetX: 0,
                offsetY: 50
            },
        }

       var chart = new ApexCharts(
            document.querySelector("#stackedcolumn"),
            options
        );
        
        chart.render();

    })(jQuery); // End of use strict