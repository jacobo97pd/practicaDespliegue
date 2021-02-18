<html>
<head>
  <title>Problema</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "myDB") or
    die("Problemas con la conexión");
  $id = $_POST['id'];
	$name= $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email= $_POST['email'];
  mysqli_query($conexion, "INSERT INTO MyGuests (id, firstname, lastname, email)
VALUES ('$id','$name','$lastname','$email')") or
    die("Problemas en el select" . mysqli_error($conexion));
  mysqli_close($conexion);
  echo "El alumno fue dado de alta.";
  ?>
</body>
</html>
