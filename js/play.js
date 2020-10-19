$('.item').on('click', function() { //обработка клика по любому item;
	$('.item1').attr('id', 'ch1'); //возвращаем прежние атрибуты;
	$('.item2').attr('id', 'ch2');
	$('.item3').attr('id', 'ch3');
	$('.item4').attr('id', 'ch4');
	$('.item5').attr('id', 'ch5');
	$('.item').toggleClass('go'); //показать-скрыть каналы;
	var txt = $(this).attr('data-name');//берём название канала 
	$('.item.home span').text(txt);//ставим название канала в главную кнопку
	var fm = $(this).attr('id'); //берём переменную id выбранного канала;
	////////////////////////
	var chid = $(this).attr('id');
	if (chid == 'ch1') {
        document.getElementById('audio').src = 'https://listen.myrh.ru/id038118';
		document.getElementById('audio').play();
	}
	if (chid == 'ch2') {
        document.getElementById('audio').src = 'https://listen.myrh.ru/id038164';
		document.getElementById('audio').play();
	}
	if (chid == 'ch3') {
        document.getElementById('audio').src = 'https://listen.myrh.ru/id038163';
		document.getElementById('audio').play();
	}
	if (chid == 'ch4') {
        document.getElementById('audio').src = 'https://listen.myrh.ru/id038165';
		document.getElementById('audio').play();
	}
    if (chid == 'ch5') {
        document.getElementById('audio').src = 'https://listen.myrh.ru/id038166';
        document.getElementById('audio').play();
    }
    
	//////////////////////
	$(this).attr('id', 'stream') //меняем id выбранного канала;
	$('.home').attr('id', fm); //главной кнопке присваиваем id выбранного канала;
	//здесь же можно и работать с data-stream или вынести их в отдельный скрипт;
});
$('#home').on('click', function() {
	$('.ch').removeClass('current'); //музыка играет, если нажали на главную конпку, то снимаем выделение активного канала и отключаем поток;
	
});

$('.ch').live('click', function() {
	$('.ch').removeClass('current'); //тут снимаем выделение у неактивных и выделяем текущий канал;
	$(this).addClass('current');
	//$('.item5').fadeToggle()
});
$('.item5').live('click', function() {
	$(this).fadeOut(); //меняем иконку громкости, сюда же можно пихнуть и выкл-вкл звука;
	document.getElementById('audio').pause();
});
$('.music').live('click', function() {
	$('.item5').fadeIn()
});