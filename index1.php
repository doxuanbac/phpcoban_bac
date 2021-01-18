<?php
//biến
    //cách khai báo biên: $ten_bien = "giá trị muốn gán cho biến"
    $x = "doxuanbac". "<br>";
    var_dump($x);


// Kieu dữ liệu
    /*Các kiểu dữ liệu trong php
    Chuổi (string)
    Số nguyên (integer)
    Float
    Boolean
    Array
    Object
    Null
    Resource
    Sự khác nhau giữa dấu ' và ": nếu muốn in ra giá trị của biến khi echo ", ngược lại nếu dùng ' thì chỉ echo ra chuỗi bình thường. Dùng ' thì tốc độ sẽ nhanh hơn.*/


// câu lệnh điền kiện
// khi có nhiều trường hợp thì dùng while (>2 trường hợp), khi có ít trường hợp thì dùng if else (= 2 trường hợp)
$number = 20;
if($number % 2 == 0){
    echo "$number là số chẵn". "<br>";
}else if($number % 2 == 1){
    echo "$number là số lẻ". "<br>";
}

$i=0;
while($i <= 10){
    echo $i. "<br>";
    $i++;
}


//Vòng lặp
// Vòng lặp for
    $i = 0;
    $tong = 0;
        for($i >= 0; $i <= 10; $i++){
        $tong += $i;
    }
    echo "$tong";
// Vòng lặp while
    $i = 0; 
    while ($i <= 10 ) {
        echo $i . "<br>"; 
        $i++; 
    }
// vòng lặp do while
    $i = 0;
    do {
        echo "$i <br>"; 
        $i++; 
    } while ($i <= 10);
/*
Sự khác biệt giữa continue và break
1. Continue dùng để bỏ qua 1 vòng lặp để tiếp tục vòng lặp sau đó
2. Break dùng để chấm dứt 1 vòng lặp
*/
// break
$i = 0;
for ($i = 0; $i < 5; $i++) {
    echo $i;
    if ($i == 3) {
        break;
    }
}
//continue
$i = 0;
for ($i = 0; $i < 5; $i++) {
    echo $i;
    if ($i == 3) {
        continue;
    }
}
?>