<?php
session_start();
    require_once '../../header.php';
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5">
                <?php
                    require_once '../sidenav/sidenav.php'
                ?>
            </div>
            <div class="col-lg-6 mt-5">
                <div class="">
                    <h3>Welcome to 
                        <?php
                        if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                        }
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    require_once '../../footer.php';
?>