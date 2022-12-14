var MinPhoto;
var BigPhoto;

var lastscroll = $(window).scrollTop();
var timer_auth_tel_call_countdown = '';

$(document).ready(function (e) {

  /* Установка на полях телефонной маски */
  activate_tel_mask('input[data-set-tel-mask=y]');
  
  /* Если пользователь не подтвердил свой воозраст, то помечаем body соответствующим классом */
  let accept_age = document.cookie.match('(^|;)\\s*accept_age\\s*=\\s*([^;]+)');
  if (accept_age && accept_age.length > 0) {
      accept_age = accept_age.pop();
  } else {
      accept_age = '';
  }
  if(accept_age != 'Y') $('body').addClass('no_accept_age');

  /* Показ окна "Подтвердите свой возраст" на возрастной странице (где присутствует css-класс 'full_page_for_age_18_plus') */
  if ($('.full_page_for_age_18_plus').length > 0) {
      window_age_show();
  }

  /* Помечаем возрастные ссылки */
  $('.element-adult-disabled a, a.element-adult-disabled, .element-adult-disabled button, .element-adult-disabled [data-item=button]').addClass('adult-link');

  /* Отключаем атрибут onclick в возрастных ссылках */
  $('.adult-link').each(function(){
      if($(this).attr('onclick')) {
          $(this).attr('data-off-onclick', $(this).attr('onclick')).removeAttr('onclick');
      }
  });

  /* Нажатие на возрастные ссылки */
  activate_adult_links('body');

  /* Запрет перетаскивания возрастных элементов */
  $('.element-adult-disabled img').css('pointer-events', 'none');
  $('.element-adult-disabled').on('dragstart', function(event){ 
      event.preventDefault();
  });

  /* Авторизация по телефону */
  let ar_auth_tel_steps = new Array('telephone_step_1', 'telephone_step_2');
  $('#modalLogin [data-item=btn_submit]').on('click', function(){
    if($('#modalLogin input[name=auth_type]').length > 0 && ar_auth_tel_steps.indexOf($('#modalLogin input[name=auth_type]').val()) != -1) {
       accept_tel_number_for_tel_auth('#modalLogin');
       return false;
    }
 });
 $('#id_form_login [data-item=btn_submit]').on('click', function(){
    if($('#id_form_login input[name=auth_type]').length > 0 && ar_auth_tel_steps.indexOf($('#id_form_login input[name=auth_type]').val()) != -1) {
       accept_tel_number_for_tel_auth('#id_form_login');
       return false;
    }
 });
 $.mask.definitions['x'] = '[{0,1,2,3,4,5,6,9}]';
 $("#modalLogin .customphone").mask('(x99) 999-99-99',{autoclear: false});
 $("#id_form_login .customphone").mask('(x99) 999-99-99',{autoclear: false});

  $(".zoom").SmartPhoto({
    animationSpeed: 200
  });

  initSwiper(new Swiper(".BrendSlider", {
    slidesPerView: 2,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 10,
      },
      1200: {
        slidesPerView: 7,
        spaceBetween: 10,
      },
      1500: {
        slidesPerView: 9,
        spaceBetween: 15,
      },
    },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  }),".BrendSlider");

  initSwiper(new Swiper(".sliderAdres", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    autoHeight: false,
    breakpointsBase: "container",
    breakpoints: {
      280: {
        slidesPerView: 1
      },
      560: {
        slidesPerView: 2
      },
      840: {
        slidesPerView: 3
      }
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
    on: {
      afterInit: function (data) {
        let activenum = $(".allAdrBasket .adritem.active").parent().index();
        data.slideTo(activenum, 0);
        AdrBasket(0);
      }
    },
  }),".sliderAdres");

  initSwiper(new Swiper(".dashblock .bestBrends", {
    slidesPerView: 1,
    spaceBetween: 16,
    loop: false,
    autoHeight: false,
    breakpointsBase: "container",
    breakpoints: {
      150: {
        slidesPerView: 1
      },
      300: {
        slidesPerView: 2
      },
      450: {
        slidesPerView: 3
      },
      600: {
        slidesPerView: 4
      },
      750: {
        slidesPerView: 5
      }
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    }
  }),".dashblock .bestBrends");

  initSwiper(new Swiper(".dashblock .dashFavItems", {
    slidesPerView: 1,
    spaceBetween: 16,
    loop: false,
    autoHeight: false,
    breakpointsBase: "container",
    breakpoints: {
      200: {
        slidesPerView: 1
      },
      400: {
        slidesPerView: 2
      },
      600: {
        slidesPerView: 3
      },
      800: {
        slidesPerView: 4
      }
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    }
  }),".dashblock .dashFavItems");

  initSwiper(new Swiper(".categoriesSlider", {
    init: false,
    slidesPerView: "auto",
    loop: false,
    freeMode: true,
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: false,
    }
  }),".categoriesSlider")

  initSwiper(new Swiper(".TovarSlider", {
    init: false,
    slidesPerView: 1,
    spaceBetween: 8,
    loop: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    breakpointsBase: "container",
    breakpoints: {
      526: {
        slidesPerView: 1,
        spaceBetween: 8,
      },
      526: {
        slidesPerView: 2,
        spaceBetween: 8,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 8,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 16,
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 16,
      },
    },
    navigation: {
      nextEl: ".button-next-up",
      prevEl: ".button-prev-up",
    },
  }),".TovarSlider");

  initSwiper(new Swiper(".SliderInText", {
    init: false,
    loop: false,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: ".swiper-pagination",
    }
  }),".SliderInText");


  initSwiper(new Swiper(".BigSlider", {
    init: false,
    loop: true,
    autoHeight: true,
    calculateHeight:true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: ".paginationArr",
      type: "fraction",
    },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  }),".BigSlider");

  initSwiper(MinPhoto = new Swiper(".MinPhoto", {
    observer: true,
    observeParents: true,
    slidesPerView: 5,
    spaceBetween: 10,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  }),".MinPhoto");

  initSwiper(BigPhoto = new Swiper(".BigPhoto", {
      thumbs: {
        swiper: MinPhoto,
      },
      pagination: {
        el: ".numslid",
        type: "fraction",
      },
  }),".BigPhoto");

  initSwiper(new Swiper(".tabs", {
    slidesPerView: "auto",
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  }),".tabs");

  window.addEventListener('scroll', function(e){
    let objhead = $('.mobiletop').css("display")=="none" ?  $('header') : $('.mobiletop');
    window.requestAnimationFrame(function() {
      if ($(".catBtn").hasClass("collapsed")) {
        objhead.css(
            "top",
            Math.min(Math.max(
                Math.round(parseInt(objhead.css("top")) + window.lastscroll - window.scrollY),
                -(objhead.height())
            ), 0)+"px"
        );
      }
      if ($("div").is(".sticky")) {
        $(".sticky").css(
          "top",
          Math.min(Math.max(
              Math.round(parseInt($(".sticky").css("top")) + window.lastscroll - window.scrollY),
              ($(".sticky").outerHeight() < window.innerHeight) ? 0 : -($(".sticky").outerHeight() - window.innerHeight)
          ), objhead.height())+"px"
        );
      }
      window.lastscroll = window.scrollY;
      bottomBtnCard();
    });
  });

  $(".catBtn, .darkcloze").click(function (e) {
    $(".CatalogDesctop .container").css("height", window.innerHeight - 140 + "px");
    $(".CatalogMobile .accordion").css("height", window.innerHeight - 110 + "px");
    if ($(".catBtn").hasClass("collapsed")) {
      $("body").css("overflow", "hidden");
    } else {
      $("body").removeAttr("style");
    }
  });

  $(".catLeftScroll .nav-item").mouseenter(function () {
    var targ = $(this).attr("data-target");
    if (!$(targ).hasClass("activeCat")) {
      $(".catRight.activeCat").removeClass("activeCat");
      $(targ).addClass("activeCat");
      $(".CatalogDesctop .categoriesDesctop .nav-item").removeClass("active");
      $(this).addClass("active");
    }
  });

  $("select.newselect").select2({
    templateResult: formatState,
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  $(".filter .collapse").on("hidden.bs.collapse show.bs.collapse", function () {
    clozeDopBtn();
  });

  $("#categories").on("show.bs.collapse", function () {
    $("body").addClass("collapseoverflow");
  });
  $("#categories").on("hidden.bs.collapse", function () {
    $("body").removeClass("collapseoverflow");
  });

  questionCity();

  $('#FindCity').on('input', function() {

    let str = $(this).val();

    chCityInput(str);
  });

  $('body').on('click', '.password-control', function () {
    let target = $(this).siblings('input[name*="password"]');

    if (target.length) {
      if (target.attr('type') == 'password') {
        $(this).addClass('view');
        target.attr('type', 'text');
      } else {
        $(this).removeClass('view');
        target.attr('type', 'password');
      }
    }
    return false;
  });

  if($("#modalpl").length){
    let iscookie = document.cookie.split(";").filter((i) => (i.split("=")[0].trim() == "modalpl"));
    let arrmodals = iscookie[0] ? iscookie[0].split("=")[1].split("|") : [];
    let thispage = $("#modalpl").attr("data-page");
    let ifpage = arrmodals.filter((i) => i == thispage);

    if(ifpage.length==0){
      let dateYear= new Date();
      dateYear.setFullYear(dateYear.getFullYear() + 1);
      arrmodals.push(thispage);
      document.cookie= `modalpl=${arrmodals.join("|")}; path=/; expires=${dateYear.toUTCString()}`;
      $('#modalpl').modal('show');
    }
  }
});

