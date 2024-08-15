<?php
    session_start();
     $err_email = $err_password= $err_not_match = $email_pass_msg = $email_exiced_msg ='';

     require_once 'config/db_connection.php';

    if(isset($_POST['submit'])){
       
       $email = $_POST['email'];

       $password = $_POST['password'];
       
       
       
       if(empty($email)){
           $err_email = "this is fild is required";
        }else{
            $md_password = md5($password);
        $checking_email = "SELECT COUNT(*) AS total_count FROM admin WHERE email='$email' AND password = '$md_password' ";
        $after_checking = mysqli_query($db_connection, $checking_email);
        $after_assoc = mysqli_fetch_assoc($after_checking);
        // print_r($after_assoc['total_count']);

        if($after_assoc['total_count'] == 0){
            $email_pass_msg = 'email & passwoed not match.';
        }else{
            $email_exiced_msg = 'login.';
            header("location: upload/dashboard/dashboard.php");
            $_SESSION['login'] = "login!";
            $_SESSION['email'] = $email;

        }
       }


       if(empty($password)){
        $err_password = "this is fild is required";
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
                    <h3 class='text-center pt-2 pb-2 rounded text-white bg-success'>Login</h3>
                </div>
                <form action='index.php' method='POST'>
                    
                    <div class="row mb-3">
                        <div class="">
                            <input type="email" class="form-control" name='email' placeholder="email" id="inputEmail3" value='<?php if(isset($_POST['submit'])){ echo $email; } ?>'>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_email. "</span>"; } ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                            <input type="password" class="form-control" name='password' email="create password" id="inputPassword3" value='<?php if(isset($_POST['submit'])){ echo $password; } ?>'>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_password. "</span>"; } ?>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$email_pass_msg. "</span>"; } ?>
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$email_exiced_msg. "</span>"; } ?>
                        </div>
                    </div>
                    <button type="submit" name='submit' class="btn btn-success w-100 pt-2 pb-2" >Login</button>
                    <div class="text-center mt-2">
                        <span class=''>Have an Acceount? <a href="registration.php">Registration</a></span>
                    </div>
                    <div class="">
                        <?php
                            if(isset($_SESSION['registred'])){
                                echo  $_SESSION['registred'];
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<?php
  require_once 'footer.php';
?>