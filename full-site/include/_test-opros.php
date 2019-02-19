<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEST</title>


  </head> -->
  <style media="screen">
    input[type='radio']{
      margin-left: 24px;
    }
    form{
      margin-top: 106px;
    }
    @media only screen and (max-width: 768px) {
      form{
        margin-top: 20px;
      }
    }
    form p{
      margin: 10px 0;
    }
    h3{
      font-size: 130%;
      text-transform: uppercase;
      margin: 20px 0;
    }
    h4{
      font-size: 120%;
      margin: 20px 0;
    }
    label{
      cursor: pointer;
    }
    .s1{
      margin: 20px auto;
    border-top: 1px solid;
    border-bottom: 1px solid;
    padding: 20px 0;
    }
    .news__buttons_link {
      padding: 0;
      max-width: 100%;
    border:none;
    cursor: pointer;
}
  </style>
  <body>
    <script type="text/javascript">
    // Начало сценария

    var res="22211"

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
      if(nok>=2 && nok<5) s='"Так тримати! Твій урбанізм досяг уже 50%. Ще трохи і ти не зможеш пройти мовчки повз питання відкритих земельних ділянок у місті. Зможеш сперечатися щодо джентрифікації та верикулярності районів. Ти зможеш змінити своє місто."';
      if(nok==5) s='"Ми в шоці, що ти 100% урбаніст! Якщо ти не Віктор Зотов, то маєш всі шанси потрапити до списку урбан-геніїв. Ти точно ходиш пішки частіше, ніж їздиш автомобілем, знаєш у чому різниця між поганим і хорошим фасадом. Між парковкою та міським простором обереш міський простір, а ще тебе бісить пилюка в місті. Такі як ти змінюють міста, роблячи їх кращими. Зізнаємося в коханні?"';

    s1.textContent = "" +s+ "";

  }
    </script>

    <form name=test>
        <h3>Тест: твій відсоток урбанізму?</h3>
        <ol>

        <li>
          <h4>
            <!-- <input size=1 name=T1> -->
            1.Парковка чи міський простір?</h4>
            <p>
              <input type=radio name=Q1 id="input1"> <label for="input1">Звісно парковка -  у місті це одна з найбільших проблем!</label>
            </p>
            <p>
              <input type=radio name=Q1 id="input2"> <label for="input2">Міський простір важливіший.</label>
            </p>

        <li>
          <h4>
            <!-- <input size=1 name=T2> -->
            2.Утеплювати фасад навколо власних вікон, якщо у квартирі сильний дубар? </h4>
             <p>
               <input type=radio name=Q2 id="input3"> <label for="input3">Так</label>
             </p>
             <p>
               <input type=radio name=Q2 id="input4"> <label for="input4">Ні </label>
             </p>

        <li>
          <h4>
            <!-- <input size=1 name=T3>  -->
            3.Уявіть, що ви стали менеджером зі зменшенням міських заторів усього Світу. З чого почнете свою діяльність? </h4>
            <p>
              <input type=radio name=Q3 id="input5"> <label for="input5">Видам наказ терміново розширювати дороги </label>
            </p>
            <p>
              <input type=radio name=Q3 id="input6"> <label for="input6">Видам наказ добудувати велодоріжки і додаткові смуги для громадського транспорту </label>
            </p>

        <li>
          <h4>
            <!-- <input size=1 name=T4> -->
             4.Амстердам, на підступах до площі Дам пішохідна зона чи зона для паркування?</label> </h4>
             <p>
               <input type=radio name=Q4 id="input7"> <label for="input7">Пішохідна</label>
             </p>
             <p>
               <input type=radio name=Q4 id="input8"> <label for="input8">Для паркінгу</label>
             </p>

        <li>
          <h4>
            <!-- <input size=1 name=T5> -->
             5.Якщо ти побачиш яму на тротуарі то: </h4>
             <p>
               <input type=radio name=Q5 id="input9"> <label for="input9">Почнеш лаяти президента</label>
             </p>
             <p>
               <input type=radio name=Q5 id="input10"><label for="input10"> Напишеш у 1551</label>
             </p>

        </ol>

        <p>
          <div class="s1"></div>
          <!-- <TEXTAREA name=s1> </TEXTAREA> -->
        </p>

        <div onclick=check_me() class="news__buttons_link">
          Показати результат
        </div>

        <input type=reset class="news__buttons_link" value="Скинути відповіді">

        <!-- <input onclick=check_me() type=button value="Показати результат">&nbsp;&nbsp;&nbsp;&nbsp; -->
    </form>





  <!-- </body>
</html> -->
