<?php
$con = mysqli_connect('localhost' , 'root' , '' , 'project') ;
if(isset($_POST['submit'])){
    $topic = $_POST['topic'];
    $cat   = $_POST['category'];
    $des   = $_POST['des'];
    $image = $_POST['image'];
    $sql = "insert into blog (topic,category,des,image) values('$topic','$cat','$des','$image')";
    mysqli_query($con,$sql);
    echo "<script> alert('blog uploaded successfully....')</script>";
    echo "<script>window.open('blog.php','_self')</script>";

}
?>