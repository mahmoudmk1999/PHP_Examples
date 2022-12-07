<?php 

//1- اوامر الطباعة
//_________________________________________________________________________________________________________

    //  echo "Hello";                -> Hello                                              //تسخدم هذه الاوامر للطباعة داخل                                  
    //  ECHO 'Welcome';              -> Welcome                                            //صفحة الويب مع الانتباه الى ان اللفة
    //  print 'Hello';               -> Hello                                              // غير حساسة للاحرف الصغيرة والكبيرة
    //  PRINT "Welcome"              -> Welcome

//2- Comments
//_________________________________________________________________________________________________________
    
    //  [//]
    //  [#]
    //  [/**/]                              // echo /*comment*/ "echo";                    //يمكن استخدامها للتعليق في نفس سطر الكود

//3- DataTypes
//_________________________________________________________________________________________________________ 
    
    // echo gettype(true);                  -> boolean                                   
    // echo '<br>';                         //للذهاب الى سطر جديد
    // echo gettype(false);                 -> boolean
    // echo '<br>';
    // echo gettype(100);                   -> integer 
    // echo '<br>';
    // echo gettype(10.5);                  -> double
    // echo '<br>';
    // echo gettype(array("EGY",'KSA'));    -> array
    // echo '<br>';
    // echo gettype(["EGY","KSA"]);         -> array

//_________________________________________________________________________________________________________ 

    // echo 1 + '2';                        -> 3                                   
    // echo '<br>';                         //للذهاب الى سطر جديد
    // echo gettype(1 + '2');               -> integer
    // echo '<br>';
    // echo true;                           -> 1                                   
    // echo '<br>';                     
    // echo gettype(True);                  -> boolean
    // echo '<br>';  
    // echo true + True;                    -> 2                                   
    // echo '<br>';                     
    // echo gettype(True + true);           -> integer
    // echo '<br>'; 
    // echo 5 + '5 lesson';                 -> 10 Warning                                   
    // echo '<br>';                     
    // echo gettype(5 + '5 lesson');        -> integer Warning
    // echo '<br>'; 
    // echo 15 + 10.5;                      -> 25.5                                   
    // echo '<br>';                       
    // echo gettype(15 + 10.5);             -> double

//_________________________________________________________________________________________________________    

    // echo 5 + (int) '5 lesson';                   -> 10                       //يمكن كتابة (int) او (integer)
    // echo '<br>';
    // echo gettype(5 + (int) '5 lesson');          -> integer    
    // echo '<br>';
    // echo gettype(5 + (integer) '5 lesson');      -> integer
    // echo '<br>';
    // echo 10 + (int) 15.5;                        -> 25
    // echo '<br>';
    // echo gettype(10 + (int) 15.5);               -> integer
    // echo '<br>';
    // echo gettype(10.5 +  10.5);                  -> double
    // echo '<br>';
    // echo (int) 10.5 + (int) 10.5;                -> 20
    // echo '<br>';
    // echo (int) (10.5 + 10.5);                    -> 21

//_________________________________________________________________________________________________________


    // var_dump((bool) "");                         -> bool(false)
    // echo '<br>';
    // var_dump((bool) array());                    -> bool(false)
    // echo '<br>';
    // var_dump((bool) []);                         -> bool(false)
    // echo '<br>';
    // var_dump((bool) 0);                          -> bool(false)
    // echo '<br>';
    // var_dump((bool) "0");                        -> bool(false)     
    // echo '<br>';
    // var_dump((bool) "MK");                       -> bool(true)
    // echo '<br>';
    // var_dump((bool) array(1));                   -> bool(true)
    // echo '<br>';
    // var_dump((bool) 100);                        -> bool(true)
    // echo '<br>';
    // var_dump((bool) -100.5);                     -> bool(true)

//_________________________________________________________________________________________________________
    
    // echo "Hello PHP";                            -> Hello PHP                
    // echo '<br>';
    // echo 'Hello PHP';                            -> Hello PHP
    // echo '<br>';
    // echo "Hello 'PHP'";                          -> Hello 'PHP'
    // echo '<br>';
    // echo 'Hello "PHP"';                          -> Hello "PHP"
    // echo '<br>';
    // echo "Hello \"PHP\"";                        -> Hello "PHP"
    // echo '<br>';
    // echo 'Hello \'PHP\'';                        -> Hello 'PHP'
    // echo '<br>';
    // echo 'Hello PHP\\';                          -> Hello PHP\
    // echo '<br>';
    // echo 'Hello                                  -> Hello To PHP
    // To 
    // PHP';
    // echo '<br>';                                 
    // echo nl2br('Hello                            -> // Hello
    // To                                              // To                                    
    // PHP');                                          // PHP

//_________________________________________________________________________________________________________


    //تستخدم "Here" من اجل كتابة نص طويل بدون تحويل كل شيء الى نص وتتعامل معه ككود
    //تستخدم 'Now' من اجل كتابة نص طويل بدون تحويل كل شيء الى نص وتتعامل معه ككود
    // يمكن كتابة اي كلام داخل ال "" و ال '' للقيام بنفس العملية

    // $name = 'MK';

    // echo <<<"Here"
    // Hello PHP
    // Special characters "" '' \\\\
    // My name is $name
    // Here;                                      -> Hello PHP Special characters "" '' \\ My name is MK

    // echo '<br>';

    // echo <<<'Now'
    // Hello PHP
    // Special characters "" '' \\\\
    // My name is $name
    // Now;                                       -> Hello PHP Special characters "" '' \\\\ My name is $name

//_________________________________________________________________________________________________________

    // echo '<pre>';

    // print_r([                            // لا يمكن استخدام echo او print 
                                            //عند طباعة مصفوفات لذلك استخدمنا printr
    //      0  => 'Sameh',                  //Array
    //     "A" => "Ahmed",                  //(
    //     "B" => "Basem",                  //  [0] => Erdogan
    //     "Mahmoud",                       //  [A] => Ahmed
    //     True=> 'Sayed',                  //  [B] => Basem
    //     "1" => "Osama",                  //  [1] => Osama
    //     "Gamal",                         //  [2] => Gamal
    //      9  => 'Tahsin',                 //  [9] => Tahsin
    //     "Wessam",                        //  [10] => Wessam
    //     "Mohamad",                       //  [11] => Mohamad
    //     false=> 'Erdogan',               //  [8] => Haytham
    //      8  => 'Haytham',                //  [12] => Samer
    //     "Samer"                          //)
    // ]);
    
    // echo '</pre>';

