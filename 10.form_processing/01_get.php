<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Form Processing</title>
</head>
<body>
  <div class="container" style="margin-bottom: 40px";>
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="get">
      <div>
        <label for="name">name</label>
        <input type="text" name="name" id="name">
      </div>
      <div>
        <label for="email">email</label>
        <input type="email" name="email" id="email">
      </div>
      <div>
        <label for="gender">gender</label>
        <input type="radio" name="gender" id="male" value="Male"> <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="Female"> <label for="female">Female</label>
      </div>
      <div>
        <label for="hobbies">Hobbies</label>
        <input type="checkbox" name="hobbies[]" id="reading" value="Reading"> <label for="reading">Reading</label>
        <input type="checkbox" name="hobbies[]" id="watching" value="Watching Movies"> <label for="watching">Watching Movies</label>
        <input type="checkbox" name="hobbies[]" id="running" value="Running"> <label for="running">Running</label>
        <input type="checkbox" name="hobbies[]" id="coding" value="Coding"> <label for="coding">Coding</label>
      </div>
      <div>
        <label for="age">age</label>
        <input type="number" name="age" id="age">
      </div>
      <div>
        <label for="birth">birth</label>
        <input type="date" name="birth" id="birth">
      </div>
      <div>
        <label for="country">country</label>
        <select name="country" id="country">
          <option value="Indonesia">Indonesia</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Singapore">Singapore</option>
          <option value="India">India</option>
          <option value="New Zealand">New Zealand</option>
        </select>
      </div>
      <div>
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
  </div>

  <?php 
    if (isset($_GET["submit"])) {
      $name = $_GET["name"];
      $email = $_GET["email"];
      $age = $_GET["age"];
      $birth = $_GET["birth"];
      $gender = $_GET["gender"];
      $hobbies = $_GET["hobbies"];
      $country = $_GET["country"];
      
      echo "Name: $name"."<br>";
      echo "email: $email"."<br>";
      echo "age: $age"."<br>";
      echo "birth: $birth"."<br>";
      echo "gender: $gender"."<br>";
      echo "hobbies: ".implode(", ",$hobbies)."<br>";
      echo "country: $country"."<br>";
    }
  ?>
</body>
</html>