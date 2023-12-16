<?php
include('includes/header.php');

?>

<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1 style="text-align:center; color:brown;">Add Blog</h1> <br><br>
    <form  style="margin-left:450px;"action="" method="POST" enctype="multipart/form-data">
        <input  type="text" name="title" size="50" placeholder="Enter your Blog title"> <br><br>
        <!-- <input style="width:410px;" type="date" name="blogdate" size="50" placeholder="Enter your Blog date"> <br><br> -->
        <textarea cols="52" rows="10" name="content" placeholder="Enter your Blog content"></textarea> <br><br>
        <input type="file" name="uploadfile" > <br><br>
        <input style="margin-left:160px;width:100px; color:hsl(0, 0%, 0%); background-color:hsl(0, 0%, 49%);" type="submit" name="submit"> <br><br>

</form>
</body>
</html>

<?php
include('includes/footer.php');
include('includes/scripts.php');

?>


<?php
include('includes/connection.php');

if(isset($_POST["submit"]))
{
    $title= $_POST['title'];
    // $blogdate =date('Y-m-d', strtotime($_POST['blogdate']));
    $content= $_POST['content'];
    $filename= $_FILES['uploadfile']['name'];
    $tempname= $_FILES['uploadfile']['tmp_name'];
    $folder="../blog/".$filename;
    move_uploaded_file($tempname,$folder);

    if($title!="" && $content!="" && $filename!=""){
   
        $query ="INSERT INTO `blog` (`title`,`content`,`file`)
        VALUES 

       ('$title','$content','$folder') ";

        $data= mysqli_query($con,$query);

    }
    
    if($data){
        //  echo "uploaded";   
            header("Location: ./success.html");
         }
    else{
        echo "not uploaded";
    }
}
?>