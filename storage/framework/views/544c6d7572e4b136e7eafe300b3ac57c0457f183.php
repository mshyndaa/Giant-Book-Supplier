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
   <!--Navigation Bar-->
   <div class=" navigation text-center ">
    <div class="card-header text-bg-secondary " style="height :  3rem">
      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link text-light fw-semibold mt-1" href="#">Home</a>
        </li>
     <!--Dropdown *Navigation Bar-->
        <li class="nav-item  ">
        <a class="btn dropdown-toggle fw-semibold text-light nav-pills  mt-1"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorie
        </a>
            <ul class="dropdown-menu nav-pills mt-1 ">
                <li><a class="dropdown-item" href="#">Novel</a></li>
                <li><a class="dropdown-item" href="#">Childern's Book</a></li>
            </ul>
        </li>
     <!--END Dropdown *Navigation Bar-->
     <li class="nav-item">
        <a class="nav-link text-light fw-semibold  mt-1" href="#">Publisher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light fw-semibold s mt-1" href="#">Contact</a>
      </li>
      </ul>
    </div>
</div>
      <!--Body-->
      <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card p-5 m-5" style="width: auto; height:auto; margin:auto;">
        <img src="..." class="card-img-top"  alt="...">
        <div class="card-body">
          <h4><?php echo e($bk->title); ?></h4>
          <h6 >Author :</h6>
          <h6 >Publisher : </h6>
          <h6 >Year :</h6>
          <h6 >Sinopsis : </h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
    <!--Footer-->
    <footer>
        <div class="footer text-center bg-dark text-bg-dark h-auto w-auto "style="align-items: center"   >
            <p class="text-muted p-2" style="margin: auto" >   
                Bedria Mashyanda Maail 2440027303 <br>
                LM01 Web Programming
            </p>
            <div class="copyright border-bottom: $caret-width solid;">
        <div class="copyright-footer border-top border-light"  style="margin-top: .2rem">
            <small>©Happy Book Store 2022.</small>
        </div>
          </div>
      </div>
    </footer>

    <!--JS-->

    <script src = "<?php echo e(asset('js/bootstrap.bundle.js')); ?>">  </script>

</body>
</html><?php /**PATH C:\Users\mshyn\UTSWP2440027303\resources\views/bookdetail.blade.php ENDPATH**/ ?>