<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Уход за волосами</a></li>
            <li class="breadcrumb-item active" aria-current="page">Сухие шампуни</li>
         </ol>
      </nav>

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

      <div class="row">
         <div class="col-lg-4 col-xl-3 filtcol">
            <div class="sticky">
               <div class="categoriesleft filters">
                  <div class="filter">
                     <span class="zagfilter" data-toggle="collapse" href="#leftcatalog" aria-expanded="false">
                        <b>Уход за волосами</b>
                        <i class="fas fa-chevron-down"></i>
                     </span>
                     <div class="collapse show" id="leftcatalog">
                        <nav class="nav flex-column filthref">
                           <a class="nav-link active" href="#">Сухие шампуни</a>
                           <a class="nav-link" href="#">Блонд</a>
                           <a class="nav-link" href="#">Безсульфатные шампуни</a>
                           <a class="nav-link" href="#">Питание и восстановление</a>
                           <a class="nav-link" href="#">Придание блеска</a>
                           <a class="nav-link" href="#">Поврежденные, ломкие волосы</a>
                           <a class="nav-link" href="#">Кератиновый уход</a>
                           <a class="nav-link" href="#">Уход для ежедневного использования</a>
                           <a class="nav-link" href="#">Придание объема волосам</a>
                           <a class="nav-link" href="#">Для всех типов волос</a>
                           <a class="nav-link" href="#">Уход для окрашенных волос</a>
                           <a class="nav-link" href="#">Антивозрастной уход</a>
                        </nav>
                     </div>
                  </div>
               </div>
               <?php include '_filter.php'; ?>
            </div>
         </div>

         <div class="col-lg-8 col-xl-9">

         <div class="categoriesSlider">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <a href="#" class="itemCatSlid">
                     <img src="../img/delete/item4.jpg" alt="">
                     <div class="text">
                        <span>Беcсульфатные шампуни</span>
                        <b>скидки до -50%</b>
                     </div>
                  </a>
               </div>
               <div class="swiper-slide">
                  <a href="#" class="itemCatSlid">
                     <img src="../img/delete/item4.jpg" alt="">
                     <div class="text">
                        <span>Беcсульфатные шампуни</span>
                        <b>скидки до -50%</b>
                     </div>
                  </a>
               </div>
               <div class="swiper-slide">
                  <a href="#" class="itemCatSlid">
                     <img src="../img/delete/item4.jpg" alt="">
                     <div class="text">
                        <span>Беcсульфатные шампуни</span>
                        <b>скидки до -50%</b>
                     </div>
                  </a>
               </div>
               <div class="swiper-slide">
                  <a href="#" class="itemCatSlid">
                     <img src="../img/delete/item4.jpg" alt="">
                     <div class="text">
                        <span>Беcсульфатные шампуни</span>
                        <b>скидки до -50%</b>
                     </div>
                  </a>
               </div>
               <div class="swiper-slide">
                  <a href="#" class="itemCatSlid">
                     <img src="../img/delete/item4.jpg" alt="">
                     <div class="text">
                        <span>Беcсульфатные шампуни</span>
                        <b>скидки до -50%</b>
                     </div>
                  </a>
               </div>
            </div>
            <div class="swiper-scrollbar"></div>
         </div>

            <form class="taps" action="/result.html" method="get">
               <h5 class="zagH h5 hdark">Популярные марки</h5>
               <div class="tapbl">
                  <button class="tapbtn" type="submit" name="mark[]" value="{$i}">Bioderma</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="{$i}">CeraVe</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="{$i}">Kerastase</button>
                  <button class="tapbtn" type="submit" name="mark[]" value="{$i}">L'Oreal Professionnel</button>
               </div>
               <input type="hidden" name="idcat" value="{$category.id}" />
            </form>

            <form class="taps" action="/result.html" method="get">
               <h5 class="zagH h5 hdark">Популярные типы товаров</h5>
               <div class="tapbl">
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Кератиновые волокна</button>
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Молочко</button>
                  <button class="tapbtn" type="submit" name="tovartype[]" value="{$i}">Мусс</button>
               </div>
               <input type="hidden" name="idcat" value="{$category.id}" />
            </form>

            <div class="paginationBlockTop">
               <h5 class="zagH h5 hdark">Выбранно <b class="text-primary">200</b> товаров</h5>
               <div class="selectsort">
                  <select class="newselect">
                     <option value="1">По популярности</option>
                     <option value="1">По возрастанию цены</option>
                     <option value="1">По убыванию цены</option>
                     <option value="1">По скидкам</option>
                     <option value="1">По новинкам</option>
                  </select>
               </div>
            </div>
            <div class="blockTovar">
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

            <div class="paginationBlockBottom">
               <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-end">
                     <li class="page-item">
                        <a class="page-link shadow-hover" href="#"><i class="fas fa-arrow-left"></i></a>
                     </li>
                     <li class="page-item"><a class="page-link shadow-hover" href="#">1</a></li>
                     <li class="page-item"><a class="page-link shadow-hover" href="#">2</a></li>
                     <li class="page-item active"><a class="page-link shadow-hover" href="#">3</a></li>
                     <li class="page-item"><a class="page-link shadow-hover" href="#">4</a></li>
                     <li class="page-item"><a class="page-link shadow-hover" href="#">5</a></li>
                     <li class="page-item">
                        <a class="page-link shadow-hover" href="#"><i class="fas fa-arrow-right"></i></a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>