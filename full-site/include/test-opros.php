
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"></head>
  <style media="screen">

    input[type='radio']{
      margin-left: 24px;
    }
   form  p{
      margin: 10px 0;
    }
    h3{
      font-size: 130%;
      text-transform: uppercase;
      margin: 20px 0;
    }
    h4{
      font-size: 120%;
      margin: 20px 0 20px;
    }
    label{
      cursor: pointer;
    }
    .news__buttons_link {
    max-width: 100%;
    border: none;
    cursor: pointer;
    padding: 0;
}
form{
  margin-top: 110px;
}
.test-img{
  margin-top: 30px;
  width: 600px;
  height: 300px;
}
.test-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.slick-prev{
  transition: 0.3s;
  -webkit-transition: .3s;
  opacity: 1;
  cursor: pointer;
}
.slick-disabled{
  opacity: 0;
  pointer-events: none;
}
.slick-dots{
  display: flex;
  list-style: none;
  position: absolute;
  top: 0;
}
.slick-dots button{
  display: block;
  background: #0035aa;
  border: 1px solid #fff;
  margin: 0 4px;
  padding: 2px 4px;
  color: #ffffff;
}
.slick-dots .slick-active button{
  background: #ffffff;
  border: 1px solid #0035aa;
  color: #0035aa;
}
@media only screen and (max-width: 768px){
  form{
    margin-top: 30px;
  }
  .test-img {
    width: 100%;
    height: 180px;
  }
}
  </style>

    <script type="text/javascript">
    var res="22212"

    function check_me()   // вместо "11111" нужно вставить последовательность правильных ответов
    {
      var count=0
      with(document.test)
      {
        if (!Q1[0].checked&&!Q1[1].checked)
        {count+=1};
        if (!Q2[0].checked&&!Q2[1].checked)
        {count+=1};
        if (!Q3[0].checked&&!Q3[1].checked)
        {count+=1};
        if (!Q4[0].checked&&!Q4[1].checked)
        {count+=1};
        if (!Q5[0].checked&&!Q5[1].checked)
        {count+=1};
        // скопируйте эту строку и вставьте ниже необходимое количество раз( взвисимости от количества вопросов), изменив Q6 на Q7, Q8 и т.д если добавляете количество вопросов
        if (count > 0) //Вычисление и проверка все ли задания выполнены
        {alert("Ви не дали відповіді на всі запитання.")
      }
      else answer()
    }
  }

  function control(k,f1,f2,f3,f4,f5)  //добавьте переменные f7, f8,... в зависимости от количества вопросов
  {
    if (k==1&&f1.checked) return true;
    if (k==2&&f2.checked) return true;
    if (k==3&&f3.checked) return true;
    if (k==4&&f4.checked) return true;
    if (k==5&&f5.checked) return true;
    //скопируйте эту строку и вставьте ниже необходимое количество раз( взвисимости от количества вопросов), изменив 6 на 7, 8 и т.д если добавляете количество вопросов
    return false;
  }

  function answer()
  {

    answ="";
    with(document)
    {
      answ+=control(res.charAt(0),test.Q1[0],test.Q1[1],test.Q1[2],test.Q1[3])?"1":"0"
      answ+=control(res.charAt(1),test.Q2[0],test.Q2[1],test.Q2[2],test.Q2[3])?"1":"0"
      answ+=control(res.charAt(2),test.Q3[0],test.Q3[1],test.Q3[2],test.Q3[3])?"1":"0"
      answ+=control(res.charAt(3),test.Q4[0],test.Q4[1],test.Q4[2],test.Q4[3])?"1":"0"
      answ+=control(res.charAt(4),test.Q5[0],test.Q5[1],test.Q5[2],test.Q5[3])?"1":"0"
      //скопируйте эту строку и вставьте ниже необходимое количество раз( взвисимости от количества вопросов), изменив 5 на 6, 7 и т.д если добавляете количество вопросов
      showResult();
    }
  }

  function showResult()
  {
    var s1 = document.querySelector('.s1');
    var nok=0;
    var i,s;

    for (i=0;i<answ.length;i++) {nok+=answ.charAt(i)=="1"?1:0;}

      if(nok==0) s='"Твій показник урбанізму - 1%. Кам он, дружочок! Байдужість до власного міста - це не Ок. Радимо тобі більше уваги приділяти оточенню, а не лише власному комфорту. Віримо в те, що ти змінишся!"';
      if(nok==1) s='"Твій показник урбанізму - 1%. Кам он, дружочок! Байдужість до власного міста - це не Ок. Радимо тобі більше уваги приділяти оточенню, а не лише власному комфорту. Віримо в те, що ти змінишся!"';
      if(nok>=2 && nok<5) s='"Так тримати! Твій урбанізм досяг уже 50%. Ще трохи і ти не зможеш пройти мовчки повз питання відкритих земельних ділянок у місті. Зможеш сперечатися щодо джентрифікації та вернакулярності районів. Ти зможеш змінити своє місто."';
      if(nok==5) s='"Ми в шоці, що ти 100% урбаніст! Якщо ти не Віктор Зотов, то маєш всі шанси потрапити до списку урбан-геніїв. Ти точно ходиш пішки частіше, ніж їздиш автомобілем, знаєш у чому різниця між поганим і хорошим фасадом. Між парковкою та міським простором обереш міський простір, а ще тебе бісить пилюка в місті. Такі як ти змінюють міста, роблячи їх кращими. Зізнаємося в коханні?"';

    s1.textContent = "" +s+ "";

  }
    </script>

    <form name=test>
        <h3>Тест: На скільки відсотків ти урбаніст?</h3>


        <div class="test-carousel">

          <div class="test-item">
            <div class="test-img">
              <img src="/img/test-opros/1-question.jpg" alt="">
            </div>
            <div class="test-text">
              <h4>1. Парковка чи міський простір?</h4>
              <p>
                <input type=radio name=Q1 id="input1"> <label for="input1">Звісно парковка -  у місті це одна з найбільших проблем!</label>
              </p>
              <p>
                <input type=radio name=Q1 id="input2"> <label for="input2">Міський простір важливіший.</label>
              </p>
            </div>
          </div>
          <div class="test-item">
            <div class="test-img">
              <img src="/img/test-opros/2-question.jpg" alt="">
            </div>
            <div class="test-text">
              <h4>2. Утеплювати фасад навколо власних вікон, якщо у квартирі сильний дубар? </h4>
              <p>
                <input type=radio name=Q2 id="input3"> <label for="input3">Так</label>
              </p>
              <p>
                <input type=radio name=Q2 id="input4"> <label for="input4">Ні </label>
              </p>
            </div>
          </div>
          <div class="test-item">
            <div class="test-img">
              <img src="/img/test-opros/3-question.jpg" alt="">
            </div>
            <div class="test-text">
              <h4>3. Уявіть, що ви стали менеджером зі зменшенням міських заторів усього Світу. З чого почнете свою діяльність? </h4>
              <p>
                <input type=radio name=Q3 id="input5"> <label for="input5">Видам наказ терміново розширювати дороги </label>
              </p>
              <p>
                <input type=radio name=Q3 id="input6"> <label for="input6">Видам наказ добудувати велодоріжки і додаткові смуги для громадського транспорту </label>
              </p>

            </div>
          </div>

          <div class="test-item">
            <div class="test-img">
              <img src="/img/test-opros/4-question.jpg" alt="">
            </div>
            <div class="test-text">
              <h4>4. Амстердам, на підступах до площі Дам пішохідна зона чи зона для паркування?</label> </h4>
                <p>
                  <input type=radio name=Q4 id="input7"> <label for="input7">Пішохідна</label>
                </p>
                <p>
                  <input type=radio name=Q4 id="input8"> <label for="input8">Для паркінгу</label>
                </p>
            </div>
          </div>
          <div class="test-item">
            <div class="test-img">
              <img src="/img/test-opros/5-question.jpg" alt="">
            </div>
            <div class="test-text">
              <h4> 5. Якщо ти побачиш яму на тротуарі то: </h4>
              <p>
                <input type=radio name=Q5 id="input9"> <label for="input9">Почнеш лаяти президента</label>
              </p>
              <p>
                <input type=radio name=Q5 id="input10"><label for="input10"> Напишеш у 1551</label>
              </p>
            </div>
          </div>



        </div>

          <div class="s1"></div>


        <div onclick=check_me() class="news__buttons_link">
          Показати результат
        </div>

        <input type=reset class="news__buttons_link" value="Скинути відповіді">

    </form>
    <script type="text/javascript">

    var testSlick = $('.test-carousel').slick({
      infinite: false,
      dots: true,
      fade: true,
      prevArrow: '',
      nextArrow: '<div class="news__buttons_link slick-prev">Наступне запитання</div>',

    });

    $('input[type="reset"]').click(function(){
      var s1 = document.querySelector('.s1');
      testSlick.slick('slickGoTo', 0, true);
      s1.textContent = "";
    })

    </script>
