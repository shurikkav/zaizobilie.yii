$(document).ready(function () {
    if ($.browser.msie && $.browser.version < 9) {
        $(".weather_body strong:eq(1)").hide();
        $('.rate_body table tr td:first-child').next().next().hide();
        $('.rate_body table tr td:first-child').next().next().next().next().hide();
    }
    $.datepicker.setDefaults($.extend($.datepicker.regional["ru"]));
    $(".datepicker").datepicker();
    $(".chosen").chosen();

    $("#cat_show").click(function () {
        if ($(this).text() == "Развернуть") {
            $(this).text("Свернуть");
            $(".catalog_wrap").removeClass("short");
        } else {
            $(this).text("Развернуть")
            $(".catalog_wrap").addClass("short");
        }
    })

    if ($("#catalog").val() == 'catalog') {
        $(".right-column").hide();
    }

    $("#select_activity_toggler").click(function () {
        if ($("#select_activity").is('.hidden'))
            $("#select_activity").removeClass("hidden"); else
            $("#select_activity").addClass("hidden");
    });


    if ($().prettyPhoto) {
        $('a[rel^=prettyPhoto],a.urlpopup').prettyPhoto({
            social_tools: '',
            horizontal_padding: 0,
            show_title: false
        });
    }

});

function changeRegion(ID) {

    $.ajax({
        //Параметры запрос
        url    :"/?module=catalog&action=list&get_cityes=1",
        type   :"GET",
        cache  :true,
        data   :{data:ID},
        success:function (data) {
            $("#id_city").html("<option value=''></option>" + data);
            $("#id_city").trigger("liszt:updated");
        }

    }).done(function (data) {
            //Код выполняющийся после успешного запроса

        });
}

function changeRubric(ID) {

    $.ajax({
        //Параметры запрос
        url    :"/?module=catalog&action=list&get_actions=1",
        type   :"GET",
        cache  :true,
        data   :{data:ID},
        success:function (data) {
            $("#sub_rubric").html("<option value=''></option>" + data);
            $("#sub_rubric").trigger("liszt:updated");
        }

    }).done(function (data) {
            //Код выполняющийся после успешного запроса

        });
}