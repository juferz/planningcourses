<HTML LANG="es">

<HEAD>
   <TITLE>Registro de Empleado</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP
$errores["cod_emple"] = "";
$errores["nombre"] = "";
$errores["apellido"] = "";
$errores["clave"] = "";
$errores["direccion"] = "";
$errores["telefono"] = "";
$errores["dni"] = "";
$errores["fecha_nac"] = "";
$errores["nacionalidad"] = "";
$errores["sexo"] = "";
$errores["salario"] = "";
$errores["capacitado"] = "";
$errores["id_docente"] = "";
$errores["puesto_docente"] = "";
$error = false;

if (isset($_POST['insertar']))
   {
	//Cargar las variable
	 $cod_emp = $_POST['cod_emp'];
    $nom_emp = $_POST['nom_emp'];
    $ape_emp = $_POST['ape_emp'];
    $clave_emp = $_POST['clave_emp'];
    $dir_emp = $_POST['dir_emp'];
    $tel_emp = $_POST['tel_emp'];
    $dni_emp = $_POST['dni_emp'];
    $fech_emp = $_POST['fech_emp'];
    $nac_emp = $_POST['nac_emp'];
    $sexo_emp = $_POST['sexo_emp'];
    $salario_emp = $_POST['salario_emp'];
    $capac_emp = $_POST['capac_emp'];
    $id_doc_emp = $_POST['id_doc_emp'];
    $puesto_docente = $_POST['puesto_docente'];


   // Comprobar errores
   // Codigo

      if (empty($cod_emp) || (!is_numeric($cod_emp)))
      {
         $errores["codigo"] = "Se requiere codigo del empleado";
         $error = true;
      }
      else
         $errores["codigo"] = "";


   // Nombre
      if (empty($nom_emp))
      {
         $errores["nombre"] = "Se requiere el nombre!";
         $error = true;
      }
      else
         $errores["nombre"] = "";

   //apellidos
      if (empty($ape_emp))
      {
         $errores["apellido"] = "Se requiere el apellido!";
         $error = true;
      }
      else
         $errores["apellido"] = "";

   //clave
   if (empty($clave_emp))
      {
         $errores["clave"] = "Se requiere la clave";
         $error = true;
      }
      else
         $errores["clave"] = "";

   //direccion
      if (empty($dir_emp))
      {
         $errores["direccion"] = "Se requiere la direccion!";
         $error = true;
      }
      else
         $errores["direccion"] = "";

   //Telefono
      if (empty($tel_emp) || (!is_numeric($tel_emp)))
      {
         $errores["telefono"] = "Se requiere el telefono";
         $error = true;
      }
      else
         $errores["telefono"] = "";

      //dni
      if (empty($dni_emp) || (!is_numeric($dni_emp)))
      {
         $errores["dni"] = "Se requiere la cedula";
         $error = true;
      }
      else
         $errores["dni"] = "";

      //fecha nacimiento
      if (empty($fech_emp))
      {
         $errores["fecha_nac"] = "Se requiere la fecha de nacimiento!";
         $error = true;
      }
      else
         $errores["fecha_nac"] = "";


      //codigo postal
      if (empty($nac_emp) || (!is_numeric($nac_emp)))
      {
         $errores["nac_emp"] = "Se requiere la nacionalidad";
         $error = true;
      }
      else
         $errores["nac_emp"] = "";
   }


	// Si los datos son correctos, procesar formulario
	if (isset($_POST['insertar']) && $error==false)
	{
         //Cargar la base de datos
         require('config.php');

         //Insertar datos a la tabla empleados

         $query = "INSERT INTO empleados (cod_emple, nombre, apellido, clave, direccion, telefono, dni, fech_nac, nacionalidad, sexo, firma, salario, capacitado) 
         VALUES ('$cod_emp', '$nom_emp','$ape_emp', '$clave_emp','$dir_emp','$tel_emp','$dni_emp','$fecha_emp','$nac_emp','$sexo_emp', '$salario_emp', $capac_emp)";

         echo "$query";
         
         $result = mysqli_query($link, $query) 
         or die ("<p><center> <b>No se pudo insertar la informacion</center></b></p><br>
         <A HREF 'empleados.php'>Volver</A>");

         echo ("<P>[ <A HREF='empleados.php'> Insertar otro Paciente</A> ]</P>\n");
    }
else
{
?>

<H1>REGISTRO DE EMPLEADOS</H1>

<P>Introduzca sus datos de registro:</P>

<FORM CLASS="borde" ACTION="empleados.php" METHOD="POST">


<P><LABEL>Codigo de Empleado:</LABEL>
<INPUT TYPE="TEXT" NAME="cod_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$cod_emp'>\n");
   else
      print (">\n");
   if ($errores["cod_emple"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["cod_emple"] . "</SPAN>");
?>
</P>


<P><LABEL>Nombres:</LABEL>
<INPUT TYPE="TEXT" NAME="nom_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$nom_emp'>\n");
   else
      print (">\n");
   if ($errores["nombre"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["nombre"] . "</SPAN>");
?>
</P>


<P><LABEL>Apellidos:</LABEL>
<INPUT TYPE="TEXT" NAME="ape_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$ape_emp'>\n");
   else
      print (">\n");
   if ($errores["apellido"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["apellido"] . "</SPAN>");
?>
</P>

<P><LABEL>Contraseña:</LABEL>
<INPUT TYPE="PASSWORD" NAME="clave_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$clave_emp'>\n");
   else
      print (">\n");
   if ($errores["clave"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["clave"] . "</SPAN>");
?>
</P>

<P><LABEL>Direccion:</LABEL>
<INPUT TYPE="TEXT" NAME="dir_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$dir_emp'>\n");
   else
      print (">\n");
   if ($errores["direccion"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["direccion"] . "</SPAN>");
?>
</P>


<P><LABEL>Telefono:</LABEL>
<INPUT TYPE="TEXT" NAME="tel_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$tel_emp'>\n");
   else
      print (">\n");
   if ($errores["telefono"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["telefono"] . "</SPAN>");
?>
</P>



<P><LABEL>DNI (Cedula):</LABEL>
<INPUT TYPE="TEXT" NAME="dni_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$dni_emp'>\n");
   else
      print (">\n");
   if ($errores["dni"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["dni"] . "</SPAN>");
?>
</P>

<P><LABEL>Fecha de Nacimiento:</LABEL>
<INPUT TYPE="TEXT" NAME="fech_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$fech_emp'>\n");
   else
      print (">\n");
   if ($errores["fecha_nac"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["fecha_nac"] . "</SPAN>");
?>
</P>

<P><LABEL>Nacionalidad:</LABEL>
<INPUT TYPE="TEXT" NAME="nac_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$nac_emp'>\n");
   else
      print (">\n");
   if ($errores["nacionalidad"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["nacionalidad"] . "</SPAN>");
?>
</P>


<P><LABEL>Genero:</LABEL>
<INPUT TYPE="TEXT" NAME="sexo_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$sexo_emp'>\n");
   else
      print (">\n");
   if ($errores["sexo"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["sexo"] . "</SPAN>");
?>
</P>

<P><LABEL>Salario:</LABEL>
<INPUT TYPE="TEXT" NAME="salario_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$salario_emp'>\n");
   else
      print (">\n");
   if ($errores["salario"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["salario"] . "</SPAN>");
?>
</P>

<P><LABEL>Capacitado?:</LABEL>
<INPUT TYPE="TEXT" NAME="capac_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$capac_emp'>\n");
   else
      print (">\n");
   if ($errores["capacitado"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["capacitado"] . "</SPAN>");
?>
</P>

<P><LABEL>ID de Docente:</LABEL>
<INPUT TYPE="TEXT" NAME="id_doc_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$id_doc_emp'>\n");
   else
      print (">\n");
   if ($errores["id_docente"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["id_docente"] . "</SPAN>");
?>
</P>

<P><LABEL>Puesto de Docencia:</LABEL>
<INPUT TYPE="TEXT" NAME="puesto_docente"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$puesto_docente'>\n");
   else
      print (">\n");
   if ($errores["puesto_docente"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["puesto_docente"] . "</SPAN>");
?>
</P>


<P><INPUT TYPE="submit" NAME="insertar" VALUE="Completar Registro"></P>

</FORM>

<?PHP
   }
?>
</BODY>
</HTML>