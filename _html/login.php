<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container">


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
               <a class="nav-link" href="#">Зарегистрироваться</a>
            </nav>

            <div class="form-row col-12 justify-content-end">
               <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Войти</button>
               </div>
            </div>

            <div class="form-group row no-gutters col-12">
               <p class="col-form-label">Нажимая на кнопку «Войти», вы даете <a
                     href="/pages/soglasie_na_obrabotku_personalnyh_dannyh.html">согласие на обработку своих
                     персональных данных</a>.</p>
            </div>

         </div>
      </div>


   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>