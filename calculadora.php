<!DOCTYPE html>
<html lang="pr-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css"/>
  <title>Calculadora PHP</title>
</head>
<body>

  <h1>Calculadora PHP</h1>

  <form action="calculadora.php" method="post">

    <label for="Primeiro número">Número 1:</label>       
    <input type="text" id="numero1" name="numero1" placeholder="Digite o primeiro número" onkeyup="somenteNumeros(this)">
    <br>
    <label for="Segundo número">Número 2:</label>       
    <input type="text" id="numero2" name="numero2" placeholder="Digite o segundo número" onkeyup="somenteNumeros(this)">
    <br><br>
    <label for="Escolha">Escolha a operação:</label>
    <input type="submit" name="operacoes" value="Adição">
    <input type="submit" name="operacoes" value="Subtração">
    <input type="submit" name="operacoes" value="Multiplicação">
    <input type="submit" name="operacoes" value="Divisão">
    <input type="submit" name="operacoes" value="Fatorial">
    <input type="submit" name="operacoes" value="Exponenciação">
    <input type="submit" name="operacoes" value="Raiz Quadrada">
    <br>  

  </form>

  <script>
    function somenteNumeros(valor) {
      var campoAlterado = valor.value;
      campoAlterado = campoAlterado.replace(/\D/g, ""); 
      valor.value = campoAlterado;
    }
  </script>
  
  <?php
  $numero1;
  $numero2;
  $operacoes;
  $resultado;

  if (isset($_POST['operacoes'])) {
    $numero1 = (int)$_POST['numero1'];
    $numero2 = (int)$_POST['numero2'];
    $operacoes = $_POST['operacoes'];

    switch ($operacoes) {
      case "Adição":
        if (empty($numero1) || empty($numero2)) {
          echo "Ambos os campos precisam ser preenchidos, tente novamente!";
        } else {
          $resultado = $numero1 + $numero2;
          echo "O resultado é :" . number_format($resultado, 2);
        }
        break;

      case "Subtração":
        if (empty($numero1) || empty($numero2)) {
          echo "Ambos os campos precisam ser preenchidos, tente novamente!";
        } else {
          $resultado = $numero1 - $numero2;
          echo "O resultado é :" . number_format($resultado, 2);
        }
        break;

      case "Multiplicação":
        if (empty($numero1) || empty($numero2)) {
          echo "Ambos os campos precisam ser preenchidos, tente novamente!";
        } else {
          $resultado = $numero1 * $numero2;
          echo "O resultado é :" . number_format($resultado, 2);
        }
        break;
        
        case "Divisão":
          if (!isset($numero1) || !isset($numero2)) {
              echo "Ambos os campos precisam ser preenchidos, tente novamente!";
          } if ($numero1 == 0 || $numero2 == 0) {
              echo "Não é possível dividir um número por zero, tente novamente.";
          } else {
               $resultado = $numero1 / $numero2;
              echo "O resultado é : " . number_format($resultado, 2);
          }
          break;

      case "Fatorial":
        if (empty($numero1) || empty($numero2)) {
          echo "Ambos os campos precisam ser preenchidos, tente novamente!";
        } else {
          $fatorial = 1;
          $soma = $numero1 + $numero2;
          for ($i = $soma; $i >= 1; $i--) {
            $fatorial *= $i;
          }
          $resultado = $fatorial;
          echo "O resultado é :" . number_format($resultado, 2);
        }
        break;

      case "Exponenciação":
        if (empty($numero1) || empty($numero2)) {
          echo "Ambos os campos precisam ser preenchidos, tente novamente!";
        } else {
          $resultado = $numero1 ** $numero2;
          echo "O resultado é :" . number_format($resultado, 2);
        }
        break;

      case "Raiz Quadrada":
        if (empty($numero1) || empty($numero2)) {
          echo "Ambos os campos precisam ser preenchidos, tente novamente!";
        } else {
          $soma = $numero1 + $numero2;
          $resultado = $soma ** (1/2);
          echo "O resultado é :" . number_format($resultado, 2);
        }
        break;

      default:
        echo "Operação inválida.";
        break;
    }
  }
  ?>

  <footer>
    <p>&copy; 2024 M4ALV3S</p>
  </footer>
</body>
</html>
