<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.php">Simpli Code Editor</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <?php
        if (isset($_SESSION['user'])) { ?>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>

                    <li class="get-started">

                        <a href="logout.php">Exit</a>
                    </li>






                </ul>
            </nav><!-- .nav-menu -->


        <?php } else { ?>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#features">About</a></li>




                    <li class="get-started">
                        <a href="login.php">Sing in</a>

                    </li>






                </ul>
            </nav><!-- .nav-menu -->
        <?php   }


        ?>

    </div>
</header><!-- End Header -->