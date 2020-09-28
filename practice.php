<?php
echo 'hello php!';

//1. $a変数３と$b変数７を代入し、echoを使って$aと$bの結果を見る
$a= 3;
$b= 7;
echo $a + $b. "\n";

//2. $array_monthという配列に1月〜12月の文字列を代入し、echoで8月を表示。
$array_month= ["1月", "2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"]
echo $array_month [7]. "\n";

// $hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　$world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう。
$hello= "Hello"
$name="Mashi"
$world="'s World!"
echo $hello, $name, $world. "\n";

//$tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう。
$value= tech;
$value= boost
echo $value. "\n";

//応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは一つとは限りません。)

$calendar_2018 = [
    "January" =>"1月"
    "February" =>"2月"
    "March" =>"3月"
    "April" =>"4月"
    "May" =>"5月"
    "June" =>"6月"
    "July" =>"7月"
    "August" =>"8月"
    "September" =>"9月"
    "October" =>"10月"
    "November" =>"11月"
    "December" =>"12月"
    ];
    
    //12月を表示する
    echo $calendar_2018 [December]."\n";
    



