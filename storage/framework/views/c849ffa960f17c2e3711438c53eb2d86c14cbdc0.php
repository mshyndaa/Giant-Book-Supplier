<!--
    Bedria Mashyanda Maail
    2440027303 - UTS Web Programming - LM01 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet"> 
    <!--title website-->
    <title>Giant Book Supplier</title>
</head>

<body>


    <!--Header-->
    <header>
        <div class="header fw-bold text-center text-bg-dark p-3 sticky-sm-top border-bottom border-dark" style="align-items: center;">
            <h2>Giant Book Supplier</h2>

        </div>
    </header>

     <!--Navigation Bar-->
     <div class=" navigation text-center ">
      <div class="card-header text-bg-secondary " style="height :  3rem">
        <ul class="nav nav-pills justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-light fw-semibold mt-1" href="/home">Home</a>
          </li>
       <!--Dropdown *Navigation Bar-->
          <li class="nav-item  ">
          <a class="btn dropdown-toggle fw-semibold text-light nav-link nav-pills   mt-1"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
              <ul class="dropdown-menu nav-pills mt-1 ">
                  <li><a class="dropdown-item" href="/category/<?php echo e(1); ?>">Novel</a></li>
                  <li><a class="dropdown-item" href="/category/<?php echo e(2); ?>">Childern's Book</a></li>
              </ul>
          </li>
       <!--END Dropdown *Navigation Bar-->
       <li class="nav-item">
          <a class="nav-link active text-light fw-semibold  mt-1" href="/publisher">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fw-semibold s mt-1" href="/contact">Contact</a>
        </li>
        </ul>
      </div>
  </div>

      <!--Body-->
      

      <div class="Title text-center m-3 border-bottom border-dark">
      <h1> Publisher Detail </h1>
     </div>
    
      <div class="d-flex justify-content-center">
      <div class="card border-light text-bg-dark p-5 m-5 mt-5 " style="width: 45rem; height : 45rem; margin:auto; ">
          <div class="card-body-dark text-center">
            <img src="<?php echo e(url($publisher->image)); ?>" style="object-fit:cover; width : 20rem; height : auto;" alt="">
            <h2 class="fw-bold m-3"> <?php echo e($publisher->name); ?></h2>
            <h5 class="fw-light"><?php echo e($publisher->address); ?> </h5>
            <h5 class="fw-light"><?php echo e($publisher->phone); ?> </h5>
            <h5 class="fw-light" ><?php echo e($publisher->email); ?></h5>
        </div>
      </div>
    </div>
      
      <div class="d-flex justify-content-center">
      <div class="card text-bg-dark p-5 m-5 mt-5  " style="width: 45rem; height : 45rem;">
      <div class="Title text-center  border-bottom border-dark">
        <h1> Book Libary </h1>
    </div>
      <div class="row row-cols-1 row-cols-md-4 g-4 m-3 ">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">  
          <div class="card h-100 w-100 text-bg-dark" style=" margin : auto;">
            <img src="<?php echo e(url($bk->image)); ?>" style="object-fit:cover; height:100;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo e($bk->title); ?></h5>
              <p class="card-text text-center">by</p>
              <h6 class="card-title text-center"><?php echo e($bk->author); ?></h6>
            </div>
            <div class="card-footer text-center">
                <a href="/bookdetail/" class=" border-top border-light btn btn-danger">More Detail</a>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       </div>
      </div>
    </div>
      
    <!--Footer-->
    <footer>
        <div class="footer text-center bg-dark text-bg-dark position-sticky  "style="align-items: center;" >
            <p class="text-muted p-2" style="margin: auto" >   
                Bedria Mashyanda Maail 2440027303 <br>
                LM01 Web Programming
            </p>
            <div class="copyright border-bottom: $caret-width solid;">
        <div class="copyright-footer border-top border-light"  style="margin-top: .2rem">
            <small>??Happy Book Store 2022.</small>
        </div>
          </div>
      </div>
    </footer>

    <!--JS-->

    <script src = "<?php echo e(asset('js/bootstrap.bundle.js')); ?>">  </script>

</body>
</html><?php /**PATH C:\Users\mshyn\UTSWP2440027303\resources\views//publisherdetail.blade.php ENDPATH**/ ?>