$("body").on("change",".payvariant input", function () {
  let valpay = $(this).val();
  localStorage.setItem("PAY", valpay);
  $(`.linet[data-pay]`).hide();
  $(`.linet[data-pay=${valpay}]`).show();
});

$(".js-range-slider").ionRangeSlider({
  onChange: function (data) {
    let polemin = $(data.input).parents(".range").find(".poleMin");
    let polemax = $(data.input).parents(".range").find(".poleMax");
    let arrrange = $(data.input).val().split(";");
    polemin.attr("value", arrrange[0]);
    polemax.attr("value", arrrange[1]);
  },
});

$(".filter input").on("input", function () {
  let nameinp = $(this).attr("name") + $(this).val();

  if ($(".dopbtn").attr("data-name") != nameinp) {
    $(".dopbtn").attr("data-name", nameinp);
    var top = $(this).parents(".filter").position();
    $(".dopbtn").css({ top: top.top });
    $(".dopbtn").fadeIn(200);
  }
});

function clozeDopBtn() {
  $(".dopbtn").fadeOut(200);
  $(".dopbtn").removeAttr("data-name");
}

function resetFilter(formReset) {
  $(formReset).find(".filter input:checkbox").prop("checked", false);
  clozeDopBtn();
  formReset.submit();
}

function formatState(state) {
  if (!state.id) {
    return state.text;
  }
  if (state.title) {
    $state = $("<span>" + state.text + "<b class='price'>" + state.title + "</b></span>");
  } else {
    $state = $("<span>" + state.text + "</span>");
  }
  return $state;
}

function ajaxBasket(obj, type) {
  let inp = $(obj).parents(".lBasketItem").find(".qty");
  let id = inp.attr("name");
  let dataArt = inp.attr("data-art");
  let dataName = inp.attr("data-name");
  let dataPrice = inp.attr("data-price");
  let dataMark = inp.attr("data-mark");

  let count = Number(inp.val());

  $(".countInp").css("pointer-events", "none");
  $(obj).parents(".lBasketItem").find(".loading").css("display", "block");

  if (type == "minus") {
    if (inp.val() > 0) {
      inp.val(count - 1);
      countcartf(inp, "min");
      dataLayer.push({
        event: "ecomRemove",
        ecommerce: {
          currencyCode: "RUB",
          add: {
            products: [
              {
                id: dataArt,
                name: dataName,
                price: dataPrice,
                quantity: 1,
                brand: dataMark,
                category: "",
              },
            ],
          },
        },
      });
      postBasket(id, inp.val());
    }
  }
  if (type == "plus") {
    if (inp.val() < 10000) {
      inp.val(count + 1);
      countcartf(inp, "plus");
      dataLayer.push({
        event: "ecomAdd",
        ecommerce: {
          currencyCode: "RUB",
          add: {
            products: [
              {
                id: dataArt,
                name: dataName,
                price: dataPrice,
                quantity: 1,
                brand: dataMark,
                category: "",
              },
            ],
          },
        },
      });
      postBasket(id, inp.val());
    }
  }
  if (type == "delete") {
    inp.val(0);
    countcartf(inp, "del");
    dataLayer.push({
      event: "ecomRemove",
      ecommerce: {
        currencyCode: "RUB",
        add: {
          products: [
            {
              id: dataArt,
              name: dataName,
              price: dataPrice,
              quantity: 1,
              brand: dataMark,
              category: "",
            },
          ],
        },
      },
    });
    postBasket(id, inp.val());
  }
}

