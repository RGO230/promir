<html>

<head>
    <title>Курсы</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.cdnfonts.com/css/svn-gilroy" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="shortcut icon" href="images/фавикон 20.png" type="image/png">

    <!-- Анимации -->

    <link rel="stylesheet" href="css/fm.revealator.jquery.css">
    <script src="js/fm.revealator.jquery.js"></script>

    <script type="text/javascript">
        Revealator.scroll_padding = '100';
    </script>
    <script type="text/javascript">
        Revealator.effects_padding = '-400';
    </script>

    <style>
        .group:after {
  content: "";
  display: table;
  clear: both;
}
img {
  max-width: 100%;
  height: auto;
  vertical-align: baseline;
}
a {
  text-decoration: none;
}
.calendar-wrapper {
  display: block;
  max-width: 800px;
  width: 100%;
  margin: 3em auto;
  padding: 2em;
  
 
}
table {
  clear: both;
  width: 100%;

}
td {
  height: 100px;
  text-align: center;
  vertical-align: middle;
  border: 1px solid rgba(38, 38, 38, 0.25);
  width: 100%;
  max-width: 100px;
  display:inline-block;
}
td.not-current {
  color: #c0c0c0;
}
td.today {
  font-weight: 700;
  color: #28283b;
  font-size: 1.5em;
}
thead td {
  border: none;
  color: #28283b;
  text-transform: uppercase;
  font-size: 1.5em;
}
#btnPrev,
#btnPrevDay
 {
  float: left;
  margin-bottom: 20px;
}
#btnPrev:before,
#btnPrevDay:before
 {
  content: '\f104';
  font-family: FontAwesome;
  padding-right: 4px;
}
#btnNext,
#btnNextDay
 {
  float: right;
  margin-bottom: 20px;
}
#btnNext:after,
#btnNextDay:after
 {
  content: '\f105';
  font-family: FontAwesome;
  padding-left: 4px;
}
#btnPrev,
#btnNext,
#btnPrevDay,
#btnNextDay
 {
  background: transparent;
  border: none;
  outline: none;
  font-size: 40px;
  color: #262626;
  cursor: pointer;
  font-family: sans-serif;
  text-transform: uppercase;
  transition: all 0.3s ease;
}
#btnPrev:hover,
#btnNext:hover,
#btnPrevDay:hover,
#btnNextDay:hover

 {
  color: #28283b;
  font-weight: bold;
}

.choose-date-head h1{
font-style: normal;
font-weight: 400;
font-size: 48px;
color: #262626;
}

.choose-date-head{
    border-bottom: 1px solid #262626;
}

.choose-date-btns{
    display: flex;
    justify-content: center;
    gap: 40px;
}
#mainYearFull,#mainDayFull{
    font-style: normal;
font-weight: 500;
font-size: 40px;
text-align: center;
text-transform: uppercase;
color: #262626;
margin:0;
}
#mainYear,#mainDay{
margin:0;
font-style: normal;
font-weight: 500;
font-size: 32px;
text-transform: uppercase;
color: #262626;
}

.days td{
    border: none;
    height: auto;
    margin: 5px 0;
}
.normal:hover, .today:hover{
    background: #75AFC8;
    color: #FFFFFF;
    cursor: pointer;
}
tbody{
    text-align: center;
}

td p, td a{
    margin: 32%;
}

#daysWrapper{
  display: none;
}

.time-of-day__item__head{
      display: flex;
      justify-content: space-between;
      border-bottom: 1px solid #262626;
     }
     .time-of-day__item__head p{
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        text-transform: uppercase;
        color: #262626;
     }
     .time-of-day__item__body{
      display: flex;
      padding: 10px 0;
      gap:10px;
     }
     .time-of-day__item__body__hour{
      padding: 0 30px;
      border: 1px solid rgba(38, 38, 38, 0.25);
      
     }

     .normal-hour:hover{
      background: #75AFC8;
      color: white;
      cursor: pointer;
      
     }

    #error-message{
      text-align: center;
      display: none;
    }
    #loaderGif, #loaderGifDay{
      height: 50px;
    width: 50px;
    margin: 10px auto;
    display: none;

    }
    #divCal, #daytimesHolder{
      display: none;
    }

    .selected-hour{
      color: #c0c0c0;
    }
    </style>



</head>

<body>
    <div class="wrap">
        <!-- <img style="top: 0; right:0" class="ellipse" src="images/Ellipse 1.png" width="700"> -->
        <div class="header">
            <div class="menu">
                <a href="/">Главная</a>
                <a href="/service">Услуги</a>
                <a href="/courses">Курсы</a>
                <a href="#contact">Контакты</a>
            </div>
        </div>
        <img style="top: -100px; left:20px" class="ellipse" src="images/Ellipse 5.png" width="200">


        <div class="choose-date-head">
        <h1 >Выбрать дату и время</h1>
        </div>
       
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

