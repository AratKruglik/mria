<section>
	<div class="section-content">
    	<div class="container">
        	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
    			<h1>Пошук по каталогу</h1>
                <h4>Скористайтесь нашою системою пошуку об'єктів нерухомості, щоб знайти пропозицію саме для Вас!</h4>
    		</div>
            <form id="form-search" action="/">
                <div class="row">
                    <div class="col-md-6">
                    	<div class="row">
                            <div class="col-sm-6">
                                <p>ID пропозиції</p>
                                <input type="text" placeholder="Номер...">
                            </div>
                            <div class="col-sm-6">
                                <p>Місцезнаходження</p>
                                <div class="custom-select">
                                    <div class="custom-select-val"></div>
                                    <ul class="custom-select-list">
                                        <li class="custom-select-default disabled" data-val="">
                                            <div class="custom-select-item-content">Будь-яке...</div>
                                        </li>
                                        <li data-val="Оренда">
                                            <div class="custom-select-item-content">Київ</div>
                                        </li>
                                        <li data-val="Продаж">
                                            <div class="custom-select-item-content">Київська область</div>
                                        </li>
                                        <li data-val="Обмін">
                                            <div class="custom-select-item-content">Інше</div>
                                        </li>
                                    </ul>
                                    <input type="hidden">
                                </div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6">
                    	<div class="row">
                            <div class="col-sm-6">
                                <p>Тип пропозиції</p>
                                <div class="custom-select">
                                    <div class="custom-select-val"></div>
                                    <ul class="custom-select-list">
                                        <li class="custom-select-default" data-val="">
                                        	<div class="custom-select-item-content">Будь-яка...</div>
                                        </li>
                                        <li data-val="Оренда">
                                        	<div class="custom-select-item-content">Оренда</div>
                                        </li>
                                        <li data-val="Продаж">
                                        	<div class="custom-select-item-content">Продаж</div>
                                        </li>
                                        <li data-val="Обмін">
                                            <div class="custom-select-item-content">Обмін</div>
                                        </li>
                                  	</ul>
                                    <input type="hidden">
                              	</div>
                            </div>
                            <div class="col-sm-6">
                                <p>Вид об'єкта</p>
                                <div class="custom-select">
                                    <div class="custom-select-val"></div>
                                    <ul class="custom-select-list">
                                        <li class="custom-select-default" data-val="">
                                        	<div class="custom-select-item-content">Будь-який...</div>
                                        </li>
                                        <li data-val="Будинок">
                                        	<div class="custom-select-item-content">Будинок</div>
                                        </li>
                                        <li data-val="Квартира">
                                        	<div class="custom-select-item-content">Квартира</div>
                                        </li>
                                        <li data-val="Приміщення">
                                        	<div class="custom-select-item-content">Приміщення</div>
                                        </li>
                                        <li data-val="Земельна ділянка">
                                            <div class="custom-select-item-content">Земельна ділянка</div>
                                        </li>
                                  	</ul>
                                    <input type="hidden">
                              	</div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
                
                <div class="row">
                    <div class="col-md-6">
                    	<div class="row">
                            <div class="col-sm-6">
                                <p>Мінімальна ціна</p>
                                <input type="text" placeholder="...">
                            </div>
                            <div class="col-sm-6">
                                <p>Максимальна ціна</p>
                                <input type="text" placeholder="...">
                            </div>
                       	</div><!-- .row -->
                    </div><!-- .col-md-6 -->

                    <div class="col-md-6">
                    	<div class="row">
                            <div class="col-sm-6">
                                <p>Мінімальна площа (кв.м.)</p>
                                <input type="text" placeholder="...">
                            </div>
                            <div class="col-sm-6">
                                <p>Максимальна площа (кв.м.)</p>
                                <input type="text" placeholder="...">
                            </div>
                        </div>
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Кімнат від</p>
                                <input type="text" placeholder="...">
                            </div>
                            <div class="col-sm-6">
                                <p>Кімнат до</p>
                                <input type="text" placeholder="...">
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                    
                </div><!-- .row -->
                <p class="text-center onscroll-animate" data-animation="flipInY">
                    <button type="submit" id="form-search-submit" class="button-void button-long">знайти <i class="fa fa-search"></i></button>
                </p>
            </form>
       	</div><!-- .container -->
   	</div><!-- .section-content -->
</section>