//_________________________________________________________________________________________________________

    // echo '<pre>';

    // print_r([                            //Array
                                            //(
    //     'Smeer',                         //  [0] => Smeer
    //     "names" =>                       //  [names] => Array
    //     [                                //  (
    //       'Wahed',                       //      [0] => Wahed
    //       'Ghareb',                      //      [1] => Ghareb
    //       'Super' => [ 1 , 2]            //      [Super] => Array
    //     ]                                //      (   
    // ]);                                  //          [0] => 1
                                            //          [1] => 2
    // echo '</pre>';                       //) )   )

//4- Variables
//_________________________________________________________________________________________________________
    // $username = "MK";

    // echo $username;                      -> MK 
    // echo '<br>';                         
    // echo 'Hello $username';              -> Hello $username
    // echo '<br>';
    // echo "Hello $username";              -> Hello MK 
    // echo '<br>';

    // $username = 'HQ';
    // echo $username;                      -> Hello HQ

//_________________________________________________________________________________________________________

    // $a = 'osama';
    // $$a = 'MK';
    // $$$a = 'HQ';

    // echo $a;                             -> osama   
    // echo '<br>';
    // echo $$a;                            -> MK  
    // echo '<br>'; 
    // echo $$$a;                           -> HQ
    // echo '<br>';     
    // echo "Hello $a";                     -> Hello osama                
    // echo '<br>';
    // echo "Hello $$a";                    -> Hello $osama
    // echo '<br>';
    // echo "Hello ${$a}";                  -> Hello MK
    // echo '<br>';
    // echo "Hello ${$$a}";                 -> Hello HQ
    // echo '<br>';

//_________________________________________________________________________________________________________

    // $a = 'MK';
    // $b = $a;

    // echo $a;                             -> MK
    // echo '<br>';
    // echo $b;                             -> MK

//_______

    // $a = 'MK';
    // $b = $a;
    // $b = "HQ";

    // echo $a;                             -> MK
    // echo '<br>';
    // echo $b;                             -> HQ    

//_______ 

    // $a = 'MK';
    // $b = &$a;                            // اذا وصلت لهي وما فهمت فتاح الفرف بين 
    // $b = "HQ";                           // refernce vs pointer

    // echo $a;                             -> HQ
    // echo '<br>';
    // echo $b;                             -> HQ 

//_________________________________________________________________________________________________________

    // define("DB_NAME", 'MK');                //تستخدم لتعيين قيمة ثابتة غير قابلة للتغيير
    // define("MAIN_NUMBER", 10);

    // echo DB_NAME;                        -> MK
    // echo '<br>';
    // echo MAIN_NUMBER + 40;               -> 50 // قيمة ثابتة في المتغير ويمكن استخدام بيناتها بدون تعديل

//_________________________________________________________________________________________________________

    // بعض القيم الثابتة الموجودة في اصل اللغة

    // echo php_uname();                    -> Windows NT DES.....
    // echo "<br>";
    // echo PHP_VERSION;                    -> 8.1.10
    // echo "<br>";
    // echo __LINE__;                       -> 7
    // echo "<br>";
    // echo __FILE__;                       -> C:\xampp\htdocs\mk\index.php
    // echo "<br>";
    // echo __DIR__;                        -> C:\xampp\htdocs\mk


//5- Operators
//_________________________________________________________________________________________________________

    // echo 10 + 20;                        -> 30        
    // echo "<br>";
    // echo gettype(10 + 20);               -> integer
    // echo "<br>";
    // echo 9.5 + 20.5;                     -> 30
    // echo "<br>";
    // echo gettype(9.5 + 20.5);            -> double
    // echo "<br>";
   
//_______ 

    // echo 10 - 20;                        -> -10
    // echo "<br>";
    // echo gettype(10 - 20);               -> integer
    // echo "<br>";
    // echo 9.5 - 20.5;                     -> -11
    // echo "<br>";
    // echo gettype(9.5 - 20.5);            -> double
    // echo "<br>";
       
//_______ 

    // echo 5 * 3;                          -> 15
    // echo "<br>";
    // echo gettype(5 * 3);                 -> integer
    // echo "<br>";
    // echo 5.5 * 3.5;                      -> 19.25
    // echo "<br>";
    // echo gettype(5.5 * 3.5);             -> double
    // echo "<br>";
           
//_______ 

    // echo 20 /10;                         -> 2
    // echo "<br>";
    // echo gettype(20 / 10);               -> integer
    // echo "<br>";
    // echo 20 / 8;                         -> 2.5
    // echo "<br>";
    // echo gettype(20 / 8);                -> double
    // echo "<br>";

//_______ 

    // echo 26 % 10;                        -> 6
    // echo "<br>";
    // echo 2 ** 4;                         -> 16
    // echo "<br>";

//_______ 

    // echo "100";                          -> 100    
    // echo "<br>";
    // echo gettype("100");                 -> string
    // echo "<br>";
    // echo +"100";                         -> 100 
    // echo "<br>";
    // echo gettype(+"100");                -> integer
    // echo "<br>";

    // echo "-100";                         -> -100
    // echo "<br>";
    // echo gettype("-100");                -> string
    // echo "<br>";
    // echo -"100";                         -> -100
    // echo "<br>";
    // echo gettype(-"100");                -> integer     

//_________________________________________________________________________________________________________

    // $a = 10;                         //مثال على العمليات مع المتغيرات

    // $a += 5;    //$a = $a + 5;
    // $a -= 5;    //$a = $a - 5;
    // $a *= 5;    //$a = $a * 5;
    // $a /= 5;    //$a = $a / 5;
    // $a %= 5;    //$a = $a % 5;
    // $a **= 5;   //$a = $a ** 5;

//_________________________________________________________________________________________________________

    //امثلة على الاشارات المنطقية 
    // هنا تتم مقارنة القيم مع عدم الاهتمام بالنوع

    // var_dump(100  == 100);                -> bool(true)
    // echo "<br>";
    // var_dump(100  == "100");              -> bool(true)
    // echo "<br>";
    // var_dump(100.0  == "100");            -> bool(true)
    // echo "<br>";
    // var_dump(100  != 100);                -> bool(false)
    // echo "<br>";
    // var_dump(100  <> 100);                -> bool(false)     // اشارة =! نفسها اشارة <> وتعني عدم مساواة
    // echo "<br>";

//_______ 

    // هنا تتم مقارنة القيم مع الاهتمام بنوع البيانات

    // var_dump(100  === 100);               -> bool(true)         
    // echo "<br>";
    // var_dump(100  === "100");             -> bool(false) 
    // echo "<br>";
    // var_dump(100.0  === "100");           -> bool(false) 
    // echo "<br>";
    // var_dump(100  !== 100);               -> bool(false) 
    // echo "<br>";
    // var_dump(100  !== '100');             -> bool(true)
    // echo "<br>";

