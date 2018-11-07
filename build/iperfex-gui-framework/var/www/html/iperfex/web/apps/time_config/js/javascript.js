$(document).ready(function() {

    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();

    syncStatus();

    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat:'dd M yy'
    });

     

     $( "#sync" ).change(function() {
            syncStatus();
        });


    setInterval(function() {
    	var browser_date = new Date();
    	var server_date = new Date();
    	server_date.setTime(browser_date.getTime() - serv_msecdiff);
         var curr_year = server_date.getFullYear();

        var curr_month = server_date.getMonth() ; //Months are zero based
        if (curr_month < 10)
            curr_month = "0" + curr_month;

        var curr_date = server_date.getDate();
        if (curr_date < 10)
            curr_date = "0" + curr_date;

        var curr_hour = server_date.getHours();
        if (curr_hour < 10)
            curr_hour = "0" + curr_hour;

        var curr_min = server_date.getMinutes();
        if (curr_min < 10)
            curr_min = "0" + curr_min;

        var curr_sec = server_date.getSeconds();     
        if (curr_sec < 10)
            curr_sec = "0" + curr_sec;

        var newtimestamp = curr_year + "-" + curr_month + "-" + curr_date + " " + curr_hour + ":" + curr_min + ":" + curr_sec;

    	$('#SERVER_TIME').text(newtimestamp);
    }, 500);
});

function syncStatus(){
    if($('#sync').is(":checked")){
       $("#datepicker").prop('disabled', 'disabled');
       $("#datepicker").css("background-color","rgba(128, 128, 128, 0.25)");
       $("select[name='ServerDate_Hour']").prop('disabled', 'disabled');
       $("select[name='ServerDate_Hour']").css("background-color","rgba(128, 128, 128, 0.25)");
       $("select[name='ServerDate_Minute']").prop('disabled', 'disabled');
       $("select[name='ServerDate_Minute']").css("background-color","rgba(128, 128, 128, 0.25)");
       $("select[name='ServerDate_Second']").prop('disabled','disabled');
       $("select[name='ServerDate_Second']").css("background-color","rgba(128, 128, 128, 0.25)");
       $("select[name='TimeZone']").prop('disabled', false);
       $("select[name='TimeZone']").css("background-color","white");  

    }else{
       $("#datepicker").prop('disabled', false);
       $("#datepicker").css("background-color","white");
       $("select[name='TimeZone']").prop('disabled', 'disabled');
       $("select[name='TimeZone']").css("background-color","rgba(128, 128, 128, 0.25)"); 
       $("select[name='ServerDate_Hour']").prop('disabled', false);
       $("select[name='ServerDate_Hour']").css("background-color","white");
       $("select[name='ServerDate_Minute']").prop('disabled', false);
       $("select[name='ServerDate_Minute']").css("background-color","white");
       $("select[name='ServerDate_Second']").prop('disabled',false);
       $("select[name='ServerDate_Second']").css("background-color","white");
    }
}