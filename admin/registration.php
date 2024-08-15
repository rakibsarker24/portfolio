<?php
     $err_name = $err_email = $err_password = $err_cpassword = $err_name_len= $err_not_match = $err_pass_len = $email_exiced_msg = '';

    require_once 'config/db_connection.php';

    if(isset($_POST['submit'])){

       $name = $_POST['name'];
       $length_name = strlen($name);
  
       
       $email = $_POST['email'];

       $password = $_POST['password'];
       $length_password = strlen($password);


       $cpassword = $_POST['cpassword'];



       if(empty($name)){
        $err_name = "this is fild is required";
       }else{
        if($length_name < 3){
            $err_name_len = "name must more than 3 char.";
        }
       }


       if(empty($email)){
        $err_email = "this is fild is required";
       }else{
       
        $checking_email = "SELECT COUNT(*) AS total_count FROM admin WHERE email='$email' ";
        $after_checking = mysqli_query($db_connection, $checking_email);
        $after_assoc = mysqli_fetch_assoc($after_checking);
        if($after_assoc['total_count'] > 0){
            $email_exiced_msg = 'this email already exiced.';
        }
       }


       if(empty($password)){
        $err_password = "this is fild is required";
       }else{
        if($length_password <=4 ){
            $err_pass_len = 'password more than 5';
        }
       }


       if(empty($cpassword)){
        $err_cpassword = "this is fild is required";
       }else{
           
           if($password == $cpassword){
            $hard_pass = md5($password);
                if(!empty($name) && !empty($email) && !empty($password)){
                    $insert_query = "INSERT INTO admin (name, email, password) VALUES ('$name', '$email', '$hard_pass')";
                    mysqli_query($db_connection, $insert_query);
                    header("location:index.php");
                    $_SESSION['registred'] = "Registration Successful!";
                }
           }else{
            $err_not_match = 'password not match';
           }
       }



    }
?>

<?php
  require_once 'header.php';
?>


<section>
    <div class="container">
        <div class="row mt-5 justify-content-md-center">
            <div class="col-lg-3 border pt-3 pb-3 rounded">
                <div class="">
                    <h3 class='text-center pt-2 pb-2 rounded text-white bg-success'>Registration</h3>
                </div>
                <form action='registration.php' method='POST'>
                    <div class="row mb-3">
                        <div class="">
                            <input type="text" placeholder="Name" name='name' class="form-control" value='<?php if(isset($_POST['submit'])){ echo $name; } ?>'>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_name. "</span>"; } ?>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_name_len. "</span>"; } ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                            <input type="email" class="form-control" name='email' placeholder="email" id="inputEmail3" value='<?php if(isset($_POST['submit'])){ echo $email; } ?>'>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_email. "</span>"; } ?>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$email_exiced_msg. "</span>"; } ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                            <input type="password" class="form-control" name='password' email="create password" id="inputPassword3" value='<?php if(isset($_POST['submit'])){ echo $password; } ?>'>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_password. "</span>"; } ?>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_pass_len. "</span>"; } ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                            <input type="password" class="form-control" name='cpassword' placeholder="re-password" id="inputPassword3" value='<?php if(isset($_POST['submit'])){ echo $cpassword; } ?>'>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_cpassword."</span>"; } ?>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_not_match."</span>"; } ?>
                        </div>
                    </div>
                    <button type="submit" name='submit' class="btn btn-success w-100 pt-2 pb-2" >Registration</button>
                    <div class="text-center mt-2">
                        <span class=''>Have an Acceount? <a href="index.php">Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<?php
  require_once 'footer.php';
?>