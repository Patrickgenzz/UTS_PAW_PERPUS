<!DOCTYPE html>
<html lang="en">

<?php
include '../component/sidebar.php'
?>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg" style="background-color: #97D2EC;"></div>

            <div class="main-content">
                <section class="section">
                    <div class="section-header dashboard">
                        <h1 style="display: flex; justify-content: center">Tentang Developer</h1>
                    </div>

                    <div class="section-body">
                        <div class="container p-3 m-1 h-100 col-lg-12" style="background-color: #FFFFFF; border-top: 5px solid #97D2EC; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="d-flex">
                                <div class="card mx-4" style="width: 15rem;">
                                    <img class="card-img-top" src="https://pbs.twimg.com/media/FZ5E23CUcAAR37y?format=jpg&name=900x900" width="30px" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Bram Majaya Perangin-angin</h5>
                                        <p class="cardtext">Back End INF'20</p>
                                        <a href="https://www.instagram.com/bram.m.p/" class="btn btn-primary">Follow Me</a>
                                    </div>
                                </div>
                                <div class="card mx-4" style="width: 15rem;">
                                    <img class="card-img-top" src="https://pbs.twimg.com/media/FVJJyDpVEAAOf2F?format=jpg&name=medium" width="30px" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Patrick Nino Kolin Prama</h5>
                                        <p class="cardtext">Back End INF'20</p>
                                        <a href="https://www.instagram.com/patrickgenzz/" class="btn btn-primary">Follow Me</a>
                                    </div>
                                </div>
                                <div class="card mx-4" style="width: 15rem;">
                                    <img class="card-img-top" src="https://pbs.twimg.com/media/FVJJyDpVEAAOf2F?format=jpg&name=medium" width="30px" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Michael Valent Jovani</h5>
                                        <p class="cardtext">Back End INF'20</p>
                                        <a href="https://www.instagram.com/michael.jovani/" class="btn btn-primary">Follow Me</a>
                                    </div>
                                </div>
                                <div class="card mx-4" style="width: 15rem;">
                                    <img class="card-img-top" src="https://pbs.twimg.com/media/FVJJyDpVEAAOf2F?format=jpg&name=medium" width="30px" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Tian Bita Usfinit</h5>
                                        <br>
                                        <p class="cardtext">Front End INF'20</p>
                                        <a href="https://www.instagram.com/tian_usfinit/" class="btn btn-primary">Follow Me</a>
                                    </div>
                                </div>
                                <div class="card mx-4" style="width: 15rem;">
                                    <img class="card-img-top" src="../assets/img/anita.jpg" width="30px" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Anita Haryodi</h5>
                                        <br>
                                        <p class="cardtext">Front End INF'20</p>
                                        <a href="https://www.instagram.com/anitaharyodi/" class="btn btn-primary">Follow Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php
            include '../component/footer.php'
            ?>
        </div>
    </div>
    <?php
    include '../component/modal.php'
    ?>
</body>
</html>