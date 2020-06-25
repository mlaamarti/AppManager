(function($) {
  "use strict"; // Start of use strict

        document.addEventListener("DOMContentLoaded", function(event) {
        var jg1, jg2, jg3, jg4, jg5, jg6;

        var defs1 = {
            label: "label",
            value: 65,
            min: 0,
            max: 100,
            decimals: 0,
            gaugeWidthScale: 0.6,
            pointer: true,
            pointerOptions: {
                toplength: 10,
                bottomlength: 10,
                bottomwidth: 2
            },
            counter: true,
            relativeGaugeSize: true
        }

        var defs2 = {
            label: "label",
            value: 35,
            min: 0,
            max: 100,
            decimals: 0,
            gaugeWidthScale: 0.6,
            pointer: true,
            pointerOptions: {
                toplength: 5,
                bottomlength: 15,
                bottomwidth: 2
            },
            counter: true,
            donut: true,
            relativeGaugeSize: true
        }

        jg1 = new JustGage({
            id: "jg1",
            defaults: defs1
        });


    });


    //

    var g1;
    document.addEventListener("DOMContentLoaded", function(event) {
        g1 = new JustGage({
            id: "g1",
            value: 72,
            min: 0,
            max: 100,
            donut: true,
            gaugeWidthScale: 0.6,
            counter: true,
            hideInnerShadow: true
        });

        document.getElementById('g1_refresh').addEventListener('click', function() {
            g1.refresh(getRandomInt(0, 100));
        });
    });

    ///3
    document.addEventListener("DOMContentLoaded", function(event) {
        var ggg1 = new JustGage({
            id: "ggg1",
            value: 50,
            min: 0,
            max: 100,
            title: "Target",
            label: "temperature",
            pointer: true,
            textRenderer: function(val) {
                if (val < 50) {
                    return 'Cold';
                } else if (val > 50) {
                    return 'Hot';
                } else if (val === 50) {
                    return 'OK';
                }
            },
            onAnimationEnd: function() {
                
            }
        });

        document.getElementById('ggg1_refresh').addEventListener('click', function() {
            ggg1.refresh(getRandomInt(0, 100));
            return false;
        });
    });
    ///4

    var gg1, gg2, gg3;

    document.addEventListener("DOMContentLoaded", function(event) {
        gg1 = new JustGage({
            id: "gg1",
            value: getRandomInt(350, 980),
            min: 350,
            max: 980,
            title: "Lone Ranger",
            label: "miles traveled"
        });

        gg2 = new JustGage({
            id: "gg2",
            value: 32,
            min: 50,
            max: 100,
            title: "Empty Tank",
            label: ""
        });

        gg3 = new JustGage({
            id: "gg3",
            value: 120,
            min: 50,
            max: 100,
            title: "Meltdown",
            label: ""
        });

        setInterval(function() {
            gg1.refresh(getRandomInt(350, 980));
            gg2.refresh(getRandomInt(0, 49));
            gg3.refresh(getRandomInt(101, 200));
        }, 2500);
    });

    //5
    var fg1;
    document.addEventListener("DOMContentLoaded", function(event) {
        fg1 = new JustGage({
            id: "fg1",
            title: "Font Options",
            value: 72,
            min: 0,
            minTxt: "min",
            max: 100,
            maxTxt: "max",
            gaugeWidthScale: 0.6,
            counter: true,
            titleFontColor: "red",
            titleFontFamily: "Georgia",
            titlePosition: "below",
            valueFontColor: "blue",
            valueFontFamily: "Georgia"
        });

        document.getElementById('fg1_refresh').addEventListener('click', function() {
            fg1.refresh(getRandomInt(0, 100));
        });
    });

    //6
    document.addEventListener("DOMContentLoaded", function(event) {

      var cg1, cg2, cg3, cg4, cg5, cg6;

      var cg1 = new JustGage({
        id: "cg1",
        value: getRandomInt(0, 100),
        min: 0,
        max: 100,
        title: "Custom Width",
        label: "",
        gaugeWidthScale: 0.2
      });

      var cg2 = new JustGage({
        id: "cg2",
        value: getRandomInt(0, 100),
        min: 0,
        max: 100,
        title: "Custom Shadow",
        label: "",
        showInnerShadow: true,
        shadowOpacity: 1,
        shadowSize: 5,
        shadowVerticalOffset: 10
      });

      var cg3 = new JustGage({
        id: "cg3",
        value: getRandomInt(0, 100),
        min: 0,
        max: 100,
        title: "Custom Colors",
        label: "",
        levelColors: [
          "#00fff6",
          "#ff00fc",
          "#1200ff"
        ]
      });

      var cg4 = new JustGage({
        id: "cg4",
        value: getRandomInt(0, 100),
        min: 0,
        max: 100,
        title: "Hide Labels",
        hideMinMax: true
      });


      var cg5 = new JustGage({
        id: "cg5",
        value: getRandomInt(0, 100),
        min: 0,
        max: 100,
        title: "Animation Type",
        label: "",
        startAnimationTime: 2000,
        startAnimationType: ">",
        refreshAnimationTime: 1000,
        refreshAnimationType: "bounce"
      });

   
        setInterval(function() {
          cg1.refresh(getRandomInt(0, 100));
          cg2.refresh(getRandomInt(0, 100));
          cg3.refresh(getRandomInt(0, 100));
          cg4.refresh(getRandomInt(0, 100));
          cg5.refresh(getRandomInt(0, 100));
    
        }, 2500);

    });





   


})(jQuery); // End of use strict