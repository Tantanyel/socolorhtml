<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-xl-3 filtcol">
            <div class="sticky">
               <div class="categoriesleft filters mb-3">
                  <div class="filter">
                     <span class="zagfilter">
                        <b>Профиль</b>
                     </span>
                     <nav class="nav flex-column filthref">
                        <a class="nav-link" href="#">Личный кабинет</a>
                        <a class="nav-link" href="#">Изменение персональных данных</a>
                        <a class="nav-link active" href="#">Мои адреса</a>
                        <a class="nav-link" href="#">Список желаний</a>
                        <a class="nav-link" href="#">Бонусный счет</a>
                        <a class="nav-link" href="#">Для мастеров</a>
                        <a class="nav-link" href="#">История заказов</a>
                        <a class="nav-link" href="#">Мои отзывы</a>
                     </nav>
                  </div>

                  <a class="logout" href="?action=logout">
                     <span>Выход из аккауна</span>
                     <i class="fas fa-sign-out-alt"></i>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-lg-8 col-xl-9">
            <h4 class="zagH h4 hdark mt-3">Мои адреса</h4>

            <div class="row usersadr">

               <div class="col-lg-4">
                  <div class="adritem active">
                     <div class="icons">
                        <i class="fas fa-heart" data-toggle="tooltip" data-placement="top" data-original-title="Сделать избранным"></i>
                        <i class="fas fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="Удалить адрес"></i>
                     </div>
                     <div class="headAdr">
                        <div class="type">
                           <i class="fas fa-shipping-fast"></i>
                           <span>Курьер</span>
                        </div>
                        <b class="name">Курьером г. Курск</b>
                     </div>
                     <p>Майкоп, Гагарина улица, 70</p>
                  </div>
               </div>

               <div class="col-lg-4">
                  <div class="adritem">
                     <div class="icons">
                        <i class="fas fa-heart" data-toggle="tooltip" data-placement="top" data-original-title="Сделать ибзранным"></i>
                        <i class="fas fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="Удалить адрес"></i>
                     </div>
                     <div class="headAdr">
                        <div class="type">
                           <i class="fas fa-map-marked-alt"></i>
                           <span>Самовывоз</span>
                        </div>
                     </div>
                     <b class="name">ул. Гагарина, д. 70 Pickpoint</b>
                     <p>Майкоп, Гагарина улица, 70</p>
                  </div>
               </div>

               <div class="col-lg-4">
                  <div class="adritem">
                     <div class="icons">
                        <i class="fas fa-heart" data-toggle="tooltip" data-placement="top" data-original-title="Сделать ибзранным"></i>
                        <i class="fas fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="Удалить адрес"></i>
                     </div>
                     <div class="headAdr">
                        <div class="type">
                           <i class="fas fa-mail-bulk"></i>
                           <span>Почта</span>
                        </div>
                        <b class="name">Почтовая доставка в другие города Тулы</b>
                     </div>
                     <p>Майкоп, Гагарина улица, 70</p>
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