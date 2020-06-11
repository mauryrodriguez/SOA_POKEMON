<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

    

    <?php
         ////api mercado libre
         $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'), true);
	?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">USUARIO: <?php echo $data['nickname']; ?></li>
            <li class="breadcrumb-item active" aria-current="page">ADRESS: <?php echo $data['address']['city']; ?></li>
        </ol>
    </nav>

    <?php
		///api jsonplaceholder
         $data1 = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/1/comments'), true);
         
		foreach ($data1 as $i) 
		{
    ?>

    <div class="list-group">
         <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
            <div class="d-flex w-100 justify-content-between">
               <h5 class="mb-1"><?php echo "Comentario no." . $i['id'];?> </h5>
               <small><?php echo "<b>Usuario: </b>" . $i['name'];?></small>
            </div>
            <p class="mb-1"><?php echo $i['body'];?></p>
            <small><?php echo $i['email'];?></small>
         </a>
        </div>
        <?php
            }
        ?>
      
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>