<?php include_once"server.php"?>
<html>
<body>
<?php
$nome = $_POST["Nome"];
$telefone = $_POST["Telefone"];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_select_db($conn, '$dbname');
$sql = "INSERT INTO tbformulario (Nome, Telefone) VALUES ('$nome','$telefone')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Foi Sucesso!'); window.location = 'index.php'; </script>";

    }else{
        echo "Algo de errado não está certo:" .$sql . "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
?>
</body>
</html>