<div class="calendar-wrapper" id="monthWrapper">
    <div class="choose-date-btns">
    <button id="btnPrev" type="button"></button>
    <div style="text-align: center;">
    <p id="mainYearFull">Декабрь</p>
    <p id="mainYear">2022</p>
    </div>
        
<button id="btnNext" type="button"></button>
    </div>
    <div id="loaderGif">
    <img    src="/images/loading.gif" alt="load">
    </div>
    
<div id="divCal"></div>
</div>

<div class="calendar-wrapper" id="daysWrapper">
    <div class="choose-date-btns">
    <button id="btnPrevDay" type="button"></button>
    <div style="text-align: center;">
    <p id="mainDayFull">15 Декабря</p>
    <p id="mainDay">Четверг</p>
    </div>
        
<button id="btnNextDay" type="button"></button>
    </div>

   

    <div id="loaderGifDay">
    <img    src="/images/loading.gif" alt="load">
    </div>

    

    <p id="error-message"></p>
    <div class="time-of-day" id="daytimesHolder">
      <div class="time-of-day__item" >
        <div class="time-of-day__item__head">
          <p>Утро</p>
          <p>&#9660;</p>
        </div>
        <div class="time-of-day__item__body" id="morning">
        </div>
      </div>

      <div class="time-of-day__item">
        <div class="time-of-day__item__head">
          <p>День</p>
          <p>&#9660;</p>
        </div>
        <div class="time-of-day__item__body" id="daytime">
        </div>
      </div>

      
      <div class="time-of-day__item">
        <div class="time-of-day__item__head">
          <p>Вечер</p>
          <p>&#9660;</p>
        </div>
        <div class="time-of-day__item__body" id="evening">
        </div>
      </div>

    </div>

</div>
<div class="form">
    </div>

