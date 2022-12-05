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
          <a class="nav-link text-light fw-semibold  mt-1" href="/publisher">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light fw-semibold s mt-1" href="/contact">Contact</a>
        </li>
        </ul>
      </div>
  </div>


    <!--Body-->
    <div class="card rounded border-warning 
    text-bg-dark mb-3 mt-3" style="margin: auto;
    width:50%; " >
      <div class="card-body "> 
      <div class="border-bottom border-light">
          <h2 class="card-title" >Contact Us</h2>
      </div>   
      <h5 class="card-subtitle mt-3">Store Address</h5>
        <p class="card-text mt-2">Jalan Pemanguan Baru Raya, Komplexs Pertokoan Emerald Blok III/12 Bintaro, Tangerang Selatan Indonesia</p>
      <h5 class="card-subtitle mt-3">Open Daily </h5>
        <p class="card-text mt-2">
          Monday - Friday : 08.00 - 20.00 WIB <br>
          Saturday : 09.00 - 13.00 WIB
        </p>
        <h5 class="card-subtitle mt-3">Contact </h5>
        <p class="card-text mt-2">
          Phone : 021- 0889 9776 655 <br>
          Email : happybookstore@happy.co.id
        </p> 
    </div>
  </div>


    <!--Footer-->
    <footer>
        <div class="footer text-center bg-dark text-bg-dark h-auto w-auto position-sticky "style="align-items: center"  >
            <p class="text-muted p-2" style="margin: auto" >   
                Bedria Mashyanda Maail 2440027303 <br>
                LM01 Web Programming
            </p>
            <div class="copyright border-bottom: -width solid;">
        <div class="copyright-footer border-top border-light"  style="margin-top: .2rem">
            <small>©Happy Book Store 2022.</small>
        </div>
          </div>
      </div>
    </footer>

      

    <!--JS-->

    <script src = "<?php echo e(asset('js/bootstrap.bundle.js')); ?>">  </script>

</body>
</html><?php /**PATH C:\Users\mshyn\UTSWP2440027303\resources\views/contact.blade.php ENDPATH**/ ?>