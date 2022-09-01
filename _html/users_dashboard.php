<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container">

      <div class="row mt-3">
         <div class="col-lg-4 dashblock">
            <div class="dashboard vertical">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Мои данные</h5>
                  <a href="#" class="headerBtn">
                     <span>изменить</span>
                     <i class="fas fa-edit"></i>
                  </a>
               </div>
               <div class="contentDashboard">
                  <div class="infoaccDash">
                     <p><span>ФИО</span><b>Коняев Андрей</b></p>
                     <p><span>Дата рождения</span><b>05.06.1978</b></p>
                     <p><span>Телефон</span><b>8-(916) 549-99-75</b></p>
                     <p><span>E-mail</span><b>konyaev@mirlk.ru</b></p>

                     <a href="#" class="logout">
                        <span>Выход из аккаунта</span>
                        <i class="fas fa-sign-out-alt"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="dashboard vertical">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Мои адреса</h5>
                  <a href="#" class="headerBtn">
                     <span>изменить</span>
                     <i class="fas fa-edit"></i>
                  </a>
               </div>
               <div class="contentDashboard">
                  <div class="adritem">
                     <div class="headAdr">
                        <div class="type">
                           <i class="fas fa-map-marked-alt"></i>
                           <span>Самовывоз</span>
                        </div>
                        <b class="name">ул. Гагарина, д. 70 Pickpoint</b>
                     </div>
                     <p>Майкоп, Гагарина улица, 70</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-4 dashblock lg-two">
            <div class="dashboard vertical">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Я профессионал</h5>
                  <a href="#" class="headerBtn">
                     <span>заявка</span>
                     <i class="fas fa-edit"></i>
                  </a>
               </div>
               <div class="contentDashboard">
                  <!-- <p class="masterInfo err">
                     <i class="fas fa-exclamation-circle"></i>
                     Для приобретения профессиональных товаров вам необходимо пройти регистрацию в качестве мастера или
                     клиента бьюти-индустрии.
                  </p> -->
                  <p class="masterInfo ok">
                     <i class="fas fa-check-circle"></i>
                     Вы зарегистрированы в качестве клиента бьюти-индустрии.<br>
                     Теперь вам доступен полный ассортимент профессиональных товаров.
                  </p>
               </div>
            </div>
            <div class="dashboard vertical">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Бонусный счет</h5>
                  <a href="#" class="headerBtn">
                     <span>история<br>баллов</span>
                     <i class="fas fa-edit"></i>
                  </a>
               </div>
               <div class="contentDashboard">
                  <div class="bonus">
                     <div class="row">
                        <div class="col-auto bonusCol">
                           <b>545</b>
                           <span> <p class="zagBonus">Активные</p> баллы</span>
                        </div>
                        <!-- <div class="col-auto bonusCol noactiv">
                           <b>545</b>
                           <span> <p class="zagBonus">Неактивные</p> баллы</span>
                        </div> -->
                     </div>
                     <form class="bonusPromoDash">
                        <input type="text" placeholder="Промокод на баллы" />
                        <button type="button"><i class="fas fa-check"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-4 dashblock">
            <div class="dashboard">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Список желаний</h5>
                  <a href="#" class="headerBtn">
                     <span>весь<br>список</span>
                     <i class="far fa-heart"></i>
                  </a>
               </div>
               <div class="infoFav">
                  <span class="infnalfav nal"><i class="fas fa-check-circle"></i> в наличии:
                     <b>10</b></span>
                  <span class="infnalfav nonal"><i class="fas fa-times-circle"></i> нет в наличии:
                     <b>99</b></span>
               </div>
               <div class="dashFavItems">
                  <div class="swiper-wrapper">
                     <div class="itemDashboard swiper-slide">
                        <div class="photo">
                           <img src="../img/delete/item1.jpg" alt="photo" width="200" height="200" />
                        </div>
                        <div class="price">
                           <span class="normalprice">1500<b>₽</b></span>
                           <span class="skid">-30%</span>
                           <span class="oldprice">2000₽</span>
                        </div>
                        <a href="/krem-penka_dlya_umyvaniya_300_ml_id_155346.html" class="name stretched-link">
                           <p><b>Sesderma</b> Крем-пенка для умывания, 300 мл</p>
                        </a>
                     </div>

                     <div class="itemDashboard swiper-slide">
                        <div class="photo">
                           <img src="../img/delete/item1.jpg" alt="photo" width="200" height="200" />
                        </div>
                        <div class="price">
                           <span class="normalprice">1500<b>₽</b></span>
                           <span class="skid">-30%</span>
                           <span class="oldprice">2000₽</span>
                        </div>
                        <a href="/krem-penka_dlya_umyvaniya_300_ml_id_155346.html" class="name stretched-link">
                           <p><b>Sesderma</b> Крем-пенка для умывания, 300 мл</p>
                        </a>
                     </div>

                     <div class="itemDashboard swiper-slide">
                        <div class="photo">
                           <img src="../img/delete/item1.jpg" alt="photo" width="200" height="200" />
                        </div>
                        <div class="price">
                           <span class="normalprice">1500<b>₽</b></span>
                           <span class="skid">-30%</span>
                           <span class="oldprice">2000₽</span>
                        </div>
                        <a href="/krem-penka_dlya_umyvaniya_300_ml_id_155346.html" class="name stretched-link">
                           <p><b>Sesderma</b> Крем-пенка для умывания, 300 мл</p>
                        </a>
                     </div>

                     <div class="itemDashboard swiper-slide">
                        <div class="photo">
                           <img src="../img/delete/item1.jpg" alt="photo" width="200" height="200" />
                        </div>
                        <div class="price">
                           <span class="normalprice">1500<b>₽</b></span>
                           <span class="skid">-30%</span>
                           <span class="oldprice">2000₽</span>
                        </div>
                        <a href="/krem-penka_dlya_umyvaniya_300_ml_id_155346.html" class="name stretched-link">
                           <p><b>Sesderma</b> Крем-пенка для умывания, 300 мл</p>
                        </a>
                     </div>
                  </div>
                  <div class="swiper-pagination"></div>
               </div>
               <div class="contentDashboard" style="display: none;">
                  <p class="noitems">У вас нет товаров в списке желаний</p>
               </div>
            </div>
         </div>

         <div class="col-lg-6 dashblock">
            <div class="dashboard fgunset">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Любимые</h5>
                  <a href="#" class="headerBtn">
                     <span>выбрать</span>
                     <i class="fas fas fa-check"></i>
                  </a>
               </div>
               <div class="contentDashboard">
                  <p class="masterInfo ok">
                     <i class="fas fa-check-circle"></i>
                     Вы выбрали свои любимые брены и категории! При покупке вы получите увеличенные баллы.
                  </p>
                  <div class="typebrends">
                     <a href="#" class="checkbox">
                        <label><b>бренд</b> L'Oreal Professionnel</label>
                     </a>
                     <a href="#" class="checkbox">
                        <label><b>бренд</b> La Roche-Posay</label>
                     </a>
                     <a href="#" class="checkbox">
                        <label><b>категория</b> Для жирной и проблемной кожи</label>
                     </a>
                  </div>
               </div>
            </div>
         </div>


         <div class="col-lg-6 dashblock">
            <div class="dashboard fgunset">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Скидки</h5>
                  <a href="#" class="headerBtn">
                     <span>смотреть</span>
                     <i class="fas fa-percentage"></i>
                  </a>
               </div>
               <div class="bestBrends">
                  <div class="swiper-wrapper">
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendMATRIX.jpg" />
                        <div class="nbrend">
                           <span>Matrix</span>
                           <b>до -50%</b>
                        </div>
                     </a>
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendKERASTASE.jpg" />
                        <div class="nbrend">
                           <span>Kerastase</span>
                        </div>
                     </a>
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendBatiste.jpg" />
                        <div class="nbrend">
                           <span>Batiste</span>
                           <b>до -50%</b>
                        </div>
                     </a>
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendMATRIX.jpg" />
                        <div class="nbrend">
                           <span>Matrix</span>
                           <b>до -50%</b>
                        </div>
                     </a>
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendKERASTASE.jpg" />
                        <div class="nbrend">
                           <span>Kerastase</span>
                        </div>
                     </a>
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendBatiste.jpg" />
                        <div class="nbrend">
                           <span>Batiste</span>
                           <b>до -50%</b>
                        </div>
                     </a>
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendMATRIX.jpg" />
                        <div class="nbrend">
                           <span>Matrix</span>
                           <b>до -50%</b>
                        </div>
                     </a>
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendKERASTASE.jpg" />
                        <div class="nbrend">
                           <span>Johnny's Chop Shop</span>
                           <b>до -50%</b>
                        </div>
                     </a>
                     <a href="#" class="pbrend swiper-slide shadow-hover">
                        <img src="../img/delete/BrendBatiste.jpg" />
                        <div class="nbrend">
                           <span>Batiste</span>
                        </div>
                     </a>
                  </div>
                  <div class="swiper-pagination"></div>
               </div>
            </div>
         </div>

         <div class="col-lg-6 dashblock">
            <div class="dashboard fgunset">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Мои заказы</h5>
                  <a href="#" class="headerBtn">
                     <span>история<br>заказов</span>
                     <i class="fas fa-history"></i>
                  </a>
               </div>
               <div class="contentDashboard" id="accordionZakDash">
                  <div class="itemZak">
                     <div class="headerzak" data-toggle="collapse" data-target="#zakid1" aria-expanded="true">
                        <i class="iconzak"></i>
                        <div class="idzak">
                           <b>№</b>
                           <span>11111</span>
                        </div>
                        <div class="data">
                           <b>от</b>
                           <span>11.11.2011</span>
                        </div>
                        <div class="summ">
                           <b>сумма</b>
                           <span>2000<b>₽</b></span>
                        </div>
                        <span class="status text-success">Отправлен</span>
                     </div>
                     <div class="contzak collapse show" id="zakid1" data-parent="#accordionZakDash">
                        <div class="tovarsZak">
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                              <span class="eq">10 шт.</span>
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                              <span class="eq">10 шт.</span>
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                              <span class="eq">10 шт.</span>
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                              <span class="eq">10 шт.</span>
                           </a>
                           <a class="tovar allt">
                              <span><b>10</b>товаров</span>
                           </a>
                        </div>
                        <div class="dostZak">
                           <span>Курьером г. Минск по предоплате</span>
                           <b>450 ₽</b>
                        </div>
                     </div>
                  </div>

                  <div class="itemZak">
                     <div class="headerzak collapsed" data-toggle="collapse" data-target="#zakid2" aria-expanded="false">
                        <i class="iconzak"></i>
                        <div class="idzak">
                           <b>№</b>
                           <span>22222</span>
                        </div>
                        <div class="data">
                           <b>от</b>
                           <span>22.22.2022</span>
                        </div>
                        <div class="summ">
                           <b>сумма</b>
                           <span>2000<b>₽</b></span>
                        </div>
                        <span class="status text-info">Принят</span>
                     </div>
                     <div class="contzak collapse" id="zakid2" data-parent="#accordionZakDash">
                        <div class="tovarsZak">
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                           </a>
                           <a class="tovar allt">
                              <span><b>10</b>товаров</span>
                           </a>
                        </div>
                        <div class="dostZak">
                           <span>Курьером г. Минск по предоплате</span>
                           <b>450 ₽</b>
                        </div>
                     </div>
                  </div>

                  <div class="itemZak">
                     <div class="headerzak collapsed" data-toggle="collapse" data-target="#zakid3" aria-expanded="false">
                        <i class="iconzak"></i>
                        <div class="idzak">
                           <b>№</b>
                           <span>33333</span>
                        </div>
                        <div class="data">
                           <b>от</b>
                           <span>33.33.2033</span>
                        </div>
                        <div class="summ">
                           <b>сумма</b>
                           <span>2000<b>₽</b></span>
                        </div>
                        <span class="status text-danger">Отменен</span>
                     </div>
                     <div class="contzak collapse" id="zakid3" data-parent="#accordionZakDash">
                        <div class="tovarsZak">
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                           </a>
                           <a href="#" class="tovar">
                              <img src="../img/delete/item1.jpg" alt="photo" width="40" height="40" />
                           </a>
                           <a class="tovar allt">
                              <span><b>10</b>товаров</span>
                           </a>
                        </div>
                        <div class="dostZak">
                           <span>Курьером г. Минск по предоплате</span>
                           <b>450 ₽</b>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6 dashblock">
            <div class="dashboard fgunset">
               <div class="headDash">
                  <h5 class="zagH h5 hdark">Мои отзывы</h5>
                  <a href="#" class="headerBtn">
                     <span>все<br>отзывы</span>
                     <i class="fas fa-comment-dots"></i>
                  </a>
               </div>
               <div class="contentDashboard" id="accordionOtzDash">
                  <div class="itemOtz">
                     <div class="headerotz" data-toggle="collapse" data-target="#otsid1" aria-expanded="true">
                        <i class="iconotz"></i>
                        <div class="nameTovar">
                           <span><b>Sesderma1</b> Крем-пенка для умывания, 300 мл</span>
                           <b>11.11.2011</b>
                        </div>
                        <span class="status text-danger">Ожидает модерации</span>
                     </div>
                     <div class="contotz collapse show" id="otsid1" data-parent="#accordionOtzDash">
                        <div class="otz">
                           <div class="stars">
                              <b>Ваша оценка: </b>
                              <div class="starsprogress">
                                 <img class="starssvg" src="/templates/socolor/img/stars.svg">
                                 <div class="progres-line" style="width: 80%;"></div>
                              </div>
                              <span class="colvote">(4)</span>
                           </div>
                           <div class="textotz">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores
                                 accusamus
                                 assumenda sed eum consequuntur porro. Blanditiis quidem consectetur eum nam nihil et
                                 cupiditate
                                 inventore sit consequuntur sint, vel non.</p>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores
                                 accusamus
                                 assumenda sed eum consequuntur porro. Blanditiis quidem consectetur eum nam nihil et
                                 cupiditate
                                 inventore sit consequuntur sint, vel non.</p>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores
                                 accusamus
                                 assumenda sed eum consequuntur porro. Blanditiis quidem consectetur eum nam nihil et
                                 cupiditate
                                 inventore sit consequuntur sint, vel non.</p>
                              <a class="zoom imgrev" href="../img/delete/item1.jpg" data-lightbox="rev1"><img src="../img/delete/item1.jpg" /></a>
                              <a class="zoom imgrev" href="../img/delete/item2.jpg" data-lightbox="rev1"><img src="../img/delete/item2.jpg" /></a>
                              <a class="zoom imgrev" href="../img/delete/item3.jpg" data-lightbox="rev1"><img src="../img/delete/item3.jpg" /></a>
                              <a class="zoom imgrev" href="../img/delete/item4.jpg" data-lightbox="rev1"><img src="../img/delete/item4.jpg" /></a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="itemOtz">
                     <div class="headerotz collapsed" data-toggle="collapse" data-target="#otsid2" aria-expanded="false">
                        <i class="iconotz"></i>
                        <div class="nameTovar">
                           <span><b>Sesderma2</b> Крем-пенка для умывания, 300 мл</span>
                           <b>22.22.2022</b>
                        </div>
                        <span class="status text-danger">Ожидает модерации</span>
                     </div>
                     <div class="contotz collapse" id="otsid2" data-parent="#accordionOtzDash">
                        <div class="otz">
                           <div class="stars">
                              <b>Ваша оценка: </b>
                              <div class="starsprogress">
                                 <img class="starssvg" src="/templates/socolor/img/stars.svg">
                                 <div class="progres-line" style="width: 60%;"></div>
                              </div>
                              <span class="colvote">(3)</span>
                           </div>
                           <div class="textotz">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores
                                 accusamus
                                 assumenda sed eum consequuntur porro. Blanditiis quidem consectetur eum nam nihil et
                                 cupiditate
                                 inventore sit consequuntur sint, vel non.</p>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores
                                 accusamus
                                 assumenda sed eum consequuntur porro. Blanditiis quidem consectetur eum nam nihil et
                                 cupiditate
                                 inventore sit consequuntur sint, vel non.</p>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores
                                 accusamus
                                 assumenda sed eum consequuntur porro. Blanditiis quidem consectetur eum nam nihil et
                                 cupiditate
                                 inventore sit consequuntur sint, vel non.</p>
                              <a class="zoom imgrev" href="../img/delete/item1.jpg" data-lightbox="rev1"><img src="../img/delete/item1.jpg" /></a>
                              <a class="zoom imgrev" href="../img/delete/item2.jpg" data-lightbox="rev1"><img src="../img/delete/item2.jpg" /></a>
                              <a class="zoom imgrev" href="../img/delete/item3.jpg" data-lightbox="rev1"><img src="../img/delete/item3.jpg" /></a>
                              <a class="zoom imgrev" href="../img/delete/item4.jpg" data-lightbox="rev1"><img src="../img/delete/item4.jpg" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>

   <?php
   if(isset($_GET["modal1"])){
      echo "<div class='modal fade modalPL' id='modal' tabindex='-1' role='dialog' aria-hidden='true'>
               <div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
                  <div class='modal-content'>
                     <div class='modal-header'>
                        <h5 class='modal-title'>Участие в Программе лояльности</h5>
                        <button type='button' class='closeModal' data-dismiss='modal' aria-label='Close'>
                           <i class='fas fa-times'></i>
                        </button>
                     </div>
                     <div class='modal-body'>
                        <b>Здравствуйте! Вам доступно участие в Программе лояльности Socolor</b>
                        <p class='mb-2'>Мы хотим Вас порадовать и дарим дополнительные бонусные баллы</p>
                        <ul class='list-group'>
                           <li class='list-group-item'>
                              <p><i class='far fa-envelope'></i> За подписку на рассылку</p>
                              <span class='badge badge-primary badge-pill'>+300 баллов</span>
                              <a href='#' class='btn btn-sm btn-outline-primary'>Подписаться</a>
                           </li>
                           <li class='list-group-item'>
                              <p><i class='far fa-calendar-alt'></i> При заполнении даты рождения</p>
                              <span class='badge badge-primary badge-pill'>+300 баллов</span>
                              <a href='#' class='btn btn-sm btn-outline-primary '>Редактировать</a>
                           </li>
                           <li class='list-group-item'>
                              <p><i class='far fa-address-card'></i> При регистрации в качестве мастера<br> или клиента бьюти-индустрии</p>
                              <span class='badge badge-primary badge-pill'>+300 баллов</span>
                              <a href='#' class='btn btn-sm btn-outline-primary '>Зарегистрироваться</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <script>$('#modal').modal('show');</script>";
   }
   ?>

</body>

</html>