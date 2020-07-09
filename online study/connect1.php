 <?php
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];


    $conn=new mysqli('localhost','root','','user');
    if($conn->connect_error){die('Connect Error:'.$conn->connect_error);
    }
else{
    $stmt=$conn->prepare("insert into login(username,email,password,gender) values(?,?,?,?)");
        $stmt->bind_param("ssss",$username,$email,$password,$gender);
        $stmt->execute();
        echo "register successfully...";
        header("refresh:2; url=home.html");
        $stmt->close();
        $conn->close();
 }
?>