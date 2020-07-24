(function($) {
  "use strict"; // Start of use strict

  // nav
    $(document).ready(function() {
      $("#top-nav-list").metisMenu();
       var $this = $('#top-nav-list'), resizeTimer, self = this;
      var initCollapse = function(el) {
        if ($(window).width() >= 768) {
          this.find('li').has('ul').children('a').off('click');
        }
      }
      // $(window).resize(function() {
      //     clearTimeout(resizeTimer);
      //     resizeTimer = setTimeout(self.initCollapse($this), 250);
      // });


      // search
       $("#searchs").click(function() {
            $(".main-wrap").toggleClass('move');
            $("#search-container").toggleClass('opacity-on');
            $(".page").toggleClass('overflow-x');
        });
        $("#search-close").click(function() {
            $(".main-wrap").removeClass('move')
            $("#search-container").toggleClass('opacity-on');
            $(".page").toggleClass('overflow-x');
        });
    });
    // end nav
    $(document).ready(function() {
        $('.notification-close').click(function() {
            $('.notification').hide(1000);
            /* Act on the event */
        });
        $('.drawer').click(function() {
            $('.notification').show(1000);
        });
    });
    // loader
          setTimeout(function(){
            $('body').addClass('loaded');

          }, 500);
    // end loader

   $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){

    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500, function(){
        $('.dropdown').removeClass('open');
        $('.dropdown').find('.dropdown-toggle').attr('aria-expanded','false');
    });

  });

   window.FontAwesomeConfig = {
        searchPseudoElements: true
    }


    // ***
    // Accounts JS

        // edit accounts
       $('.edit_account').click(function () {

           var id = $(this).parents('td').data('id');
           var id_edit  = $('#id');
           var email_edit = $('#email_edit');
           var ip_edit = $('#ip_edit');
           var type_edit = $('#type_edit');
           var country_edit = $('#country_edit');
           var active = $('#radio-20');
           var suspend = $('#radio-21');
           var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

           // Get Information about Account
           $.ajax({
               url: '/account/get',
               type: 'POST',
               data: {_token: CSRF_TOKEN, id: id},
               dataType: 'JSON',
               success: function (data) {

                   id_edit.attr("value", data[0].id);
                   email_edit.attr("value", data[0].email);
                   ip_edit.attr("value", data[0].ip);
                   type_edit.val(data[0].type).change();
                   country_edit.val(data[0].country).change();

                   if (data[0].status == 0) {
                       suspend.attr("checked", true);
                   } else {
                       active.attr("checked", true);
                   }
               }
           });
       });

    // Delete accounts
    $('.delete_account').on('click',function () {
        var id = $(this).parents('td').data('id');
        $('#id_delete').attr("value",id);
    });

    // ***
    // Ads Manager

        // Update Ads
        $('.Update_Property').on('click',function () {
            var id = $(this).parents('td').data('id');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            // Ads Info Id
            var id_ads                  = $('#id_ads');
            var id_admob                = $('#id_admob_edit');
            var application             = $('#application_edit');
            var type                    = $('#type_edit');
            var ads_text                = $('#ads_text_edit');
            var banner_admob            = $('#banner_admob_edit');
            var interstitial_admob      = $('#interstitial_admob_edit');
            var native_admob            = $('#native_admob_edit');
            var reward_admob            = $('#reward_admob_edit');
            var banner_facebook         = $('#banner_facebook_edit');
            var interstitial_facebook   = $('#interstitial_facebook_edit');
            var native_facebook         = $('#native_facebook_edit');
            var native_banner_facebook  = $('#native_banner_facebook_edit');
            var medium_rectangle_facebook = $('#medium_rectangle_facebook_edit');
            var fullrate_admob            = $('#fullrate_admob_edit');
            var fullrate_facebook         = $('#fullrate_facebook_edit');
            var acc_facebook              = $('#acc_facebook_edit');
            var email_admob               = $('#email_admob_edit');
            var numberClick               = $('#numberClick_U');
            var active_ads                = $('#radio-20');
            var suspend_ads               = $('#radio-21');
            var copy_url                  = $('#url_copy');


            $.ajax({
                url: '/ads-manager/getadsbyid',
                type: 'POST',
                data: {_token: CSRF_TOKEN, id: id},
                dataType: 'JSON',
                success: function (data) {

                    id_ads.val(data[0].id);
                    type.selectpicker('val',data[0].type);
                    application.selectpicker('val',data[0].packageName);
                    $('#package_app').val(data[0].packageName);

                    copy_url.val(window.location.host+'/storage/apps/'+data[0].packageName.split(".").join("_")+'/app-ads.txt');

                    // Admob info
                    id_admob.val(data[0].id_admob);
                    ads_text.val(data[0].ads_text_admob);
                    banner_admob.val(data[0].banner_admob);
                    interstitial_admob.val(data[0].interstitial_admob);
                    native_admob.val(data[0].native_admob);
                    reward_admob.val(data[0].reward_admob);
                    numberClick.val(data[0].numberClick);

                    // facebook info
                    banner_facebook.val(data[0].banner_facebook);
                    interstitial_facebook.val(data[0].interstitial_facebook);
                    native_facebook.val(data[0].native_facebook);
                    native_banner_facebook.val(data[0].native_banner_facebook);
                    medium_rectangle_facebook.val(data[0].medium_rectangle_facebook);

                    // full rate
                    fullrate_admob.val(data[0].fillrate_admob);
                    fullrate_facebook.val(data[0].fillrate_facebook);

                    // account
                    acc_facebook.selectpicker('val',data[0].email_fb);
                    email_admob.selectpicker('val',data[0].email_admob);

                    if(data[0].status)
                        active_ads.prop("checked", true);
                    else
                        suspend_ads.prop("checked", true);
                }
            });

        });

        // Delete Ads
        $('.delete_ads').on('click',function () {
            var id = $(this).parents('td').data('id');
            $('#id_delete').attr("value",id);
        });

    //***
    // Home JS

    // About Application
    $('.about_application').on('click',function () {
        var id = $(this).parents('td').data('id');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var ads_status_alert = $('.ads_status_alert');
        var ads_status = $('.ads_status');


        // Console Info Id
        var packagename_m       = $('.packagename_m');
        var developer_m         = $('.developer_m');
        var type_m              = $('.type_m');
        var category_m          = $('.category_m');
        var install_m           = $('.install_m');
        var reviw_m             = $('.reviw_m');
        var date_p_m            = $('.date_p_m');
        var date_p_u            = $('.date_p_u');
        var current_version_m   = $('.current_version_m');
        var email_m             = $('.email_m');
        var description_m       = $('.description_m');
        var age_m               = $('.age_m');
        var icon_m              = $('.icon_m');
        var title_m             = $('.title_m');
        var status_m            = $('.status_m');

        // Ads Manager
        var fullrate_a_m                    = $('.fullrate_a_m');
        var fullrate_f_m                    = $('.fullrate_f_m');
        var ads_status_m                    = $('.ads_status_m');
        var email_admob_m                   = $('.email_admob_m');
        var email_facebook_m                = $('.email_facebook_m');
        var ads_type_m                      = $('.ads_type_m');
        var id_admob_m                      = $('.id_admob_m');
        var banner_admob_m                  = $('.banner_admob_m');
        var interstitial_admob_m            = $('.interstitial_admob_m');
        var reward_admob_m                  = $('.reward_admob_m');
        var ads_text_m                      = $('.ads_text_m');
        var native_admob_m                  = $('.native_admob_m');
        var banner_facebook_m               = $('.banner_facebook_m');
        var interstitial_facebook_m         = $('.interstitial_facebook_m');
        var native_facebook_m               = $('.native_facebook_m');
        var native_banner_facebook_m        = $('.native_banner_facebook_m');
        var meduim_rectangle_facebook_m     = $('.meduim_rectangle_facebook_m');


        // Get Information about Account
        $.ajax({
            url: '/home/about',
            type: 'POST',
            data: {_token: CSRF_TOKEN, id: id},
            dataType: 'JSON',
            success: function (data) {


                icon_m.attr("src",data[0].icon);
                title_m.html(data[0].title);
                const date1 = new Date();
                const date2 = new Date(data[0].created_at);
                const diffTime = Math.abs(date2 - date1);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                age_m.html(diffDays-1);
                packagename_m.html('<span style="color:green">PackageName -&gt; </span>' + '<a target="_blank" href="https://play.google.com/store/apps/details?id='+data[0].packageName +'">'+ data[0].packageName +'</a>');
                developer_m.html('<span style="color:green">Developer Name -&gt; </span>' + data[0].developerName);
                type_m.html('<span style="color:green">Type -&gt; </span>' + data[0].type);
                category_m.html('<span style="color:green">Category -&gt; </span>' + data[0].category);
                install_m.html('<span style="color:green">Installs -&gt; </span>' + data[0].installs);
                reviw_m.html('<span style="color:green">Review -&gt; </span>' + data[0].review);
                date_p_m.html('<span style="color:green">Date Publish -&gt; </span>' + data[0].created_at);
                date_p_u.html('<span style="color:green">Date Update -&gt; </span>' + data[0].updated_at);
                current_version_m.html('<span style="color:green">Current Version -&gt; </span>' + data[0].currentVersion);
                email_m.html('<span style="color:green">Email -&gt; </span>' + data[0].email);
                description_m.val(data[0].description);

                if (data[0].status)
                    status_m.html('<span class="badge badge-success">Active</span>');
                else
                    status_m.html('<span class="badge badge-danger">suspended</span>');

                if(data[1] == undefined){
                    ads_status_alert.show();
                    ads_status.hide();
                }else{
                    ads_status_alert.hide();
                    ads_status.show();

                    if (data[1].status)
                        ads_status_m.html('Active');
                    else
                        ads_status_m.html('suspended');

                    fullrate_a_m.html("Fill Rate Admob -> " + data[1].fillrate_admob + " %");
                    fullrate_f_m.html("Fill Rate Facebook -> " + data[1].fillrate_facebook + " %");
                    ads_type_m.html(data[1].type);
                    id_admob_m.html('<span style="color:#eb4235">ID ADMOB -&gt; </span>' + data[1].id_admob);
                    banner_admob_m.html('<span style="color:#eb4235">BANNER ADMOB -&gt; </span>' + data[1].banner_admob);
                    interstitial_admob_m.html('<span style="color:#eb4235">INTERSTITIAL ADMOB -&gt; </span>' + data[1].interstitial_admob);
                    reward_admob_m.html('<span style="color:#eb4235">REWARD ADMOB  -&gt; </span>' + data[1].reward_admob);
                    ads_text_m.html('<span style="color:#eb4235">ADS TEXT -&gt; </span>' + data[1].ads_text_admob);
                    native_admob_m.html('<span style="color:#eb4235">NATIVE ADMOB -&gt; </span>' + data[1].native_admob);
                    email_admob_m.html(data[2].email);
                    email_facebook_m.html(data[3].email);

                    banner_facebook_m.html('<span style="color:#584399">BANNER_FACEBOOK -&gt; </span>' + data[1].banner_facebook);
                    interstitial_facebook_m.html('<span style="color:#584399">INTERSTITIAL FACEBOOK -&gt; </span>' + data[1].interstitial_facebook);
                    native_facebook_m.html('<span style="color:#584399">NATIVE FACEBOOK -&gt; </span>' + data[1].native_facebook);
                    native_banner_facebook_m.html('<span style="color:#584399">NATIVE BANNER FACEBOOK -&gt; </span>' + data[1].native_banner_facebook);
                    meduim_rectangle_facebook_m.html('<span style="color:#584399">MEDIUM RECTANGLE FACEBOOK -&gt; </span>' + data[1].medium_rectangle_facebook);
                }

            }
        });

    });

    // Delete Application
    $('.delete_application').on('click',function () {
        var id = $(this).parents('td').data('id');
        $('#id_delete').attr("value",id);
    });

    // load data application
    $('.c_load_lm').click(function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '/home/update',
            type: 'POST',
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            beforeSend: function() {
                $('.c_load_lm').hide();
                $('.load_lm').show();
            },
            complete: function(data){
                $('.c_load_lm').show();
                $('.load_lm').hide();

                window.location.href = 'home';
            }
        });
    });

    // Update My Ads
    // load data application
    $('.Update_Custom_Ads').click(function () {

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var id = $(this).parents('td').data('id');

        var type        = $('.type_edit');
        var application = $('.application_edit');
        var id_app      = $('#application_edit');
        var id_ads      = $('.id_edit');
        var listAds     = $('.list_ads');
        var active_ads  = $('#radio-20');
        var suspend_ads = $('#radio-21');
        var type_ads = $('.type_ads');
        var about = $('#about');

        $.ajax({
            url: '/my-ads/getById',
            type: 'POST',
            data: {_token: CSRF_TOKEN, id: id},
            dataType: 'JSON',
            success: function (data) {
                application.val(data[0][0].id_application);
                id_ads.val(data[0][0].id);
                type.val(data[0][0].type);
                type_ads.val(data[0][0].type);
                id_app.selectpicker('val',data[1][0].packageName);
                listAds.selectpicker('val',data[0][0].list_apps);
                about.val(data[0][0].about);
                if(data[0][0].status)
                    active_ads.prop("checked", true);
                else
                    suspend_ads.prop("checked", true);
            }
        });
    });

    // Delete Application
    $('.delete_myads').on('click',function () {
        var id = $(this).parents('td').data('id');
        $('#id_delete').attr("value",id);
    });

})(jQuery); // End of use strict
