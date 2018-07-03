// Avoid `console` errors in browsers that lack a console.
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

$(function() {
    /**
     * Placeholders - подсказки в полях ввода
     */
    if ($().placeholder) {
        $('input[placeholder], textarea[placeholder]').placeholder();
    }

    /**
     * Collapsorz - сворачивание/разворачивание списков
     */
    if ($().collapsorz) {
        $("ul.collapsorz").collapsorz({
            minimum: 5,
            showText: "Развернуть",
            hideText: "Свернуть",
            wrapLink: '<p class="more">'

        });
        
    }

    /**
     * Datepicker - календарь событий
     */
    if ($.datepicker) {
        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: 'Предыдущий месяц',
            nextText: 'Следующий месяц',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Нед',
            dateFormat: 'yy-m-d',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
        
        // Массив для хранения событий календаря
        events = [];

        var today = new Date();
        datepickerOnChangeMonthYear(today.getFullYear(), today.getMonth() + 1);
        
        $('.datepicker').datepicker({
            inline: true,
            showOtherMonths: true,
            changeMonth: false,
            changeYear: false,
            numberOfMonths: 1,
            yearRange: '2003:' + today.getFullYear(),
            onSelect: datepickerOnSelect,
            onChangeMonthYear: datepickerOnChangeMonthYear,
            beforeShowDay: datepickerOnbeforeShowDay
        });
    } 
    
    
    
	function namemods(namemod) {
        commmessage = $("#"+namemod+"message").val();
        codec = $("#"+namemod+"code").val();
        namec = $("#"+namemod+"name").val();
        emailc = $("#"+namemod+"email").val();
		author = $("#"+namemod+"author").val();
		idc = $("[name='contid']").val();
		idlf = $("[name='contidlf']").val();
        $.post("?module=plugins&action=post-"+namemod+"&idc="+idc, {name:namec,email:emailc,message:commmessage,code:codec,author:author,idlf:idlf},function(data) {
			$("#"+namemod+"form").css("display","block");
            if(data) {
                if(data==1) {
                    $("#"+namemod+"text").text("Данные отправлены.");
					$("#"+namemod+"form").css("display","none");
                } else {
                    if(data==2) {
                        $("#"+namemod+"text").text("Ошибка отправки данных.");
                    }
                    if(data==3) {
                        $("#"+namemod+"text").text("Не заполнены все поля");
                    }
                    if(data==4) {
                        $("#"+namemod+"text").text("Слишком большой текст");
                    }
                    if(data==5) {
                        $("#"+namemod+"text").text("Ошибка в тексте записи");
                    }
                    if(data==6) {
                        $("#"+namemod+"text").text("Сработала система АнтиСпам");
                    }
                }
                $("#"+namemod+"code").val("");
                $.post("?module=plugins&action=post-code", {code:codec,namemod_post:namemod},function(datacode) {
                    if(datacode) {
                        $("#"+namemod+"captcha").html(datacode);
                    }
                });
            }
        });
    }
	$("#commbuttom").click(function() {
		var namemod = $("#namemodcomm").val();
		namemods(namemod);
	});
	$("#lfbuttom").click(function() {
		var namemod = $("#namemodlf").val();
		namemods(namemod);
	});
	$("#qabuttom").click(function() {
		var namemod = $("#namemodqa").val();
		namemods(namemod);
	});
	$("#osbuttom").click(function() {
		var namemod = $("#namemodos").val();
		namemods(namemod);
	});
	
	$("#commbuttom_out").click(function() {
        commmessage = $("#commmessage").val();
        idc = $("#contid").val();
        codec = $("#commcode").val();
        namec = $("#namec").val();
        emailc = $("#emailc").val();
		namemod = $("#namemod").val();
        $.post("?module=plugins&action=post-"+namemod+"&idc="+idc, {name:namec,email:emailc,message:commmessage,code:codec,author:author,idlf:idlf},function(data) {
            $("#commbuttom").css('display','block');
            $("#commbuttom1").css('display','block');
            $("#commcode").css('display','block');
            $("#captcha").css('display','block');
            $("#commmessagediv").css('display','block');
            if(data) {
                if(data==1) {
                    $("#commbuttom").css('display','none');
                    $("#commbuttom1").css('display','none');
                    $("#commcode").css('display','none');
                    $("#captcha").css('display','none');
                    $("#commmessage").val('');
                    $("#commmessagediv").css('display','none');
                    $("#namecdiv").css('display','none');
                    $("#mailtofriend").css("display","none");
	$("#emailcdiv").css('display','none');
                    $("#commtext").text('Данные отправлены.');
                } else {
                    if(data==2) {
                        $("#commtext").text('Ошибка отправки данных.');
                    }
                    if(data==3) {
                        $("#commtext").text('Не заполнены все поля');
                    }
                    if(data==4) {
                        $("#commtext").text('Слишком большой текст');
                    }
                    if(data==5) {
                        $("#commtext").text('Ошибка в тексте записи');
                    }
                    if(data==6) {
                        $("#commtext").text('Сработала система АнтиСпам');
                    }
                }
                $("#commcode").val('');
                $.post("?module=plugins&action=post-code", {code:codec},function(datacode) {
                    if(datacode) {
                        $("#captcha").html(datacode);
                    }
                });
            }
        });
    });
    
    /*js для выбора архива*/
    
    $("#nom_issue").change(function(){
    	document.location.href="?module=articles&action=list&issues="+$('#nom_issue').val();
    });
    
    $("#nom_year").change(function(){
    	$(".chzn-results .h").hide();
    	year = $("#nom_year").val();
    	if (year != "0")
    		$(".y"+year).show();
    	 $("#number").val(0);
    });

    $("#number").change(function(){
    	document.location.href="?module=articles&action=list&issues="+$('#number').val();
    });

    /*тут задаем тему номера */    
    //$("#topmain h2").first().hide();
    var text =  $("#topmain h2").text();
    var link = $("#topmain h2").parent().attr("href");
    $(".top-stories h2").first().text($(".top-stories h2").first().text()+": "+text);
    $(".top-stories h2").first().click(function() {
    	document.location.href=link;
    });

    var i1 = $("#issues1 li");
    var i2 = $("#issues2 li");

    i1.first().css("display","block");
    i2.eq(0).addClass('active');
    i2.mouseover(function() {
    	var num = i2.index(this);
    	i1.hide();
    	i2.removeClass('active');
    	i1.eq(num).show();
    	i2.eq(num).addClass('active');
        return false;
    });


    //Карусель
    $('#issues2').jcarousel({
        scroll: 1
    });

    /**
     * Карусель
     * kobzarev@inforos.ru
     * 24.01.2012
     */
    if ($().jcarousel) {
        $('ul.jcarousel-skin-tango').each(function() {

            var visible = $(this).attr('data-visible') || 3;

            $(this).jcarousel({
                easing: 'easeInOutCubic',
                scroll: 1,
                visible: visible,
                wrap: 'last'
            });
        });
    }

    /**
     * Обработка битых изображений
     */
    //$('img').error(function(){
    //    $(this).attr('src', 'http://upload.wikimedia.org/wikipedia/commons/9/9a/%D0%9D%D0%B5%D1%82_%D1%84%D0%BE%D1%82%D0%BE.png');
    //});

    //$('a.link_img1:empty').hide();
    //$('ul.newslist').next('#share').hide();

    $('img:hidden').show();

});

