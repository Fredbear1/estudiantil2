<?php

include("connc.php");//Invocamos un archivo que conecta la base de datos
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
</head>
<body>
    <header>
        <center>ADM PRODUCTOS</center>
    </header>
    <!--Aqui comienza el codigo de php-->
    <?php
        //Variables necesarias para buscar un registro
        $id="";
        $name="";
        $price="";
        $exist="";
        $img="";




        if(isset($_POST['btn1']))
        {
            //bus es buscar
            $btn=$_POST['btn1'];
            $idbus=$_POST['txtidbus'];
            if($btn=="Buscar")
            {
              $res= $MySQLiconexion->query("select * from product where id='$idbus'");  
              while($resul=$res->fetch_array())
              {

                  $name=$resul[1];
                  $price=$resul[2];
                  $exist=$resul[3];
                  $img=$resul[4];

              }
            }
            if($btn=="Guardar")
            {
                //Creando las variables que se neceistan para guardar la informacion

                $name=$_POST['txtname'];
                $price=$_POST['txtprice'];
                $exist=$_POST['txtexist'];
               
                $nombre_foto=$_FILES['foto']['name'];//Nombre de la foto
                $ruta=$_FILES['foto']['tmp_name'];//ruta del archivo
                $img='img/'.$nombre_foto;//ruta y nombre del archivo
                copy($ruta,$img);//Guardamos el archivo en una ruta especifica
                //Como comprabamos que ese Nit o la Cedula no se duplique
                $sqlbuscar="SELECT id FROM product WHERE id='$id' ORDER BY id";//Aqui tenemos los registros que estan en el campo NitoCc
                if($result=mysqli_query($MySQLiconexion,$sqlbuscar))
                {
                    $nroregistros=mysqli_num_rows($result);
                    if($nroregistros>0)
                    {
                        echo"<script>alert('El Nit o la Cedula ingresada ya existe!!!')</script>";
                    }
                    else
                    {
                        $SQL= $MySQLiconexion->query("insert into product(id,name,price,exist,img) values ('$id','$name','$price','$exist','$img') ");
                        if(!$SQL)
                        {
                            echo $MySQLiconexion->error;
                        }
                        else
                        {
                            echo "<script>alert('Se insertó correctamente')</script>";
                        }
                    }
                }
            }
            if($btn=="Actualizar")
            {

                $name=$_POST['txtname'];
                $price=$_POST['txtprice'];
                $exist=$_POST['txtexist'];

                //Manejo de la foto, para guardarla
                $nombre_foto=$_FILES['foto']['name'];//Nombre de la foto
                $ruta=$_FILES['foto']['tmp_name'];//ruta del archivo
                $img='img/'.$nombre_foto;//ruta y nombre del archivo
                copy($ruta,$img);
                $SQL= $MySQLiconexion->query("update product set nombre='$name',price='$price',exist='$exist',img='$img'where id='$id'");
                if(!$SQL)
                {
                    echo $MySQLiconexion->error;
                }
                else
                {
                    echo "<script>alert('Se actualizó correctamente el registro');</script>";
                }

            }
            //Eliminar
            if($btn=="Eliminar")
            {
                $id=$_POST['txtid'];
                $SQL= $MySQLiconexion->query("delete from product where id='$id'");
            
            if(!$SQL)
            {
                echo $MySQLiconexion->error;
            }
            else
            {
                echo "<script>alert('Se eliminó correctamente el registro');</script>";
           } 
        }
        }

    ?>
    <form action="" class="formulario" method="post" enctype="multipart/form-data" name="fe">
        <center>
                <table border="0">
                        <tr>
                            <td>Buscar</td>
                            <td><input type="text" name="txtidbus"></td>
                            <td><input type="submit" name="btn1" value="Buscar"></td>
                        </tr>
                </table>
                <table border="0">

                        <tr>
                            <td>nombre producto</td>
                            <td><input type="text" name="txtname" value="<?php echo $name ?>"></td>
                        </tr>
                        <tr>
                            <td>precio</td>
                            <td><input type="number" name="txtprice" value="<?php echo $price ?>"></td>
                        </tr>
                        <tr>
                            <td>existencias</td>
                            <td><input type="number" name="txtexist" value="<?php echo $exist ?>"></td>
                        </tr>
                        <tr>
                            <td>Subir Foto</td>
                            <td><input type="file" name="foto" id=""></td>
                        </tr>
                        <tr>
                            <td>Imagen</td>
                            <td>
                                <img src="<?php echo $img ?>" alt="" width="50" height="50">
                            </td>
                        </tr>
                        <tr align="center"> 
                            <td colspan="2">
                                <input type="submit" value="Actualizar" name="btn1">
                                <input type="submit" value="Guardar" name="btn1">
                                <input type="submit" value="Eliminar" name="btn1">
                                <button onclick='limpiar_datos()'>Limpiar</button>
                                <button onfocus='mouse_inicio()'>Nuevo registro</button>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2">
                                <input type="submit" value="Listar" name="btn1">
                            </td>
                        </tr>
                </table>
        </center>
    </form>
    <?php

        if(isset($_POST['btn1']))
        {
            $btn=$_POST['btn1'];
            if($btn=="Listar")
            {
                 echo "
                <center>
                <table border='2'>
                <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>exist</th>
                <th>Foto</th>
                </tr>";

                $res=$MySQLiconexion ->query("select * from product");
                while($resul=$res->fetch_array())
                {
                    $id=$resul[0];
                    $name=$resul[1];
                    $price=$resul[2];
                    $exist=$resul[3];

                    $img=$resul[4];

                    echo "
                    <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$price</td>
                    <td>$exist</td>

                    <td><img src='$img' width='10%'></td>
                    </tr> 
                    ";
                }

        
        
            }
        }
    ?>

    <script>
        function limpiar_datos()
        {
            inputs=document.getElementsByClassName('formulario')
            for(input of formularios)
            {
                input.value=' '
            }
        }

        function mouse_inicio()
        {
            document.getElementById('inicial').focus();
        }
    </script>
</body>
</html>