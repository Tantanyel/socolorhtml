<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container" id="id_main_content">


      <h4 class="zagH h4 hdark" data-item="form_title">Вход/Регистация</h4>
      <div class="no-gutters row justify-content-center" id="id_form_login">
         <div class="blpod no-gutters col-lg-6 col-sm-12 form-user-auth">
            <div class="form_content" data-item="form_content">
               <div class="tel-email-switch">
                  <div class="te-item selected" data-item="tab_swith_btn" onclick="user_login_select_tab(0, this); return false;">Email</div>
                  <div class="te-item" data-item="tab_swith_btn" onclick="user_login_select_tab(1, this); return false;">Телефон</div>
                  <input type="hidden" name="auth_type" value="">
               </div>
               <div class="tabs-content for-auth">
                  <div class="t-content selected" data-item="t_content">
                     <div class="form-group row no-gutters col-12">
                        <label class="col-sm-4 col-form-label">E-mail</label>
                        <div class="col-sm-8">
                           <input name="login" class="form-control" placeholder="E-mail" required="" value="" type="text">
                           <div class="invalid-tooltip">
                              Заполните поле.
                           </div>
                        </div>
                     </div>
                     <div class="form-group row no-gutters col-12">
                        <label class="col-sm-4 col-form-label">Пароль</label>
                        <div class="col-sm-8">
                           <input name="password" class="form-control pr-42" placeholder="Пароль" required="" value="" type="password">
                           <a href="#" class="password-control"></a>
                           <div class="invalid-tooltip">
                              Заполните поле.
                           </div>
                        </div>
                     </div>
                     <div class="d-none">
                        <input class="filled-in" name="newsletter_s" value="1" checked="" type="checkbox">
                     </div>
                     <nav class="nav col-12">
                        <a class="nav-link pl-0" href="/users/remember.html">Забыли пароль?</a>
                        <a class="nav-link" href="/users/register.html">Зарегистрироваться</a>
                     </nav>
                  </div>
                  <div class="t-content" data-item="t_content">
                     <div data-item="tel_step_1">
                        <div class="ft_message_text" data-item="ft_message_text"></div>
                        <div class="form-group row no-gutters">
                           <div class="input-group mb-12 col-sm-12">
                              <div class="input-group-prepend">
                                 <div class="input-group-text form-control">+7</div>
                              </div>
                              <input name="phone" class="form-control customphone" placeholder="(999) 999-99-99" pattern="[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" value="" type="tel" autocomplete="off">
                              <div class="invalid-tooltip">Неверный телефон.</div>
                           </div>
                        </div>
                     </div>
                     <div data-item="tel_step_2" style="display: none;">
                        <div class="ft_preview">
                           Введите последние 4 цифры номера входящего звонка. Робот произведет звонок на номер 
                           <span class="call_number" data-item="call_number"></span> 
                           <span class="inpage_link edit_num" data-item="btn_tel_edit">(изменить)</span>
                        </div>
                        <div class="ft_message_text" data-item="ft_message_text"></div>
                        <div class="form-group row no-gutters col-12">
                           <label class="col-sm-4 col-form-label">Последние 4 цифры</label>
                           <div class="col-sm-8">
                              <input type="text" name="tel_last_numbers" class="form-control" placeholder="* * * *" value="" maxlength="4" autocomplete="off" required="">
                           </div>
                        </div>
                        <div class="ft_timer_countdown" data-item="ft_timer_countdown" style="display: none;">
                           Запросить звонок повторно можно через <span data-item="timer_countdown">60</span> сек
                        </div>
                        <div class="ft_repeat_call" data-item="ft_repeat_call" style="display: none;">
                           <span class="inpage_link" data-item="btn_call_repeat">Запросить звонок повторно</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="form-row col-12 justify-content-end">
               <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3" data-item="btn_submit">Войти</button>
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

   <script>
      var timer_tel_call_countdown = '';

      $(document).ready(function(){
         $('#modalLogin .btn.btn-primary').attr('data-item', 'btn_submit');
         
         $('#modalLogin [data-item=btn_submit]').on('click', function(){
            if($('#modalLogin input[name=auth_type]').length > 0 && $('#modalLogin input[name=auth_type]').val() == 'telephone_step_1') {
               accept_tel_number_for_tel_auth('#modalLogin');
               return false;
            }
         });

         $('#id_form_login [data-item=btn_submit]').on('click', function(){
            if($('#id_form_login input[name=auth_type]').length > 0 && $('#id_form_login input[name=auth_type]').val() == 'telephone_step_1') {
               accept_tel_number_for_tel_auth('#id_form_login');
               return false;
            }
         });

         $.mask.definitions['x'] = '[{0,1,2,3,4,5,6,9}]';
         $("#modalLogin .customphone").mask('(x99) 999-99-99',{autoclear: false});
      });

      function user_login_select_tab(selected_tab_index, sel_btn) {
         //Селектор родительского блока
         let sel_parent = '#id_form_login';
         if($(sel_btn).closest('#modalLogin').length > 0) {
            sel_parent = '#modalLogin';
         }

         //Тип выбранной авторизации
         let auth_type = 'email';
         if (selected_tab_index == '1') {
            auth_type = 'telephone_step_1';
            if ($(sel_parent).find('[data-item=tel_step_1]').css('display') != 'block') {
               auth_type = 'telephone_step_2'; 
            }
         }
         $(sel_parent).find('input[name=auth_type]').val(auth_type);

         //Выбор кнопки
         $(sel_parent).find('[data-item=tab_swith_btn]').removeClass('selected');
         $(sel_parent).find('[data-item=tab_swith_btn]').eq(selected_tab_index).addClass('selected');

         //Выбор содержимое
         $(sel_parent).find('[data-item=t_content]').removeClass('selected');
         $(sel_parent).find('[data-item=t_content]').eq(selected_tab_index).addClass('selected');

         //Обновление кнопки входа/подтверждения
         if (auth_type == 'telephone_step_1') {
            $(sel_parent).find('[data-item=btn_submit]').html('Подтвердить');
         } else if (auth_type == 'telephone_step_2') {
            $(sel_parent).find('[data-item=btn_submit]').html('Подтвердить');
         } else {
            $(sel_parent).find('[data-item=btn_submit]').html('Войти');
         }
      }

      function accept_tel_number_for_tel_auth(sel_parent) {
         let form_error_text = '';
         let tel_number = $(sel_parent).find('input[name=phone]').val();
         if (tel_number == '') {
            form_error_text = 'Введите номер телефона';
         }

         //Очистка раннего сообщения
         $(sel_parent).find('[data-item=ft_message_text]').html('');

         if (form_error_text != '') {
            $(sel_parent).find('[data-item=ft_message_text]').html('<div class="error">' + form_error_text + '</div>'); 
         } else {
            //Показываем блок для ввода последних цифр телефона
            $(sel_parent).find('[data-item=tel_step_1]').css('display', 'none'); 
            $(sel_parent).find('[data-item=tel_step_2]').css('display', 'block'); 

            //Вывод номера телефона, на которой совершается звонок
            let tel_number = '+7' + $(sel_parent).find('[data-item=tel_step_1] input[name=phone]').val();
            $(sel_parent).find('[data-item=tel_step_2] [data-item=call_number]').html(tel_number);

            //Показываем надпись с таймером
            $(sel_parent).find('[data-item=ft_timer_countdown]').css('display', 'block');
            $(sel_parent).find('[data-item=ft_repeat_call]').css('display', 'none');

            //Нажатие на кнопку изменения телефона
            $(sel_parent).find('[data-item=btn_tel_edit]').off('click');
            $(sel_parent).find('[data-item=btn_tel_edit]').on('click', function(){
               $(sel_parent).find('[data-item=tel_step_1]').css('display', 'block'); 
               $(sel_parent).find('[data-item=tel_step_2]').css('display', 'none'); 
            });

            //Запуск таймера обратного отсчёта
            var sel_timer = $(sel_parent).find('[data-item=tel_step_2] [data-item=timer_countdown]');
            $(sel_timer).html('10');
            if (typeof(timer_tel_call_countdown) == 'number') {
               clearInterval(timer_tel_call_countdown);
            }
            timer_tel_call_countdown = setInterval(function(){
               let sec = parseInt($(sel_timer).html());
               if (isNaN(sec)) {
                  sec = 60;
               }
               sec = sec - 1;
               if (sec <= 0) {
                  sec = 0;
                  $(sel_parent).find('[data-item=ft_timer_countdown]').css('display', 'none');
                  $(sel_parent).find('[data-item=ft_repeat_call]').css('display', 'block');
               } else {
                  $(sel_timer).html(sec)
               }
            }, 1000);
         }
      }
   </script>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>