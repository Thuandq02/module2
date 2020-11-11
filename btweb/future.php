<h1>Future Value Calculator</h1>
<form method="post" style="border: 0px solid black;width: 200px;height: 75px">
    <input type="text" name="money" style="position: absolute; top:75px">
    <input type="submit" value="Calculate" style="position: absolute; top:100px">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $money1 = (float)$_POST["money"]."000";
    $interest = 0.1;
    if($money1 > 0){
        $money2 = $money1 + ($money1 * $interest);
        echo "Bạn đang có ".$money2. " VND";
    } else {
        echo "Ban đang âm tiền xin hãy đầu tư thêm";
    }
}