<div class="item">
  <div class="topbl">
    <div class="topinfo">
      <?php
      $randcolot = rand(7,33);
      $randycensum = rand(500,2000);
      echo (rand(0,5) == 0) ? '<span class="new">NEW</span>' : ''; 
      echo (rand(0,5) == 0) ? "<span><i class='fas fa-fill-drip'></i> $randcolot оттенка</span>" : ''; 
      echo (rand(0,5) == 0) ? "<span class='ycenka'><i class='fas fa-tags'></i> Есть уцененный: $randycensum ₽</span>" : ''; 
      echo (rand(0,5) == 0) ? '<span class="samovivoz"><i class="fa-solid fa-truck-fast"></i> Забери сегодня</span>' : '';
      ?>
    </div>
    <div class="photo">
      <img class="itemphotofirst" src="../img/delete/item1.jpg" />
      <img class="itemphotosecond" src="../img/delete/item2.jpg" />
    </div>
  </div>
  <?php
    if(rand(0,1) == 0){
      switch (rand(0,3)){
          case 0: $textline = "Питание и восстановление <br> Второая строка"; break;
          case 1: $textline = "Для всех типов волос"; break;
          case 2: $textline = "Придание блеска"; break;
          case 3: $textline = "Антивозрастной уход"; break;
      }
      switch (rand(0,5)){
        case 0: $textline = "<b>Жирный текст</b><br>".$textline; break;
        case 1: $textline = "<i>Наклоненный текст</i><br>".$textline; break;
        case 2: $textline = "<s>Зачеркнутый текст</s><br>".$textline; break;
      }
      echo "<div class='lineinfo'><span>$textline</span></div>"; 
    }
  ?>
  <div class="nameHoverPos">
    <div class="nameHover">
      <p><b>Dikson</b> Шампунь для ежедневного использования с аргановым маслом, 250 мл</p>
    </div>
  </div>
  <a href="#" class="name stretched-link">
    <p><b>Dikson</b> Шампунь для ежедневного использования с аргановым маслом, 250 мл</p>
  </a>
  <div class="stars">
    <div class="starsprogress">
      <img class="starssvg" src="../img/stars.svg" />
      <div class="progres-line" style="width: 33%"></div>
      <!-- Процент заполнения звезд -->
    </div>
    <span class="colvote">25 отзывов</span>
    <div class="wishlist" data-toggle="tooltip" data-placement="top" title="Добавить в избранное">
      <a href="#343434" class="active"><i class="fas fa-heart"></i></a>
    </div>
  </div>
  <form class="btnbuyform" action="#">
    <button class="btnbuy" type="submit" disabled>
      <div class="price">
        <span class="oldprice">2000₽</span>
        <span class="skid">-30%</span>
        <span class="normalprice">1550<b>₽</b></span>
      </div>
      <div class="btn btn-secondary btn-move-ico shadow-hover">
         <span>Купить</span>
         <i class="fas fa-shopping-cart"></i>
      </div>
    </button>
    <!-- <button class="btnbuy" type="button" disabled>
      <div class="price">
        <span class="oldprice">2000₽</span>
        <span class="skid">-30%</span>
        <span class="normalprice">1500<b>₽</b></span>
      </div>
      <span class="textinfo">Нет в наличии</span>
    </button> -->
    <!-- <button class="btnbuy" type="button" disabled>
      <a href="/pages/kosmetolog.html" class="btn btn-secondary cosmet" title="Зарегистрироваться как косметолог">
        <span>Для косметологов</span>
     </a>
    </button> -->
  </form>
</div>
