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

   <div class="container">
      <div class="premiumTap">
         <a href="#"><span>Все товары</span></a>
         <a href="#"><span>Для кожи головы</span></a>
         <a href="#"><span>Стайлинг</span></a>
         <a href="#"><span>Уход за лицом</span></a>
         <a href="#"><span>Уход за полостью рта</span></a>
      </div>
   </div>

   <a href="#" class="slimBanner">
      <b>Премиальные бренды на <img src="../img/logowhite.svg" alt="logo"></b>
      <div class="btnSlimBanner">
         <span>Cмотреть все</span>
      </div>
   </a>

   <div class="BrendSlider">
      <div class="swiper-wrapper">
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendBatiste.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/Brend MACADAMIA.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendDAVINES.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendINDOLA.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendKERASTASE.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendMATRIX.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendREDKEN.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendSCHWARZKOPF.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendBatiste.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/Brend MACADAMIA.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendDAVINES.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendINDOLA.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendKERASTASE.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendMATRIX.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendREDKEN.jpg" /></a>
         <a href="#" class="swiper-slide"><img src="../img/delete/BrendSCHWARZKOPF.jpg" /></a>
      </div>
      <div class="button-next"><i class="fas fa-arrow-right"></i></div>
      <div class="button-prev"><i class="fas fa-arrow-left"></i></div>
   </div>

   <div class="infoPremium">
      <h5 class="zagCenter"><span><b>Преимущества</b></span></h5>
      <div class="container">
         <div class="premiumAdvantages">
            <div class="advant">
               <div class="icon">
                  <img src="../img/delete/adv1.png">
               </div>
               <span>Исключительные бренды</span>
            </div>
            <div class="advant">
               <div class="icon">
                  <img src="../img/delete/adv2.png">
               </div>
               <span>Экспертность</span>
            </div>
            <div class="advant">
               <div class="icon">
                  <img src="../img/delete/adv3.png">
               </div>
               <span>Вдохновение</span>
            </div>
            <div class="advant">
               <div class="icon">
                  <img src="../img/delete/adv4.png">
               </div>
               <span>На первый заказ</span>
            </div>
            <div class="advant">
               <div class="icon">
                  <img src="../img/delete/adv5.png">
               </div>
               <span>Премиальный сервис</span>
            </div>
         </div>
      </div>
   </div>

   <div class="container">

      <div class="barnadPremium">

         <div class="fonPremium">
            <h3 class="zagCenter"><span><b>Для волос</b></span></h3>

            <div class="premiumCat">
               <a href="#" class="itemCat">
                  <div class="img">
                     <img src="../img/delete/item4.jpg" alt="">
                  </div>
                  <div class="text">
                     <span>Беcсульфатные шампуни</span>
                  </div>
               </a>
               <a href="#" class="itemCat">
                  <div class="img">
                     <img src="../img/delete/item1.jpg" alt="">
                  </div>
                  <div class="text">
                     <span>Style Link</span>
                  </div>
               </a>
               <a href="#" class="itemCat">
                  <div class="img">
                     <img src="../img/delete/item2.jpg" alt="">
                  </div>
                  <div class="text">
                     <span>Biolage R.A.W.</span>
                  </div>
               </a>
               <a href="#" class="itemCat">
                  <div class="img">
                     <img src="../img/delete/item3.jpg" alt="">
                  </div>
                  <div class="text">
                     <span>Vavoom</span>
                  </div>
               </a>
            </div>
   
            <form class="taps" action="/result.html" method="get">
               <div class="tapbl">
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Кератиновые волокна</button>
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Молочко</button>
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Мусс</button>
               </div>
               <input type="hidden" name="idcat" value="{$category.id}" />
            </form>
         </div>

         <div class="articlesPremium">
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

         <div class="TovarSlider">
            <h5 class="zagCenter"><span><b>Новинки</b></span></h5>
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

         <div class="TovarSlider">
            <h5 class="zagCenter"><span><b>Бестселлеры</b></span></h5>
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

         <div class="SliderInText">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="slidt">
                     <picture>
                        <source srcset="../img/delete/banner1.jpg" media="(min-width: 992px)">
                        <img src="../img/delete/banner1mob.jpg" loading="lazy">
                     </picture>
                     <div class="blslid">
                        <div class="contentSlid">
                           <h5 class="zagSlid h5">Новинка - Концентрированная сыворотка в ампулах против морщин La Roche-Posay Hialu B5</h5>
                           <p>Новинка в серии Hialu B5 - концентрированная сыворотка в ампулах с мощным составом для глубокого увлажнения, повышения тонуса и эластичности кожи, возвращения ей сияния и уменьшения морщин.</p>
                           <a href="#" class="btn btn-primary btn-move-ico shadow-hover">
                              <span>Перейти</span>
                              <i class="fas fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="slidt">
                     <picture>
                        <source srcset="../img/delete/banner2.jpg" media="(min-width: 992px)">
                        <img src="../img/delete/banner2mob.jpg" loading="lazy">
                     </picture>
                     <div class="blslid">
                        <div class="contentSlid">
                           <h5 class="zagSlid h5">Декоративная косметика Vivienne Sabo</h5>
                           <p>О шести средствах французского бренда Vivivenne Sabo, заслуживающих внимания: тональном крем со сценическим эффектом "Artistic foundation Cabaret Premiere", консилере "Ideal Sublime", румянах "Rose de velours", туши для ресниц и подводке для глаз Cabaret premiere, губной помаде "Merci".</p>
                           <a href="#" class="btn btn-primary btn-move-ico shadow-hover">
                              <span>Перейти</span>
                              <i class="fas fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
      </div>

      <div class="barnadPremium">

         <div class="fonPremium">
            <h3 class="zagCenter"><span><b>Для лица</b></span></h3>

            <div class="premiumCat">
               <a href="#" class="itemCat">
                  <div class="img">
                     <img src="../img/delete/item4.jpg" alt="">
                  </div>
                  <div class="text">
                     <span>Беcсульфатные шампуни</span>
                  </div>
               </a>
               <a href="#" class="itemCat">
                  <div class="img">
                     <img src="../img/delete/item1.jpg" alt="">
                  </div>
                  <div class="text">
                     <span>Style Link</span>
                  </div>
               </a>
               <a href="#" class="itemCat">
                  <div class="img">
                     <img src="../img/delete/item2.jpg" alt="">
                  </div>
                  <div class="text">
                     <span>Biolage R.A.W.</span>
                  </div>
               </a>
               <a href="#" class="itemCat">
                  <div class="img">
                     <img src="../img/delete/item3.jpg" alt="">
                  </div>
                  <div class="text">
                     <span>Vavoom</span>
                  </div>
               </a>
            </div>
   
            <form class="taps" action="/result.html" method="get">
               <div class="tapbl">
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Кератиновые волокна</button>
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Молочко</button>
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Мусс</button>
               </div>
               <input type="hidden" name="idcat" value="{$category.id}" />
            </form>
         </div>

         <div class="articlesPremium">
            <div class="articlesPremiumContent">
               <a href="#" class="atrc">
                  <img src="../img/delete/blog1.jpg">
                  <div class="text">
                     <b>Серия средств Bonacure Fibre Force для укрепления экстремально поврежденных волос</b>
                     <p>BC Fibre Force предлагает революционную программу восстановления экстремально поврежденных волос - благодаря запатентованной Технологии Bond Connector происходит глубокая структурная регенерация, волосам возвращается их природное качество, они становятся в 10 раз более устойчивы к ломкости и повреждениям.</p>
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

         <div class="TovarSlider">
            <h5 class="zagCenter"><span><b>Новинки</b></span></h5>
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

         <div class="TovarSlider">
            <h5 class="zagCenter"><span><b>Бестселлеры</b></span></h5>
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

         <div class="SliderInText">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="slidt">
                     <picture>
                        <source srcset="../img/delete/banner1.jpg" media="(min-width: 992px)">
                        <img src="../img/delete/banner1mob.jpg" loading="lazy">
                     </picture>
                     <div class="blslid">
                        <div class="contentSlid">
                           <h5 class="zagSlid h5">Новинка - Концентрированная сыворотка в ампулах против морщин La Roche-Posay Hialu B5</h5>
                           <p>Новинка в серии Hialu B5 - концентрированная сыворотка в ампулах с мощным составом для глубокого увлажнения, повышения тонуса и эластичности кожи, возвращения ей сияния и уменьшения морщин.</p>
                           <a href="#" class="btn btn-primary btn-move-ico shadow-hover">
                              <span>Перейти</span>
                              <i class="fas fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="slidt">
                     <picture>
                        <source srcset="../img/delete/banner2.jpg" media="(min-width: 992px)">
                        <img src="../img/delete/banner2mob.jpg" loading="lazy">
                     </picture>
                     <div class="blslid">
                        <div class="contentSlid">
                           <h5 class="zagSlid h5">Декоративная косметика Vivienne Sabo</h5>
                           <p>О шести средствах французского бренда Vivivenne Sabo, заслуживающих внимания: тональном крем со сценическим эффектом "Artistic foundation Cabaret Premiere", консилере "Ideal Sublime", румянах "Rose de velours", туши для ресниц и подводке для глаз Cabaret premiere, губной помаде "Merci".</p>
                           <a href="#" class="btn btn-primary btn-move-ico shadow-hover">
                              <span>Перейти</span>
                              <i class="fas fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
      </div>

      <div class="barnadPremium mb-3">
         <h3 class="zagCenter"><span><b>Подборки</b></span></h3>

         <div class="premiumPodborki">
            <a href="#" class="podborka">
               <img src="../img/delete/blog1.jpg">
               <div class="text">
                  <span>Специальные цены</span>
               </div>
            </a>
            <a href="#" class="podborka">
               <img src="../img/delete/blog2.jpg">
               <div class="text">
                  <span>Подборка уцененных товаров</span>
               </div>
            </a>
            <a href="#" class="podborka">
               <img src="../img/delete/blog3.jpg">
               <div class="text">
                  <span>Подборка специально для бородатых мужчин</span>
               </div>
            </a>
         </div>

         <div class="blockTovar">
            <h5 class="zagCenter"><span><b>Выгодные предложения</b></span></h5>
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
            </div>
         </div>

         <div class="premiumButtonAll">
            <a href="#" class="btn btn-primary btn-move-ico shadow-hover">
               <span>Посмотреть все товары</span>
               <i class="fas fa-arrow-right"></i>
            </a>
         </div>

      </div>


   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>