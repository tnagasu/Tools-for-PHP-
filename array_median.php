<?php
//********************************************
//   array_median
//   配列の中の値の中央値を計算する
//
//   <説明>
//   number array_median ( array $array )
//   array_median()は、配列の中の値の中央値を整数またはfloatとして返します。
//
//   <パラメータ>
//   array
//       入力の配列。
//
//   <返り値>
//   値の中央値を整数またはfloatとして返します。
//   arrayが空の場合は0を返します。
//  
//   <変更履歴>
//   2017-06-30  16Kirin     Original
//
//********************************************
function array_median($InputArray)
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

//中央値を計算
//  配列をソート
sort($InputArray);

//  配列の要素数が偶数個の場合
if ($DataCnt % 2 == 0){
    $DataCntDiv = floor($DataCnt / 2); 

    $median = ($InputArray[$DataCntDiv-1] + $InputArray[$DataCntDiv]) / 2;

//  配列の要素数が奇数個の場合
} else {
    $DataCntDiv = floor($DataCnt / 2);
    $median = $InputArray[$DataCntDiv];
}

//中央値をリターン
return $median;
}
?>