function cartFormSubmit() {
  $("#basketform").submit();
}

function postBasket(id=null, count=null) {
  var mindboxCart = { productList: [] };
  $.post(window.location.href, {
    use_ajax: "Y",
    action: "recalcbasket",
    id: id,
    count: count
  }).done(function (data) {
    if ($.trim(data) == "emptycard") {
      let htmlempty = `
        <div class="basketItems">
          <div class="col-md-12 text-center p-3">
              <span class="display-4 d-block text-primary">Вы не выбрали ни одного товара</span>
              <div class="mb-4 lead">Добавьте товары в корзину.</div>
              <a href="/" class="btn btn-secondary btn-move-ico shadow-hover" style="width: 280px;margin:auto">
                <span>Перейти на главную</span>
                <i class="fas fa-home"></i>
              </a>
          </div>
        </div>
      `;
      $("#basketform").html(htmlempty);
      $("#promoajax").remove();
      $("#orderform").remove();
      $("#ordercalc").remove();
      $("#baskettop").find(".count").remove();
      $("#baskettopprice").find(".summ").html("0₽");
    } else {
      let tempDom = $("<output>").append($.parseHTML(data));
      $("#basketform").html(tempDom.find("#ajax_basket_items").html());
      $("#formdata").html(tempDom.find("#ajax_formdata").html());
      $("#baskettop").find(".count").html(tempDom.find("#ajax_basket_count").html());
      $("#baskettopprice").find(".summ").html(tempDom.find("#ajax_basket_price").html());
      if (typeof tempDom.find("#ajax_alert").html() != "undefined") {
        alertshow(tempDom.find("#ajax_alert").html(), "danger");
      }
      if(id!=null && count!=null){
        reloadcourier();
        $("#promoajax").html(tempDom.find("#ajax_promo").html());
      }

      // mindbox: updating cart data
      var mindboxCartData = tempDom.find("#mindboxCart").text();
      if (mindboxCartData) {
        mindboxCart = JSON.parse(mindboxCartData);
      }
    }

    // mindbox: SetCartSocItemList
    if (mindboxCart) {
      mindbox("async", {
        operation: "SetCartSocItemList",
        data: mindboxCart,
      });
    }
  });
}


function bottomBtnCard(updatebtn = false){
  if ($("#bottomBtnCard").length) {
    let cardBuy = $(".rightCard .cardBuy[data-active]:visible");
    let dataactive = cardBuy.attr("data-active");
    let blprice = cardBuy.find(".price").html();
    let imgb = $(".BigPhoto").find("img")[0];
    let name = $("h1.zagH").html();
    let opis = $(".cardNametext").html();
    let bottomcardbuy = $("#bottomBtnCard").find(".cardBuy");
    if ($("#bottomBtnCard").attr("data-active") != dataactive ) {
      bottomcardbuy.html(cardBuy.html());
      bottomcardbuy.removeAttr("style");
      bottomcardbuy.find(".price").remove();
      bottomcardbuy.find(".btnB").prepend('<div class="price">' + blprice + "</div>");
      bottomcardbuy.prepend('<div class="name"><span>' + name + "</span><p>" + opis + "</p></div>");
      bottomcardbuy.prepend('<div class="itemImg"></div>');
      $(imgb).clone().appendTo(bottomcardbuy.find(".itemImg"));
      $("#bottomBtnCard").attr("data-active", dataactive);
    }
    if(updatebtn){
      let cardBuynHtml = $(".rightCard .cardBuy[data-active]:visible").find(".btn").html();
      bottomcardbuy.find(".btn").html(cardBuynHtml);
    }
    let topcardBuy = cardBuy.offset().top - lastscroll;
    if (topcardBuy < -100) {
      $("#bottomBtnCard").addClass("active");
    } else {
      $("#bottomBtnCard").removeClass("active");
    }

    //Перезапуск возрастных ссылок
    activate_adult_links("#bottomBtnCard");
  }
}

function setSity(){
  var dateYear= new Date();
  dateYear.setFullYear(dateYear.getFullYear() + 1);
  document.cookie= 'questionCity=true; path=/; expires=' + dateYear.toUTCString();
  $(".questionCity").remove();
}

function questionCity(){
  let iscookie = document.cookie.split(";").filter(function(i) {
    if (String(i.split("=")[0]).trim() == "questionCity") {
      return true
    }else{
      return false
    }
  });

  let htmlq = `
  <div class="questionCity">
    <span>Мы правильно определили ваше местоположение?</span>
    <button class="btn-primary" onclick="setSity()">Да</button>
    <button class="btn-primary" data-toggle="modal" data-target="#modalCity">Нет</button>
  </div>`;

  if(iscookie.length == 0){
    $(".selectCity").append(htmlq);
  }

}

var timerCityInput;
function chCityInput(str = ""){
  clearTimeout(timerCityInput);
  $(".regionInModal").remove();
  if($(".cityModal .loading").length == 0){
    $(".cityModal").append(`<div class="loading"><span>Поиск...</span> <i class="fa fa-spinner fa-spin"></i></div>`);
  }
  if(str){
    $(".citysearch button").html('<i class="fas fa-sync-alt"></i> СБРОСИТЬ');

    var url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address";
    var token = "87834f38875ff9dfe0b8336c4568b3b63f91e083";
    var options = {
        method: "POST",
        mode: "cors",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token " + token
        },
        body: JSON.stringify({
          query: str,
          locations: [
            {
              "country": "Россия"
            },
            {
                "country": "Беларусь"
            },
            {
                "country": "Казахстан"
            }
          ],
          from_bound: { "value": "city" },
          to_bound: { "value": "settlement" }
        })
    }

    timerCityInput = setTimeout(() => {
      fetch(url, options)
      .then(response => response.text())
      .then(result => updateSearchCity(JSON.parse(result)))
      .catch(error => console.log("error", error));
    }, 500);
  }else{
    $('#FindCity').val("");
    $(".citysearch button").html('<i class="fas fas fa-search"></i> ПОИСК');
    $(".cityModal .loading").remove();
  }
}


