<!doctype html>

<html lang="pt-br">

<head>

  <title>Operadores Matemáticos</title>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../style_php.css">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
 
<body>
    
  <?php
  
  $adicao = 2 + 5;
  
  $subtracao = 5 - 2;
  
  $multiplicacao = 5 * 2;
  
  $divisao = 5 / 2;
  
  ?>

  <table>

    <tr>
      
      <td class="td1">O resultado da adição é</td>
      
      <td class="td1"><?php echo $adicao ?></td>
  
    </tr>

    <tr>
      
      <td class="td2">O resultado da subtração é </td>
      
      <td class="td2"><?=$subtracao ?></td>
    
    </tr>

    <tr>
      
      <td class="td1">O resultado da multiplicação é</td>
      
      <td class="td1"><?php echo $multiplicacao ?></td>
    
    </tr>

    <tr>
      
      <td class="td2">O resultado da divisão é</td>
      
      <td class="td2"><?php echo $divisao ?></td>
    
    </tr>

  </table>

      
  <!-- Optional JavaScript -->
  
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>