<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Penghitung BMI</title>
</head>
<body>
  <h2>Aplikasi Penghitung BMI</h2>

  <form action="index.php" method="POST">
    <div class="spasi">
      <label for="bb">Berat badan (kg):</label>
      <input class="inputtext" type="text" name="bb" required><br><br>
    </div>

    <div class="spasi">
      <label for="tb">Tinggi badan (cm):</label>
      <input class="inputtext" type="text" name="tb" required><br><br>
    </div>

    <input type="submit" value="Hitung BMI">
    <br>

    <h4>Hasil Perhitungan</h4>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $data = [
        "bb" => $_POST["bb"],
        "tb" => $_POST["tb"],
      ];

      echo "Berat badan: " . $data["bb"] . " kg<br>";
      echo "Tinggi badan: " . $data["tb"] . " cm<br>";

      $bmi = $data["bb"] / (($data["tb"] / 100) ** 2);
      echo "BMI: " . number_format($bmi, 2) . "<br>";

      $kategoriBMI = "";
      if ($bmi < 18.5) {
        $kategoriBMI = "Kurus";
      } elseif ($bmi >= 18.5 && $bmi < 25) {
        $kategoriBMI = "Normal";
      } elseif ($bmi >= 25 && $bmi < 30) {
        $kategoriBMI = "Gemuk";
      } elseif ($bmi >= 30) {
        $kategoriBMI = "Obesitas";
      }

      echo "Kategori BMI: " . $kategoriBMI;
    }
    
    ?>
  </form>
</body>
</html>
