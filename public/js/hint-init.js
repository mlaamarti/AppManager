  (function($) {
    localStorage.clear();
   var enjoyhint_instance = new EnjoyHint({});

    var tip_1 = "<div class='tip'>" +
        "<div class='tip__capt'>Step1</div>" +
        "<div class='tip__text'>Write your description here</div></div>",
        tip_2 = "<div class='tip'>" +
        "<div class='tip__capt'>Step 2</div>" +
        "<div class='tip__text'>Write your description here</div></div>",
        Step
    tip_3 = "<div class='tip'>" +
        "<div class='tip__capt'>Step 3</div>" +
        "<div class='tip__text'>Write your description here</div></div>",
        tip_4 = "<div class='tip'>" +
        "<div class='tip__capt'>Step 4</div>" +
        "<div class='tip__text'>Write your description here</div></div>",
        tip_5 = "<div class='tip'>" +
        "<div class='tip__capt'>Step 5</div>" +
        "<div class='tip__text'>Write your description here</div></div>",
        tip_6 = "<div class='tip'>" +
        "<div class='tip__capt'>Step 6</div>" +
        "<div class='tip__text'>Write your description here</div></div>";

    var enjoyhint_script_steps = [{
            'next .js--tip-1': tip_1,
            "nextButton": { className: "tip__button", text: "Next" },
            showSkip: false
        },
        {
            'next .js--tip-2': tip_2,
            "nextButton": { className: "tip__button", text: "Next" },
            showSkip: false
        },
        {
            'next .js--tip-3': tip_3,
            "nextButton": { className: "tip__button", text: "Next" },
            showSkip: false
        }, {
            'next .js--tip-4': tip_4,
            "nextButton": { className: "tip__button", text: "Next" },
            showSkip: false
        }, {
            'next .js--tip-5': tip_5,
            "nextButton": { className: "tip__button", text: "Next" },
            showSkip: false
        }, {
            'next .js--tip-6': tip_6,
            "nextButton": { className: "tip__button", text: "Next" },
            showSkip: false
        }
    ];

    //set script config
    enjoyhint_instance.set(enjoyhint_script_steps);

    //run Enjoyhint script
    enjoyhint_instance.run();

    var closeBtn = $('.tip__button');

    var btnNext = $('.tip__close');

})(jQuery); 