
! function($) {
    "use strict";

    var VectorMap = function() {};

    VectorMap.prototype.init = function() {
            //various examples

             $('#world-map').vectorMap({
                map: 'world_mill',
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
    
            $('#usa').vectorMap({
                map: 'us_aea_en',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: '#A593E0'
                    }
                }
            });
            $('#canada').vectorMap({
                map: 'ca_lcc',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: '#8CD790'
                    }
                }
            });
            $('#africa').vectorMap({
                map: 'africa_mill',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: '#8FBC94'
                    }
                }
            });
            $('#china').vectorMap({
                map: 'cn_mill',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: '#E53A40'
                    }
                }
            });
            $('#australia').vectorMap({
                map: 'au_mill',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: '#F6B352'
                    }
                }
            });
             $('#uk').vectorMap({
                map: 'uk_mill_en',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: '#F68657'
                    }
                }
            });
             $('#india').vectorMap({
                map: 'in_mill',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: '#30A9DE'
                    }
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