var objSearcjcity = {};
function updateSearchCity(obj){
  objSearcjcity = {};
  let htmlpuncts = "";
  $.each(obj.suggestions, function () {
    let namePunct = this.data.settlement ? this.data.settlement : this.data.city;
    let fiasId = this.data.settlement_fias_id ? this.data.settlement_fias_id : this.data.city_fias_id;
    htmlpuncts += `<a onclick="changeCity(0,'${fiasId}')" class="nav-link"><b>${namePunct}</b> (${this.value})</a>`;
    objSearcjcity[fiasId] = this.data;
  });

  $(".cityModal .loading").remove();
  $(".cityModal").append(`<div class="regionInModal"><h5 class="zagH h5 hdark">Найдено: <b class="text-primary">${obj.suggestions.length}</b></h5><div class="contentSearchCity">${htmlpuncts}</div></div>`);
}

function changeCity(id = 0, fias = "") {
  let sendobj = {};
  if(id>0){
    sendobj = {id:id};
  }
  if(fias!=""){
    sendobj = {dadata:JSON.stringify(objSearcjcity[fias])};
  }
  var req1 = new JsHttpRequest();
  req1.onreadystatechange = function () {
    if (req1.readyState == 4 && req1.responseJS) {
      if(req1.responseJS.delivery_by_select == "0"){
        alertshow("Ошибика распознования населенного пункта", "danger");
      }else{
        setSity();
        window.location.reload();
      }
    }
  };
  req1.open("POST", "/request.php?mode=front&item=socolor_ru_eshop&action=getgeoselected", true);
  req1.send(sendobj);
}

function modalLogin(type="normal"){
  $("#modalLogin .modal-body .buyProf").remove();
  if(type=="prof"){
    $("#modalLogin .modal-body").prepend('<p class="buyProf">Этот товар только для профессионального использования, вы можете <a href="/users/register.html?prof=1">зарегистрироваться как профессионал</a>, или авторизоваться</p>');
  }
  $('#modalLogin').modal('show');
}


function AdrBasket(type = 0){
  if(type == 0){
      $(".allAdrBasket").slideUp(0);
      $(".editAdrBasket").slideUp(0);
      $(".allAdrBasket").removeClass("op");
      $(".editAdrBasket").removeClass("op");
      $(".saveAdrBasket .btnAdr button").html(`<span>Другой адрес</span><i class="fas fa-chevron-down"></i>`);
  }
  if(type == 1){
    if($(".allAdrBasket").css("display")=="none" && $(".editAdrBasket").css("display")=="none"){
      $(".allAdrBasket").slideDown(300);
      $(".saveAdrBasket .btnAdr button").html(`<span>Скрыть адреса</span><i class="fas fa-chevron-up"></i>`);
    }else{
      $(".allAdrBasket").slideUp(300);
      $(".editAdrBasket").slideUp(300);
      $(".saveAdrBasket .btnAdr button").html(`<span>Другой адрес</span><i class="fas fa-chevron-down"></i>`);
    }
  }
  if(type == 2){
    if($(".editAdrBasket").css("display")=="none"){
      $(".allAdrBasket").slideUp(300);
      $(".editAdrBasket").slideDown(300);
    }else{
      $(".allAdrBasket").slideDown(300);
      $(".editAdrBasket").slideUp(300);
    }
  }
}


function initSwiper(obj,str){
  let Sliders = $(str);
  if(Sliders.length){
    $.each( Sliders, function(i, n){
      let slider = $(n);
      let colSlid = slider.find(".swiper-slide").length;
      if(colSlid>1){
        if(Object.prototype.toString.call(obj) === '[object Array]') {
          obj[i].init();
        }else if(Object.prototype.toString.call(obj) === '[object Object]'){
          obj.init();
        }
      }
    });
  }
}

var orderinputs = 
$('.orderinputs input[name=firstname]')
.add('.orderinputs input[name=surname]')
.add('.orderinputs input[name=name3]')
.add('.orderinputs input[name=phone]')
.add('.orderinputs input[name=email]')
.add('.orderinputs textarea[name=note]');

if(orderinputs.length && sessionStorage){
  orderinputs.each(function(){
    let name = $(this).attr("name");
    let val = $(this).val();
    let storage = sessionStorage.getItem(name);
    if(storage && val != storage){
      $(this).val(storage);
    }
  })
  orderinputs.change(function(e) {
    let name = $(this).attr("name");
    let val = $(this).val();
    sessionStorage.setItem(name,val);
  });
}

/**
 * Обходит товары в блоках из сервиса Диджинетики и блокирует ссылки во взрослых товарах, если пользователь не подтвердил свой возраст
 */
var timer_check_dap = '';
function check_digi_adult_products()
{
    /* Флаг подтверждённости возраста */
    let accept_age = 'Y';
    if($('body').hasClass('no_accept_age')) accept_age = 'N';
 
    /* Если возраст подтверждён, то обход товаров не производим */
    if(accept_age == 'Y') return false;
     
    /* Обходим товары с некоторой задержкой (задержка из-за вывода товаров) */
    if(typeof(timer_check_dap) == 'number') clearTimeout(timer_check_dap);
    setTimeout(function(){
         $('.digi-product.is_adult').each(function(){
             if($(this).hasClass('element-adult-disabled')) return;
 
             $(this).addClass('element-adult-disabled');   
             
             /* Помечаем возрастные ссылки */
             $(this).find('a, button, [data-item=button]').addClass('adult-link');
 
             /* Отключаем атрибут onclick в возрастных ссылках */
             $(this).find('.adult-link').each(function(){
                 if($(this).attr('onclick')) {
                     $(this).attr('data-off-onclick', $(this).attr('onclick')).removeAttr('onclick');
                 } else if ($(this).prop('tagName') == 'BUTTON') {
                     /* В button c пустым onclick добавляем показ окна и обрыв других накинутых onclick-событий  */
                     $(this).attr('data-off-onclick', '/**/');
                     $(this).attr('onmousedown', 'window_age_show(); event.stopImmediatePropagation(); return false;');   
                 }
             });
 
             /* Нажатие на возрастные ссылки */
             $(this).find('.adult-link').click(function(e){
                 /* Проверка класса нужна, т.к класс может уйти после подтверждения возраста, тогда показ окна не нужен */
                 if($(this).hasClass('adult-link')) 
                 {
                     /* Показ окна "Подтвердите свой возраст" */
                     window_age_show();
 
                     e.stopImmediatePropagation();
                     return false;   
                 }
             });
 
             /* Запрет перетаскивания возрастных элементов */
             $(this).find('img').css('pointer-events', 'none');
             $(this).on('dragstart', function(e){ 
                 e.preventDefault();
             });
         });
    }, 1500);   
}
 
