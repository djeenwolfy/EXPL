$(document).ready(function(){
    $('.slider').slider({
  	 	interval:3500,
  	 	height: 640
  	 });
       $('.sidenav').sidenav();
       $('.modal').modal();
         // настройка кнопки отправить с капчей
         
    // =============== calc ===============
       // Определяем собственный фильтр валют "currency".
    var demo = new Vue({
        el: '#price',
        data: {
            
            services: [
                        {
                    name: 'Копка бассейна',
                    price: 1000,
                    active: false
                },
                {
                    name: 'Гидроизоляция бассейна',
                    price:  10000,
                    active: false
                },
                {
                    name: 'Облицовка бассейна',
                    price: 4500,
                    active: false
                },
                {
                    name: 'Работа',
                    price: 1500,
                    active: false
                }
                ],

            Discount:[
                {
                    name:'Скидка',
                    active:false,
                    discount2:5
                }
            ],
            m3:[
            	{	
            		name:"Глубина",
            		active:true,
            		qwert: 0
            	},
            	{	
            		name:"Длинна",
            		active:true,
            		qwert: 0
            	},
            	{	
            		name:"Ширина",
            		active:true,
            		qwert: 0
            	},
           	]

        },
        methods: {
            toggleActive: function(s){
                s.active = !s.active;
            },
            toggleDiscount:function(s){
                s.active = !s.active;
            },
            toggleTooltip: function(){
                this.kub_update = !this.kub_update;
            },
            objem: function(){

    		var	objem = 1;

     		this.m3.forEach(function(s){
                    if (s.active){
                        objem= objem*(+s.qwert);
                    }
            });
             return objem;
        	},
            total: function(){
            			var	objem = 1;

     		this.m3.forEach(function(s){
                    if (s.active){
                        objem= objem*(+s.qwert);
                    }
            });
                var koef = 0;

                this.services.forEach(function(s){
                    if (s.active){
                        koef+= s.price;
                    }
               total=koef*objem
                });


              // if (this.Discount[0].active){
              // total = total/100*(100-this.Discount[0].discount2);
              //  }
               return total;
            }
        }
    });
    // =============== catalog ===============
    var cat = new Vue({
        el: '#catalog',
        data: {
            goods: [
                {
                    "title": "Ночной тусовщик",
                    "cartText": "Хотели бы оборудовать клуб бассейном? Без проблем! Лучшие архитекторы нашей компании воплотят ваши желания в жизнь!",
                    "image": "img/img1.jpg"
                },
                {
                    "title": "Роскошный пул",
                    "cartText": "Вы успешный бизнесмен или просто выиграли лотерею? Обращайтесь к нам. Сделаем бассейн на заднем дворе вашего прекрасного особняка!",
                    "image": "img/img2.jpg"
                },
                {
                    "title": "Холостяк",
                    "cartText": "Если вы волк-одиночка, мы можем предложить Вам бассейн 'Холостяк' с джакузи. Поможеть расслабится после тяжелого трудового дня.",
                    "image": "img/img3.jpg"
                },
                {
                    "title": "Семейное озёрко",
                    "cartText": "В вашей семье есть дети? Вы просто обязаны обратиться к нам! Бассейн Семейное озёрко не даст заскучать вашим отпрыскам в жаркий день.",
                    "image": "img/img4.jpg"
                },
                {
                    "title": "Гранд-пул",
                    "cartText": "В вашем курортном отеле до сих пор негде плавать? Так не ждите чуда! Просто обрадитесь к нам и мы сотворим восхитительный бассейн!",
                    "image": "img/img5.jpg"
                },
                {
                    "title": "Дачный",
                    "cartText": "Установим бассейн на терассу на вашей даче! Не томите, скорее делайте заказ! Наши лучшие мастера исполнят все на высшем уровне!",
                    "image": "img/img6.png"
                },
                {
                    "title": "Голубая лагуна",
                    "cartText": "Прекрасный вариант для Вашего коттеджа. Бассейн с подогревом поможет умиротворится в холодные зимние деньки.",
                    "image": "img/img7.jpg"
                },
                {
                    "title": "КиберПанк",
                    "cartText": "Вы супермагнат и Вам некуда девать деньги? Данный футуристичный плавательный комплекс поможет вам с этой проблемой!",
                    "image": "img/img8.jpg"
                }

                
            ]
        }
    }); 

    // =============== footer =================
    Vue.component('mainfooter', {
        template: ` <div class="container">
                        <div class="row">
                            <div class="col l6 s12">
                                <h5 class="white-text">ExcaPool</h5>
                                <p class="grey-text text-lighten-4">Бассейны – удивительное место для отдыха и веселья, и вряд ли кто-то отказался хотя бы от небольшого лягушатника на своём участке. Когда же речь заходит о шикарных сооружениях, то воображение рисует роскошные картины где-то в пятизвёздочных отелях. Но на самом деле даже они меркнут в сравнении с самыми дорогими бассейнами в мире.</p>
                            </div>
                            <div class="col l4 offset-l2 s12">
                                <h5 class="white-text">Ссылки</h5>
                                <ul>
                                    <li><a class="grey-text text-lighten-3"  href="index.php">Главная</a></li>
                                    <li><a class="grey-text text-lighten-3"  href="Catalog.php">Каталог</a></li>
                                    <li><a  class="grey-text text-lighten-3" href="Projects.php">Калькулятор цен</a></li>
                                    <li><a class="grey-text text-lighten-3"  href="About.php">О нас</a></li>
                                    <li><a  class="grey-text text-lighten-3" href="Contacts.php">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>`
    });
    Vue.component('subfooter', {
        template: ` <div class="footer-copyright">
                        <div class="container">
                            © 2019 Все права защищены
                        </div>
                    </div>`
    });
    var rootFoot = new Vue({
        el: "#rootFooter"
    });


document.getElementById("sendButton").disabled = true;
        function enableBtn(){
        document.getElementById("sendButton").disabled = false;
        };
});



   




 