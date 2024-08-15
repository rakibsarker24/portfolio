<?php
    require_once '././header.php';
?>

<section id='contact'>
    <div class="container">
        
        <div class="row mb-3 justify-content-center">
            <div class="col-lg-6  text-center">
                <div class="title">
                    <h3>Contact</h3>
                </div>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">

            <div class="col-lg-4 text_icon">
                <div class="item_content text-end">
                    <div class="item text-center">
                        <p><i class="text-success fa-solid fa-square-phone"></i></p>
                        <span>01303045483</span>
                    </div>
                </div>
                <div class="mt-5 item_content text-end">
                    <div class="item text-center">
                        <p><i class="text-success fa-solid fa-envelope"></i></p>
                        <span>rakibsarker1998@gmail.com</span>
                    </div>
                </div>
            </div>
        <div class="col-lg-1">
        </div>
            
         <div class="col-lg-4">
            <div class="form">
            <form action='registration.php' method='POST'>
                    <div class="row mb-3">
                        <div class="">
                            <label for="">Your Name</label>
                            <input type="text" placeholder="Name" name='name' class="form-control" value='<?php if(isset($_POST['submit'])){ echo $name; } ?>'>
                            <!-- <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_name. "</span>"; } ?> -->
                            <!-- <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_name_len. "</span>"; } ?> -->
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                        <label for="">Your email</label>
                            <input type="email" class="form-control" name='email' placeholder="email" id="inputEmail3" value='<?php if(isset($_POST['submit'])){ echo $email; } ?>'>
                            <!-- <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$err_email. "</span>"; } ?> -->
                            <!-- <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>" .$email_exiced_msg. "</span>"; } ?> -->
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                        <label for="">Message</label>
                            <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name='submit' class="btn btn-success w-100 pt-2 pb-2" ><i class="fa-solid fa-paper-plane"></i>  Send</button>
                    <div class="text-center mt-2">
                        <!-- <span class=''>Have an Acceount? <a href="login.php">Login</a></span> -->
                    </div>
                </form>
            </div>
        </div>

        </div>
    </div>
</section>


<?php
    require_once '././header.php';
?>