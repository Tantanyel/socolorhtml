<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="modal fade modalorder" id="ModalMap" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title">Выбрать пункт выдачи</h6>
               <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
               </button>
            </div>
            <div class="modal-body mapcontent">
               <div class="topButtonsMapMobile btn-group" role="group">
                  <button data-type="map" onclick="courierButtonsMap('map')" class="active">
                     <i class="fas fa-map-marked-alt"></i>
                     Карта
                  </button>
                  <button data-type="list" onclick="courierButtonsMap('list')">
                     <i class="fas fa-map-marked-alt"></i>
                     Список
                  </button>
                  <button data-type="pvz" onclick="courierButtonsMap('pvz')">
                     <i class="fas fa-map-marked-alt"></i>
                     ПВЗ
                  </button>
               </div>
               <div class="listCourier">
                  <div class="yprTabs">
                     <input id="searchpoints" type="search" placeholder="Поиск по точкам">
                     <button onclick="clearsSearchPoint();" class="resetC">
                        <i class="fas fa-sync-alt"></i>
                        Сброс
                     </button>
                  </div>
                  <div class="contentCourier customScroll" id="courierItemsMap">
                     <div class="itemCourier selected" data-id="4098">
                        <div class="titletext">
                           <b>м. Улица Академика Янгеля, ул. Булатниковская, д. 2А Boxberry</b>
                           <span>280 ₽</span>
                        </div>
                        <img class="titleImg" src="../img/iconboxberry.png">
                        <span class="listWorktime"><b>График работы:</b> пн-вс: 10.00-20.30 </span>
                        <div class="buttonsItem">
                           <button class="btn btn btn-secondary btn-move-ico shadow-hover" type="button">
                              <span>Подробнее</span>
                              <i class="fas fa-angle-right"></i>
                           </button>
                           <button class="btn btn btn-primary btn-move-ico shadow-hover" type="button" disabled>
                              <span>Выбрано</span>
                              <i class="fas fa-check"></i>
                           </button>
                        </div>
                     </div>
                     <div class="itemCourier " data-id="14750">
                        <div class="titletext">
                           <b>м. Митино, ул. Митинская, д. 20 Boxberry</b>
                           <span>280 ₽</span>
                        </div>
                        <img class="titleImg" src="../img/iconboxberry.png">
                        <span class="listWorktime"><b>График работы:</b> пн-вс: 10.00-19.00 </span>
                        <div class="buttonsItem">
                           <button class="btn btn btn-secondary btn-move-ico shadow-hover" type="button">
                              <span>Подробнее</span>
                              <i class="fas fa-angle-right"></i>
                           </button>
                           <button class="btn btn btn-primary btn-move-ico shadow-hover" type="button">
                              <span>Выбрать</span>
                              <i class="fas fa-check"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="infoCourier">
                  <div class="yprTabs">
                     <button onclick="courierButtonsMap('map')">
                        <i class="fas fa-angle-left"></i>
                        Назад
                     </button>
                  </div>
                  <div class="contentCourier" id="courierInfoMap">
                     <div class="itemCourier">
                        <div class="titletext">
                           <b>м. Авиамоторная, ул. Авиамоторная, д. 22/12 Pickpoint</b>
                           <span>220 ₽</span>
                        </div>
                        <img class="titleImg" src="/templates/pharmacosmetica/img/point/iconpickpoint.png">
                        <div class="buttonsItem oneBtn">
                           <button class="btn btn btn-primary btn-move-ico shadow-hover" type="button" disabled>
                              <span>Этот пункт выбран</span>
                              <i class="fas fa-check"></i>
                           </button>
                        </div>
                        <div class="textBlockInfo"><b>Адрес</b><span>Москва, Авиамоторная ул., д. 22/12</span></div>
                        <div class="textBlockInfo"><b>График работы</b><span>ежедневно: с 8-22 </span></div>
                        <div class="textBlockInfo"><b>Срок доставки</b><span>от 1 до 2 рабочих дней</span></div>
                        <div class="textBlockInfo"><b>Оплата</b><span>При получении, Предоплата на сайте</span></div>

                     </div>
                     <!-- <div class="itemCourier">
                        <div class="titletext">
                           <b>Вы не выбрали пункт выдачи</b>
                        </div>
                     </div> -->
                  </div>
               </div>
               <div class="mapCourier">
                  <div id="map">
                     <iframe src="https://yandex.ru/map-widget/v1/?ll=37.624513%2C55.748635&z=12" width="100%"
                        height="100%" frameborder="0" allowfullscreen="true"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-xl-9">

            <form action="#" class="basketItems cosm">
               <div class="headerBasket">
                  <div class="hbl">
                     <h5>Доставка №1</h5>
                     <div>
                        <span class="text-primary">Заберите сегодня!</span>
                        <b>В космэдель г. Курск</b>
                     </div>
                  </div>
                  <div class="hbl">
                     <span class="badge-cosm">Бесплатный самовывоз!</span>
                  </div>
               </div>

               <div class="bItem">
                  <div class="lBasketItem">
                     <a href="#" class="imgbi"><img src="../img/delete/item1.jpg" /></a>
                     <div class="countInp">
                        <button type="button" onclick="if(this.form.count.value>1)this.form.count.value--;"
                           class="minus"><i class="fas fa-minus"></i></button>
                        <input name="count" type="number" value="1" id="qty" class="qty" />
                        <button type="button" onclick="this.form.count.value++;" class="plus"><i
                              class="fas fa-plus"></i></button>
                     </div>
                     <button type="button" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-trash"></i>
                     </button>
                  </div>
                  <div class="rBasketItem">
                     <a href="#" class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл (Matrix, Окрашивание,
                        Color Sync)
                     </a>
                     <span class="info namecolors">
                        <i class="fas fa-fill-drip"></i>
                        <b>Оттенок:</b>
                        1A иссиня-черный пепельный
                     </span>
                     <div class="info ycenka"><i class="fas fa-tags"></i> <b>Уцененный:</b> Дефекты на внешней
                        упаковке товара</div>
                     <div class="info podzakaz"><i class="fas fa-truck"></i> <b>Под заказ,</b> <i>в течение 5 раб. дн</i>
                     </div>
                     <div class="price">
                        <span class="oldprice">2000₽</span>
                        <span class="skid">-30%</span>
                        <span class="newprice">1500₽</span>
                     </div>
                  </div>
               </div>
               <div class="summBlock">
                  <span class="summ">Сумма: <b>1500₽</b></span>
               </div>
            </form>

            <form action="#" class="basketItems">
               <div class="headerBasket">
                  <div class="hbl">
                     <h5>Доставка №2</h5>
                     <div>
                        <span class="text-gray">Втечение 3 дней</span>
                        <b>Санкт-Петербург г, м. Автово, проспект Стачек, 75 по предоплате</b>
                     </div>
                  </div>
               </div>

               <div class="bItem">
                  <div class="lBasketItem">
                     <a href="#" class="imgbi"><img src="../img/delete/item1.jpg" /></a>
                     <div class="countInp">
                        <button type="button" onclick="if(this.form.count.value>1)this.form.count.value--;"
                           class="minus"><i class="fas fa-minus"></i></button>
                        <input name="count" type="number" value="1" id="qty" class="qty" />
                        <button type="button" onclick="this.form.count.value++;" class="plus"><i
                              class="fas fa-plus"></i></button>
                     </div>
                     <button type="button" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-trash"></i>
                     </button>
                  </div>
                  <div class="rBasketItem">
                     <a href="#" class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл (Matrix, Окрашивание,
                        Color Sync)
                     </a>
                     <div class="info">
                        <div class="noitem text-danger"><i class="fas fa-times-circle"></i> <b>Нет в наличии</b></div>
                     </div>
                  </div>
               </div>

               <div class="bItem">
                  <div class="lBasketItem">
                     <a href="#" class="imgbi"><img src="../img/delete/item1.jpg" /></a>
                     <div class="countInp">
                        <button type="button" onclick="if(this.form.count.value>1)this.form.count.value--;"
                           class="minus"><i class="fas fa-minus"></i></button>
                        <input name="count" type="number" value="1" id="qty" class="qty" />
                        <button type="button" onclick="this.form.count.value++;" class="plus"><i
                              class="fas fa-plus"></i></button>
                     </div>
                     <button type="button" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-trash"></i>
                     </button>
                  </div>
                  <div class="rBasketItem">
                     <a href="#" class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл (Matrix, Окрашивание,
                        Color Sync)
                     </a>
                     <span class="info namecolors">
                        <i class="fas fa-fill-drip"></i>
                        <b>Оттенок:</b>
                        1A иссиня-черный пепельный
                     </span>
                     <div class="info ycenka"><i class="fas fa-tags"></i> <b>Уцененный:</b> Дефекты на внешней
                        упаковке товара</div>
                     <div class="info podzakaz"><i class="fas fa-truck"></i> <b>Под заказ,</b> <i>в течение 5 раб. дн</i>
                     </div>
                     <div class="price">
                        <span class="oldprice">2000₽</span>
                        <span class="skid">-30%</span>
                        <span class="newprice">1500₽</span>
                     </div>
                  </div>
               </div>

               <div class="bItem">
                  <div class="lBasketItem">
                     <a href="#" class="imgbi"><img src="../img/delete/item1.jpg" /></a>
                     <div class="countInp">
                        <button type="button" onclick="if(this.form.count.value>1)this.form.count.value--;"
                           class="minus"><i class="fas fa-minus"></i></button>
                        <input name="count" type="number" value="1" id="qty" class="qty" />
                        <button type="button" onclick="this.form.count.value++;" class="plus"><i
                              class="fas fa-plus"></i></button>
                     </div>
                     <button type="button" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-trash"></i>
                     </button>
                  </div>
                  <div class="rBasketItem">
                     <a href="#" class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл (Matrix, Окрашивание,
                        Color Sync)
                     </a>
                     <span class="info namecolors">
                        <i class="fas fa-fill-drip"></i>
                        <b>Оттенок:</b>
                        1A иссиня-черный пепельный
                     </span>
                     <div class="info ycenka"><i class="fas fa-tags"></i> <b>Уцененный:</b> Дефекты на внешней
                        упаковке товара</div>
                     <div class="info podzakaz"><i class="fas fa-truck"></i> <b>Под заказ,</b> <i>в течение 5 раб. дн</i>
                     </div>
                     <div class="price">
                        <span class="oldprice">2000₽</span>
                        <span class="skid">-30%</span>
                        <span class="newprice">1500₽</span>
                     </div>
                  </div>
               </div>
               <div class="summBlock">
                  <span class="summ">Сумма: <b>1500₽</b></span>
               </div>
            </form>

            <div class="clearCart">
               <a href="#" class="btn btn-outline-primary btn-move-ico shadow-hover">
                  <span>Очистить корзину</span>
                  <i class="fas fa-trash"></i>
               </a>
            </div>

            <form action="#" class="basketItems presentsItems nogift">

               <div class="headerBasket">
                  <div class="hbl">
                     <h5>Ваши подарки <i class="fas fa-gift"></i></h5>
                  </div>

                  <div class="hbl giftwaitbtn">
                     <a href="#" class="btn btn-sm btn-outline-primary shadow-hover">
                        <strong>Буду ждать</strong>
                     </a>
                     <p class="info">
                        Хочу получить подарки, буду ждать доставку
                     </p>
                  </div>
               </div>

               <div class="bItem podarok">
                  <div class="lBasketItem">
                     <a href="#" class="imgbi"><img src="../img/delete/item2.jpg" /></a>
                     <div class="countInp">
                        <input name="count" type="number" value="1" id="qty" class="qty" disabled />
                     </div>
                  </div>
                  <div class="rBasketItem">
                     <a href="#" class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл (Matrix, Окрашивание,
                        Color Sync)
                     </a>
                     <span class="about" data-toggle="collapse" href="#about1" aria-expanded="false"><i
                           class="far fa-question-circle"></i> Подробнее о подарке</span>
                     <div class="aboutBlock collapse" id="about1">
                        <p>Масло манго и масло орхидеи – активные компоненты маски Estel Haute Couture Luxure Cool
                           Blond. Именно их гармоничное сочетание обеспечивает волосам глубокое питание, а следовательно
                           здоровье и красоту. Но наша маска не могла бы называться «COOL», если бы не обеспечивала
                           превосходную защиту холодного оттенка блонд. За счёт чего её формула столь эффективна?
                           Благодаря незаменимым фиолетовым пигментам.</p>
                     </div>
                     <button class="btn btn-sm btn-outline-primary btn-move-ico shadow-hover collapsed mt-1" type="button"
                        style="max-width: 320px" data-toggle="collapse" href="#gift1" aria-expanded="false">
                        <span>Выбрать другой</span>
                        <i class="fas fa-gift"></i>
                     </button>
                  </div>
                  <div class="selectPodarok collapse" id="gift1">
                  <div class="itemsContMin">
                     <div class="itemSelectP">
                        <div class="photo">
                           <img src="../img/delete/item2.jpg" alt="photo" />
                        </div>
                        <span class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл</span>
                        <button class="btn btn-sm btn-secondary btn-move-ico shadow-hover mt-1" type="button">
                           <span>Выбрать</span>
                           <i class="fas fa-check"></i>
                        </button>
                     </div>
                     <div class="itemSelectP">
                        <div class="photo">
                           <img src="../img/delete/item2.jpg" alt="photo" />
                        </div>
                        <span class="name">Матрикс Крем-краска без аммиака Колор Синк Крем-краска без аммиака Колор
                           Синк, 90 мл</span>
                        <button class="btn btn-sm btn-secondary btn-move-ico shadow-hover mt-1" type="button">
                           <span>Выбрать</span>
                           <i class="fas fa-check"></i>
                        </button>
                     </div>
                     <div class="itemSelectP">
                        <div class="photo">
                           <img src="../img/delete/item2.jpg" alt="photo" />
                        </div>
                        <span class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл</span>
                        <button class="btn btn-sm btn-secondary btn-move-ico shadow-hover mt-1" type="button">
                           <span>Выбрать</span>
                           <i class="fas fa-check"></i>
                        </button>
                     </div>
                     <div class="itemSelectP">
                        <div class="photo">
                           <img src="../img/delete/item2.jpg" alt="photo" />
                        </div>
                        <span class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл</span>
                        <button class="btn btn-sm btn-secondary btn-move-ico shadow-hover mt-1" type="button">
                           <span>Выбрать</span>
                           <i class="fas fa-check"></i>
                        </button>
                     </div>
                     <div class="itemSelectP">
                        <div class="photo">
                           <img src="../img/delete/item2.jpg" alt="photo" />
                        </div>
                        <span class="name">Матрикс Крем-краска без аммиака Колор Синк, 90 мл</span>
                        <button class="btn btn-sm btn-secondary btn-move-ico shadow-hover mt-1" type="button">
                           <span>Выбрать</span>
                           <i class="fas fa-check"></i>
                        </button>
                     </div>
                  </div>
               </div>
               </div>
            </form>

            <h4 class="zagH h4 hdark">Ваши данные</h4>
            <div class="orderinputs no-gutters row">
               <div class="form-group row no-gutters col-lg-6">
                  <label class="col-sm-4 col-form-label">Имя*</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" placeholder="Имя" required value="" />
                  </div>
               </div>

               <div class="form-group row no-gutters col-lg-6">
                  <label class="col-sm-4 col-form-label">Фамилия*</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" placeholder="Фамилия" required value="" />
                  </div>
               </div>

               <div class="form-group row no-gutters col-lg-6">
                  <label class="col-sm-4 col-form-label">Телефон*</label>
                  <div class="input-group mb-2 col-sm-8">
                     <div class="input-group-prepend">
                        <div class="input-group-text form-control">+7</div>
                     </div>
                     <input type="tel" class="form-control" placeholder="(999)999-99-99" required value="" />
                  </div>
               </div>

               <div class="form-group row no-gutters col-lg-6">
                  <label class="col-sm-4 col-form-label">E-mail*</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" placeholder="E-mail" required value="" />
                  </div>
               </div>

               <div class="form-group row no-gutters col-12">
                  <label class="col-lg-2 col-sm-4 col-form-label">Комментарий</label>
                  <div class="col-lg-10 col-sm-8">
                     <textarea name="note" class="form-control" placeholder="Комментарий" rows="4"></textarea>
                  </div>
               </div>

               <!-- <div class="form-group row no-gutters col-lg-6">
                  <div class="checkbox col-12 col-form-label">
                     <input type="checkbox" class="filled-in" id="ysms" name="sms" {if !$form || $form.sms=='on' ||
                        $form.sms=='Да' } checked{/if} />
                     <label for="ysms">Подписаться на акции и спецпредложения Соколор</label>
                  </div>
               </div> -->
            </div>

            <h4 class="zagH h4 hdark">Доставка</h4>
            <div class="orderinputs basketDelivery">
               <div class="saveAdrBasket">
                  <div class="sectionDeliv row">
                     <span class="nameSection col-xl-2 col-lg-3 col-sm-4 pr-0">Выбранный адрес</span>
                     <div class="selectdeliv col-xl-10 col-lg-9 col-sm-8">
                        <div class="adritem">
                           <div class="headAdr">
                              <div class="type">
                                 <i class="fas fa-shipping-fast"></i><span>Курьер</span>
                              </div>
                              <b class="name">Курьером г. Курск</b>
                           </div>
                           <p>
                              Курская Курск ул.Ленина, д.57 (подъезд № - 1, домофон - 13) этаж 12,
                              кв. 67
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="btnAdr">
                     <button onclick="AdrBasket(1);" class="btn btn-sm btn-outline-secondary btn-move-ico" type="button">
                        <span>Другой адрес</span>
                        <i class="fas fa-chevron-down"></i>
                     </button>
                  </div>
               </div>
               <div class="allAdrBasket op">
                  <div class="sectionDeliv row">
                     <span class="nameSection col-xl-2 col-lg-3 col-sm-4 pr-0">Мои адреса</span>
                     <div class="selectdeliv col-xl-10 col-lg-9 col-sm-8">

                        <div class="sliderAdres">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="adritem active">
                                    <div class="icons">
                                       <span class="titileIcons iact">Выбранный</span>
                                       <span class="titileIcons iizbr">Избранный адрес</span>
                                    </div>
                                    <div class="headAdr">
                                       <div class="type">
                                          <i class="fas fa-shipping-fast"></i><span>Курьер</span>
                                       </div>
                                       <b class="name">Курьером г. Курск</b>
                                    </div>
                                    <p>
                                       Курская Курск ул.Ленина, д.57 (подъезд № - 1, домофон - 13) этаж 12,
                                       кв. 67
                                    </p>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="adritem">
                                    <div class="icons">
                                       <span class="titileIcons iact">Выбранный</span>
                                       <span class="titileIcons iizbr">Избранный адрес</span>
                                    </div>
                                    <div class="headAdr">
                                       <div class="type">
                                          <i class="fas fa-shipping-fast"></i><span>Курьер</span>
                                       </div>
                                       <b class="name">Курьером г. Курск</b>
                                    </div>
                                    <p>
                                       Курская Курск ул.Ленина, д.57 (подъезд № - 1, домофон - 13) этаж 12,
                                       кв. 67
                                    </p>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="adritem">
                                    <div class="icons">
                                       <span class="titileIcons iact">Выбранный</span>
                                       <span class="titileIcons iizbr">Избранный адрес</span>
                                    </div>
                                    <div class="headAdr">
                                       <div class="type">
                                          <i class="fas fa-shipping-fast"></i><span>Курьер</span>
                                       </div>
                                       <b class="name">Курьером г. Курск</b>
                                    </div>
                                    <p>
                                       Курская Курск ул.Ленина, д.57 (подъезд № - 1, домофон - 13) этаж 12,
                                       кв. 67
                                    </p>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="adritem">
                                    <div class="icons">
                                       <span class="titileIcons iact">Выбранный</span>
                                       <span class="titileIcons iizbr">Избранный адрес</span>
                                    </div>
                                    <div class="headAdr">
                                       <div class="type">
                                          <i class="fas fa-shipping-fast"></i><span>Курьер</span>
                                       </div>
                                       <b class="name">Курьером г. Курск</b>
                                    </div>
                                    <p>
                                       Курская Курск ул.Ленина, д.57 (подъезд № - 1, домофон - 13) этаж 12,
                                       кв. 67
                                    </p>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="adritem">
                                    <div class="icons">
                                       <span class="titileIcons iact">Выбранный</span>
                                       <span class="titileIcons iizbr">Избранный адрес</span>
                                    </div>
                                    <div class="headAdr">
                                       <div class="type">
                                          <i class="fas fa-shipping-fast"></i><span>Курьер</span>
                                       </div>
                                       <b class="name">Курьером г. Курск</b>
                                    </div>
                                    <p>
                                       Курская Курск ул.Ленина, д.57 (подъезд № - 1, домофон - 13) этаж 12,
                                       кв. 67
                                    </p>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="adritem">
                                    <div class="icons">
                                       <span class="titileIcons iact">Выбранный</span>
                                       <span class="titileIcons iizbr">Избранный адрес</span>
                                    </div>
                                    <div class="headAdr">
                                       <div class="type">
                                          <i class="fas fa-shipping-fast"></i><span>Курьер</span>
                                       </div>
                                       <b class="name">Курьером г. Курск</b>
                                    </div>
                                    <p>
                                       Курская Курск ул.Ленина, д.57 (подъезд № - 1, домофон - 13) этаж 12,
                                       кв. 67
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pagi">
                           <div class="button-prev"><i class="fas fa-arrow-left"></i></div>
                           <div class="swiper-pagination"></div>
                           <div class="button-next"><i class="fas fa-arrow-right"></i></div>
                        </div>

                     </div>
                  </div>
                  <div class="btnAdr">
                     <button onclick="AdrBasket(2);" class="btn btn-sm btn-outline-secondary btn-move-ico" type="button">
                        <span>Новый адрес</span>
                        <i class="fas fas fa-plus"></i>
                     </button>
                  </div>
               </div>
               <div class="editAdrBasket">
                  <div class="btnAdr mb-3">
                     <button onclick="AdrBasket(2);" class="btn btn-sm btn-outline-secondary btn-move-ico" type="button">
                        <span>Мои адреса</span>
                        <i class="fas fa-chevron-left"></i>
                     </button>
                  </div>
                  <div class="sectionDeliv row">
                     <span class="nameSection col-xl-2 col-lg-3 col-sm-4 pr-0">Населенный пункт</span>
                     <div class="selectdeliv col-xl-10 col-lg-9 col-sm-8">
                        <div class="seldelivery">
                           <select class="newselect">
                              <option value="190" selected="" data-lat="" data-lng="">Москва/Московская область</option>
                              <option value="152" data-lat="" data-lng="">Санкт-Петербург/Ленинградская область</option>
                              <option value="466" data-lat="" data-lng="">Адыгея Республика</option>
                              <option value="4" data-lat="" data-lng="">Алтай республика, Алтайский край</option>
                              <option value="13" data-lat="" data-lng="">Амурская область</option>
                              <option value="15" data-lat="" data-lng="">Архангельская область</option>
                              <option value="25" data-lat="" data-lng="">Астраханская область</option>
                              <option value="731" data-lat="" data-lng="">Байконур</option>
                              <option value="27" data-lat="" data-lng="">Башкортостан республика</option>
                              <option value="914" data-lat="53.889380" data-lng="27.624534">Беларусь Республика</option>
                              <option value="32" data-lat="" data-lng="">Белгородская&nbsp;область</option>
                              <option value="35" data-lat="" data-lng="">Брянская область</option>
                              <option value="37" data-lat="" data-lng="">Бурятия Республика</option>
                              <option value="39" data-lat="" data-lng="">Владимирская область</option>
                              <option value="43" data-lat="" data-lng="">Волгоградская область</option>
                              <option value="45" data-lat="" data-lng="">Вологодская область</option>
                              <option value="48" data-lat="" data-lng="">Воронежская область</option>
                              <option value="480" data-lat="" data-lng="">Дагестан Республика</option>
                              <option value="482" data-lat="" data-lng="">Еврейская АО</option>
                              <option value="484" data-lat="" data-lng="">Забайкальский край</option>
                              <option value="50" data-lat="" data-lng="">Ивановская область</option>
                              <option value="487" data-lat="" data-lng="">Ингушетия Республика</option>
                              <option value="52" data-lat="" data-lng="">Иркутская область</option>
                              <option value="60" data-lat="" data-lng="">Кабардино-Балкарская Республика</option>
                              <option value="921" data-lat="" data-lng="">Казахстан Республика</option>
                              <option value="491" data-lat="" data-lng="">Калининградская область</option>
                              <option value="493" data-lat="" data-lng="">Калмыкия Республика</option>
                              <option value="62" data-lat="" data-lng="">Калужская область</option>
                              <option value="496" data-lat="" data-lng="">Камчатский край</option>
                              <option value="498" data-lat="" data-lng="">Карачаево-Черкесская Республика</option>
                              <option value="65" data-lat="" data-lng="">Карелия республика</option>
                              <option value="67" data-lat="" data-lng="">Кемеровская область</option>
                              <option value="76" data-lat="" data-lng="">Кировская область</option>
                              <option value="84" data-lat="" data-lng="">Коми республика</option>
                           </select>
                        </div>

                        <div class="seldelivery">
                           <select class="newselect">
                              <option value="190" selected="" data-lat="" data-lng="">Москва/Московская область</option>
                              <option value="152" data-lat="" data-lng="">Санкт-Петербург/Ленинградская область</option>
                              <option value="466" data-lat="" data-lng="">Адыгея Республика</option>
                              <option value="4" data-lat="" data-lng="">Алтай республика, Алтайский край</option>
                              <option value="13" data-lat="" data-lng="">Амурская область</option>
                              <option value="15" data-lat="" data-lng="">Архангельская область</option>
                              <option value="25" data-lat="" data-lng="">Астраханская область</option>
                              <option value="731" data-lat="" data-lng="">Байконур</option>
                              <option value="27" data-lat="" data-lng="">Башкортостан республика</option>
                              <option value="914" data-lat="53.889380" data-lng="27.624534">Беларусь Республика</option>
                              <option value="32" data-lat="" data-lng="">Белгородская&nbsp;область</option>
                              <option value="35" data-lat="" data-lng="">Брянская область</option>
                              <option value="37" data-lat="" data-lng="">Бурятия Республика</option>
                              <option value="39" data-lat="" data-lng="">Владимирская область</option>
                              <option value="43" data-lat="" data-lng="">Волгоградская область</option>
                              <option value="45" data-lat="" data-lng="">Вологодская область</option>
                              <option value="48" data-lat="" data-lng="">Воронежская область</option>
                              <option value="480" data-lat="" data-lng="">Дагестан Республика</option>
                              <option value="482" data-lat="" data-lng="">Еврейская АО</option>
                              <option value="484" data-lat="" data-lng="">Забайкальский край</option>
                              <option value="50" data-lat="" data-lng="">Ивановская область</option>
                              <option value="487" data-lat="" data-lng="">Ингушетия Республика</option>
                              <option value="52" data-lat="" data-lng="">Иркутская область</option>
                              <option value="60" data-lat="" data-lng="">Кабардино-Балкарская Республика</option>
                              <option value="921" data-lat="" data-lng="">Казахстан Республика</option>
                              <option value="491" data-lat="" data-lng="">Калининградская область</option>
                              <option value="493" data-lat="" data-lng="">Калмыкия Республика</option>
                              <option value="62" data-lat="" data-lng="">Калужская область</option>
                              <option value="496" data-lat="" data-lng="">Камчатский край</option>
                              <option value="498" data-lat="" data-lng="">Карачаево-Черкесская Республика</option>
                              <option value="65" data-lat="" data-lng="">Карелия республика</option>
                              <option value="67" data-lat="" data-lng="">Кемеровская область</option>
                              <option value="76" data-lat="" data-lng="">Кировская область</option>
                              <option value="84" data-lat="" data-lng="">Коми республика</option>
                           </select>
                        </div>
                     </div>
                  </div>

                  <div class="sectionDeliv row">
                     <span class="nameSection col-xl-2 col-lg-3 col-sm-4 pr-0">Способ доставки</span>
                     <div class="col-xl-10 col-lg-9 col-sm-8">
                        <div class="delivery-buttons">
                           <button type="button" class="delivery-buttons__button">
                              <i class="fas fa-shipping-fast"></i>
                              <strong class="nametypecourier">Курьер</strong>
                           </button>
                           <button type="button" class="delivery-buttons__button">
                              <i class="fas fa-store-alt"></i>
                              <strong class="nametypecourier">Наши магазины</strong>
                           </button>
                           <button type="button" class="delivery-buttons__button active" data-toggle="modal"
                              data-target="#ModalMap">
                              <i class="fas fa-map-marked-alt"></i>
                              <strong class="nametypecourier">Самовывоз</strong>
                           </button>
                           <button type="button" class="delivery-buttons__button">
                              <i class="fas fa-mail-bulk"></i>
                              <strong class="nametypecourier">Почта</strong>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="sectionDeliv row">
                     <span class="nameSection col-xl-2 col-lg-3 col-sm-4 pr-0">Введите адрес</span>
                     <div class="col-xl-10 col-lg-9 col-sm-8">
                        <div class="basketAdress">
                           <input id="DdataAddress" type="text" name="address" class="form-control shadow-focus"
                              placeholder="Начните вводить адрес, потом выберите подсказку." value="" />
                           <div class="invalid-tooltip">
                              Заполните адрес доставки.
                           </div>
                        </div>
                     </div>

                     <div id="belarus" class="adressDop col-12 row">

                        <div class="form-group row col-lg-6">
                           <label class="col-sm-4 col-form-label">Корпус / строение</label>
                           <div class="col-sm-8">
                              <input id="d_corpus" type="text" name="corpus" class="form-control shadow-focus"
                                 placeholder="Корпус / строение" value="" />
                           </div>
                        </div>

                        <div class="form-group row col-lg-6">
                           <label class="col-sm-4 col-form-label">Улица</label>
                           <div class="col-sm-8">
                              <input id="d_street" type="text" name="street" class="form-control shadow-focus"
                                 placeholder="Улица" value="" />
                           </div>
                        </div>

                        <div class="form-group row col-lg-6">
                           <label class="col-sm-4 col-form-label">Дом</label>
                           <div class="col-sm-8">
                              <input id="d_home" type="text" name="home" class="form-control shadow-focus"
                                 placeholder="Дом" value="" />
                           </div>
                        </div>

                        <div class="form-group row col-lg-6">
                           <label class="col-sm-4 col-form-label">Корпус / строение</label>
                           <div class="col-sm-8">
                              <input id="d_corpus" type="text" name="corpus" class="form-control shadow-focus"
                                 placeholder="Корпус / строение" value="" />
                           </div>
                        </div>

                     </div>

                  </div>

                  <div class="sectionDeliv row">
                     <span class="nameSection col-xl-2 col-lg-3 col-sm-4 pr-0">Выбранный пункт выдачи</span>
                     <div class="col-xl-10 col-lg-9 col-sm-8">
                        <div class="selectDeliv">
                           <span>Санкт-Петербург г, м. Автово, проспект Стачек, 75 по предоплате.</span>
                           <button class="btn btn-sm btn-secondary btn-move-ico shadow-hover" type="button">
                              <span>Изменить</span>
                              <i class="fas fa-shipping-fast"></i>
                           </button>
                        </div>
                     </div>
                  </div>

                  <div class="sectionDeliv row mt-3">
                     <span class="nameSection col-lg-2 col-sm-4"></span>
                     <div class="col-lg-10 col-sm-8">
                        <p class="freedeliv text-danger">Закажите еще на 226 руб., для БЕСПЛАТНОЙ ДОСТАВКИ В ПВЗ
                           Санкт-Петербург г, м. Автово, проспект Стачек, 75 по предоплате.</p>

                        <span class="zaginfodel collapsed" data-toggle="collapse" href="#filt_1" aria-expanded="false">
                           <b>Информация о доставке</b>
                           <i class="fas fa-chevron-down"></i>
                        </span>
                        <div class="collapsedelivInfo collapse" id="filt_1">
                           <div class="delivInfo" data-delivery-date="11.09.2020">
                              <p><b>Тип доставки</b>: Курьер</p>
                              <p><b>Тип оплаты</b></p>
                              <ul>
                                 <li>
                                    При получении
                                    <div class="oplico" data-toggle="tooltip" data-placement="top"
                                       title="Банковской картой">
                                       <img src="https://lk.mirlk.ru/files/lkmirlk/reg_images/-imoney-bankcard.png" />
                                    </div>
                                    <div class="oplico" data-toggle="tooltip" data-placement="top" title="Наличными">
                                       <img src="https://lk.mirlk.ru/files/lkmirlk/reg_images/-imoney-cash.png" />
                                    </div>
                                 </li>
                                 <li>
                                    Предоплата на сайте
                                    <div class="oplico" data-toggle="tooltip" data-placement="top"
                                       title="Банковской картой">
                                       <img src="https://lk.mirlk.ru/files/lkmirlk/reg_images/-imoney-bankcard.png" />
                                    </div>
                                    <div class="oplico" data-toggle="tooltip" data-placement="top" title="Rapida Online">
                                       <img src="https://lk.mirlk.ru/files/lkmirlk/reg_images/-imoney-rapidaonline.png" />
                                    </div>
                                    <div class="oplico" data-toggle="tooltip" data-placement="top"
                                       title="Кошелек IntellectMoney">
                                       <img src="https://lk.mirlk.ru/files/lkmirlk/reg_images/-imoney-inner.png" />
                                    </div>
                                    <div class="oplico" data-toggle="tooltip" data-placement="top"
                                       title="Счет в Google AdSense">
                                       <img src="https://lk.mirlk.ru/files/lkmirlk/reg_images/-imoney-google.png" />
                                    </div>
                                 </li>
                              </ul>
                              <p><b>График работы</b>: Понедельник - пятница с 10-00 до 21-00 Суббота-воскресенье с 10-00
                                 до 18-00 (о возможности доставки уточняйте у оператора)</p>
                              <p><b>Срок доставки</b>: от 1 до 2 Рабочие дн.</p>
                              <p><b>Телефон</b>: 8(499) 645-53-62, 8(985)415-39-02</p>
                              <p><b>Описание</b>: Курьерская доставка заказа осуществляется компанией ЛК ВНИМАНИЕ! Эта
                                 доставка ТОЛЬКО в пределах МКАД. За пределами МКАД доставка осуществляется по НЕДЕЛЬНОМУ
                                 графику (уточняйте у оператора) по тарифам Московской области Курьеры предварительно
                                 связываются с Вами в день доставки. Уточнение информации по доставке заказа по телефону
                                 курьерской службы 8(499) 645-53-62, 8(985)415-39-02 Оплата товара осуществляется курьеру
                                 по наличному расчету. Пожалуйста, проверяйте комплектность заказа при курьере.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="promocode">
               <div class="promocodeBl">
                  <form action="#" class="bonusBl">
                     <h5 class="zagH h5 hdark">Промокод</h5>
                     <div class="inpborder">
                        <input type="text" placeholder="Промокод" />
                     </div>
                     <button type="button" class="btn btn-sm btn-secondary shadow-hover">
                        <span>Применить</span>
                     </button>
                  </form>
               </div>

               <div class="promocodeBl">
                  <form action="#" class="bonusBl">
                     <h5 class="zagH h5 hdark">Оплата подарочной картой</h5>
                     <div class="inpborder">
                        <input type="text" placeholder="Код карты/сертификата" />
                     </div>
                     <button type="button" class="btn btn-sm btn-secondary shadow-hover">
                        <span>Применить</span>
                     </button>
                  </form>
               </div>

               <div class="promocodeBl">
                  <form action="{$basketlink}" method="post" class="bonusBl">
                     <h5 class="zagH h5 hdark">Бонусный счет <b class="text-primary">1000₽</b></h5>
                     <p class="info">Возможно использовать для оплаты: <b> от 344
                           до 1223₽</b></p>
                     <input type="hidden" value="usebonus" name="action">
                     <div class="inpborder">
                        <input type="text" name="count" placeholder="Количество бонусов" />
                     </div>
                     <button type="submit" class="btn btn-sm btn-secondary shadow-hover">
                        <span>Использовать</span>
                     </button>
                  </form>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-xl-3 pl-lg-0">
            <div class="sticky pt-lg-3">
               <div class="basketSum">

                  <div class="payBlock">
                     <h5 class="zagH h5 hdark">Способ оплаты</h5>
                     <div class="payvariant">
                        <input type="radio" id="opl1" value="1" name="pay" form="orderform" checked>
                        <label for="opl1">
                           <div class="top">
                              <i class="far fa-money-bill-alt"></i>
                              <span>При получении заказа</span>
                              <b class="checked"></b>
                           </div>
                        </label>
                     </div>
                     <div class="payvariant">
                        <input type="radio" id="opl2" value="74" name="pay" form="orderform">
                        <label for="opl2">
                           <div class="top">
                              <i class="far fa-credit-card"></i>
                              <span>Онлайн оплата</span>
                              <b class="checked"></b>
                           </div>
                           <div class="bottom">
                              <img src="../img/visa.svg" data-toggle="tooltip" data-placement="bottom"
                                 data-original-title="Visa">
                              <img src="../img/mastercard.svg" data-toggle="tooltip" data-placement="bottom"
                                 data-original-title="Mastercard">
                              <img src="../img/maestro.svg" data-toggle="tooltip" data-placement="bottom"
                                 data-original-title="Maestro">
                              <img src="../img/mir.svg" data-toggle="tooltip" data-placement="bottom"
                                 data-original-title="МИР">
                           </div>
                        </label>
                     </div>
                  </div>

                  <div class="tableSum">
                     <div class="blockt">
                        <div class="headt">Товары</div>
                        <div class="linet">
                           <span class="lineleft">Количество</span>
                           <b class="lineright">3 шт.</b>
                        </div>
                        <div class="linet">
                           <span class="lineleft">Стоимость</span>
                           <b class="lineright">1277₽</b>
                        </div>
                     </div>
                     <div class="blockt">
                        <div class="headt">Подарки</div>
                        <div class="linet">
                           <span class="lineleft">3 шт.</span>
                           <b class="lineright">БЕСПЛАТНО</b>
                        </div>
                     </div>
                     <div class="blockt">
                        <div class="headt">Доставка</div>
                        <div class="linet">
                           <span class="dost">Санкт-Петербург г, м. Автово, проспект Стачек, 75 по предоплате</span>
                        </div>
                        <div class="linet">
                           <span class="lineleft">Стоимость</span>
                           <b class="lineright">БЕСПЛАТНО</b>
                        </div>
                     </div>
                     <div class="blockt">
                        <div class="headt">Бонусы</div>
                        <div class="linet">
                           <span class="lineleft">Оплата подарочной картой</span>
                           <b class="lineright">1277₽</b>
                        </div>
                     </div>
                     <?php
                     if(isset($_GET["nonbonus"])){
                        echo "<div class='blockt bonusBasket'>
                                 <div class='linet'>Для использования бонусного счета необходимо авторизоваться или зарегистрироваться на сайте</div>
                              </div>";
                     }else{
                        echo "<div class='blockt bonusBasket'>
                                 <div class='headt'>Будет начисленно бонусов</div>
                                 <div class='linet'>
                                    <span class='lineleft'>За товары</span>
                                    <b class='lineright'>10₽</b>
                                 </div>
                                 <div class='linet'>
                                    <span class='lineleft'>За оплату онлайн</span>
                                    <b class='lineright'>50₽ <i>5%</i></b>
                                 </div>
                                 <div class='linet'>
                                    <span class='lineleft'>За доставку</span>
                                    <b class='lineright'>30₽ <i>2%</i></b>
                                 </div>
                              </div>";
                     }
                     ?>
                     <div class="itog">
                        <span class="lineleft">Итого</span>
                        <b class="lineright">1277₽</b>
                     </div>
                  </div>
                  

                  <button class="btn btn-lg btn-primary btn-move-ico shadow-hover" type="button" disabled>
                     <span>Оформить заказ</span>
                     <i class="fas fa-check"></i>
                  </button>

                  <!-- <p class="infoBlock">Доптекст который приходит из 1с</p>
                  <p class="warningBlock">Для возможности доставки Санкт-Петербург г, м. Автово, проспект Стачек, 75 по предоплате, пожалуйста, увеличьте сумму Вашего заказа до 1000₽</p> -->

                  <p class="textinfo">Нажимая кнопку “Отправить заказ”, вы принимаете условия <a
                        href="/pages/polzovatelskoe_soglashenie.html ">Оферты</a> и соглашаетесь на обработку
                     персональных данных в соответствии с <a
                        href="/pages/soglasie_na_obrabotku_personalnyh_dannyh.html ">Политикой конфиденциальности</a>
                  </p>

               </div>
            </div>
         </div>
      </div>
   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>