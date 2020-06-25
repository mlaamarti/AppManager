   (function($) {
      Apex.grid = {
        padding: {
          right: 0,
          left: 0
        }
      }
      
      Apex.dataLabels = {
        enabled: false
      }
      
      var randomizeArray = function (arg) {
        var array = arg.slice();
        var currentIndex = array.length, temporaryValue, randomIndex;
        
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
      var colorPalette = ['#00D8B6','#008FFB',  '#FEB019', '#FF4560', '#775DD0']
      
      var spark1 = {
        chart: {
          id: 'sparkline1',
          group: 'sparklines',
          type: 'area',
          height: 200,
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
        title: {
          text: '$424,652',
          offsetX: 30,
          style: {
            fontSize: '24px',
            cssClass: 'apexcharts-yaxis-title'
          }
        },
        subtitle: {
          text: 'Sales',
          offsetX: 30,
          style: {
            fontSize: '14px',
            cssClass: 'apexcharts-yaxis-title'
          }
        }
      }
      
      var spark2 = {
        chart: {
          id: 'sparkline2',
          group: 'sparklines',
          type: 'area',
          height: 200,
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
        colors: ['#f17312'],
        title: {
          text: '$235,312',
          offsetX: 30,
          style: {
            fontSize: '24px',
            cssClass: 'apexcharts-yaxis-title'
          }
        },
        subtitle: {
          text: 'Expenses',
          offsetX: 30,
          style: {
            fontSize: '14px',
            cssClass: 'apexcharts-yaxis-title'
          }
        }
      }
      
      var spark3 = {
        chart: {
          id: 'sparkline3',
          group: 'sparklines',
          type: 'area',
          height: 200,
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
        title: {
          text: '$135,965',
          offsetX: 30,
          style: {
            fontSize: '24px',
            cssClass: 'apexcharts-yaxis-title'
          }
        },
        subtitle: {
          text: 'Profits',
          offsetX: 30,
          style: {
            fontSize: '14px',
            cssClass: 'apexcharts-yaxis-title'
          }
        }
      }
      
      var monthlyEarningsOpt = {
        chart: {
          type: 'area',
          height: 260,
          background: '#eff4f7',
          sparkline: {
            enabled: true
          },
          offsetY: 20
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          type: 'solid',
          opacity: 1,
        },
        series: [{
          data: randomizeArray(sparklineData)
        }],
        xaxis: {
          crosshairs: {
            width: 1
          },
        },
        yaxis: {
          min: 0,
          max: 130
        },
        colors: ['#dce6ec'],
        
        title: {
          text: 'Total Earned',
          offsetX: -30,
          offsetY: 100,
          align: 'right',
          style: {
            color: '#7c939f',
            fontSize: '16px',
            cssClass: 'apexcharts-yaxis-title'
          }
        },
        subtitle: {
          text: '$135,965',
          offsetX: -30,
          offsetY: 100,
          align: 'right',
          style: {
            color: '#7c939f',
            fontSize: '24px',
            cssClass: 'apexcharts-yaxis-title'
          }
        }
      }
      
      
      new ApexCharts(document.querySelector("#spark1"), spark1).render();
      new ApexCharts(document.querySelector("#spark2"), spark2).render();
      new ApexCharts(document.querySelector("#spark3"), spark3).render();


      var spark6 = {
  chart: {
    id: 'sparkline6',
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
    text: 'Weekdays Sale',
    style: {
      fontSize: '18px'
    }
  },
  colors: ['#734CEA']
}

var spark7 = {
  chart: {
    id: 'sparkline7',
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
    text: 'Weekend Sale',
    style: {
      fontSize: '18px'
    }
  },
  colors: ['#34bfa3']
}



new ApexCharts(document.querySelector("#spark6"), spark6).render();
new ApexCharts(document.querySelector("#spark7"), spark7).render();




      
      var monthlyEarningsChart = new ApexCharts(document.querySelector("#monthly-earnings-chart"), monthlyEarningsOpt);
      
      
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
        colors: colorPalette,
        series: [
          {
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
        title: {
          text: 'Daily Visits Insights',
          align: 'left',
          style: {
            fontSize: '18px'
          }
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
      
      var optionsBar = {
        chart: {
          type: 'bar',
          height: 350,
          width: '100%',
          stacked: true,
        },
        plotOptions: {
          bar: {
            columnWidth: '45%',
          }
        },
        colors: colorPalette,
        series: [{
          name: "Clothing",
          data: [42, 52, 16, 55, 59, 51, 45, 32, 26, 33, 44, 51, 42, 56],
        }, {
          name: "Food Products",
          data: [6, 12, 4, 7, 5, 3, 6, 4, 3, 3, 5, 6, 7, 4],
        }],
        labels: [10,11,12,13,14,15,16,17,18,19,20,21,22,23],
        xaxis: {
          labels: {
            show: false
          },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
        },
        yaxis: {
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
        title: {
          
          align: 'left',
          style: {
            fontSize: '18px'
          }
        }
      
      }
      
      var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
      chartBar.render();
      
      
      var optionDonut = {
        chart: {
            type: 'donut',
            width: '100%'
        },
        dataLabels: {
          enabled: false,
        },
        plotOptions: {
          pie: {
            donut: {
              size: '75%',
            },
            offsetY: 20,
          },
          stroke: {
            colors: undefined
          }
        },
        colors: colorPalette,
        title: {
         
          style: {
            fontSize: '18px'
          }
        },
        series: [21, 23, 19, 14, 6],
        labels: ['Clothing', 'Food Products', 'Electronics', 'Kitchen Utility', 'Gardening'],
        legend: {
          position: 'left',
          offsetY: 80
        }
      }
      
      var donut = new ApexCharts(
        document.querySelector("#donut"),
        optionDonut
      )
      donut.render();



        ! function($) {
          
      
          var VectorMap = function() {};
      
          VectorMap.prototype.init = function() {
                  //various examples
      
                   $('#world-map').vectorMap({
                      map: 'world_mill',
                      backgroundColor:  "#fff",
                      series: {
                          regions: [{
                              values: gdpData,
      
                              scale: ['#C8EEFF', '#0071A4'],
                              normalizeFunction: 'polynomial'
                          }]
                      },
                      onRegionTipShow: function(e, el, code) {
                          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                      }
                  });
          
      
                 
      
              },
              //init
              $.VectorMap = new VectorMap, $.VectorMap.Constructor = VectorMap
      }(window.jQuery),
      
      //initializing 
      function($) {
          "use strict";
          $.VectorMap.init()
      }(window.jQuery);


    })(jQuery); // End of use strict