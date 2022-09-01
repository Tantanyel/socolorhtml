<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container">
      <h4 class="zagH h4 hdark">Регистрация</h4>
      <div class="blpod no-gutters row">
         <div class="col-12 mb-4">
            <p><b class="text-primary">SOCOLOR</b> любит и уважает своих клиентов и подписчиков! Почему Вам может быть
               интересно зарегистрироваться и подписаться на новости?</p>
            <p><b class="text-primary">Первая причина:</b> Приятные новости от SOCOLOR о скидках, подарках и бесплатной
               доставке. И возможность использовать эти скидки! Мы не достаем наших клиентов пустой информацией,
               отключиться от рассылки можно в один клик в личном кабинете.</p>
            <p><b class="text-primary">Вторая причина:</b> Ваш Список желаний [Wish list] - возможность создавать в
               личном кабинете список из интересующих Вас средств. После регистрации вы будете видете ссылку "Добавить в
               Список желаний" в описании любого средства.</p>
            <p><b class="text-primary">И кстати еще раз о подарках!</b> Если в момент регистрации Вы отметите дату
               рождения, то будете получать Специальный промокод на скидку в Подарок на День Рождения!</p>
            <p>Мы благодарим Вас за то что Вы с нами!</p>
         </div>

         <div class="form-group row no-gutters col-lg-6">
            <label class="col-sm-4 col-form-label">Имя*</label>
            <div class="col-sm-8">
               <input type="text" name="firstname" class="form-control" placeholder="Имя" required=""
                  pattern="[А-Яа-яЁё]{2,20}" value="" />
               <div class="invalid-tooltip">Только кириллица. От 2 до 20 символов.</div>
            </div>
         </div>

         <div class="form-group row no-gutters col-lg-6">
            <label class="col-sm-4 col-form-label">Фамилия*</label>
            <div class="col-sm-8">
               <input type="text" name="surname" class="form-control" placeholder="Фамилия" required
                  pattern="[А-Яа-яЁё]{2,20}" value="" />
               <div class="invalid-tooltip">Только кириллица. От 2 до 20 символов.</div>
            </div>
         </div>

         <div class="form-group row no-gutters col-lg-6">
            <label class="col-sm-4 col-form-label">Отчество*</label>
            <div class="col-sm-8">
               <input type="text" name="surname" class="form-control" placeholder="Отчество" required
                  pattern="[А-Яа-яЁё]{2,20}" value="" />
               <div class="invalid-tooltip">Только кириллица. От 2 до 20 символов.</div>
            </div>
         </div>

         <div class="form-group row no-gutters col-lg-6">
            <label class="col-sm-4 col-form-label">Телефон*</label>
            <div class="input-group mb-2 col-sm-8">
               <div class="input-group-prepend">
                  <div class="input-group-text form-control">+7</div>
               </div>
               <input type="tel" name="phone" class="form-control customphone" placeholder="(999) 999-99-99"
                  pattern="[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required value="" />
               <div class="invalid-tooltip">Неверный телефон.</div>
            </div>
         </div>

         <div class="form-group row no-gutters col-lg-6">
            <label class="col-sm-4 col-form-label">E-mail*</label>
            <div class="col-sm-8">
               <input type="email" name="email" class="form-control" placeholder="E-mail" required value="" />
               <div class="invalid-tooltip">Неверный E-mail.</div>
            </div>
         </div>

         <div class="form-group row no-gutters col-lg-6">
            <label class="col-sm-4 col-form-label">Дата рождения</label>
            <div class="birthday row no-gutters col-sm-8">
               <select name="birthdayDay" class="form-control col-4">
                  <option label="День" value="" selected="selected">День</option>
               </select>
               <select name="birthdayMonth" class="form-control col-4">
                  <option label="Месяц" value="" selected="selected">Месяц</option>
               </select>
               <select name="birthdayYear" class="form-control col-4">
                  <option label="Год" value="" selected="selected">Год</option>
               </select>
            </div>
         </div>

         <div class="form-group row no-gutters col-lg-6">
            <label class="col-sm-4 col-form-label">Придумайте пароль*</label>
            <div class="col-sm-8">
               <input type="password" name="email" class="form-control" placeholder="Пароль" required
                  pattern="[\x1F-\xBF]{6,}" value="" />
               <div class="invalid-tooltip">Только буквы латинского алфавита, от 6 символов</div>
            </div>
         </div>

         <div class="form-group row no-gutters col-lg-6">
            <label class="col-sm-4 col-form-label">Повторите пароль*</label>
            <div class="col-sm-8">
               <input type="password" name="email" class="form-control" placeholder="Повторите пароль" required
                  pattern="[\x1F-\xBF]{6,}" value="" />
               <div class="invalid-tooltip">Только буквы латинского алфавита, от 6 символов</div>
            </div>
         </div>

         <div class="form-group row no-gutters col-12">
            <div class="checkbox col-12 col-form-label">
               <input type="checkbox" class="filled-in" id="confirmation" name="confirmation" checked />
               <label for="confirmation">Я подтверждаю свою дееспособность, даю согласие на обработку своих персональных
                  данных в соответствии с <a href="/pages/soglasie_na_obrabotku_personalnyh_dannyh.html">Условиями</a>,
                  а также с <a href="/pages/polzovatelskoe_soglashenie.html">Условиями продажи</a></label>
            </div>
         </div>

         <div class="form-row col-12 justify-content-end">
            <div class="col-lg-auto col-sm-12">
               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                     <img src="https://www.new.socolor.ru/captcha2.php" height="38px">
                  </div>
                  <input type="text" class="form-control" placeholder="Код на рисунке">
               </div>
            </div>
            <div class="col-auto">
               <button type="submit" class="btn btn-primary mb-3">Регистрация</button>
            </div>
         </div>

      </div>


   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>