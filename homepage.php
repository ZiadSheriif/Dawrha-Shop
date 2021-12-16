<?php
$pageTitle = 'Home Page';
include "init.php";
?>

<div class="main-page pt-5 pb-5 bg-light">
  <div class="container-lg ">
    <div class="text-center ">
      <ol class="item-categories ">
        <li class=""><button class="btn btn-success"><a href="#">All</a></button>
        </li>
        <li><button class="btn btn-success"><a href="#">Category1</a></button></li>
        <li><button class="btn btn-success"><a href="#">Category2</a></button></li>
        <li><button class="btn btn-success"><a href="#">Category3</a></button></li>
        <li><button class="btn btn-success"><a href="#">Category4</a></button></li>
      </ol>
    </div>
    <div class="text-center">
      <div class="row row-of-card g-5 justify-content-center align-items-center">
        <div class="col-8 col-lg-4 col-xl-3 ">
          <div class="card m-md-auto" style="width: 18rem;">
            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-success">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col-8 col-lg-4 col-xl-3 ">
          <div class="card m-md-auto" style="width: 18rem;">
            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-success">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col-8 col-lg-4 col-xl-3 ">
          <div class="card m-md-auto" style="width: 18rem;">
            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-success">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col-8 col-lg-4 col-xl-3 ">
          <div class="card m-md-auto" style="width: 18rem;">
            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-success">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col-8 col-lg-4 col-xl-3 ">
          <div class="card m-md-auto" style="width: 18rem;">
            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-success">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col-8 col-lg-4 col-xl-3 ">
          <div class="card m-md-auto" style="width: 18rem;">
            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-success">Add To Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include $tpl . "footer.php" ?>