//_________________________________________________________________________________________________________

    // var_dump(100  >  100);                -> bool(false)
    // echo "<br>";
    // var_dump(100  >= 100);                -> bool(true) 
    // echo "<br>";
    // var_dump(100  < 100);                 -> bool(false)
    // echo "<br>";
    // var_dump(100  <= 100);                -> bool(true)
    // echo "<br>";
    // var_dump(100  <=> 200);               -> int(-1) // 100 less than 200
    // echo "<br>";
    // var_dump(100  <=> 100);               -> int(0)  // 100 equal 200
    // echo "<br>";
    // var_dump(100  <=> 50);                -> int(1)  // 100 more than 50
    // echo "<br>";
    
//_________________________________________________________________________________________________________

    // $a = 0;

    // echo $a++;                            -> 0
    // echo '<br>';
    // echo $a;                              -> 1

    // $b = 0;

    // echo ++$b;                            -> 1  
    // echo '<br>';
    // echo $b;                              -> 1 

//_______ 

    // $a = 0;

    // echo $a--;                            -> 0
    // echo '<br>';
    // echo $a;                              -> -1

    // $b = 0;

    // echo --$b;                            -> -1  
    // echo '<br>';
    // echo $b;                              -> -1 

//_________________________________________________________________________________________________________


    // var_dump(9 > 5 and 9 > 6 && 9 >2);    -> bool(true)      //يشترط هنا ان يكون الشروط كلها صحيحة
    // echo '<br>';
    // var_dump(9 > 5 or 9 > 10 || 9 > 3);   -> bool(true)      //هنا يكفي ان يتحقق شرط واحد
    // echo '<br>';
    // var_dump(9 > 5 xor 9 > 7);            -> bool(false)     //هنا يجب ان يتحقق شرط واحد ولا يتحقق الاخر
    // echo '<br>';
    // var_dump(9 > 5 xor 9 > 10);           -> bool(true)

//_______ 

    // ملاحظة هون الكلام كتير مهم
    // || Greater than or 
    // && Greater than and
    //هون الكلام متل الرياضيات مثلا انو عملية الضرب اقوى من الجمع

    
    // $a = 10 || false;    // $a = (10 || false) => true => $a = 1 //هون اخدهم ككتلة واحدة

    // echo $a;                              -> 1
    // echo '<br>';

    // $b = 10 or false;   // $b =  (10)  or  (false) => $b = 10 //هون اخدهم ككتلتين وواحدة واخد الصحيح منهم

    // echo $b;                              -> 1
    // echo '<br>';

//_________________________________________________________________________________________________________

    // define("constant","MK");                                 //عرفنا متغير ثابت 

    // $a = "Welcome";
    // $b = "To";
    // $c = "Here";

    // echo "$a $b $c";                      -> Welcome To Here
    // echo "<br>";
    // echo "{$a} {$b} {$c}";                -> Welcome To Here
    // echo "<br>";
    // echo $a . " " . $b . " " . $c;        -> Welcome To Here
    // echo "<br>";
    // نسخدم طريقة السلسة بالتنقيط كي نستطيع التعامل مع المتغيرات الثابتة والدوال 
    // echo $a . " " . $b . " " . $c . " " . constant . " " . functions();      -> Welcome To Here MK 1999
   
    // function functions(){
    //     return 1999;
    // }

//_______ 

    // $x = "Welcome ";
    // $x .= "To ";     // $x = $x + "To"
    // $x .= "Here";    // $x = $x + "Here"

    // echo $x;                              -> Welcome To Here    

    // $x = 1;
    // $x .= 2;
    // $x .= 3;                              // لاحظت هنا انها تتعامل مع الارقام كنصوص لا اعرف لحد الان لماذا 

    // echo $x;                              -> 123

//_________________________________________________________________________________________________________


    // $arr1 = [ 1 => "10" , 2 => "20"];
    // $arr2 = [ 3 => "20" , 4 => 10  ];

    // echo "<pre>";                         //    Array
    // print_r($arr1 + $arr2);               //(
    // echo "</pre>";                        //    [1] => 10
                                             //    [2] => 20
                                             //    [3] => 20
                                             //    [4] => 10
                                             //)
                                        
    // $arr3 = [ 1 => "10" , 2 => "20"];
    // $arr4 = [ 2 => "20" , 1 => 10  ];
                                                    
                                                    
    // var_dump($arr3 == $arr4);             -> bool(true)      //Same key and Value
    // echo '<br>';
    // var_dump($arr3 <> $arr4);             -> bool(false)     //نفس اشارة =! في العمل
    // echo '<br>';
    // var_dump($arr3 === $arr4);            -> bool(false)     //Same key and Value, Same order, Same Type 
    // echo '<br>';
    // var_dump($arr3 !== $arr4);            -> bool(true)
              
    
//6- if condition
//_________________________________________________________________________________________________________

    //مثال لتوضيح طريقة الكتابة

    // $lang = "Arabic";

    // if ($lang == "Arabic")
    // {
    //     echo "مرحبا";
    // }
    // elseif($lang == "English")
    // {
    //     echo "Hello";
    // }
    // else 
    // {
    //     echo "Unknown Language";
    // }

//_______ 

    //وهذه طريقة اخرى للكتابة مشابهة للتي قبلها

    // $lang = "Arabic";

    // if ($lang == "Arabic") :
    //   echo "مرحبا";

    // elseif($lang == "English") :
    //   echo "Hello";
        
    // else :
    //   echo "Unknown Language";

    // endif;  

//_______ 

    //يمكن الكتابة ايضا بهذه الطرق عن طريق ازالة الاقواس ولكن عيبها انها تاخذ امر واحد لا يمكن كتابة اكثر من سطر

    // $lang = "Arabic";

    // if ($lang == "Arabic") echo "مرحبا";

    // elseif($lang == "English")
    //     echo "Hello";
        
    // else echo "Unknown Language";

//_______ 

    //Ternary  Operator 
    //انسب طريقة لاستخدام هذه الطريقة هي كما موضح بالمثال 

    // $a = 10;

    // echo $a > 8 ?  'Good' : "Bad";
    // echo '<br>';
    // echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";
    // echo '<br>';

    // $result = $a > 8 ?  'Good' : "Bad";
    // echo "I Love PHP Because Its A " . $result . " Language";

/**********************************************************************************************************/

    // تستخدم هذه الدالة للتاكد من وجود المتغير او لا 
    // ملاحظة هذه الدالة لا تعمل مع الثوابت وانما فقط مع المتغيرات   

    // $a = 5;

    // if (isset($a)){
    //     echo "The varible is defined";
    // }

//_______ 

    //نفس عمل التي فوقها ولكن الفرق انها تعمل مع الثوابت

    // const MAX = 100;

    // echo defined("MAX") ? "defined" : "undifined"; 

//_______ 

    // نفس عمل ال isset ولكن بطريقة كتابة جديدة

    // $username = "MK";

    // echo isset($username) ? $username : "no name" ;
    // echo "<br>";
    // echo $username ?? "no name";



