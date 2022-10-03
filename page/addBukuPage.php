<!DOCTYPE html>
<html lang="en">

<?php
include '../component/sidebar.php'
?>

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg" style="background-color: #97D2EC;"></div>

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <head>
                            <h1 style="display: flex;">Tambah Buku</h1>
                        </head>        
                            <a href="../page/listBukuPage.php"><i style="; color: #97D2EC;" class="fa fa-chevron-circle-left fa-2x"></i></a>
                    </div>
                    
                    <div class="section-body">
                        <div class="container p-5 m-1 h-100 col-lg-12" style="background-color: #FFFFFF; border-top: 5px solid #97D2EC; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <form action="../process/addBukuProcess.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="formlabel">Judul Buku</label>
                                <input class="form-control" id="judul" name="judul" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="formlabel">Gambar Sampul</label><br>
                                <input type="file" id="gambar" name="gambar" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="formlabel">Jumlah Buku</label>
                                <input class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit" name="save" >Simpan</button>
                            </div>
                        </form>                        
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