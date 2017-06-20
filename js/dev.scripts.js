$('#instagram').find('.slick-arrow').hide();
$(document).ready( function() {
    $('.carousel-caption p').typewriter({speed:100});
     $('.popap').magnificPopup({
       fixedContentPos: false,
       removalDelay: 500, //delay removal by X to allow out-animation
       callbacks: {
         beforeOpen: function() {
            this.st.mainClass = this.st.el.attr('data-effect');
         }
       },
       midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
     });
    
    
    
    
    
    // Inline popups
//    $('.navbar, header').magnificPopup({
//      delegate: 'a',
//     fixedContentPos: false,
//      removalDelay: 500, //delay removal by X to allow out-animation
//      callbacks: {
//        beforeOpen: function() {
//           this.st.mainClass = this.st.el.attr('data-effect');
//        }
//      },
//      midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
//    });
	$('.navbar .navbar-toggle').on('click', function() {
		if ($(this).hasClass('active')) { 
			$(this).removeClass('active');
		}
		else {
			$(this).addClass('active');
		}
	});
	$('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
	var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки

        	
            $('.navbar-collapse').removeClass('in');
        	$('.navbar-toggle').removeClass('active');

        	$('html, body').animate({ scrollTop: $(scroll_el).offset().top + 10}, 500); // анимируем скроолинг к элементу scroll_el

        }
	    return false; // выключаем стандартное действие
    });

    var positionForMenu = $('header').height();

    $(window).resize( function() {
    	positionForMenu = $('header').height();
    })
    
    $(window).scroll( function() {
    	if ($(this).scrollTop() > positionForMenu ) {
    		$('.navbar').addClass('active');
    	} 
    	else {
    		$('.navbar').removeClass('active');
    	}
    });

    $('#support .item').on('click', function() {
    	if ($(this).hasClass('active')) {
    		$(this).removeClass('active');
    		$(this).find('i').removeClass('fa-minus-circle');
    		$(this).find('i').addClass('fa-plus-circle');
    	}
    	else {
    		$(this).addClass('active');
    		$(this).find('i').removeClass('fa-plus-circle');
    		$(this).find('i').addClass('fa-minus-circle');
    	}
    });

    $('.checkbox-butt').on('click', function() {
    	if ($(this).hasClass('active')) {
    		$(this).removeClass('active');
    		$(this).find('i').removeClass('fa-check-square-o');
    		$(this).find('i').addClass('fa-square-o');
    	}
    	else {
    		$(this).addClass('active');
    		$(this).find('i').removeClass('fa-square-o');
    		$(this).find('i').addClass('fa-check-square-o');
    	}
    });
    
    $('.carousel-inner .item:first').addClass('active');
});

$('.to-show-from-scroll.left').boxLoader({
    direction:"x",
    position: "-100%",
    effect: "fadeIn",
    duration: "1s",
    windowarea: "50%"
});
$('.to-show-from-scroll.right').boxLoader({
    direction:"x",
    position: "100%",
    effect: "fadeIn",
    duration: "1s",
    windowarea: "50%"
});
$('.to-show-from-scroll.bottom').boxLoader({
    direction:"y",
    position: "100%",
    effect: "fadeIn",
    duration: "1s",
    windowarea: "50%"
});

$('.to-sroll-page-up').click(function() {
    $('body,html').animate({scrollTop:0},800);
});

jQuery(document).ready(function() {
  jQuery("a.scrollto").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
    return false;
  });
});

$('#instagram').hover(
function(){
  $(this).find(".slick-arrow").fadeIn();
},
function(){
  $(this).find(".slick-arrow").fadeOut();
});



/* Validation form */
function isValidName(name) {
    if (!(name == '')) {
        if (!(/[a-zA-ZА-Я\-а-я]+/.test(name.val()))) {
            name.parent().find('.error').fadeIn();
            return false;
        }
            name.parent().find('.error').fadeOut();
            name.parent().find('.valid').fadeIn();
            return true;
    }
    name = 'name';
    return true;
}

function isValidMail(mail){
    if(!(mail == '')) {
        if (!(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(mail.val()))) {
            mail.parent().find('.error').fadeIn();
            return false;
        }
            mail.parent().find('.error').fadeOut();
            mail.parent().find('.valid').fadeIn();
            return true;
    }
    mail = 'mail@mail.com';
    return true;
}
$('#zakaz input[type="submit"]').click(function(event){
    $(this).fadeIn(10);
    $(this).parent().find('input[type="text"]').val('');
    $(this).parent().find('.error').fadeOut(1);
    $(this).parent().find('.valid').fadeOut(1);
    $(this).parent().find('input[type="text"]').focusin();
    event.preventDefault();
});

var flag = 0;
$('#zakaz input[type="checkbox"]').on('click', function(){
    if($(this).attr('checked') != 'checked'){
        flag = 1;
        $('#zakaz input[type="checkbox"] + label span').removeClass('error-span');
    } else{
        flag = 0;
    }
});

$('#zakaz input[type="text"]').focus(function() {
    var thisIt = $(this),
        closeIt = $(this).parents('.line');
    $(function(){
      $(document).click(function(event) {
        if ($(event.target).closest(closeIt).length) return;
          if(thisIt.hasClass('name')){
              isValidName(thisIt);
          } else{
              isValidMail(thisIt);
          }
        event.stopPropagation();
      });
    });
});



$('#zakaz button').on('click', function(){
    isValidName($(this).parents('#zakaz').find(".name"));
    isValidMail($(this).parents('#zakaz').find(".mail"));
    if( flag != 1){
        $('#zakaz input[type="checkbox"] + label span').addClass('error-span');
    }
    if( isValidName($(this).parents('#zakaz').find(".name"))
        && isValidMail($(this).parents('#zakaz').find(".mail"))
        && $('#zakaz #check:checked').length == 1)
    {
        
        var msg   = {
			  mail: jQuery('.form-z input.mail').val(),
			  name: jQuery('.form-z .name').val(),
			}
        
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: msg
      }).done(function() {
            $("#zakaz").trigger("reset");
//            $('#zakaz .mfp-close').trigger('click');
            $('a.good').trigger('click');
      });
      return false;
    }
    else {
         return false;
    }
});

$('#zakaz .line').click(function(){
    $(this).find('.error').fadeOut(10);
    $(this).find('.valid').fadeOut(10);
     $(this).find('input[type="text"]').focus();
});

$('#zakaz .line input').focus(function(){
    $(this).parents('.line').find('input[type="submit"]').stop().fadeIn(10);
    $(this).parents('.line').find('input[type="submit"]').fadeIn();
})

$('#zakaz .line input').focusout(function(){
//    $(this).parents('.line').find('input[type="submit"]').stop().fadeOut(10);
})

$('#zakaz .line input[type="submit"]').mousedown(function(){
    $(this).parents('.line').find('input[type="text"]').addClass('focus');
});
$('#zakaz .line input[type="submit"]').mouseup(function(){
    $(this).parents('.line').find('input[type="text"]').removeClass('focus');
});
typewriter();