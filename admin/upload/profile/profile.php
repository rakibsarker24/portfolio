<?php
    require_once '../../header.php';
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5">
                <?php
                    require_once '../sidenav/sidenav.php';
                ?>
            </div>
            <div class="col-lg-6 mt-5">
            <div class="product_card">
                    <div class="card bg-light mb-3" style="max-width: 100%;">
                        <div class="card-header"><b>YOur Information/Profile</b></div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><b>Your Name:</b> <span>Md Rakib Sarker</span></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><b>Your Email:</b>  <span>rakib@gmail.com</span></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><b>Your Passowre:</b>  <span>123456</span></label>
                                    </div>
                                    <button type="submit" class="btn btn-warning mt-3">Edit</button>
                                </form>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
    require_once '../../header.php';
?>