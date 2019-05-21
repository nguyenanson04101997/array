<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>count($array)</h1>
<?php
//hàm này cso tác dụng đếm xem trong mảng có bao nhiếu phần tử
$array=[
        'Nguyen An Son',
        'là học viên T3h',
        'sinh năm 1997'

];
echo count($array);
// ra 3 phần tử trong 3 dấu ngoặc đơn

?>
<h1>array_values($array)</h1>
<?php
//-Hàm có tác dụng đưa mảng về dạng mảng tuần tự.

$array2 = [
        'Ten' => 'Nguyen An Son',
        'diachi' => 'là học viên T3h',
        'namsinh' => 'sinh năm 1997'
];
print_r(array_values($array2));
?>
<h1>array_keys($array)
</h1>
<?php
//-Hàm này có tác dụng trả về một mảng tuần tự với phần tử là key của mảng ban đầu.
$array3 = [
    'Ten' => 'Nguyen An Son',
    'diachi' => 'là học viên T3h',
    'namsinh' => 'sinh năm 1997'
];
print_r(array_keys($array3));

?>
<h1>array_pop($array)
</h1>
<?php
//trả về phần tử cuối cùng của mảng
print_r(array_pop($array3));
?>
<h1>array_push($array,$var,$var...)
</h1>
<?php
//-Hàm này có tác dụng thêm một hoặc nhiều phần tử vào cuối mảng và trả về số lượng phần tử của mảng sau khi thêm.
print_r(array_push($array, 'dòng thứ 4'));
?>
<h1>array_shift($array)</h1>
<?php
//-Hàm có tác dụng xóa phần tử đầu tiên của mảng và trả về phần tử vừa xóa.
print_r(array_shift($array3));
?>

<h1>array_unshift($array, $var, $var...)</h1>

<?php
//-Hàm có tác dụng thêm một hoặc nhiều phần tử vào đầu mảng, và trả về số lượng phần tử của mảng sau khi thêm.
print_r(array_unshift($array3,"hello word"));
?>

<h1>array_flip($array)</h1>

<?php
//-Hàm này có tác dụng chuyển đổi key của mảng thành value và ngược lại.
print_r(array_flip($array));
?>

<h1>sort($array)</h1>

<?php
//-Hàm có tác dụng sắp xếp lại mảng theo chiều tăng dần và trả về giá trị TRUE nếu thành công và ngược lại FALSE nếu không thành công.
$array4 = [5, 4, 3, 2, 1];
  sort($array4);//true
print_r($array4);
?>

<h1>array_reverse($array)</h1>

<?php
//-Hàm có tác dụng đảo ngược lại vị trí của các phần tử trong mảng.
$array5 = [5, 4, 3, 2, 1];
print_r(array_reverse($array5));
?>
<h1>array_rand($array, $number)</h1>

<?php
//-Hàm có tác dụng lấy ra key ngẫu nhiên trong mảng với number là số lượng muốn lấy.
print_r(array_rand($array));

print_r(array_rand($array, 2));
?>

<h1>array_search($keyword,$array)</h1>

<?php
//-Hàm có tác dụng tìm kiếm giá trị của mảng và trả về key của phần tử đó nếu có.
print_r(array_search('Nguyen An Son', $array));
?>

<h1>array_slice($array,$begin,$lenght)</h1>

<?php

//-Hàm có tác dụng lấy ra $lenght phần tử bắt đầu từ $begin trong mảng.
print_r(array_slice($array, 0));
print_r(array_slice($array, 0, 1));

?>
<h1>array_unique($array)</h1>

<?php
//-Hàm có tác dụng loại bỏ các phần tử trùng nhau trong mảng và trả về một mảng mới sau khi đã loại bỏ.
$array6 = [
        '2' => 'an',
  '1' => 'son',
  '1' => 'son'
];
print_r(array_unique($array6, 0));

?>
<h1>serialize($input)</h1>
<?php
//-Hàm có tác dụng chuyển đổi một chuỗi,số,mảng,object thành một chuỗi được mã hóa.
print_r($a = serialize($array));

?>
<h1>unserialize($input)</h1>
<?php
//-Hàm có tác dụng decode chuỗi được mã hóa bằng serialize.
print_r($a = serialize($array));

print_r(unserialize($a));
?>
<h1>array_key_exists($key,$array)</h1>
<?php
//-Kiểm tra xem mảng $array có tồn tại khóa $key không. Trả về TRUE nếu tồn tại và ngược lại.

$array7 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
];
print_r(array_key_exists('domain', $array7));
?>
<h1>in_array($value,$array)</h1>
<?php
//-Hàm có tác dụng kiểm tra xem mảng $array có tồn tại giá trị $value không? và trả về TRUE nếu có và ngược lại.
print_r(in_array('toidicode.com', $array7));
?>
<h1>array_diff($array1,$array2,..)</h1>
<?php
//array_diff($array1,$array2,..)
print_r(array_diff($array6, $array7));
?>
<h1>array_diff_assoc($array1,$array2,...)</h1>
<?php
//-Hàm này có tác dụng trả về một mảng có các key trong mảng $array1 mà $array2,..$arrayn không có.
print_r(array_diff_assoc($array6, $array7));

?>
<h1>array_intersect($array1,$array2,..)</h1>
<?php
//-Hàm này có tác dụng trả về mảng các phần tử giống nhau về $value giữa các mảng $array...
print_r(array_intersect($array6, $array7));
?>
<h1>array_intersect_assoc($array1,$array2,..)</h1>
<?php
//-Hàm có tác dụng trả về mảng chứa các phần tử giống nhau cả key và value trong mảng $array...
print_r(array_intersect_assoc($array6, $array7));

?>
<h1>is_array($array)</h1>
<?php
//-Hàm có tác dụng kiểm tra xem một biến có phải mảng hay không. Trả về true nếu là mảng và ngược lại.
print_r(is_array($array7));

?>
</body>
</html>