/**
 * Выводит окно "Подтвердите свой возраст"
 * @param string redirect_url_after_accept - адрес страницы, на которую должен перенаправиться пользователь после подтверждения возраста
 * @param bool window_for_materials - окно используется для материалов (баннеры, и т.п.). 'true' - да, 'false' - нет (используется для товаров)
 */
function window_age_show(redirect_url_after_accept = '', window_for_materials = false)
{
    var selWinBlock = '#windowAgeBlock';
  
    /* Добавление окна на страницу */
    if($(selWinBlock).length <= 0) {
          $('body').append(`
          <div class="windowAgeBlock" id="windowAgeBlock" style="display: none;">
              <div class="windowAge">
                  <div class="btnClose" onclick="window_age_close(); return false;"></div>
                  <div class="blockContent">
                      <div class="wTitle">Подтвердите свой возраст</div>
                      <div class="wDesc" data-item="sub_title">
                          Данный товар предназначен только для посетителей, достигших возраста 18 лет!
                      </div>
                      <div class="wButtons">
                          <button class="btn-primary btn" onclick="window_age_accept(); return false;">Да, мне есть 18 лет</button>
                          <button class="btn-secondary btn" onclick="window_age_close(); return false;">Нет</button>
                      </div>
                  </div>
              </div>
              <input type="hidden" name="redirect_url_after_accept" value="">
          </div>
          `);
    }

    if(typeof(window_for_materials) == 'boolean' && window_for_materials == true) {
        //Подзаголовок окна для материала
        $(selWinBlock).find('[data-item=sub_title]').html('Данный материал предназначен только для посетителей, достигших возраста 18 лет!');
    } else {
        //Подзаголовок окна для товара
        $(selWinBlock).find('[data-item=sub_title]').html('Данный товар предназначен только для посетителей, достигших возраста 18 лет!');
    }
  
    /* Обновление url перенаправления */
    if(typeof(redirect_url_after_accept) != 'string') redirect_url_after_accept = '';
    $(selWinBlock).find('[name=redirect_url_after_accept]').val(redirect_url_after_accept);
     
    /* Показ окна */
    $(selWinBlock).fadeIn(300);
}
  
/**
  * Закрывает окно "Подтвердите свой возраст"
  */
function window_age_close()
{
      var selWinBlock = '#windowAgeBlock';   
      $(selWinBlock).fadeOut(300); 

      return false;
}
  
/**
  * Подтверждение возраста в окне "Подтвердите свой возраст"
  */
function window_age_accept()
{
    var selWinBlock = '#windowAgeBlock';  

    /* Установка кук на 10 дней */
    let cookieDate = new Date(Date.now() + (86400e3 * 7));
    cookieDate = cookieDate.toUTCString();
    document.cookie = "accept_age=Y; path=/; expires=" + cookieDate;
  
    /* Включаем ранее отключённый атрибут onclick в возрастных ссылках */
    $('.adult-link').each(function(){
        if($(this).attr('data-off-onclick')) {
            $(this).attr('onclick', $(this).attr('data-off-onclick')).removeAttr('data-off-onclick').removeAttr('onmousedown');
        }
    });
  
    /* Убираем блур и связные классы */
    $('.no_accept_age, .element-adult-disabled, .blur-adult-product, .has-18-plus, .adult-link').removeClass('no_accept_age element-adult-disabled blur-adult-product has-18-plus adult-link');
  
    /* Закрытие окна */
    window_age_close();
  
    /* Перенаправление на запрошенную пользователем (адрес сохраняется в момент вызова показа окна) страницу */
    let redirect_url = $(selWinBlock).find('[name=redirect_url_after_accept]').val();
    if(redirect_url != '') window.location.href = redirect_url;
  
    return false;
}

/**
  * Запускает работу возрастных ссылок (элементы с css-классом .adult-link), при нажатии на 
  * которые появляется окно "Подтвердите свой возраст"
  * 
  * @param string|object - селектор родительского блока, содержащего возрастные ссылки
  */
function activate_adult_links(parent_selector)
{
    /* Нажатие на возрастные ссылки */
    $(parent_selector).find('.adult-link').off('click.adult');
    $(parent_selector).find('.adult-link').on('click.adult', function(e){
        /* Проверка класса нужна, т.к класс может уйти после подтверждения возраста, тогда показ окна не нужен */
        if($(this).hasClass('adult-link')) 
        {
            //Ссылка для перенаправления после подтверждения возраста
            let redirect_url_after_accept = '';

            /*
            Флаг "Окно для материалов"
            Используется для установки особых подзаголовков при нажатии на баннеры (для товаров используется другой подзаголовок)
            */
            let window_for_materials = false;
            if ($(this).prop('data-banner') == 'y' || $(this).closest('[data-banner=y]').length > 0) {
                window_for_materials = true;
            }

            /* Показ окна "Подтвердите свой возраст" */
            window_age_show(redirect_url_after_accept, window_for_materials);
 
            e.stopImmediatePropagation();
            return false;   
        }
    });
}

/**
 * Устанавливает на текстовые поля маску телефона
 * @param string|object selInputs - селектор или объект текстового поля
 */
