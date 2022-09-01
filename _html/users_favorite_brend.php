<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

  <?php include '_header.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-xl-3 filtcol">
        <div class="sticky">
          <?php include '_menu_users.php'; ?>
        </div>
      </div>

      <div class="col-lg-8 col-xl-9 favoriteBrends">
        <h4 class="zagH h4 hdark mt-3">Бренды и категории месяца</h4>

        <div class="blpod textfbrends">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus labore, pariatur neque explicabo fugit,
            quas commodi aspernatur, ipsa atque veniam voluptatem deserunt aliquam? Molestias, cumque soluta esse dolore
            laudantium est.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo aperiam sequi quos ipsa magni molestias
            aliquid sunt nulla necessitatibus consectetur laudantium, dolor ipsum? Explicabo blanditiis cupiditate,
            provident numquam voluptas enim.</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quia accusantium deleniti mollitia. Esse
            totam nemo nesciunt repudiandae similique doloribus. Non rem consequatur deleniti consequuntur praesentium
            libero! Maxime, distinctio corrupti!</p>
        </div>

        <form class="blpod">
          <p class="col-12 info">
            <i class="fas fa-exclamation-circle"></i>
            Вы можете выбрать еще <b id="ostCount">3</b> любимых бренда или категории! При покупке вы получите
            увеличенные
            баллы.
          </p>

          <div class="typebrends">
            <div class="checkbox">
              <input type="checkbox" class="filled-in" id="id_1-1" />
              <label for="id_1-1"><b>бренд</b> L'Oreal Professionnel</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" class="filled-in" id="id_1-2" />
              <label for="id_1-2"><b>бренд</b> La Roche-Posay</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" class="filled-in" id="id_1-3" />
              <label for="id_1-3"><b>категория</b> Чувствительная кожа головы</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" class="filled-in" id="id_1-4" />
              <label for="id_1-4"><b>категория</b> Для жирной и проблемной кожи</label>
            </div>
          </div>

          <div class="form-row justify-content-end mt-3">
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </div>

        </form>

        <div class="blpod specPriceBrends pt-1">
          <h5 class="zagH h5 hdark">Скидки специально для вас</h5>
          <div class="bestBrends">
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
                <span>Johnny's Chop Shop</span>
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

        </div>

        <div class="blpod faq pt-1">
          <h5 class="zagH h5 hdark">Сегодня действует повышенное начисление бонусных баллов</h5>

          <div class="infoblfav">
            <h5>За покупку товаров категорий:</h5>
            <div class="allinfblfav">
              <a href="/dlya_mugchen/" class="itemblfav">
                <b class="skid">30%</b> Для Мужчин
              </a>
              <a href="/uhod_za_licom/ochischenie_kozhi/" class="itemblfav">
                <b class="skid">40%</b> Очищение кожи
              </a>
            </div>

            <h5>За покупку товаров брендов:</h5>
            <div class="allinfblfav">
              <a href="/result.html?mark=787" class="itemblfav">
                <b class="skid">20%</b> Holyland Laboratories
              </a>
              <a href="/brands/redken/" class="itemblfav">
                <b class="skid">10%</b> Redken
              </a>
            </div>
          </div>

          <p class="col-12 info m-0">
            <i class="fas fa-exclamation-circle"></i>
            К сожалению, Вы не можете оплатить бонусными баллами товары следующих брендов:
            <a class="text-secondary" href="#">Kerastase</a>, <a class="text-secondary" href="#">Matrix</a>, <a class="text-secondary" href="#">Qtem</a>
          </p>
        </div>

        <div class="blpod faq pt-1">
          <h5 class="zagH h5 hdark">Вопросы и ответы</h5>

          <div class="accordionFaq" id="aFaq">

            <div class="faqItem">
              <div class="headerfaq" data-toggle="collapse" data-target="#f1" aria-expanded="true">
                <i class="fas fa-chevron-down"></i>
                <b>Вопрос первый</b>
              </div>
              <div id="f1" class="collapse show" data-parent="#aFaq">
                <div class="bodyfaq">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <b>voluptatem</b> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <a href="#">voluptatem</a> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <i>voluptatem</i> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                </div>
              </div>
            </div>

            <div class="faqItem">
              <div class="headerfaq collapsed" data-toggle="collapse" data-target="#f2" aria-expanded="false">
                <i class="fas fa-chevron-down"></i>
                <b>Вопрос второй</b>
              </div>
              <div id="f2" class="collapse" data-parent="#aFaq">
                <div class="bodyfaq">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <i>voluptatem</i> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <b>voluptatem</b> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <a href="#">voluptatem</a> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                </div>
              </div>
            </div>

            <div class="faqItem">
              <div class="headerfaq collapsed" data-toggle="collapse" data-target="#f3" aria-expanded="false">
                <i class="fas fa-chevron-down"></i>
                <b>Вопрос третий</b>
              </div>
              <div id="f3" class="collapse" data-parent="#aFaq">
                <div class="bodyfaq">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <a href="#">voluptatem</a> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <i>voluptatem</i> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <b>voluptatem</b> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                </div>
              </div>
            </div>

            <div class="faqItem">
              <div class="headerfaq collapsed" data-toggle="collapse" data-target="#f4" aria-expanded="false">
                <i class="fas fa-chevron-down"></i>
                <b>Вопрос четвертый</b>
              </div>
              <div id="f4" class="collapse" data-parent="#aFaq">
                <div class="bodyfaq">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <b>voluptatem</b> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <a href="#">voluptatem</a> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem dolores laborum molestias explicabo eius ullam commodi cumque asperiores <i>voluptatem</i> a unde dicta deleniti, illo minima ducimus atque quibusdam necessitatibus!</p>
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
</body>

</html>