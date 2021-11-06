<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(127, 253, 169);
        }
    </style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card text-white bg-warning">
                <div class="card-header">
                    <h4 class="card-title">Form input data diri</h4>
                </div>
                <div class="bg-info">
                <div class="card-body">
                    <form action="dicoba.php" method="POST">
                        <div class="form-group">
                            <label for="">Nim = <?php echo $nim;?></label>
                        </div>
                        <div class="form-group">
                            <label for="">Nama = <?php echo $nama;?></label>
                        </div>
                        <div class="form-group">
                            <label for="">Kampus = <?php echo $kampus;?></label>
                        </div>
                        <div class="form-group">
                            <label for="">Angkatan = <?php echo $angkatan;?></label>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis kelamin = <?php echo $jenis_kelamin;?></label>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <?php
                            echo "<img src ='".$link_foto."' width='100' height='100'/>";
                            ?>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</div>

</body>
</html>