/**********************************************************************************************************/

    //Example for nested if 

    // $name = "MK";
    // $country = "Egypt";
    // $is_student = true;
    // $is_orphan = true;
    // $price = 100;
    // $country_discount = 50;
    // $student_discount = 10;
    // $orphan_discount = 15;
    
    // if( $country == "Egypt")
    // {
    //   if($is_student == true)
    //   {
    //     if($is_orphan == true)
    //     {
    //       echo "Heloo $name";
    //       echo "<br>";
    //       echo "Your country discount is $country_discount";
    //       echo "<br>";
    //       echo "Your student discount is $student_discount";
    //       echo "<br>";
    //       echo "Your orphin discount is $student_discount";
    //       echo "<br>";
    //       echo "The final price is " . $price - $country_discount - $student_discount - $orphan_discount;
    //     }
    //     else
    //     {
    //       echo "Heloo $name";
    //       echo "<br>";
    //       echo "Your country discount is $country_discount";
    //       echo "<br>";
    //       echo "Your student discount is $student_discount";
    //       echo "<br>";
    //       echo "The final price is " . $price - $country_discount - $student_discount;
    //     }
    //   }
    //   else  
    //   {
    //     echo "Heloo $name";
    //     echo "<br>";
    //     echo "Your country discount is $country_discount";
    //     echo "<br>";
    //     echo "The final price is " . $price - $country_discount;
    //   }
      
    // } 
    // else 
    // {
    //     echo "Hello $name";
    //     echo "<br>";
    //     echo "The final price is $price";
    // }

//7- Swich case
//_________________________________________________________________________________________________________

    // $day = "Mon";

    // switch($day)
    // {
    //   case "Sun":
    //     echo "Welcome to $day";
    //   break;

    //   case "Mon" :
    //     echo "Welcome to $day";
    //     break;

    //   default:
    //   echo "Unkown day";
    // }

//7- While , do While , for 
//_________________________________________________________________________________________________________

    // $a = 1;

    // while($a <= 4)
    // {
    // echo "$a ";                             -> 1 2 3 4
    // $a++;
    // }

    // echo "<br>";

    //طريقة كتابة مختلفة ولكن بنفس النتيجة

    // $b = 1;

    // while($b <= 4):

    // echo "$b ";                             -> 1 2 3 4
    // $b++;
    // endwhile;
    
//_________________________________________________________________________________________________________

    // $a = 4;

    // while($a <= 3)
    // {
    //   echo "$a ";                            -> nothing
    //   $a++;
    // }
                                                 //الفرق بينهم ان ال do while
    // echo "<br>";                              //تقوم بشتغيل الكود لمرة واحدة دائما قبل التحقق من صحة الشرط

    // do
    // {
    //   echo "$a ";                            -> 4
    //   $a++;
    // }while($a <= 3);

//_________________________________________________________________________________________________________

    // for ($i = 1; $i <= 4; $i++)
    // {
    //     echo "$i ";                         -> 1 2 3 4
    // }

//_______ 

    // $countries = ["EG", "SA", "QA", "SY"];

    // foreach ($countries as $country) //($array as $value)
    // {
    //   echo $country . "<br>";               -> EG
    // }                                       -> SA                                       
    //                                         -> QA
    //                                         -> SY

    // $countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

    // foreach ($countries_with_discount as $country => $discount) : //($array as $key => $value)

    //   echo "Country Name Is $country And Discount Is $discount <br>";   -> Country Name Is EG And Discount Is 50 
    //                                                                     -> Country Name Is SA And Discount Is 30
    //                                                                     -> Country Name Is QA And Discount Is 50
    //                                                                     -> Country Name Is SY And Discount Is 70
    // endforeach;

//_______ 

    // $numbers = [1,2,3,4,5,6,7,8,9,10];

    // foreach ($numbers as $mojb)
    // {
    //   if ($mojb %2 != 0)
    //   {

    //     continue;                              //تقف عند الشرط وتتجاوزه وتكمل 

    //   }
    //   echo "$mojb ";                           -> 2 4 6 8 10
    // }

//_______ 

    // $numbers = [1,2,3,4,5,6,7,8,9,10];

    // foreach ($numbers as $mojb)
    // {
    //   if ($mojb %2 == 0)
    //   {

    //     break;                                 //تقف عند الشرط ولا تكمل

    //   }
    //   echo "$mojb ";                           -> 1
    // }    

//8- include , require
//_________________________________________________________________________________________________________    


    // تستخدم لاضافة ملفات خارجية 
    // include("a.php");`                       //في حال حدوث خطا في ايجاد الملف تقوم باكمال الكود مع اعطاء انذار بالاخطاء

    // echo $a ."<br>";                         -> 10

    // echo "MK";                               -> MK

    //includeonce

//_______ 

    // تستخدم لاضافة ملفات خارجية 
    // require("a.php");                        ////في حال حدوث خطا في ايجاد الملف يتوقف الكود بشكل كامل                      
 
    // echo $a ."<br>";                         -> 10
   
    // echo "Continue";                         -> MK     

//_______ 

    // include("a.php");
    
    // echo $a ."<br>";                         -> 10

    // $a = 20;

    // include("a.php");                        //يمكن هنا تضمين الملف مرة ثانية وبالتالي عودة القيمة الى قيمتها التي في الملف

    // echo $a ."<br>";                         -> 10


    // include_once("a.php");                   //الفرق بينها وبين التي فوقها انه هنا يتم تضمين الملف لمرة واحدة فقط 
                                                
    // echo $a ."<br>";                         -> 10

    // $a = 20;

    // include_once("a.php");                   //هنا هذا يمكن اعتباره غير موجود لانه يمكننا تعريفه مرة واحدة فقط

    // echo $a ."<br>";                         -> 20

    //تطبق هذه القاعدة ايضا نفسها على require_once
    
//8- function
//_________________________________________________________________________________________________________ 
                                        //امثلة على الدوال
    // function say_hello($one, $two)
    // {
    //     echo "Hello $one , $two";
    // }

    // say_hello("MK","HQ");                    -> Hello MK , HQ

//_______ 
    // function deep_freezer($item)
    // {
    //     if ($item == "Water"){
    //         echo "Make it ice" . "<br>";
    //     }
    //     elseif($item == "Fruit"){
    //         echo "Make it fresh" . "<br>";
    //     }
    //     else{
    //         echo "Unknown item";
    //     }
    // }

    // deep_freezer("Water");                   -> Make it ice      
    // deep_freezer("Fruit");                   -> Make it fresh  
    // deep_freezer("Fruit");                   -> Unknown item 
                
