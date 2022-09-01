<button class="btnshowfilter btn btn-primary btn-move-ico shadow-hover d-lg-none" data-toggle="collapse"
   data-target="#allfilters" aria-controls="navbarNavAltMarkup" aria-expanded="false">
   <span>Фильтр</span>
   <i class="fas fa-filter"></i>
</button>
<div class="collapse d-lg-block" id="allfilters">
   <form class="filters" action="#" method="get">
      <div class="dopbtn">
         <button class="btn btn-sm btn-primary" type="submit">
            <span>Применить фильтр</span>
         </button>
         <span onclick="clozeDopBtn();" class="cloze"><i class="fas fa-times"></i></span>
      </div>
      <div class="filter">
         <span class="zagfilter collapsed" data-toggle="collapse" href="#filt_12" aria-expanded="false">
            <b>Селект фильтр</b>
            <i class="fas fa-chevron-down"></i>
         </span>
         <div class="collapse" id="filt_12">
            <div class="filtercont">
               <select class="newselect">
                  <option value="1">По популярности</option>
                  <option value="1">По возрастанию цены</option>
                  <option value="1">По убыванию цены</option>
                  <option value="1">По скидкам</option>
                  <option value="1">По новинкам</option>
               </select>
            </div>
         </div>
      </div>
      <div class="filter">
         <span class="zagfilter">
            <b>Рэндж фильтр</b>
         </span>
         <div class="filtercont">
            <div class="range">
               <input type="text" class="js-range-slider" name="pricereange" value="" data-type="double" data-min="0"
                  data-max="1000" data-from="10" data-to="100" data-grid="false" />
               <input id="price_min" type="hidden" name="price_min" value="10">
               <input id="price_max" type="hidden" name="price_max" value="100">
            </div>
         </div>
      </div>
      <div class="filter">
         <span class="zagfilter collapsed" data-toggle="collapse" href="#filt_2" aria-expanded="false">
            <b>Чекбокс фильтр</b>
            <i class="fas fa-chevron-down"></i>
         </span>
         <div class="customScroll maxhfilt collapse" id="filt_2">
            <div class="filtercont">
               <div class="checkbox">
                  <input type="checkbox" class="filled-in" id="id_1-2" name="id_1-2" />
                  <label for="id_1-2">Чекбокс первый</label>
               </div>
            </div>
            <div class="filtercont">
               <div class="checkbox">
                  <input type="checkbox" class="filled-in" id="id_1-3" name="id_1-3" />
                  <label for="id_1-3">Чекбокс второй</label>
               </div>
            </div>
            <div class="filtercont">
               <div class="checkbox">
                  <input type="checkbox" class="filled-in" id="id_1-4" name="id_1-4" />
                  <label for="id_1-4">Чекбокс третий</label>
               </div>
            </div>
         </div>
      </div>
      <div class="filter">
         <span class="zagfilter tooglrfilt">
            <div class="tooglec">
               <span><b>Тугл фильтр</b></span>
               <input type="checkbox" class="tfilt" id="nal" name="toogle" />
               <label for="nal"></label>
            </div>
         </span>
      </div>
      <div class="btnbottom">
         <button class="btn btn-primary btn-move-ico shadow-hover" type="submit">
            <span>Применить</span>
            <i class="fas fa-check"></i>
         </button>
         <button class="btn btn-secondary btn-move-ico shadow-hover" type="submit">
            <span>Очистить</span>
            <i class="far fa-trash-alt"></i>
         </button>
      </div>
   </form>
</div>