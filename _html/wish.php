<!DOCTYPE html>
<html lang="ru">

<?php include '_head.php'; ?>

<body>

   <?php include '_header.php'; ?>

   <div class="container">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Избранное</li>
         </ol>
      </nav>

      <div class="row">
         <div class="col-lg-4 col-xl-3 filtcol">
            <div class="sticky">
               <div class="categoriesleft filters mb-3">
                  <div class="filter">
                     <span class="zagfilter">
                        <b>Меню</b>
                     </span>
                     <nav class="nav flex-column filthref">
                        <a class="nav-link" href="/users/">Личный кабинет</a>
                        <a class="nav-link active" href="/wish-list/">Избранное</a>
                     </nav>
                  </div>

                  <a class="btn btn-danger btn-move-ico shadow-hover my-2" href="?action=logout">
                     <span>Выход</span>
                     <i class="fas fa-sign-out-alt"></i>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-lg-8 col-xl-9">
            <h4 class="zagH h4 hdark">Лист желаний</h4>
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