//_______ 

    // $prizes = ["PC", "Playstation", "XBOX", "Laptop"];

    // function get_number($num1 , $num2)
    // {
    //     return $num1 + $num2;
    // }
    
    // echo $prizes[get_number(2,1)];           -> Laptop
    
//_______ 
    
    // function get_date($name = "Privte", $age = "Privte", $country = "Privte") //هنا لتجنب وجود خطا في حال ان المستخدم لم يدخل جميع البيانات المطلوبة قمنا بتعيين قيم افتراضية
    // {
    //     $line_one = "Your name is $name and your age is $age" . "<br>";
    //     $line_two = "Your Country is $country" . "<br>";
    //     return $line_one . $line_two;
    // }

    // echo get_date("MK", 24, "SY");           -> Your name is MK and your age is 24
    //                                          -> Your Country is SY
    // echo get_date("SY");                     -> Your name is Sy and your age is Privte   //عندما كتبنا قيمة واحدة بهذه الطريقة فهمها الكود على انها العنصر الاول
    //                                          -> Your Country is Privte
    // echo get_date(country: "SY");            -> Your name is Privte and your age is Privte // قمنا بالكتابة هكذا كي نتجنب المشكلة التي في الاعلى
    //                                          -> Your Country is SY

//_______ 

    /*
    Function
    - Variable Arguments List
    --- func_num_args()         // تستخدم لحساب عدد العناصر المدخلة
    --- func_get_arg(index)     // تستخدم للوصول الى عنصر محدد في المصقوقة 
    --- func_get_args()         // تستخدم للوصول الى جميع عناصر المصفوفة
     */

    // function calculate()
    // {
    //     echo "Number of Arguments: " . func_num_args( ) . "<br>";            -> Number of Arguments: 4  
    //     echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";       -> Argument Index Number 3 Is 10
    //     print_r(func_get_args()) ;                                           -> Array ( [0] => 50 [1] => 20 [2] => 30 [3] => 10 )
    //     echo "<br>";
    //     $result = 0;
    //     foreach (func_get_args() as $arg):
    //     $result += $arg;
    //     endforeach;
    //     echo $result;                                                        -> 110
    // }
    // echo calculate(50 , 20 , 30 ,10);   

//_______ 

    //هذا الكود نفس عمل الذي فوقه تماما ولكنه مختصر بشكل اكبر ولم يتم استخدام الدوال الجاهزة فيه                                     

    // function calculate(...$nums) 
    // {
    //     echo "Argument Index Number 3 Is " . $nums[3] . "<br>";
    //     print_r($nums) ;
    //     echo "<br>";
    //     $result = 0;
    //     foreach ($nums as $num):
    //     $result += $num;
    //     endforeach;
    //     echo $result;
    // }

    // echo calculate(50 , 20 , 30 ,10);  

//_______ 

    // ... mean unpacking

    // $group_of_skills = ["HTML", "CSS", "JS"];

    // function get_data($name , $country = "Private", ...$skills){
    //     echo "Hello $name Your country is $country <br>";
    //     foreach($skills as $skill):
    //         echo "-- $skill <br>";
    //     endforeach;    
    // }
    // get_data("Osama", "Egypt", ...$group_of_skills);                 -> Hello Osama Your country is Egypt
    //                                                                  -> -- HTML
    //                                                                  -> -- CSS
    // get_data("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);     -> -- JS


//_______ 

    // function say_hello_to($someone) {
    //     return "Hello $someone";
    //   }
                                        
    //   $func2 = "say_hello_to";                   //هنا يمكننا تسمية الدالة في داخل متغير ومن ثم استدعاء المتغير كدالة

    //   echo $func2("Osama");                      -> Hello Osama                  

    //   echo '<br>';
    

    //   $func3 = "strlen";

    //   echo $func3("Elzero");                     -> 6

//_______ 

    // function plus($number) :int {    //int هنا تحول الناتج مهما كان الى
    //     return $number += 5;
    // }

    // $n = 15.5;

    // echo plus($n) . "<br>";                      -> 20

    // echo "n = $n" . "<br>";                      -> 15.5


    // function Refernce_plus(&$refernce_number){   //هنا استحدمنا الريفرنس بحيث يكون باستطاعته تغيير قيمة المتغير بعد التعامل معه
    //     return $refernce_number += 5;
    // }
    
    // $a = 15.5;
    
    // echo Refernce_plus($a) . "<br>";             -> 20.5
    
    // echo "n = $a" . "<br>";                      -> 20.5

//_________________________________________________________________________________________________________ 
                                            //Anonymous Function

    // Normal Function With Parameter

    // function say_hello_to($someone) {
    //     return "Hello $someone";
    //   }
    //   echo say_hello_to("Osama");                -> Hello Osama
    
    // Anonymous Function In Variable
    
    //   $say_hello = function() {
    //     return "Hello";
    //   };
    
    //   echo $say_hello();                         -> Hello
    
    
    // Anonymous Function With Parameter In Variable
    
    //   $say_hola = function($someone) {
    //     return "Hola $someone";
    //   };
    
    //   echo $say_hola("Osama");                   -> Hola Osama
    
    
    // Inherit Variable From Parent Scope
    
    //   $msg = "Hi";
    
    //   $say_hi = function($someone) use ($msg) {  //هنا قمنا بادخال المتغير الخارجي الى داخل الدالة كي نستطيع استعماله 
    //     return "$msg $someone";
    //   };
    
    //   echo $say_hi("Osama");                     -> Hi Osama
        
    // Pass Anonymous Function To Function => array_map
    
    //   $nums = [10, 20, 30, 40, 50];
    
    //   function add_five($item) {
    //     return $item + 5;
    //   }
    
    //   $nums_after_adding_five = array_map("add_five", $nums);
    
    //   print_r($nums_after_adding_five);           -> Array ( [0] => 15 [1] => 25 [2] => 35 [3] => 45 [4] => 55 )

//_________________________________________________________________________________________________________
                                            //Arrow Function

    //تعمل نفس عمل الكود الذي في الاعلى ولكن بطريقة كتابة مختصرة وفعالة بشكل اكبر
    
    // $say_hello = fn() => "Hello";

    // echo $say_hello();                            -> Hello 
  
    // echo '<br>#########<br>';



    // $say_hola = fn($someone) => "Hola $someone";

    // echo $say_hola("Osama");                      -> Hola Osama

    // echo '<br>#########<br>';



    // $msg = "Hi";

    // $say_hi = fn($someone) => "$msg $someone";
  
    // echo $say_hi("Osama");                        -> Hi Osama
  
    // echo '<br>#########<br>';



    // $nums = [10, 20, 30, 40, 50];

    // $nums_after_adding_five = array_map(fn($item) => $item + 5, $nums);
  
    // print_r($nums_after_adding_five);             -> Array ([0] => 15 [1] => 25 [2] => 35 [3] => 45 [4] => 55)