function activate_tel_mask(selInputs)
{
    $(selInputs).each(function(){
        let selOneInput = $(this);

        $(selOneInput).attr('placeholder', '+_ (___) ___-____');
        $(selOneInput).attr('maxlength', 20);

        //Стандартный текст ошибки поля
        let def_error_tooltip = '';
        if ($(selOneInput).parent().find('.invalid-tooltip').length > 0) {
            def_error_tooltip = $(selOneInput).parent().find('.invalid-tooltip').text();
        }
        $(selOneInput).attr('data-def-invalid-tooltip', def_error_tooltip);

        //Обновление текста ошибки поля
        $(selOneInput).off('refresh_error_tooltip');
        $(selOneInput).on('refresh_error_tooltip', function(e){
            if ($(selOneInput).parent().find('.invalid-tooltip').length > 0) {
                let error_tooltip = $(selOneInput).attr('data-def-invalid-tooltip');
                if ($(selOneInput).hasClass('num_error')) {
                    error_tooltip = 'Номер указан не полностью или с ошибкой';
                }
                $(selOneInput).parent().find('.invalid-tooltip').html(error_tooltip);
            }
        });

        //Установка шаблона (форматирование введённого номера)
        $(selOneInput).off('set_templage');
        $(selOneInput).on('set_templage', function(e){
            let telNum_original = String($(this).val()).trim();
            let telNum = telNum_original.replace(/[^0-9]/g, '');

            //Код страны
            let countryCode = telNum.substring(0,1);

            //Максимальная длинна цифрового значения
            let numMexLength = 13;
            if(countryCode == '7' || countryCode == '8') numMexLength = 11;
            
            //Обрезка длинных номеров (максимум может быть numMexLength символов)
            if(telNum.length > numMexLength) telNum = telNum.substring(0, numMexLength);

            //Проверка ошибки в номере
            let errorNum = false;
            if(telNum.length > 0 && (telNum.length < 11 || telNum.length > numMexLength)) 
            {
                errorNum = true;
                $(this).addClass('num_error is-invalid');
            }
            else $(this).removeClass('num_error is-invalid');
           
            if (errorNum == true)
            {
                $(this).val(telNum_original);
            }
            else
            {
                //Форматируем номер по формату '+X (XXX) XXX-XXXX'
                if (telNum.length == 11) 
                {
                    //Если номер введён через 8, то заменяем 8 на 7, т.к это российский номер по привычке наранный через 8927....
                    if(countryCode == '8') countryCode = '7';

                    telNum = '+' + countryCode + ' (' + telNum.substring(1,4) + ') ' + telNum.substring(4,7) + '-' + telNum.substring(7,11);  
                }
                else if(telNum != '')
                {
                    if (telNum.length == 12)
                    {
                        //Беларусь. Формат номера: 375 XX XXX-XX-XX
                        if(telNum.substring(0,3) == '375') {
                            telNum = telNum.substring(0,3) + ' ' + telNum.substring(3,5) + ' ' + telNum.substring(5,8) + '-' + telNum.substring(8,10) + '-' + telNum.substring(10,12);  
                        }
                        //Киргизия. Формат номера: 996 (XXX) XXXXXX
                        else if(telNum.substring(0,3) == '996') {
                            telNum = telNum.substring(0,3) + ' (' + telNum.substring(3,6) + ') ' + telNum.substring(6,8) + '' + telNum.substring(8,10) + '' + telNum.substring(10,12);  
                        }
                    }

                    if(telNum[0] != '8') telNum = '+' + telNum;
                }

                $(this).val(telNum);
            }
        });

        //Начальная установка шаблона
        $(selOneInput).trigger('set_templage'); 

        //Сброс шаблона (сброс форматирования)
        $(selOneInput).off('clear_templage');
        $(selOneInput).on('clear_templage', function(e){
            let telNum = String($(this).val());
            telNum = telNum.replace(/[^0-9+]/g, '');
            $(this).val(telNum);

            //Удаление css-класса ошибки (если она имеется)
            $(this).removeClass('num_error is-invalid');
        });

        //Изменение значения
        $(selOneInput).off('change.tel_mask');
        $(selOneInput).on('change.tel_mask', function(e){
            //Форматирование номера
            $(selOneInput).trigger('set_templage');   
            //Обновление текста ошибки 
            $(selOneInput).trigger('refresh_error_tooltip');   
        });

        //Нажатие клавиши. Очистка поля от ненужных символов
        $(selOneInput).off('keyup.tel_mask');
        $(selOneInput).on('keyup.tel_mask', function(e){
            let telNum = String($(this).val());
            telNum = telNum.replace(/[^0-9+\-\(\) ]/g, '');
            $(this).val(telNum);
        });

        //Фокус
        $(selOneInput).off('focus.tel_mask');
        $(selOneInput).on('focus.tel_mask', function(){
            //Сброс форматирования номера
            $(selOneInput).trigger('clear_templage');
        });

        //Потеря фокуса
        $(selOneInput).off('blur.tel_mask');
        $(selOneInput).on('blur.tel_mask', function(){
            //Форматирование номера
            $(selOneInput).trigger('set_templage');    
            //Обновление текста ошибки 
            $(selOneInput).trigger('refresh_error_tooltip');   
        });
    });
}

/**
 * Выбор вкладки в форме авторизации 
 * @param int selected_tab_index - номер выбранной влкадки (нумерация начинается с нуля)
 * @param string|object sel_btn - селектор выбранной вкладки
 */
function user_login_select_tab(selected_tab_index, sel_btn) {
  //Селектор родительского блока
  let sel_parent = '#id_form_login';
  if($(sel_btn).closest('#modalLogin').length > 0) {
     sel_parent = '#modalLogin';
  }

  //Тип выбранной авторизации
  let auth_type = 'email';
  if (selected_tab_index == '1') {
     auth_type = 'telephone_step_1';
     if ($(sel_parent).find('[data-item=tel_step_1]').css('display') != 'block') {
        auth_type = 'telephone_step_2'; 
     }
  }
  $(sel_parent).find('input[name=auth_type]').val(auth_type);

  //Выбор кнопки
  $(sel_parent).find('[data-item=tab_swith_btn]').removeClass('selected');
  $(sel_parent).find('[data-item=tab_swith_btn]').eq(selected_tab_index).addClass('selected');

  //Выбор содержимое
  $(sel_parent).find('[data-item=t_content]').removeClass('selected');
  $(sel_parent).find('[data-item=t_content]').eq(selected_tab_index).addClass('selected');

  //Обновление кнопки входа/подтверждения
  if (auth_type == 'telephone_step_1') {
     $(sel_parent).find('[data-item=btn_submit]').html('Подтвердить');
  } else if (auth_type == 'telephone_step_2') {
     $(sel_parent).find('[data-item=btn_submit]').html('Подтвердить');
  } else {
     $(sel_parent).find('[data-item=btn_submit]').html('Войти');
  }
}

