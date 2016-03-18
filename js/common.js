$.validator.addMethod('uaphone', function(value, element, params){
  var regex = /\+38 \(0[0-9]{2}\) [0-9]{3}-[0-9]{2}-[0-9]{2}/g;
  var match = value.match(regex);
  if (match!==null) {
    if (match.length === 1) return true;
  }
  return false;
});
$('input[name="phone"]').mask('+38 (999) 999-99-99');
$(document).ready(function() {
  var forms = document.getElementsByTagName('form');
  for (var i = 0; i < forms.length; i++) {
    $(forms[i]).validate({
      rules: {
        phone: {
          required: true,
          uaphone: true,
        },
        //auto: {
        //  required: true,
        //  minlength: 3
        //},
        mail_skype: {
          required: true
        }
      },
      //success:function() {
      //  $('.scr-iii__descr').show();
      //},
      messages: {
        phone: {
          required: 'Введите номер телефона',
          uaphone: 'Введите корректный номер телефона'
        },
        mail_skype: {
          required: 'Заполните поле'
        },
        //auto: {
        //  required: '',
        //  minlength: ''
        //}
      },
      submitHandler: submitForm
    });
  }
  var inputAuto = document.querySelector('.scr-iii__input[name="auto"]');
  if (inputAuto) {
    $(inputAuto).on('keyup', function (e) {
      if (this.value.length >= 3) $('.scr-iii__descr').show();
      else $('.scr-iii__descr').hide();
    });
  }
  //if($('')){
  //
  //  $('.scr-iii__descr').show();
  //}
  $('[data-init="modal"]').on('click', function() {
    var selector = $(this).attr('data-modal');
    var button_name = $(this).attr('data-Google');
    var openedModal = $(selector);
    openedModal.addClass('active');
    var toggle = $(this).attr('data-input');
    openedModal.find('.order').val(toggle);
  });
  $('.modal-close').on('click', function() {
    $(this).parent().parent().removeClass('active');
  });
  $('[data-type="modal"]').on('click', function() {
    $(this).removeClass('active');
  });
  $('.modal-wrapper').on('click', function(event) {
    event.stopPropagation();
  });
  $('.fancybox').fancybox({
    padding: 0,
    maxWidth	: 800,
    maxHeight	: 600,
    fitToView	: false,
    width		: '70%',
    height		: '70%',
    autoSize	: false,
    closeClick	: false,
    openEffect	: 'none',
    closeEffect	: 'none'
  });
  function submitForm(form, e){
    var data = $(form).serialize();
    var text = $(form).find('button').attr('data-content');

    var page = $(form).find("input[name='htmlData']").val();//для конкретной формы
    var pageWithoutSlash = page.replace('/','');
    $.ajax({
          url: 'sendmessage.php',
          type: 'POST',
          data: data,
          beforeSend: function(){
            $(form).find('input, button').attr('disabled', '');
            $(form).find('button').attr('data-content', 'Отправляем...');
          }
        })
        .done(function(response) {
          $(form).find('input, button').removeAttr('disabled');
          $(form).find("input[name='phone']").val('');    // поименно, что бы сохранить значения хиденИнпутов
          $(form).find("input[name='name']").val('');
          $(form).find("input[name='auto']").val('');
          dataLayer.push({
            'event':'FormSubmitDone',
            'virtualPageURL' : page,
            'virtualPageTitle' : pageWithoutSlash
          });

          $(form).find('button').attr('data-content',text);
          $('[data-type="modal"]').removeClass('active');
          $('#response-modal').addClass('active');
        })
        .fail(function(response) {
          console.log(response);
        });
  }
  $('.slider_reviews').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true
  });
  $('.slider_synch_big').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.slider_synch_small'
  });
  $('.slider_synch_small').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: '.slider_synch_big',
    //dots: true,
    //centerMode: true,
    focusOnSelect: true
  });



  $('#tabs').tabs();
  //$('select').selectmenu({
  //  width: 203,
  //});

  var sync1 = $(".owl-img");
  var sync2 = $('.owl-img-preview');

  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: true,
    navigationText : false,
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
    lazyLoad: true,
    lazyFollow: true,
    lazyEffect: false
  });

  sync2.owlCarousel({
    items : 6,
    itemsDesktop: false,
    itemsDesktopSmall: false,
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });

  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });

  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }

    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }
  }
  function syncPosition(el){
    var current = this.currentItem;
    sync2
        .find(".owl-item")
        .removeClass("synced")
        .eq(current)
        .addClass("synced");
    if($(".owl-img-preview").data("owlCarousel") !== undefined){
      center(current)
    }

  }

});