/**
 * Выделить в календаре даты
 */
function datepickerOnbeforeShowDay(date) {
    var pdate = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
    if ($.inArray(pdate, events) > -1) {
        return [true, 'selected', 'Посмотреть публикации за выбранную дату'];
    }
    return [false, ''];
}

/**
 * Переход на выбранную дату при клике на
 * дате в календаре
 */
function datepickerOnSelect(text, obj) {
    document.location = "?module=articles&action=list" +"&year=" + obj.selectedYear + "&month=" + (obj.selectedMonth + 1) + "&day=" + obj.selectedDay;
}

/**
 * Заполнить массив датами, послав Ajax-запрос
 * при изменении года или месяца
 */
function datepickerOnChangeMonthYear(year, month) {

    var path = "?module=plugins&action=get-dates&year=" + year + "&month=" + month;

    // Делать запрос синхронно
    $.ajaxSetup({ async: false });

    // Получить данные при помощи JSON
    $.getJSON(path, function(data) {

        // Добавить полученные данные в массив событий
        $.each(data, function(index, value) {
            events.push(value);
        });

    });
}

ymaps.ready(function () {

    // По умолчанию ставим Москву
    var latitude = 0.000000;
    var longitude = 0.000000;
    var geocode = 1;
    var balloon = '';

    

    balloon += '<b>'+$("#firm_name").text()+'</b><Br>';
    balloon += $("#firm_address").text();

    var myMap = new ymaps.Map("YMapsID", {
        center: [55.76, 37.64],
        zoom: 10,
        type: "yandex#map",
        behaviors: ["default", "scrollZoom", "ruler"]
    });

    // Добавить контролы
    myMap.controls.add("mapTools").add("typeSelector");

    // Геокодирование
    if (geocode) {
        ymaps.geocode($("#firm_address").text()).then(function (res) {
            var coordinates = res.geoObjects.get(0).geometry.getCoordinates();
            var myPlacemark = new ymaps.Placemark(
                    coordinates, {
                        iconContent: "1",
                        balloonContent: balloon
                    }, {
                        hideIconOnBalloonOpen: true
                    }
            );
            myMap.geoObjects.add(myPlacemark);

            myMap.panTo(
                coordinates, {
                    flying: true
                }
            );
        });
    } else {
        var myPlacemark = new ymaps.Placemark(
            [latitude, longitude], {
                iconContent: "1",
                balloonContent: balloon
            }, {
                hideIconOnBalloonOpen: true
            }
        );
        myMap.geoObjects.add(myPlacemark);
    }
});