/**
 * Выполняет отправку запросов на авторизацию пользователя по телефону
 * @param string|object sel_parent - селектор блока, содержащий форму авторизации
 */
function accept_tel_number_for_tel_auth(sel_parent) {
  //Если выполняется какой-то фоновый запрос, то не выполняем функцию
  if ($(sel_parent).find('[data-item=btn_submit]').hasClass('ajax_load')) {
  	return false;
  }

  //НАВЕШИВАНИЕ ТЕЛЕФОННЫХ СОБЫТИЙ: НАЧАЛО
  if ($(sel_parent).find('[data-item=btn_submit]').attr('data-tel-events-activate') != 'Y')
  {
  	$(sel_parent).find('[data-item=btn_submit]').attr('data-tel-events-activate', 'Y');

    //Нажатие на кнопку изменения телефона
    $(sel_parent).find('[data-item=btn_tel_edit]').off('click');
    $(sel_parent).find('[data-item=btn_tel_edit]').on('click', function(){
      $(sel_parent).find('[data-item=ft_message_text]').html('');
      $(sel_parent).find('[data-item=tel_step_1]').css('display', 'block'); 
      $(sel_parent).find('[data-item=tel_step_2]').css('display', 'none'); 
    });

    //Нажатие на кнопку "Запросить звонок повторно"
    $(sel_parent).find('[data-item=btn_call_repeat]').on('click', function(){
      $(sel_parent).trigger('send_tel_request');
      return false;
    });
     
    //Отправка телефонного запроса
    $(sel_parent).on('send_tel_request', function(){
      let sel_tab_content = '[data-item=tel_step_1]';
      if ($(sel_parent).find('[data-item=tel_step_2]').css('display') == 'block') {
        let sel_tab_content = '[data-item=tel_step_2]';
      }

      //Очистка ранних сообщений формы
      $(sel_parent).find('[data-item=ft_message_text]').html('');

      //Установка анимации загрузки данных
      $(sel_parent).find('[data-item=btn_submit]').addClass('ajax_load');

      let telephone = $(sel_parent).find('input[name=phone]').val();
      
      $.post('/modules/users/ajax_auth.php?action=telephone_step_1', {
        'telephone': telephone
      },function(data){
        $(sel_parent).find('[data-item=btn_submit]').removeClass('ajax_load');
  
        let result_obj = {};
        try {
          result_obj = JSON.parse(data);
        } catch (e) {}
  
        //Телефон введён верно и запрос на звонок выполнился удачно
        if (result_obj.status && result_obj.status == 'success') {
          //Фиксируем введённый номер
          $(sel_parent).find('[data-item=tel_step_2]').attr('data-tel', telephone);

          //Показываем блок для ввода последних цифр телефона
          $(sel_parent).find('[data-item=tel_step_1]').css('display', 'none'); 
          $(sel_parent).find('[data-item=tel_step_2]').css('display', 'block'); 
  
          //Вывод номера телефона, на которой совершается звонок
          let tel_number = '+7' + telephone;
          $(sel_parent).find('[data-item=tel_step_2] [data-item=call_number]').html(tel_number);
  
          //Запуск таймера обратного отсчёта
          let sel_timer = $(sel_parent).find('[data-item=tel_step_2] [data-item=timer_countdown]');
          let time_delay_for_next_request_in_seconds = result_obj.time_delay_for_next_request_in_seconds;
          $(sel_timer).html(time_delay_for_next_request_in_seconds);
          if (typeof(timer_auth_tel_call_countdown) == 'number') {
              clearInterval(timer_auth_tel_call_countdown);
          }
          timer_auth_tel_call_countdown = setInterval(function(){
              let sec = parseInt($(sel_timer).html());
              if (isNaN(sec)) {
                sec = time_delay_for_next_request_in_seconds;
              }
              sec = sec - 1;
              if (sec <= 0) {
                sec = 0;
                $(sel_parent).find('[data-item=ft_timer_countdown]').css('display', 'none');
                $(sel_parent).find('[data-item=ft_repeat_call]').css('display', 'block');
              } else {
                $(sel_timer).html(sec)
              }
          }, 1000);
  
          //Показываем надпись с таймером
          $(sel_parent).find('[data-item=ft_timer_countdown]').css('display', 'block');
          $(sel_parent).find('[data-item=ft_repeat_call]').css('display', 'none');
        } 
        //Произошла ошибка
        else {
          let message_error = 'Произошла неизвестная ошибка сервера. Пожалуйста, попробуйте выполнить действие чуть позднее или обратитесь к администрации сайта';
          if (result_obj.status_desc && result_obj.status_desc != '') {
            message_error = result_obj.status_desc;
          }
  
          $(sel_parent).find(sel_tab_content).find('[data-item=ft_message_text]').html('<div class="error">' + message_error + '</div>');
        }
      });
    });

    //Отправка телефонного кода
    $(sel_parent).on('send_tel_last_numbers', function(){
      let sel_tab_content = '[data-item=tel_step_2]';

      //Очистка раннего сообщения формы
      $(sel_parent).find(sel_tab_content).find('[data-item=ft_message_text]').html('');

      //Установка анимации загрузки данных
      $(sel_parent).find('[data-item=btn_submit]').addClass('ajax_load');

      $.post('/modules/users/ajax_auth.php?action=telephone_step_2', {
        'telephone': $(sel_parent).find('[data-item=tel_step_2]').attr('data-tel'),
        'tel_last_numbers': $(sel_parent).find('input[name=tel_last_numbers]').val()
      },function(data){
        $(sel_parent).find('[data-item=btn_submit]').removeClass('ajax_load');
  
        let result_obj = {};
        try {
          result_obj = JSON.parse(data);
        } catch (e) {}
  
        //Телефон введён верно и запрос на звонок выполнился удачно
        if (result_obj.status && result_obj.status == 'success') {
          //Выводим сообщение
          let message_text = 'Вход успешно выполнен'; 
          if (result_obj.status_desc && result_obj.status_desc != '') {
            message_text = result_obj.status_desc;
          }
          $(sel_parent).find(sel_tab_content).find('[data-item=ft_message_text]').html('<div class="success">' + message_text + '</div>');

          //Перезагружаем страницу
          if (result_obj.reload_page == 'Y') {
            setTimeout(function(){
              window.location.reload();
            }, 1000);
          }
        } 
        //Произошла ошибка
        else {
          let message_error = 'Произошла неизвестная ошибка сервера. Пожалуйста, попробуйте выполнить действие чуть позднее или обратитесь к администрации сайта';
          if (result_obj.status_desc && result_obj.status_desc != '') {
            message_error = result_obj.status_desc;
          }
  
          $(sel_parent).find(sel_tab_content).find('[data-item=ft_message_text]').html('<div class="error">' + message_error + '</div>');
        }
      });
    });
  }
  //НАВЕШИВАНИЕ ТЕЛЕФОННЫХ СОБЫТИЙ: КОНЕЦ

  //Код шага
  let step_code = 'telephone_step_1';
  if ($(sel_parent).find('[data-item=tel_step_2]').css('display') == 'block') {
    step_code = 'telephone_step_2'; 
  }
  
  //Телефон - шаг 1. Отправка запроса на обратный звонок
  if (step_code == 'telephone_step_1') {
    //Если пользователь вернулся на ввод номера, не изменил его и возвращается обратно, то просто показываем окно ввода кода
    if ($(sel_parent).find('input[name=phone]').val() != '' && $(sel_parent).find('input[name=phone]').val() == $(sel_parent).find('[data-item=tel_step_2]').attr('data-tel')) {
      $(sel_parent).find('[data-item=tel_step_1]').css('display', 'none'); 
      $(sel_parent).find('[data-item=tel_step_2]').css('display', 'block'); 
    } 
    //В ином случае отправляем телефонный запрос
    else 
    {
      $(sel_parent).trigger('send_tel_request');
    }
  } 
  //Телефон - шаг 2. Отправка последних цифр входящего звонка
  else if (step_code == 'telephone_step_2') {
    $(sel_parent).trigger('send_tel_last_numbers');
  }
}

