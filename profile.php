<?php require_once "components/header.php" ?>
<?php require_once "components/navbar.php"   ?>


<?php
if (!isset($_SESSION['user'])) {
    header("Location:login.php");
    exit();
}



?>

<main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features" style="height: 100vh;">
        <div class="container">
            <hr>
            <div class="section-title">
                <h2>Welcome <?php echo $_SESSION['user']['name'] ?> !</h2>
                <p>In this area, you can select and edit the files you want to edit. You can also access your last edited file.

                </p>
            </div>

            <div class="row">
                <div class="col-md-6">


                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createNote">
                        Create Note
                    </button>
                    <div class="tabless mt-4">
                        <h2 class="text-center">All Notes </h2>
                        <p>Simpli Code Editor offers you a note field for you to take notes independently of the editor.
                            In this area, you can take as many notes as you want, edit and delete your notes.</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#viewNotes">
                                            <i class="icofont-eye-alt"></i>
                                        </button>
                                        <a href="" class="btn btn-danger"> <i class="icofont-trash"></i></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <?php require_once "components/viewnotes.php" ?>

                </div>
                <!-- Button trigger modal -->
                <div class="col-md-6">

                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                        How it Works?
                    </button>
                    <a href="editor/index.html">Open Editor</a>

                </div>
                <!-- Button trigger modal -->

                <?php require_once "components/modal.php" ?>
            </div>





        </div>


    </section><!-- End App Features Section -->













</main><!-- End #main -->

<?php require_once "components/footer.php"  ?>