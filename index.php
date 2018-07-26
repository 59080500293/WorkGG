<?php
$servername="localhost";
$details="root";
$password="";
$db="gg";
$con = new mysqli($servername,$details,$password,$db);
/*if($con -> connect_error){
 echo("fail");
}else{
    echo("Home");
}*/
if(isset($_POST['home']) && !empty($_POST['home'])){
    $home=($_POST['home']);
    mysqli_query($con,"UPDATE menu SET details='$home' WHERE id=1") ;
}

$query=mysqli_query($con,"SELECT details FROM menu where id=1");
$row = mysqli_fetch_array($query);
$mhome=$row['details'];

if(isset($_POST['news']) && !empty($_POST['news'])){
    $news=($_POST['news']);
    mysqli_query($con,"UPDATE menu SET details='$news' WHERE id=2") ;
}

if(isset($_POST['article']) && !empty($_POST['article'])){
    $article=($_POST['article']);
    mysqli_query($con,"UPDATE menu SET details='$article' WHERE id=3") ;
}

if(isset($_POST['gall']) && !empty($_POST['gall'])){
    $gall=($_POST['gall']);
    mysqli_query($con,"UPDATE menu SET details='$gall' WHERE id=4") ;
}

if(isset($_POST['contact']) && !empty($_POST['contact'])){
    $contact=($_POST['contact']);
    mysqli_query($con,"UPDATE menu SET details='$contact' WHERE id=5") ;
}




// $count=mysqli_num_rows($query);

// if($count==0){
//     echo("NO HAVE");
// }else {
//     while($row = mysqli_fetch_array($query)){
//         $name=$row['username'];
//         echo '<div>'.$name.'</div>';
//     }
// }

// $sql = "UPDATE love SET username='Doe' WHERE id=2";

// if ($conn->query($sql) === TRUE) {
//     echo ("Record updated successfully");
// } else {
//     echo ("Error updating record: " . $conn->error);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class= "home">
        <h2>Home</h2>
            <form action="" method="post">
            <input type="text" name="home" >
            
    </div>

    <div class= "news">  
        <h2>News</h2>
        <form action="" method="pos">
        <input type="text" name="news" >   
    </div>

    <div class= "article">  <h2>article</h2>
        <form action="" method="poss">
            <input type="text" name="Article" >
    </div>

    <div class= "gall">  <h2>gallery</h2>
        <form action="" method="posss">
            <input type="text" name="Gallery" >
    </div>

    <div class= "contact">  <h2>contact</h2>
        <form action="" method="possss">
            <input type="text" name="Contact" >
            <input type="submit">
    </div>
    <br><br>

    <div class="nav">
        <select id="size_select">
            
            <option value="option1">หน้าหลัก</option>
            <option value="option2">ข่าวสาร</option>
            <option value="option3">บทความ</option>
            <option value="option4">รูปภาพ</option>
            <option value="option5">ติดต่อ</option>
            
        </select>
    </div>
    <div class= "home">
        <h2><?=$mhome?></h2>
            <form action="" method="post">
            <input type="text" name="home" >
            <input type="submit">
            
    </div>

    

    </form>
</body>
</html>