/**
 * Запускает работу опросника, который появляется после оформления или оплаты заказа
 * @param string|object sel_parent - селектор блока с опросником
 */
 function activate_question_after_order(sel_parent) {
  $(sel_parent).find('[data-item=option]').each(function(){
    $(this).click(function(){
      if ($(sel_parent).find('.ajax_load[data-item=option]').length == 0) {
        let sel_option = $(this);
        let vote = $(sel_option).attr('data-value');

        let order_id = $(sel_parent).attr('data-order-id');
        if (typeof(order_id) == 'undefined') order_id = '0';

        $(sel_parent).find('[data-item=form_message]').html('');
        $(sel_option).addClass('ajax_load');
        $.post('/modules/users/ajax_actions.php?action=order_vote', {
          'order_id': order_id,
          'vote': vote
        },function(data){
          $(sel_option).removeClass('ajax_load');
    
          let result_obj = {};
          try {
            result_obj = JSON.parse(data);
          } catch (e) {}
    
          //Запрос выполнился удачно
          if (result_obj.status && result_obj.status == 'success') {
            let form_message = 'Спасибо. Окно сейчас закроется';
            if (result_obj.status_desc && result_obj.status_desc != '') {
              form_message = result_obj.status_desc;
            }
    
            $(sel_parent).find('[data-item=form_message]').html('<div class="success">' + form_message + '</div>');
            $(sel_parent).find('.e_list').remove();

            //Закрытие окна
            if ($(sel_parent).closest('.modal').length > 0) {
              setTimeout(function(){
                $(sel_parent).closest('.modal').modal('hide');  
              }, 1500);
            }
          }         
          //Произошла ошибка
          else {
            let form_message = 'Произошла неизвестная ошибка сервера. Пожалуйста, попробуйте выполнить действие чуть позднее или обратитесь к администрации сайта';
            if (result_obj.status_desc && result_obj.status_desc != '') {
              form_message = result_obj.status_desc;
            }
    
            $(sel_parent).find('[data-item=form_message]').html('<div class="error">' + form_message + '</div>');
          }
        });
      }
      return false;
    });
  });
}

/**
 * Запускает работу опросника, который появляется после оформления или оплаты заказа
 * @param string|object sel_parent - селектор блока с опросником
 */
 function activate_question_after_order(sel_parent) {
  $(sel_parent).find('[data-item=option]').each(function(){
    $(this).click(function(){
      if ($(sel_parent).find('.ajax_load[data-item=option]').length == 0) {
        let sel_option = $(this);
        let vote = $(sel_option).attr('data-value');

        let order_id = $(sel_parent).attr('data-order-id');
        if (typeof(order_id) == 'undefined') order_id = '0';

        //Ширина экрана
        let display_width = Math.ceil($(window).width());

        $(sel_parent).find('[data-item=form_message]').html('');
        $(sel_option).addClass('ajax_load');
        $.post('/modules/users/ajax_actions.php?action=order_vote', {
          'order_id': order_id,
          'vote': vote, 
          'display_width': display_width
        },function(data){
          $(sel_option).removeClass('ajax_load');
    
          let result_obj = {};
          try {
            result_obj = JSON.parse(data);
          } catch (e) {}
    
          //Запрос выполнился удачно
          if (result_obj.status && result_obj.status == 'success') {
            let form_message = 'Спасибо. Окно сейчас закроется';
            if (result_obj.status_desc && result_obj.status_desc != '') {
              form_message = result_obj.status_desc;
            }
    
            $(sel_parent).find('[data-item=form_message]').html('<div class="success">' + form_message + '</div>');
            $(sel_parent).find('.e_list').remove();

            //Закрытие окна
            if ($(sel_parent).closest('.modal').length > 0) {
              setTimeout(function(){
                $(sel_parent).closest('.modal').modal('hide');  
              }, 1500);
            }
          }         
          //Произошла ошибка
          else {
            let form_message = 'Произошла неизвестная ошибка сервера. Пожалуйста, попробуйте выполнить действие чуть позднее или обратитесь к администрации сайта';
            if (result_obj.status_desc && result_obj.status_desc != '') {
              form_message = result_obj.status_desc;
            }
    
            $(sel_parent).find('[data-item=form_message]').html('<div class="error">' + form_message + '</div>');
          }
        });
      }
      return false;
    });
  });
}