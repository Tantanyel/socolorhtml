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

         <div class="col-lg-8 col-xl-9">
            <h1 class="zagH h4 hdark">Ваш бонусный счет</h1>
            <div class="bonus row m-0">
               <div class="col-auto bonusCol">
                  <b>545</b>
                  <span> <p class="zagBonus">Активные</p> баллы</span>
               </div>
               <div class="col-auto bonusCol noactiv">
                  <b>545</b>
                  <span> <p class="zagBonus">Неактивные</p> баллы</span>
               </div>
               <div class="bonusTextInfo col-12">
                  <b>1 баллл = 1 рубль</b>
                  <p class="text-danger">*Баллы действуют ограниченное количество времени, смотрите дату сгорания</p>
               </div>

               <form class="bonusBl col-12 col-lg-6">
                  <h5 class="zagH h5 hdark">Промокод на баллы</h5>
                  <div class="inpborder">
                     <input type="text" placeholder="Промокод на баллы" />
                  </div>
                  <button type="button" class="btn btn-sm btn-secondary shadow-hover">
                     <span>Применить</span>
                  </button>
               </form>
            </div>

            <h1 class="zagH h4 hdark">Ваши операции</h1>
            <div class="bonus">
               <div class="operation zags">
                  <span class="data">Дата</span>
                  <span class="colBonus">Сумма</span>
                  <span class="name">Название операции</span>
                  <span class="data">Дата сгорания</span>
               </div>
               <div class="operation">
                  <div class="data">
                     <span>09:37 - 30.09.2019</span>
                  </div>
                  <b class="colBonus">+9999</b>
                  <p class="name">Начисление за отмененный заказ № 814760</p>
                  <div class="data">
                     <span>до 30.12.2019</span>
                  </div>
               </div>
               <div class="operation">
                  <div class="data">
                     <span>09:37 - 30.09.2019</span>
                  </div>
                  <b class="colBonus">-100</b>
                  <p class="name">Оплата заказа № 814760</p>
               </div>
            </div>

            
         </div>
      </div>
   </div>

   <?php include '_footer.php'; ?>
   <?php include '_scripts.php'; ?>
</body>

</html>