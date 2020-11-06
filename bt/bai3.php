
<!--2.-->
<!--Viết chương trình in ra Danh Mục Sản Phẩm-->
<!--- Có mảng 2 chiều-->

<?php
$arr = array(
    array("Iphone 11", "Ios", "$1000"),
    array("tivi","Sony","$560"),
    array("may giat","Cay","$700")
);
for ($row = 0; $row < 3; $row++){
    echo "<ol>";
    for ($col = 0 ;$col < 3; $col++){
        echo "<li>".$arr[$row][$col]."</li>";
    }
    echo "</ol>";
}
