<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subasta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">



</head>
<body>
    <header>
    <header>
        <a href="listado.php"><img src="img/logos/HSH-Complete.svg" class="img-fluid" alt="Logotipo de homeSwitchHome"></a>
        <br><br>
        </header>
        <div class="container">
            <h1 class="titulo">PUJAR </h1> 
        </div>
    </header>
<div class="container">
    <form action=" " class="formulario" method="post" enctype="multipart/form-data">

    <label for="monto">Monto</label>
    <input type="text" id="monto" name="monto">
    <input type="submit" class="submit btn btn-primary" value="Pujar" onclick="pujar() ">       
    <?php if(!empty($error)): ?>
         <div class=" ">
             <ul>
               <?php echo $error; ?>
             </ul>
     </div>
     <?php endif; ?> 
    </form>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>