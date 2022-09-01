<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="BigSlider">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <img class="d-none d-lg-block" src="../img/delete/banner1.jpg" />
            <img class="d-lg-none" src="../img/delete/banner1mob.jpg" />
         </div>
         <div class="swiper-slide">
            <img class="d-none d-lg-block" src="../img/delete/banner2.jpg" />
            <img class="d-lg-none" src="../img/delete/banner2mob.jpg" />
         </div>
      </div>
      <div class="arrowsBlock">
         <div class="contArr">
            <div class="button-next"><i class="fas fa-arrow-right"></i></div>
            <div class="paginationArr"></div>
            <div class="button-prev"><i class="fas fa-arrow-left"></i></div>
         </div>
      </div>
   </div>

   <div class="container pt-2">

      <?php
      if(isset($_GET["brends2"])){
         echo '
         <h4 class="zagH h4 hdark">Популярные бренды</h4>
         <div class="bestBrends bmain">
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendMATRIX.jpg" />
            <div class="nbrend">
               <span>Matrix</span>
               <b>до -50%</b>
            </div>
         </a>
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendKERASTASE.jpg" />
            <div class="nbrend">
               <span>Kerastase</span>
            </div>
         </a>
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendBatiste.jpg" />
            <div class="nbrend">
               <span>Batiste</span>
               <b>до -50%</b>
            </div>
         </a>
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendMATRIX.jpg" />
            <div class="nbrend">
               <span>Matrix</span>
               <b>до -50%</b>
            </div>
         </a>
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendKERASTASE.jpg" />
            <div class="nbrend">
               <span>Kerastase</span>
            </div>
         </a>
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendBatiste.jpg" />
            <div class="nbrend">
               <span>Batiste</span>
               <b>до -50%</b>
            </div>
         </a>
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendMATRIX.jpg" />
            <div class="nbrend">
               <span>Matrix</span>
               <b>до -50%</b>
            </div>
         </a>
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendKERASTASE.jpg" />
            <div class="nbrend">
               <span>Johnnys Chop Shop</span>
               <b>до -50%</b>
            </div>
         </a>
         <a href="#" class="pbrend shadow-hover">
            <img src="../img/delete/BrendBatiste.jpg" />
            <div class="nbrend">
               <span>Batiste</span>
            </div>
         </a>
         </div>
         ';
      }else{
         echo '
         <h4 class="zagH h4 hdark">Популярные бренды</h4>
         <form class="taps" action="/result.html" method="get">
            <div class="tapbl">
                  <button class="tapbtn" type="submit" name="mark[]" value="737">Kaaral</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="10">Kerastase</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="179">LOreal Professionnel</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="178">Matrix</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="235">Wella Professionals</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="2343">Holly Polly</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="203">Londa Professional</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="2094">Qtem</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="1725">Rausch</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="11">Redken</button>
            </div>
            <input type="hidden" name="idcat" value="{$category.id}" />
         </form>
         ';
      }
      ?>

      <div class="TovarSlider">
         <h4 class="zagH h4 hdark">Вам может понравиться</h4>
         <div class="swiper-wrapper">
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
         </div>
         <div class="button-next-up"><i class="fas fa-arrow-right"></i></div>
         <div class="button-prev-up"><i class="fas fa-arrow-left"></i></div>
      </div>

      <div class="articlesPremium">
         <h4 class="zagH h4 hdark">Заголовок для баннеров</h4>
         <div class="articlesPremiumContent">
            <a href="#" class="atrc">
               <img src="../img/delete/blog1.jpg">
               <div class="text">
                  <b>Серия средств Bonacure Fibre Force для укрепления экстремально поврежденных волос</b>
                  <p>BC Fibre Force предлагает</p>
                  <span class="more">Подробнее</span>
               </div>
            </a>
            <a href="#" class="atrc">
               <img src="../img/delete/blog2.jpg">
               <div class="text">
                  <b>Идеальная солнцезащита для лица от Bioderma</b>
                  <p>BC Fibre Force предлагает революционную программу восстановления экстремально поврежденных волос - благодаря запатентованной Технологии Bond Connector происходит глубокая структурная регенерация, волосам возвращается их природное качество, они становятся в 10 раз более устойчивы к ломкости и повреждениям.</p>
                  <span class="more">Подробнее</span>
               </div>
            </a>
            <a href="#" class="atrc">
               <img src="../img/delete/blog3.jpg">
               <div class="text">
                  <b>Новинка - Серия средств Revlon Magnet для защиты волос от негативного воздействия окружающей среды</b>
                  <p>BC Fibre Force предлагает революционную программу восстановления экстремально поврежденных волос - благодаря запатентованной Технологии Bond Connector происходит глубокая структурная регенерация, волосам возвращается их природное качество, они становятся в 10 раз более устойчивы к ломкости и повреждениям.</p>
                  <span class="more">Подробнее</span>
               </div>
            </a>
         </div>
      </div>


      <div class="blockTovar">
         <h4 class="zagH h4 hdark">Предложения недели</h4>
         <div class="itemsCont">
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
            <?php include '_item.php'; ?>
         </div>
      </div>
   </div>

   <div class="infoMain">
      <div class="container">
         <h4 class="zagH h4 hlight">Почему выбирают нас?</h4>
         <div class="row">
            <div class="col-lg-4">
               <a href="/courier/" class="maininfoitem">
                  <img src="../img/benefit1.png" />
                  <span class="benefitHref">Бесплатная доставка</span>
               </a>
            </div>
            <div class="col-lg-4">
               <a href="/pages/discount.html" class="maininfoitem">
                  <img src="../img/benefit2.png" />
                  <span class="benefitHref stretched-link">Скидки до 100%</span>
               </a>
            </div>
            <div class="col-lg-4">
               <a href="/pages/mobileapp.html" class="maininfoitem">
                  <img src="../img/benefit3.png" />
                  <span class="benefitHref stretched-link">Приложение в мобильном</span>
               </a>
            </div>
         </div>
      </div>
   </div>

   <div class="container">
      <div class="TovarSlider">
         <h4 class="zagH h4 hdark">Новинки</h4>
         <div class="swiper-wrapper">
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
            <div class="swiper-slide"><?php include '_item.php'; ?></div>
         </div>
         <div class="button-next-up"><i class="fas fa-arrow-right"></i></div>
         <div class="button-prev-up"><i class="fas fa-arrow-left"></i></div>
      </div>

      <div class="row">
         <div class="col-lg-6">
            <div class="bannerItem">
               <img src="../img/delete/bottom-banner.png" />
               <div class="contBanner">
                  <h4 class="zagH h4 hdark"><b>У Вас вопрос о выборе товара?</b></h4>
                  <p>Наши консультанты помогут подобрать для Вас нужную продукцию по самым низким ценам.</p>
                  <button class="btn btn-secondary btn-move-ico shadow-hover" type="submit">
                     <span>Задать вопрос</span>
                     <i class="fas fa-arrow-right"></i>
                  </button>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="bannerItem">
               <img src="../img/delete/bottom-banner.png" />
               <div class="contBanner">
                  <h4 class="zagH h4 hdark"><b>У Вас вопрос о выборе товара?</b></h4>
                  <p>Наши консультанты помогут подобрать для Вас нужную продукцию по самым низким ценам.</p>
                  <button class="btn btn-secondary btn-move-ico shadow-hover" type="submit">
                     <span>Задать вопрос</span>
                     <i class="fas fa-arrow-right"></i>
                  </button>
               </div>
            </div>
         </div>
      </div>

      <div class="mainText">
         <p style="text-align: justify">
            Интернет-салон профессиональной косметики <a href="">SOCOLOR.RU</a> представляет полный ассортимент средств
            по уходу за волосами профессиональных марок: <a href="">Kerastase</a> (Керастаз), <a href="">Redken</a>
            (Редкен), <a href="">L'Oreal professional</a> (Лореаль Профессионель), <a href="">Matrix</a> (Матрикс).
            <br />
            Это косметика премиум-класса от профессионалов и для профессионалов. В нашем интернет салоне Вы найдете все
            новинки тех марок, с которыми мы работаем.
         </p>

         <p>
            <a href=""><b>Kerastase</b></a> – это профессиональная марка класса люкс по уходу за волосами и кожей
            головы. В этой линии для волос предусмотрены, кажется, все обстоятельства жизни. Летний зной на курорте,
            томление в зимней шапке, моросящее осеннее утро, вдохновляющая весна, зовущая к любви… Шампуни-ванны, маски,
            бальзамы, лаки, пенки, муссы – всё это Kerastase <br />
            <a href=""><b>Redken</b></a> даёт Вам огромный диапазон возможностей в области окрашивания, лечения и ухода
            за волосами. Широкая палитра оттенков позволяет создавать индивидуальные цвета, использует различные техники
            окрашивания.Уникальная гамма для мужчин обеспечивает естественный результат всего за 10 минут, скрывая седые
            волосы. <br />
            <a href=""><b>Matrix</b></a> вдохновляет парикмахеров, преображает жизнь и превращает стремление к красоте в
            источник успеха каждого. Широкий ассортимент инновационных высококачественных продуктов и уникальных
            салонных услуг MATRIXотвечает запросам самого широкого круга парикмахеров и их клиентов. <br />
            <a href=""><b>L'Oreal Professional</b></a> предоставляет лучшие продукты и возможности парикмахерам, помогая
            им мечтать, совершенствоваться и добиваться успеха вместе с нами. Продукция L'Oreal Professional
            присутствует в салонах великих парикмахеров мира, потому что все женщины разные и каждая уникальна. <br />
         </p>

         <p><a href="">SOCOLOR.RU</a> партнерский проект салона красоты Юная Красавица Услуги салона: стрижка и укладка
            волос, окрашивание, наращивание Адрес салона Москва, Зеленоград, корпус 1824.</p>

         <p>
            Наши цены на продукцию выгодно отличаются от аналогичной продукции в других салонах. В нашем
            Профессиональном интернет салоне всегда представлен в наличие весь каталог продукции. Каждый месяц мы
            устанавливаем специальные цены на отдельные средства. <br />
            В разделе <a href=""><b>спец предложения</b></a> вы найдете лучшие цены на интересующие Вас продукты.
            Заказать необходимую продукцию на нашем сайте может как обычный потребитель, так и аккредитованный
            специалист или представитель косметического салона.
         </p>
      </div>
   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>