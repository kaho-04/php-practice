<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します'."\n";
for($i = 1; $i <= 100; $i++) {
    if($i % 4 == 0 && $i % 5 == 0){
        echo 'tic-tac'. "\n";
    } elseif ($i % 4 == 0) {
        echo 'tic'. "\n";
    } elseif ($i % 5 == 0) {
        echo 'tac'. "\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
//問題1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';
echo $personalInfos [0]['name'];

//問題2
foreach($personalInfos as $i => $data){
  echo ($i+1).'番目の'. $data['name'].'のメールアドレスは';
  echo $data['mail'].'で、電話番号は';
  echo $data['tel'].'です。';
  echo "\n";
}

//問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $i => &$person){
    $person["age"] = $ageList[$i];
}

unset($person);
var_dump($personalInfos);

// Q3 オブジェクト-1
$yamada = new Student('120','山田' );

echo '学籍番号'."$yamada->studentId".'番の生徒は'."$yamada->studentName".'です。';

// Q4 オブジェクト-2
public function attend($subject)
    {
      echo $this->studentName.'は'.$subject.'の授業に出席しました。学籍番号:'.$this->studentId;
    }

// Q5 定義済みクラス
// 問題1
$date = new DateTime();

$date2 = $date->modify('-1 month');
echo $date2->format('Y-m-d');

// 問題2
$today = new DateTime();
$past = new DateTime('1992-4-25');
$diff = $today->diff($past);

echo $diff->format('あの日から%a日経過しました。');

?>