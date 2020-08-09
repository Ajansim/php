<?php include_once('header.php');?>


<div class="container">
    <div class="row"> 
        <div class="col-lg-12">
            <h3 style="margin-bottom:50px;text-align:center">YOUR CONTROLLER</h3>
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="message.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contents</label>
                    <input type="text" name="contents" class="form-control" id="exampleInputPassword1">
                </div> 
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
        </div>
        <div class="col-lg-6">
            <div class="posts-list">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cras justo odio
                        <a href="" class="badge badge-primary badge-pill">DELETE</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dapibus ac facilisis in
                        <a href="" class="badge badge-primary badge-pill">DELETE</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Morbi leo risus
                        <a href="" class="badge badge-primary badge-pill">DELETE</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> 
</div>

<?php include_once('footer.php');?>