//9- String Functions
//_________________________________________________________________________________________________________

    // String Acces

    // $str = "Hello";

    // echo "First Letter is $str[0]" . "<br>";                     -> First Letter is H
    // echo "Forth Letter is $str[3]" . "<br>";                     -> Forth Letter is l

    // echo "Number of letter = " . strlen($str) . "<br>";          -> Number of letter = 5

    // echo "The last letter is $str[-1] " . "<br>";                -> The last letter is o  //هذه الطريقة الجديدة
    // echo "The last letter is {$str[strlen($str) -1]}" . "<br>";  -> The last letter is o  //هذه الطريقة القديمة 

//_______ 

    // String Update    

    // $str = "Hello";
    // echo $str . "<br>";                                          -> Hello

    // $str[0] = "M"; 
    // echo $str . "<br>";                                          -> Mello

    // $str[5] = "M"; 
    // echo $str . "<br>";                                          -> MelloM

//_______ 

    //دوال جاهزة

    // echo ucfirst("heloo mk") . "<br>";                           -> Hello mk     //لتكبير اول حرف 
    // echo lcfirst("Hello MK") . "<br>";                           -> hello MK     //لتصغير اول حرف 
//_______ 

    // echo strtoupper("hello mk") . "<br>";                        -> HELLO MK     //لتكبير كل الاحرف
    // echo strtolower("HELLO MK") . "<br>";                        -> hello mk     //لتصغير كل الاحرف
//_______ 

    // echo ucwords("hello mk hq") . "<br>";                        -> Hello MK HQ  //لتكبير اول حرف من كل كلمة
    // echo ucwords("hello mk ,hq", ",") . "<br>";                  -> Hello mk ,Hq //لتصغير اول حرف من كل كلمة
//_______ 

    // echo str_repeat("MK ", 3);                                   -> MK MK MK     //للتكرار
    // echo str_shuffle("Hello MK") . "<br>";                       -> oMlHKl e     //ترتيب عشوائي 
    // echo strrev("Hello MK") . "<br>";                            -> KM olleH     //للعكس
//_______ 

    // echo trim(".....MK.....", '.') . "<br>";                     -> MK           //للتقطيع
    // echo rtrim(".....MK.....", '.') . "<br>";                    -> .....MK      //للتقطيع من اليمين
    // echo ltrim(".....MK.....", '.') . "<br>";                    -> MK.....      //للتقطيع من اليسار
//_______ 
  
    // $names = ["Ahmed", "Samer", 'Ali'];
    // echo implode(" ", $names) . "<br>";                          -> Ahmed Samer Ali      //يقوم بجمع المصفوفة في نص واحد
    // echo implode("||", $names) . "<br>";                         -> Ahmed||Samer||Ali    

//_______ 

    // $str = "Hello Ahmed Samer Ali";                              
    // print_r(explode(" ", $str));                                 -> Array ( [0] => Hello [1] => Ahmed [2] => Samer [3] => Ali ) // يقوم بقص النص الى مصفوفة

    //echo chunk_split("Hello Mk" , 2 ,"|") . "<br>";               -> He|ll|o |Mk|  //يقوم بتقطيع النص حسب القيمة المعطاة

    //print_r(str_split("Hello MK" , 2));                           -> Array ( [0] => He [1] => ll [2] => o [3] => MK ) //يقوم بتقطيع النص الى مصفوفة حسب القيمة المعطاة

    //var_dump(strpos("Hello Hello", "H"));                         -> int(0)  // تستخدم للبحث عن نص معين او حرف
    //var_dump(strpos("Hello Hello", "H" , 3));                     -> int(6)

    //var_dump(stripos("Hello Hello", "h" ));                       -> int(0) // هنا لا يهتم اذا كان الحرف صغير او كبير عند البحث

    //var_dump(substr_count("Hello Hello", "l"));                   -> int(4) // يقوم بحساب عدد النص المشابه او الاحرف

//_______ 

    // parse_str("name=MK&email=test@gmail.com&os=win", $query);

    // print_r($query);                                             -> Array ( [name] => MK [email] => test@gmail.com [os] => win )

    // echo $query["name"] . "<br>";                                -> MK
    // echo $query["email"] . "<br>";                               -> test@gmail.com
    // echo $query["os"] . "<br>";                                  -> win

//_______ 

    // echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";             -> 00012000     // تقوم بملا الشيء المعطى لها بالعدد المطلوب
    // echo str_pad("321", 8, 0, STR_PAD_RIGHT) . "<br>";           -> 32100000
    // echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";           -> 00001313

//_______ 

    // echo strtr("E@zero Web Schoo@", "@", "l") . "<br>";          -> Elzero Web School    //اسمها المترجمة وتقوم بابدال القيم


    // $translation = ["@" => "l", "#" => "o"];
    // echo strtr("E@zer# Web Sch##@", $translation);               -> Elzero Web School   

//_______ 

    // echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r);         -> Elzero Web School    //تقوم ايضا بالتبديل ولم اعرف الفرق الجوهري بينها وبين المترجمة
    // echo '<br>';
    // echo "Replaces Count Is $r";                                 -> Replaces Count Is 3

    // print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));   
    // -> Array ( [0] => 1 [1] => 2 [2] => Three [3] => 1 [4] => 1 )     

    // print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"])); //الفرق هنا انها لا تعطي حجم الاحرف اهمية
    // -> Array ( [0] => 1 [1] => 2 [2] => Three [3] => 1 [4] => 1 )        

//_______ 

    // $str = "Welcome To Elzeroo Web School Website ";

    //تقوم هذه الدالة بتقسيم الكلمات اذا كان عدد احرفها اطول من الرقم المعين للتقسيم 

    // echo wordwrap($str, 8, "<br>");                              -> Welcome \n To \n Elzeroo \n Web \n School \n Website     \\ \n حطيتها بدل ما اكتب كل وحدة بسطر 


    //تقوم بعرض قيمة الحرف او الاشارة في جدول الاسكي

    //echo ord("a");                                                -> 97


    //تقوم بعرض الحرف او الاشارة المدخلة قيمتها

    // echo chr(97);                                                -> a


    //تقوم بعمل مقارنة بين النصين واعطاء عدد الاحرف المتشابهة ويمكن عن طريق اضافة متغير معرفة نسبة التطابق بالمئة

    //echo similar_text("Hello MK","Qello MK",$pres);               -> 8
    //echo $pres;                                                   -> 87.5
