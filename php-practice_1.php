<?php
// Q1 変数と文字列

$name = '「雨宮」';

$text = '私の名前は' . $name . 'です。';

echo $text;

// Q2 四則演算

$num = 5*4;

$divison = $num / 2;

echo $num;
echo "\n";
echo $divison;


// Q3 日付操作

echo '現在時刻は、' . date("Y年m月d日H時i分s秒") . 'です。';


// Q4 条件分岐-1 if文

$device = 'pico';
if($device === 'windows' || $device === 'mac') {
    echo '使用OSは、'."$device".'です。';

} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子

$age = 20;

$message = ($age < 18 ) ? '未成年です。' : '成人です。';

echo $message;


// Q6 配列

$kanto = ['東京都','神奈川県','埼玉県','栃木県','千葉県','茨城県','群馬県'];
echo ''. $kanto[3] . 'と' . $kanto[4] .'は関東地方の都道府県です。';


// Q7 連想配列-1

$kencho = ['新宿区','横浜市','千葉市','さいたま市','宇都宮市','前橋市','水戸市'];

foreach ($kencho as $key => $value) {
    echo $value . "\n";
}

// Q8 連想配列-2

$kencho = ['東京都'=>'新宿区', '神奈川県'=>'横浜市', '千葉県'=>'千葉市',
            '埼玉県'=>'さいたま市', '栃木県'=>'宇都宮市', '群馬県'=>'前橋市',
            '茨城県'=>'水戸市'];

$limit = 1;
$count = 0;

 foreach ($kencho as $key => $value) {
     if($count < $limit) {
          echo "$key の県庁所在地は $value です。"; 
          $count++;
     } else {
     break;
 }
 }

// Q9 連想配列-3

$kencho = ['東京都'=>'新宿区', '神奈川県'=>'横浜市', '千葉県'=>'千葉市',
           '埼玉県'=>'さいたま市', '栃木県'=>'宇都宮市', '群馬県'=>'前橋市', 
           '茨城県'=>'水戸市','石川県'=>'金沢市', '北海道'=>'札幌市'];

 foreach ($kencho as $ken => $city) {
     if($ken === '石川県'|| $ken === '北海道') {
          echo "$ken は関東地方ではありません。\n"; 
     } else{
         echo  "$ken の県庁所在地は $city です。\n";
     } 
 }

// Q10 関数-1

function hello($name)
{
    echo $name . 'さん、こんにちは。'. "\n";
}

hello('中村');
hello('伊東');

// Q11 関数-2

function calcTaxInPrice($price){
    
    $taxInPrice = $price * 1.1 ;
    
    return  $taxInPrice;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

 echo "$price 円の商品の税込価格は$taxInPrice 円です。";

// Q12 関数とif文

function distinguishNum($num){
    if ($num % 2){
        echo "$num は奇数です。". "\n";
    }
    else {
        echo "$num は偶数です。". "\n";
    }
}

 distinguishNum(11);
 distinguishNum(24);

// Q13 関数とswitch文

function evaluteGrade($score){
    switch($score){
    case $score === 'A' || $score === 'B' :
    echo '合格です。'. "\n";
    break;
    
    case $score === 'C' :
        echo '合格ですが追加課題があります。'. "\n";
        break;
    
    case $score === 'D' :
        echo '不合格です。'. "\n";
        break;
        
    default:
        echo '判定不明です。講師に問い合わせてください。'. "\n";
        break;
    }
}

 evaluteGrade('A');
 evaluteGrade('K');


?>