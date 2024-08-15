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
            <div class="card bg-light mb-3" style="max-width: 100%;">
                        <div class="card-header"><b>Upload Service</b></div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Title</label>
                                        <input type="text" class="form-control"  placeholder="tiltle">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="exampleInputPassword1">Sub Title</label>
                                        <input type="text" class="form-control"  placeholder="sub-title">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="exampleInputPassword1">Banner Image</label>
                                        <input type="file" class="form-control"  >
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Upload</button>
                                </form>        
                            </div>
                        </div>
                </div>
            </div>
            <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card bg-light mb-4" style="max-width: 100%;">
                                <div class="card-header"><b>Service Info <a href="" class='btn btn-sm btn-warning'>Eidt</a></b></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Sub Title</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td><a href=""><i class="fa-solid fa-pen-to-square"></a></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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