//_______ 

    //عند ادخال حرف معين تقوم بطباعة كل الكلام الذي بعده او قبله عن طريق اضافة صح او خطا

    // echo strstr("Hello MK Fine", "M") . "<br>";                  ->  MK Fine

    // echo strstr("Hello MK Fine", "M", true);                     ->  Hello


    //نفس التي فوقها ولكن الفرق بينهما انها ليست حساسة للاحرف 
    
    // echo stristr("Hello MK Fine", "m") . "<br>";

    // echo stristr("Hello MK Fine", "m", true);


    //تقوم بتحسين شكل عرض الرقم للمستخدم ويمكن تغيير اشكال النقاط والفواصل

    // echo number_format(1000000.156023) . "<br>";                 -> 1,000,000

    // echo number_format(1000000.156023,4). "<br>";                -> 1,000,000.1560

    // echo number_format(1000000.156023,4,"@"). "<br>";            -> 1,000,000@1560

    // echo number_format(1000000.156023,4,"@","#"). "<br>";        -> 1#000#000@1560


//9- Array Functions
//_________________________________________________________________________________________________________


    //تقوم بتقسيم المصفوفة الى مصفوفات حسب القيمة المعطاة

    // $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

    // print_r(array_chunk($friends,2));                            -> Array { ( [0] => Array ( [0] => Osama [1] => Ahmed ) [1] => Array ( [0] => Sameh [1] => Mahmoud ) [2] => Array ( [0] => Gamal ) )}


    // $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

    // print_r(array_chunk($countries, 2));                         -> Array {( [0] => Array ( [0] => Egypt [1] => Saudi Arabia ) [1] => Array ( [0] => Syria [1] => United States ) )}

    //الفرق بين هي ويلي قبلها بسطرين هون المفاتيح انكتبت متل مو موجودة بالمصفوفة فوق هو حط قيم من عندو
    // print_r(array_chunk($countries, 2,true));                    -> Array ( [0] => Array ( [EG] => Egypt [KSA] => Saudi Arabia ) [1] => Array ( [Sy] => Syria [USA] => United States ) )

//_______ 
    
    // شغلتها بالحياة تكبر وتصغر احرف المفاتيح 

    // $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

    //print_r(array_change_key_case($countries, CASE_LOWER));

//_______ 

    // شغلتها بالحياة انها تجمع مصفوفتين مع بعض بس يكونوا مفاتيح وقيم

    // $keys = ["A", "O", "K"];
    // $values = ["Ahmed", "Osama", "Kamal"];

    // print_r(array_combine($keys,$values));                       -> Array ( [A] => Ahmed [O] => Osama [K] => Kamal )

//_______ 

    //هون الشب شغلتو بالحياة انو يحسب تكرار الاحرف ويحطون بمصفوفات

    // $counting = ["B", "A", "A", "B", "B", "B", "C"];

    // print_r(array_count_values($counting));                      -> Array ( [B] => 4 [A] => 2 [C] => 1 )
 
//_______ 

    //هنا يقوم بعكس ترتيب المفوفة

    // $family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];

    // print_r($family) ;                                           -> Array ( [0] => Osama [1] => Ahmed [2] => Sameh [3] => Mahmoud [4] => Gamal [5] => Array ( [0] => Eman [1] => Noha ) )

    // print_r(array_reverse($family));                             -> Array ( [0] => Array ( [0] => Eman [1] => Noha ) [1] => Gamal [2] => Mahmoud [3] => Sameh [4] => Ahmed [5] => Osama )

    // print_r(array_reverse($family,true));                        -> Array ( [5] => Array ( [0] => Eman [1] => Noha ) [4] => Gamal [3] => Mahmoud [2] => Sameh [1] => Ahmed [0] => Osama )

//_______ 

    //تقوم هذه بتبديل اماكن المفاتيح والقيم

    // $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

    // print_r(array_flip($countries));                             -> Array ( [Egypt] => EG [Saudi Arabia] => KSA [Syria] => Sy [United States] => USA )

//_______ 

    //تقوم بعد عناصر المصفوقة

    // $counting = ["A", "B", "C", [1, 2, 3]];

    // echo count($counting) . "<br>";                              -> 4

    // echo count($counting,1);                                     -> 7 // هنا عند اضافة رقم 1 للدالة تقوم بعد جميع العناصر حتى الموجودة داخل مصفوفة داخلية

//_______ 

    //دالة مهمة في العمل تقوم بالتاكد من وجود القيمة المعطاة في المصفوفة

    // $search = ["1", 2, 3, 4];

    // if (in_array(1,$search)){
    //     echo "The Element Is found";                             -> The Element Is found
    // };

    // if (in_array(1,$search,true)){
    //     echo "The Element Is found";                             -> "nothing" //لم يظهر شي هنا لاننا عندما اضفنا شرط الترو تتاكد الدالة من القيمة والنوع
    // };

//_______ 

    //تقوم هذه الدالة بالتاكد من وجود المفتاح

    // $courses = ["Javascript" => 95, "PHP" => 100, "HTML" => 60, "CSS" => 65];

    // if (array_key_exists("PHP",$courses)){
    //     echo "The Course Is Found And The Price Is " . $courses["PHP"];      
    // }                                                            -> The Course Is Found And The Price Is 100

//_______ 

/***************************************************************************************************************/

//مثال على المصفوفات من حسوب

// $employes = [
//     [
//         'name' => "MK",
//         'job' => "hacker"
//     ],
//     [
//         'name' => "HQ",
//         'job' => "blender",
//     ]
// ];

// $count = count($employes);

// for($i = 0; $i < $count; $i++){

//     print_r($employes[$i]['name'] . '-' . $employes[$i]['job'] . "<br>") ;               //-> MK hacker \n  HQ blender

// }

// $i = 0;
// while ($i < $count){
//     print_r($employes[$i]['name'] . " " . $employes[$i]["job"] . "<br>");                //-> MK hacker \n  HQ blender
//     $i++;
// }

//_______ 

    // $arr = [1,2,3,4,5];

    // $func = function($value) {

    //     return $value * 2;

    // };

    // تسخدم هذه الدالة لتمرير عناصر المصفوفة على العملية المراد علمها 
    // print_r(array_map($func,$arr));      


//10- OOP
/***************************************************************************************************************/

//في هذا النمط يتكون لدينا من اصناف ولها خصائص وعمليات

//1-Class : هو الصنف الذي يحوي كائنات كمثلا صنف سيارة يحوي سيارة مارسيدس
//2-Object : هو الكائن الموجود في الصنف
//3-Proprties: هي الصفات التي يحويها كل كائن كلون السيارة او سرعتها
//4-Methods: هي العمليات التي يمكن للكائنات عملها كالمشي للامام او الخلف 

// Car -> Merceds -> Black -> Go Towards

//طريقة انشاء الكلاس 

// class Car{

//}

//طريقة انشاء كائن جديد

// $Mercedes = new Car();


//طريقة انشاء خصائص في الصنف

// class Car {
    
