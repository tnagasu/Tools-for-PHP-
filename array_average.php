<?php
//********************************************
//   array_average
//   配列の中の値の平均値を計算する
//
//   <説明>
//   number array_average ( array $array )
//   array_average()は、配列の中の値の平均値を整数またはfloatとして返します。
//
//   <パラメータ>
//   array
//       入力の配列。
//
//   <返り値>
//   値の平均値を整数またはfloatとして返します。
//   arrayが空の場合は0を返します。
//  
//   <変更履歴>
//   2017-06-29  16Kirin     Original
//
//********************************************
function array_average($InputArray)
{
//引数の確認
//  引数が配列以外の場合はエラーリターン
if (!is_array($InputArray)) {
    return 0;
}

//配列に含まれる要素の個数を確認
$DataCnt = count($InputArray);

//  配列に含まれる要素数が0個の場合はエラーリターン
if ($DataCnt == 0) {
    return 0;
}

//配列の中の値を合計
$DataSum = array_sum($InputArray);

//平均値を計算
$average = $DataSum / $DataCnt;

//平均値をリターン
return $average;
}
?>
