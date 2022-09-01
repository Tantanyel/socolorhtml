<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container">
      <h4 class="zagH h4 hdark">Поля</h4>
      <div class="blpod no-gutters row">
      
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


      <h4 class="zagH h4 hdark">Вход</h4>
      <div class="no-gutters row justify-content-center">
         <div class="blpod no-gutters row col-lg-6 col-sm-12">

            <div class="form-group row no-gutters col-12">
               <label class="col-sm-4 col-form-label">E-mail*</label>
               <div class="col-sm-8">
                  <input type="email" name="email" class="form-control" placeholder="E-mail" required value="" />
                  <div class="invalid-tooltip">Неверный E-mail.</div>
               </div>
            </div>

            <div class="form-group row no-gutters col-12">
               <label class="col-sm-4 col-form-label">Пароль*</label>
               <div class="col-sm-8">
                  <input type="password" name="email" class="form-control" placeholder="Пароль" required value="" />
                  <div class="invalid-tooltip">Введите пароль</div>
               </div>
            </div>

            <div class="form-group row no-gutters col-12">
               <div class="checkbox col-12 col-form-label">
                  <input type="checkbox" class="filled-in" id="confirmation" name="confirmation" checked />
                  <label for="confirmation">Хочу получать новости от Socolor</label>
               </div>
            </div>

            <nav class="nav col-12">
               <a class="nav-link" href="#">Забыли пароль?</a>
               <a class="nav-link" href="#">Зарегестрироваться</a>
            </nav>

            <div class="form-row col-12 justify-content-end">
               <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Войти</button>
               </div>
            </div>

         </div>
      </div>

   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>