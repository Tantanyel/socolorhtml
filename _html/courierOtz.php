<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container">
      <h4 class="zagH h4 hdark">Отзыв о доставке заказа</h4>
      <div class="courierRev blpod">

         <p class="col-12">Мы будем Вам очень признательны, если вы напишите отзыв по вашему заказу №1081349, от
            2020-11-11, сделанному на сайте <a href="/">Соколор</a>.</p>

         <p class="col-12">Для нас важна ваша оценка по доставке, по упаковке и комплектности и любые ваши пожелания и
            комментарии.</p>

         <div class="form-group row no-gutters col-12">
            <label class="col-lg-2 col-sm-4 col-form-label">Отзыв*</label>
            <div class="col-lg-10 col-sm-8">
               <textarea name="question" class="form-control" placeholder="Ваш отзыв" required
                  rows="4">Ваш отзыв</textarea>
               <div class="invalid-tooltip">Заполните текст отзыва.</div>
            </div>
         </div>

         <p class="col-12">Мы хотим стать лучше для вас! Поделитесь вашим мнением о нашем магазине. Удобна ли была
            навигация на сайте, достаточно ли было информации о продуктах, какие еще бренды вы бы хотели видеть у нас и
            т.п.</p>

         <div class="form-group row no-gutters col-12">
            <label class="col-lg-2 col-sm-4 col-form-label">Мнение и пожелания</label>
            <div class="col-lg-10 col-sm-8">
               <textarea name="question" class="form-control" placeholder="Ваше мнение" required
                  rows="4">Ваше мнение</textarea>
            </div>
         </div>

         <div class="row mb-3">
            <label class="col-lg-2 col-sm-4 col-form-label">Поставьте оценку</label>
            <div class="col-lg-10 col-sm-8">
               <div class="radiovote">
                  <div class="radio">
                     <input type="radio" name="voteRev" id="star1" />
                     <label for="star1">1</label>
                  </div>
                  <div class="radio">
                     <input type="radio" name="voteRev" id="star2" />
                     <label for="star2">2</label>
                  </div>
                  <div class="radio">
                     <input type="radio" name="voteRev" id="star3" />
                     <label for="star3">3</label>
                  </div>
                  <div class="radio">
                     <input type="radio" name="voteRev" id="star4" />
                     <label for="star4">4</label>
                  </div>
                  <div class="radio">
                     <input type="radio" name="voteRev" id="star5" checked />
                     <label for="star5">5</label>
                  </div>
               </div>
            </div>
         </div>

         <div class="row mb-3 fileotz">
            <div class="col-lg-2 col-sm-4">
               <button type="button" class="btn btn-primary btnohotootz" data-photo-count="0"
                  title="Прикрепить фото">Прикрепить фото</button>
            </div>
            <div class="col-lg-10 col-sm-8 photoMinOtz">
               <div class="loadphotootz">
                  <input type="file" class="d-none inputonch" name="image1" />
                  <div class="contfile"></div>
               </div>
               <div class="loadphotootz">
                  <input type="file" class="d-none inputonch" name="image2" />
                  <div class="contfile"></div>
               </div>
               <div class="loadphotootz">
                  <input type="file" class="d-none inputonch" name="image3" />
                  <div class="contfile"></div>
               </div>
               <div class="loadphotootz">
                  <input type="file" class="d-none inputonch" name="image4" />
                  <div class="contfile"></div>
               </div>
            </div>
         </div>

         <div class="d-none">
            <input type="checkbox" class="filled-in" name="confirmation" checked />
         </div>

         <div class="form-row col-12 justify-content-end">
            <div class="col-auto">
               <button type="submit" class="btn btn-primary mb-3">Отправить</button>
            </div>
         </div>

         <div class="form-group row no-gutters col-12">
            <p class="col-form-label">Нажимая кнопку “Отправить”, вы принимаете условия <a
                  href="/pages/polzovatelskoe_soglashenie.html ">Оферты</a> и соглашаетесь на обработку персональных
               данных в соответствии с <a href="/pages/soglasie_na_obrabotku_personalnyh_dannyh.html ">Политикой
                  конфиденциальности</a></p>
         </div>
      </div>
   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>