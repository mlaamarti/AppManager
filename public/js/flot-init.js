 $(function() {

var data11_1 = [
    [1354586000000, 153], [1364587000000, 658], [1374588000000, 198],
    [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080],
    [1414592000000, 353], [1424593000000, 749], [1434594000000, 523],
    [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]
];
 
var data11_2 = [
    [1354586000000, 53], [1364587000000, 65], [1374588000000, 98],
    [1384589000000, 83], [1394590000000, 980], [1404591000000, 808],
    [1414592000000, 720], [1424593000000, 674], [1434594000000, 23],
    [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]
];
 
$(function () {    
    var options = {
            series:{
                lines: {                         
                    fill: true
                }
            },
            xaxis: {
                mode: "time",
                 tickLength:0
            },
             yaxis: {tickLength:0},
             colors: ["#269ffb", "#26e7a5"],
            grid:{
                borderWidth:0, labelMargin:0, axisMargin:0, minBorderMargin:0  
            }
    };
 
    var plot = $.plot($("#flotcontainer1"), [data11_1, data11_2], options);  
});



// combine
 var data1 = [
        [1354586000000, 153], [1364587000000, 658], [1374588000000, 198],
        [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080],
        [1414592000000, 353], [1424593000000, 749], [1434594000000, 523],
        [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]
    ];
 
    var data2 = [
        [1354586000000, 53], [1364587000000, 65], [1374588000000, 98],
        [1384589000000, 83], [1394590000000, 980], [1404591000000, 808],
        [1414592000000, 720], [1424593000000, 674], [1434594000000, 23],
        [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]
    ];
 
    var data = [{
        label: "data1",
        data: data1,
        bars: {
            show: true,
            barWidth: 30 * 60 * 60 * 1000 * 80
        }
    },{
        label: "data2",
        data: data2,
        lines: {
            show: true
        },
        points:{
            show:true
        }
    }];
 
    var options = {
            xaxis: {
                mode: "time"
            },
              colors: ["#269ffb", "#26e7a5"],

            grid:{
              borderWidth:0, labelMargin:0, axisMargin:0, minBorderMargin:0
            }
    };
 
    var plot = $.plot($("#example-section2 #flotcontainer2"), data, options);  




    // bars
      var data3 = GenerateSeries(0);
     
    function GenerateSeries(added){
        var data3 = [];
        var start = 100 + added;
        var end = 200 + added;
 
        for(i=1;i<=20;i++){        
            var d = Math.floor(Math.random() * (end - start + 1) + start);        
            data3.push([i, d]);
            start++;
            end++;
        }
 
        return data3;
    }
 
    var options = {
            series:{
                bars:{show: true}
            },
             grid: {borderWidth:0, labelMargin:0, axisMargin:0, minBorderMargin:0},
           bars: {
            show: true,
            align: 'center',
            barWidth: 0.5,
            lineWidth: 0,
            fillColor: {
                colors: [{
                    opacity: 1.0
                }, {
                    opacity: 1.0
                }]
            },
         
             
        },            
           

    };
 
    $.plot($("#flotcontainer3"), [data3], options);  


    // marked
    function GenerateSeries(added){
        var data = [];
        var start = 100 + added;
        var end = 500 + added;
 
        for(i=1;i<=20;i++){        
            var d = Math.floor(Math.random() * (end - start + 1) + start);        
            data.push([i, d]);
            start++;
            end++;
        }
 
        return data;
    }
 
    var data1 = GenerateSeries(0);
    var data2 = GenerateSeries(10);    
 
    var markings = [
        { yaxis: { from: 0, to: 50 }, color: "#E8E8E8" },
        { yaxis: { from: 100, to: 150 }, color: "#E8E8E8" },
        { yaxis: { from: 200, to: 250 }, color: "#E8E8E8" },
        { yaxis: { from: 300, to: 350 }, color: "#E8E8E8" },
        { yaxis: { from: 400, to: 450 }, color: "#E8E8E8" },
        { yaxis: { from: 500, to: 550 }, color: "#E8E8E8" }
    ];
 
    var options = {            
             series: {
                lines: { show: true, lineWidth: 3 },
                shadowSize: 0
            },
            grid: {
                markings: markings,
               borderWidth:0, labelMargin:0, axisMargin:0, minBorderMargin:0
                
            },
            yaxis:{
                color:"#8400FF",
                min:0
            },
            xaxis:{
                color:"#8400FF"
            },
              colors: ["#269ffb", "#26e7a5"],
    };
 
    $.plot($("#example-section4 #flotcontainer4"),
        [
            {data:data1, color:"#FF7575"},
            {data:data2, color:"#75FF95"}
        ], options
    );


    // pie
     var data5 = [
        {label: "data1", data:10},
        {label: "data2", data: 20},
        {label: "data3", data: 30},
        {label: "data4", data: 40},
        {label: "data5", data: 50},
        {label: "data6", data: 60},
        {label: "data7", data: 70}
    ];
 
    var options5 = {
            series: {
                pie: {show: true}
                    }
         };
 
    $.plot($("#flotcontainerpie"), data5, options5);  


    // realtime
    var data6 = [];
var dataset6;
var totalPoints = 50;
var updateInterval = 1000;
var now = new Date().getTime();
 
 
function GetData() {
    data6.shift();
 
    while (data6.length < totalPoints) {     
        var y = Math.random() * 100;
        var temp = [now += updateInterval, y];
 
        data6.push(temp);
    }
}
 
var options6 = {
    series: {
        lines: {
            show: true,
            lineWidth: 1.2,
            fill: true
        }
    },
    xaxis: {
        mode: "time",
        tickSize: [2, "second"],
        tickFormatter: function (v, axis) {
            var date = new Date(v);
 
            if (date.getSeconds() % 20 == 0) {
                var hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
                var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
                var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
 
                return hours + ":" + minutes + ":" + seconds;
            } else {
                return "";
            }
        },
        axisLabel: "Time",
        axisLabelUseCanvas: true,
        axisLabelFontSizePixels: 12,
        axisLabelFontFamily: 'Verdana, Arial',
        axisLabelPadding: 10
    },
    yaxis: {
        min: 0,
        max: 100,        
        tickSize: 5,
        tickFormatter: function (v, axis) {
            if (v % 10 == 0) {
                return v + "%";
            } else {
                return "";
            }
        },
        axisLabel: "CPU loading",
        axisLabelUseCanvas: true,
        axisLabelFontSizePixels: 12,
        axisLabelFontFamily: 'Verdana, Arial',
        axisLabelPadding: 6
    },
    grid: {borderWidth:0, labelMargin:0, axisMargin:0, minBorderMargin:0},

    legend: {        
        labelBoxBorderColor: "#fff"
    }
};
 
$(document).ready(function () {
    GetData();
 
    dataset6 = [
        { label: "CPU", data: data6 }
    ];
 
    $.plot($("#flotcontainer6"), dataset6, options6);
 
    function update() {
        GetData();
 
        $.plot($("#flotcontainer6"), dataset6, options6)
        setTimeout(update, updateInterval);
    }
 
    update();
    });


    });