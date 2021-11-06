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
        <div class="carousel-inner">
        <div class="carousel-item active">
            <center>
                <img class="d-block w-90" style="height: 100px;" src="uns.png" alt="First slide">
            </center>   
        </div>
        <div class="carousel-item">
            <center>
                <img class="d-block w-90" style="height: 100px;" src="uns.png" alt="Second slide">
            </center>
        </div>
        <div class="carousel-item">
            <center>
                <img class="d-block w-90" style="height: 100px;" src="uns.png" alt="Second slide">
            </center>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card text-white bg-warning">
                    <div class="card-header">
                        <h4 class="card-title">Form input data diri</h4>
                    </div>
                    <div class="bg-info">
                    <div class="card-body">
                        <form action="proses.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nim</label>
                                <input type="text" name="nim" class="form-control" placeholder="Masukan nim anda...">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan nama anda...">
                            </div>
                            <div class="form-group">
                                <label>Kampus</label>
                                <input type="text" name="kampus" class="form-control" placeholder="Masukan asal kampus...">
                            </div>
                            <div class="form-group">
                                <label>Angkatan</label>
                                <select class="form-control" name="angkatan">
                                    <option value="">angkatan</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis kelamin">
                                    <option value="">Jenis kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto anda</label>
                                <input type="file" name="foto">
                            </div>

                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>