//     $company_name;
//     $model;
//     $seats_number = 4;     //هنا وضعنا قيمة افتراضية يمكن تغييرها

// }

//طريقة انشاء العمليات في الصنف

// class Car {
    
//     $company_name;
//     $model;

// function go_twards($gaz_amount) {
//     يكتب هنا منطق وبرمجة السيارة الى الامام اخذين بعين الاعتبار قيم بعض الخصائص مثل سعة المحرك
// }

//  }

//_______ 

//access modifiers محددات الوصول

// public : يمكن الوصول الى المتغير او الدالة من داخل الصنف او خارجه

// private :يمكن الوصول للمتغير او الدالة فقط من داخل الصنف و تستعمل للاجزاء الداخلية التي لا يلزم الوصول اليها من خارج الصنف 

// protected : يمكن الوصول الى المتغير او الدالة من الصنف نفسه او من الابناء او المشتقات

// final : هذه الدالة لا يمكن اسناد قيمة اخرى اليها او تعريفها في الابناء ولا يمكن استخدامها مع الخصائص\المتغيرات

// مثال عليهم عند الاتصال بقاعدة البيانات
// private : مقبض الاتصال connection handle
// protected: عنوان الشبكة لمخدم قاعدة البيانات 
// public: الطلبيات التي تجرى على قاعدة البيانات 

//_______ 

//الدالة البانية تستخدم لتعيين قيم لخصائص الكائن وطريقة كتابتها

// function __construct($company_name, $model, $proudction_year){
//     $this -> company_name = $company_name;
//     $this -> model = $model;
//     .....
// }
// كيفية تمرير البينات اليها
// $mercides = new Car("Mercedes","C class", '2015');

//_______ 

//inheritance الوراثة
//عن طريقها يمكن للابن اخذ خصائص وعمليات من الاب وطريقة كتابها

// class Child extends Parent {
    
// }



//_______ 

    // class car{                           //class creation

    //     public $speed;                   //properties
    //     public $doors;


    //     public function getSpeed(){      //method
    //         return $this->speed;
    //     }
    // }

    // $c1 = new car();                     //object
    // $c1->speed = 120;
    // $c1->doors = 4;

    // print_r($c1);                        -> car Object ( [speed] => 120 [doors] => 4 )     

    // $c2 = new car();
    // $c2->speed = 150;
    // $c2->doors = 2;

    // print_r($c2);                        -> car Object ( [speed] => 150 [doors] => 2 )

//_______ 

    // class car{

    //     public $speed;
    //     public $doors;

    //     public function __construct($speed = 100 , $doors = 4)   //تستخدم هذه الدالة  لعمل قيم ثابتة يمكن استدعائها من الكائنات في الاسفل                                                                   
    //     {                                                        // دون الحاجة الى اعادة كتابة الاسهم في كل مرة 
    //         $this -> speed = $speed;
    //         $this -> doors = $doors;
    //     }
    //     }
    // }

    // $c1 = new car(120,2);                -> car Object ( [speed] => 120 [doors] => 2 ) 
    // print_r($c1);

    // $c2 = new car(150);
    // print_r($c2);                        -> car Object ( [speed] => 150 [doors] => 4 ) 

//_______ 

    // class car{

    //     private $speed;                              //هون استخدمنا النمط الخاص بس ليش ما بعرف الموضوع خنزرة بحت
    //     private $doors;                              


    //     public function setSpeed($speed = 120){      
    //         $this-> speed = $speed;
    //    }
    
    //     public function setDoors($doors = 4){
    //         $this-> doors = $doors;
    //    }

    //     public function getspeed(){
    //         return $this-> speed;
    //     }

    //     public function getDoors(){
    //         return $this-> doors;
    //     }

    // }

    // $c1 = new car();
    // $c1-> setSpeed(150);
    // $c1-> setDoors(8);

    // print_r($c1);

//_______ 

    //inhertince الوراثة
    // class vehicle{

    //     protected $speed;                                        
    //     protected $doors;

    //     public function __construct($speed = 120, $doors = 4)
    //     {
    //         $this -> speed = $speed;
    //         $this -> doors = $doors;
    //     } 
    //     public function print_VInfo(){
    //         print_r("{$this -> speed} - {$this -> doors} <br>");
    //     }
    // }

    // class car extends vehicle{                                   // هون تم تعريفه على انو ابن حرام 
    //     private $color;

    //     public function __construct($speed, $doors, $color){     // دخلنا اول متغيرين من الاب

    //         parent::__construct($speed,$doors);
    //         $this -> color = $color;
    //     }

    //     public function print_CInfo(){
    //         print_r("{$this -> speed} - {$this -> doors} - {$this -> color} <br>");      // ساوينا دالة لطباعة المحتوى المقزز
    //     }
    // }

    // $vehicle = new vehicle('airbus', 2020);
    // $vehicle->print_VInfo();                                      -> airbus - 2020

    // $car = new car("Honda",2021,"Red");
    // $car->print_CInfo();                                          -> Honda - 2021 - Red

//_______

    //overriding المرور

    // class vehicle{

    //     protected $speed;
    //     protected $doors;


    //     public function __construct($speed = 120, $doors = 4)
    //     {
    //         $this -> speed = $speed;
    //         $this -> doors = $doors;
    //     } 
    //     public function printInfo(){
    //         echo "{$this -> speed} - {$this -> doors}";
    //     }
    // }

    // class car extends vehicle{
    //     private $color;

    //     public function __construct($speed, $doors, $color){

    //         parent::__construct($speed,$doors);
    //         $this -> color = $color;
    //     }

    //     public function printInfo()
    //     {
    //         parent::printInfo();             //اخدنا دالة الطباعة من الاب الخنزير
    //         echo " - {$this -> color}";
    //     }
    // }
        
    // $car = new car("BMW","4","Black");
    // $car -> printInfo();                     -> BMW - 4 - Black

//_______

//magic metods

    // class magicClass{

    //     private $Name;
    //     private $Age;

    //     function __set($name, $value)            //دالة جاهزة
    //     {
    //         switch($name){
    //             case "Name":
    //                 $this -> Name = $value;
    //             break;
                
    //             case "Age" :
    //                 $this -> Age = $value;
    //             break;
    //         }
    //         return $value;
    //     }

    //     function __get($name)                   //دالة جاهزة
    //     {
    //         switch($name){
    //             case "Name":
    //             return $this -> Name;
                
    //             case "Age" :
    //             return $this -> Age;
    //         }
    //     }
    // }

    // $employee = new magicClass();
    // $employee -> Name = "MK";                    //هون ما كتبنا سيت وجيت لانو الدالة جاهزة يمكن
    // $employee -> Age = "23";

    // echo $employee -> Name;
    // echo "<br>";
    // echo $employee -> Age;

//_______