<div class="modal">
        <p>Заявка</p>
        <form class="modal-form" id="subscribeForm">
            <p>Ваше имя
            <input class="tinkoffPayRow" id="nameInput" type="text" placeholder="Введите имя" name="name">
            </p>
            <p>Email
            <input class="tinkoffPayRow" id="emailInput" type="text" placeholder="Введите email" name="email">
            </p>
            <p>Номер телефона
            <input class="tinkoffPayRow" id="phoneInput" type="text" placeholder="+7 (123) 456-78-91" name="phone">
            </p>

            <p>Дата
            <input id="selectedDateInput"  class="tinkoffPayRow" type="text"  name="date">
            </p>
            <p id="submitError" style="color:red;display:none;"></p>
            <input style="border: none" class="custom-button"  type="submit" value="Записаться" >
        </form>
    </div>




        <div class="social" id="contact">
            <a href="https://t.me/milasoullove"><img src="images/Group тг.png"></a>
            <a href="mailto:Milarmony@gmail.com"><img src="images/Group почта.png"></a>
            <a><img src="images/Group ю туб.png"></a>
        </div>
        <div class="footer" id="contact">
            <div>
                <a href="/">Главная</a>
                <a href="/service">Услуги</a>
            </div>

            <div>
                <a href="/courses">Курсы</a>
                <a href="#contact">Контакты</a>
            </div>
            <div>
                <a target="_blank" href="/Оферта ПРО МИР.pdf">Оферта</a>
                <a target="_blank" href="/Реквизиты.pdf">Реквизиты</a>
            </div>
            <div>
                <a target="_blank" href="/_Политика_обработки_перс_данных_конфиденциальности_ПРО_МИР.pdf">Политика <br>конфиденциальности</a>
            </div>
        </div>
    </div>
    
    <script>
    var Cal = function(divId) {

//Сохраняем идентификатор div
this.divId = divId;

// Дни недели с понедельника
this.DaysOfWeek = [
  'Пн',
  'Вт',
  'Ср',
  'Чт',
  'Пт',
  'Сб',
  'Вс'
];

// Месяцы начиная с января
this.Months =['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];

//Устанавливаем текущий месяц, год
var d = new Date();

this.currMonth = d.getMonth();
this.currYear = d.getFullYear();
this.currDay = d.getDate();
};

// Переход к следующему месяцу
Cal.prototype.nextMonth = function() {
if ( this.currMonth == 11 ) {
  this.currMonth = 0;
  this.currYear = this.currYear + 1;
}
else {
  this.currMonth = this.currMonth + 1;
}
this.showcurr();
};

// Переход к предыдущему месяцу
Cal.prototype.previousMonth = function() {
if ( this.currMonth == 0 ) {
  this.currMonth = 11;
  this.currYear = this.currYear - 1;
}
else {
  this.currMonth = this.currMonth - 1;
}
this.showcurr();
};

// Показать текущий месяц
Cal.prototype.showcurr = function() {
this.showMonth(this.currYear, this.currMonth);
};



// Показать месяц (год, месяц)
Cal.prototype.showMonth = function(y, m) {
  let loaderGif=document.getElementById('loaderGif');
  loaderGif.style.display='block';
  document.getElementById(this.divId).style.display='none';


var d = new Date()
// Первый день недели в выбранном месяце 
, firstDayOfMonth = new Date(y, m, 7).getDay()
// Последний день выбранного месяца
, lastDateOfMonth =  new Date(y, m+1, 0).getDate()
// Последний день предыдущего месяца
, lastDayOfLastMonth = m == 0 ? new Date(y-1, 11, 0).getDate() : new Date(y, m, 0).getDate();


var html = '<table>';

// Запись выбранного месяца и года
// html += '<thead><tr>';
// html += '<td colspan="7"><button id="btnPrev" type="button"></button>' + this.Months[m] + ' ' + y + '<button id="btnNext" type="button"></button></td>';
// html += '</tr></thead>';
let mainYearFull= document.getElementById('mainYearFull'),
mainYear=document.getElementById('mainYear');
mainYearFull.innerHTML=this.Months[m];
mainYear.innerHTML= y;
// заголовок дней недели
html += '<tr class="days">';
for(var i=0; i < this.DaysOfWeek.length;i++) {
  html += '<td>' + this.DaysOfWeek[i] + '</td>';
}
html += '</tr>';

// Записываем дни
var i=1;
do {

  var dow = new Date(y, m, i).getDay();

  // Начать новую строку в понедельник
  if ( dow == 1 ) {
    html += '<tr>';
  }
  
  // Если первый день недели не понедельник показать последние дни предидущего месяца
  else if ( i == 1 ) {
    html += '<tr>';
    var k = lastDayOfLastMonth - firstDayOfMonth+1;
    
    // for(var j=0; j < firstDayOfMonth; j++) {
    //   html += '<td class="not-current">' + k + '</td>';
    //   k++;
    // }
    for(var j=0; j < firstDayOfMonth; j++) {
      html += '<td class="not-current"><p>' + k + '</p></td>';
      k++;
    }


  }

  // Записываем текущий день в цикл
  var chk = new Date();
  var chkY = chk.getFullYear();
  var chkM = chk.getMonth();
  if (chkY == this.currYear && chkM == this.currMonth && i == this.currDay) {
    html += `<td class="today open-day-form" data-id="${this.currYear+'-'+ ((this.currMonth+1)<=9 ? ('0'+(this.currMonth+1)):(this.currMonth+1)) +'-'+ (i<=9? ('0'+i):i)}"><p>${i}</p></td>`;
  } 
  else if(chkY > this.currYear || chkM > this.currMonth  ){
    html += '<td class="not-current"><p>' + i + '</p></td>';
   
  }
  else {
    html += `<td  class="normal open-day-form" data-id="${this.currYear+'-'+ ((this.currMonth+1)<=9 ? ('0'+(this.currMonth+1)):(this.currMonth+1)) +'-'+ (i<=9? ('0'+i):i)}"><p>${i}</p></td>`;
   
  }
  console.log('chkY:'+chkY, 'this.currYear:'+this.currYear,  'chkM:'+chkM , 'this.currMonth:'+ this.currMonth, 'i:'+ i, 'this.currDay'+ this.currDay)

  // закрыть строку в воскресенье
  if ( dow == 0 ) {
    html += '</tr>';
  }
  // Если последний день месяца не воскресенье, показать первые дни следующего месяца
  else if ( i == lastDateOfMonth ) {
    var k=1;
    for(dow; dow < 7; dow++) {
      html += '<td class="not-current"><p>' + k + '</p></td>';
      k++;
    }
  }

  i++;
}while(i <= lastDateOfMonth);

// Конец таблицы
html += '</table>';

// Записываем HTML в div

document.getElementById(this.divId).innerHTML = html;


setTimeout(()=>{
  loaderGif.style.display='none';
  document.getElementById(this.divId).style.display='block';
  getDayButtons();
},5000)


};

// При загрузке окна
window.onload = function() {

// Начать календарь
var c = new Cal("divCal");			
c.showcurr();

// Привязываем кнопки «Следующий» и «Предыдущий»
getId('btnNext').onclick = function() {
  c.nextMonth();
  getDayButtons();
};
getId('btnPrev').onclick = function() {
  c.previousMonth();
  getDayButtons();
};
getDayButtons()
}

// Получить элемент по id
function getId(id) {
return document.getElementById(id);
}

</script>

<script>
  let selectedDate='';
  function getDayButtons(){
  //   let daysBlock=$('.open-day-form')
  // let daysBlockArray=[...daysBlock]
  // daysBlockArray.forEach(item=>{
  //   item.addEventListener('click',(e)=>{
  //     console.log(e.attr("data-id"))
  //     openDaySubscribe();
  // })
  // })
 let calendarWrapper= document.getElementById('monthWrapper');
 let daysWrapper=document.getElementById('daysWrapper');

  

 console.log($('.open-day-form'))
  $('.open-day-form').click((e)=>{
   console.log(e.currentTarget.dataset.id)
    let dateDay=new Date(e.currentTarget.dataset.id)
    calendarWrapper.style.display='none';
    daysWrapper.style.display='block';
    selectedDate=e.target.dataset.id;
    openDaySubscribe(e.target.dataset.id)
  });
  }

  function openDaySubscribe(e){
    

   let daytimesHolder = document.getElementById('daytimesHolder');
   let loaderGifDay = document.getElementById('loaderGifDay');

   daytimesHolder.style.display='none';
   loaderGifDay.style.display='block';

    let morningBlock=document.getElementById('morning'),
    daytimeBlock=document.getElementById('daytime'),
    eveningBlock=document.getElementById('evening'),
    mainDayFull=document.getElementById('mainDayFull'),
    mainDay=document.getElementById('mainDay')

    mainDayFull.addEventListener('click',()=>{
      console.log('open month')
      document.getElementById('daysWrapper').style.display='none'
      document.getElementById('monthWrapper').style.display='block'

    })

   
   let DaysOfWeek = [
  'Понедельник',
  'Вторник',
  'Среда',
  'Четверг',
  'Пятница',
  'Суббота',
  'Воскресенье'
];

// Месяцы начиная с января
let Months =['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря'];
    console.log(e)
     mainDayFull.innerHTML=''+e.slice(8,10)+' ' + Months[+e.slice(5,7)-1];
   
    let getDayOfWeek= (new Date(e.slice(5,7)+'-'+e.slice(8,10)+'-'+e.slice(0,4)).getDay())?(new Date(e.slice(5,7)+'-'+e.slice(8,10)+'-'+e.slice(0,4)).getDay()-1):6
    mainDay.innerHTML= DaysOfWeek[getDayOfWeek];
    $.ajax({
        type: "GET",
        url: '/interval',
        data: {                        
          date:e
        },
        success: function(resp) {
          morningBlock.innerHTML=''
          daytimeBlock.innerHTML=''
          eveningBlock.innerHTML=''
            console.log(resp)
            resp.info.intervals.forEach(item=>{
              let errorMessage=document.getElementById('error-message');
              errorMessage.style.display='none'
              if(+item.slice(0,2)<12){

                resp.info.selected.forEach(itemSelect=>{
                  if(item == itemSelect){
                    morningBlock.innerHTML+=
                    `<div class="time-of-day__item__body__hour selected-hour">
                    <p>${item}</p>
                    </div>`
                  }
                  else{
                    morningBlock.innerHTML+=
                    `<div class="time-of-day__item__body__hour normal-hour">
                    <p>${item}</p>
                    </div>`
                  }
                })

                
              }
              else if(+item.slice(0,2)>12 && +item.slice(0,2)<18){

                resp.info.selected.forEach(itemSelect=>{
                  if(item == itemSelect){
                    daytimeBlock.innerHTML+=
                    `<div class="time-of-day__item__body__hour selected-hour">
                    <p>${item}</p>
                    </div>`
                  }
                  else{
                    daytimeBlock.innerHTML+=
                    `<div class="time-of-day__item__body__hour normal-hour">
                    <p>${item}</p>
                    </div>`
                  }
                })

                
              }
              else{

                resp.info.selected.forEach(itemSelect=>{
                  if(item == itemSelect){
                    eveningBlock.innerHTML+=
                    `<div class="time-of-day__item__body__hour selected-hour">
                    <p>${item}</p>
                    </div>`
                  }
                  else{
                    eveningBlock.innerHTML+=
                    `<div class="time-of-day__item__body__hour normal-hour">
                    <p>${item}</p>
                    </div>`
                  }
                })

            //     eveningBlock.innerHTML+=
            // `<div class="time-of-day__item__body__hour">
            // <p>${item}</p>
            // </div>`
              }
              
            })
            
            

            
            daytimesHolder.style.display='block';
           loaderGifDay.style.display='none';
           $('#btnNextDay').removeAttr('disabled');
           $('#btnPrevDay').removeAttr('disabled');
        getHoursBlocks()
        },
        error: function(err) {
            console.log(err)
            if(err.responseText=="Нет информации по этому дню недели"){
              let daytimesHolder=document.getElementById('daytimesHolder');
              let errorMessage=document.getElementById('error-message');
              daytimesHolder.style.display='none';

              errorMessage.innerHTML='<p class="error-message">'+err.responseText+'</p>';
              errorMessage.style.display='block';
            }
            else if(err.responseText=="День занят полностью"){
              let daytimesHolder=document.getElementById('daytimesHolder');
              let errorMessage=document.getElementById('error-message');
              daytimesHolder.style.display='none';
              daytimesHolder.style.display='none';

              errorMessage.innerHTML='<p class="error-message">'+err.responseText+'</p>';
              errorMessage.style.display='block';
              daytimesHolder.style.display='none';
            }

            else{
              let daytimesHolder=document.getElementById('daytimesHolder');
              let errorMessage=document.getElementById('error-message');
              errorMessage.innerHTML='<p class="error-message">Нет информации по этому дню недели</p>'
              errorMessage.style.display='block';
              daytimesHolder.style.display='none';
            }
            
      loaderGifDay.style.display='none';
           $('#btnNextDay').removeAttr('disabled');
           $('#btnPrevDay').removeAttr('disabled');
           getHoursBlocks();
        }
    });

}

getId('btnNextDay').onclick = function() {
  $('#btnNextDay').attr('disabled','disabled');
    $('#btnPrevDay').attr('disabled','disabled');
  selectedNextDate= new Date(selectedDate);
  selectedNextDate.setDate(selectedNextDate.getDate()+1)
  selectedDate=selectedNextDate.getFullYear() + '-' +((selectedNextDate.getMonth()+1) <=9? ('0'+(selectedNextDate.getMonth()+1)):selectedNextDate.getMonth()+1)+'-' +((selectedNextDate.getDate()) <=9? ('0'+(selectedNextDate.getDate())):selectedNextDate.getDate());
  openDaySubscribe(selectedDate)
};
getId('btnPrevDay').onclick = function() {
  $('#btnNextDay').attr('disabled','disabled');
    $('#btnPrevDay').attr('disabled','disabled');
  selectedPrevDate= new Date(selectedDate);
  selectedPrevDate.setDate(selectedPrevDate.getDate()-1)
  selectedDate=selectedPrevDate.getFullYear() + '-' +((selectedPrevDate.getMonth()+1) <=9? ('0'+(selectedPrevDate.getMonth()+1)):selectedPrevDate.getMonth()+1)+'-' +((selectedPrevDate.getDate()) <=9? ('0'+(selectedPrevDate.getDate())):selectedPrevDate.getDate());
  openDaySubscribe(selectedDate)
};


function sendSubcribeForm(){
  console.log($('#phoneInput').val())
  $.ajax({
        type: "POST",
        url: '/interval',
        data: {
          email:$('#emailInput').val(),
          name:$('#nameInput').val(),
          phone:$('#phoneInput').val(),
         selected:$('#selectedDateInput').val()
        },
        success: function(resp) {

            console.log(resp)
            
  
        },
        error: function(err) {
            console.log(err)
        }
    });
}

function openSendForm(e){
  $('.form').fadeIn(200);
                $('.modal').fadeIn(200);
                $('.modal').css({
                    'display': 'flex'
                });

                $('.form').on('click', function() {
                $('.form').fadeOut(200);
                $('.modal').fadeOut(200);
            });

            $('#subscribeForm').on('submit',(e)=>{
               e.preventDefault();
               let isFull=false;
               $('.tinkoffPayRow').each((index,item)=>{
               
                if(!item.value){
                  isFull = false;
                  document.getElementById('submitError').innerHTML="*Заполните форму!"
            document.getElementById('submitError').style.display="block"
                  return false;
                }
                else{
                  isFull=true;
                }
                

                
               })
               if(isFull){
                
                sendSubcribeForm()
               }
               
            });
            let selectedDateInput=document.getElementById('selectedDateInput');
            selectedDateInput.value=selectedDate +' ' + e;
}




function getHoursBlocks(){
  $('.normal-hour').click((e)=>{
    openSendForm(e.target.innerText);
  })
}
 

</script>

</body>


</html>
