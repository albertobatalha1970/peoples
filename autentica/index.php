<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Autenticação</title>


  <script type="text/javascript">



function loginsucessfully(){
	setTimeout("window.location='whatch.php'",5000);}


	function loginfailled(){
	setTimeout("window.location='index.php'",5000);}




</script>





</head>

 <body>
  
<?
$a=1;

if($a==1)
{
echo "<script>loginsucessfully();</script>";
}
else
{
echo "<script>loginfailled();</script>";
}


?>
 </body>

</html>
