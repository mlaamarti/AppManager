 $(function() {
         $('#pre-selected-options').multiSelect();
         $(":input").inputmask();
    $("#phone").inputmask({ "mask": "(999) 999-9999" });
        $("#date-container .date").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());

        $('#date-container .input-daterange').datepicker({});
        $('#date-container .disabled-date').datepicker({
            daysOfWeekDisabled: "6"
        });


 //        $(".flatpickr").flatpickr();
 //        flatpickr("#datetime", {
 //      enableTime: true,
 //    dateFormat: "Y-m-d H:i"
 // })
 $("#basicDate").flatpickr({
    enableTime: true,
    dateFormat: "F, d Y H:i"
});

$("#rangeDate").flatpickr({
    mode: 'range',
    dateFormat: "Y-m-d"
});

$("#timePicker").flatpickr({
    enableTime: true,
    noCalendar: true,
    time_24hr: true,
    dateFormat: "H:i",
});

$(".resetDate").flatpickr({
    wrap: true,
    weekNumbers: true,
});

    });