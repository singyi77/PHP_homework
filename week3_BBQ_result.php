<?php

echo "您有空的時段為：<br/>";
if(isset($_POST["time1"])){
    echo "星期一 17：00～19：00<br/>";
}
if(isset($_POST["time2"])){
    echo "星期一 18：00～20：00<br/>";
}
if(isset($_POST["time3"])){
    echo "星期一 19：00～21：00<br/>";
}
if(isset($_POST["time4"])){
    echo "星期三 17：00～19：00<br/>";
}
if(isset($_POST["time5"])){
    echo "星期三 18：00～20：00<br/>";
}
if(isset($_POST["time6"])){
    echo "星期三 19：00～21：00<br/>";
}
if(isset($_POST["time7"])){
    echo "星期五 17：00～19：00<br/>";
}
if(isset($_POST["time8"])){
    echo "星期五 18：00～20：00<br/>";
}
if(isset($_POST["time9"])){
    echo "星期五 19：00～21：00<br/>";
}
if(isset($_POST["time10"])){
    echo "都沒空<br/>";
}
$id=$_POST["id"];
echo "您的學號是：".$id."<br/>";
$name=$_POST["name"];
echo "您的名字是：".$name."<br/>";
$year=$_POST["year"];
echo "您是".$year."<br/>";
$gender=$_POST["gender"];
if($gender=="male"){
    echo "您的性別是男性<br/>";
}else{
    echo "您的性別是女性<br/>";
}
$email=$_POST["email"];
echo "您的信箱是：".$email."<br/>";
$date=$_POST["date"];
$time=$_POST["time"];
if($date==null&&$time==null){
    echo "您對於系烤時間點無其他意見<br/>";
}else{
    echo "您最希望系烤辦在";
    if($date==null && $time!=null){
        echo $time."<br/>";
    }else if($date!=null && $time==null){
        echo $date."<br/>";
    }else{
        echo $date."的".$time."<br/>";
    }
}
$opinion=$_POST["opinion"];
if($opinion!=null){
    echo "您的想法：<br/>";
    echo nl2br(strip_tags($opinion))."<br/>";
}
$psw=$_POST["psw"];
if($psw=="justapsw"){
    echo "認證通過";
}else{
    echo "認證失敗";
}

?>
