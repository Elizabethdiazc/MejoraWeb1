<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro SuperHeroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
    <header>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
        </nav>
        <br><br>
        <h1>REGISTRO DE SUPERHEROE</h1>


    </header>
    <br>

    <main>

        <div class="container">
        <form action="registrarHeroe.php" method="POST">    
            <div class="mb-2"> 
            <div class="row">

            <div class="col">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre">
            </div>
            <br><br><br>

            <div class="mb-2">
                <div class="row">
                    <div class="col">
                        <input type="text"  name="superPoder" class="form-control" placeholder="superPoder" >
                    </div>

                    <div class="col">
                    <input type="text" name="fotoURL" class="form-control" placeholder="fotoURL" >
                    </div>
                </div> 
                <br><br>

                <div class="row mt-3"> 
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="Descripcion"></textarea>
                    </div>
                </div>

                <br>
                <center>
                    <button type="submit"  name="botonRegistrar" class="btn btn-warning">REGISTRAR</button>
                </center>
        
        </form>

    </main>

    
    <br>
    
    <footer>
        &copy; CREATED BY EDC 
    </footer>
<link rel="stylesheet" href="FormularioHeroe.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>