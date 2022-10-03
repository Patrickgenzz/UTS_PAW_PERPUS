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
                            <h1 style="display: flex;">List Buku</h1>
                        </head>        
                            <a href="../page/addBukuPage.php"><i style="; color: #97D2EC;" class="fa fa-plus-square fa-2x"></i></a>
                    </div>
                    

                    <div class="section-body">
                        <div class="container p-5 m-1 h-100 col-lg-12" style="background-color: #FFFFFF; border-top: 5px solid #97D2EC; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                       
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Buku</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Jumlah Tersedia</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>  
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