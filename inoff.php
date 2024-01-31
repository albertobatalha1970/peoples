<?php
require 'conn.php'; // Este arquivo deve ser modificado para usar a conexão mysqli
require 'functions.php';
require 'undo.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Refresh" content="1">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>Peoples: você sempre conectado</title>
    <link rel="stylesheet" type="text/css" href="style/stylo.css">

    <script language="javascript">
        var win = null;

        function NovaJanela(pagina, nome, w, h, scroll) {
            LeftPosition = (screen.width) ? (screen.width - w) / 2 : 0;
            TopPosition = (screen.height) ? (screen.height - h) / 2 : 0;
            settings = 'height=' + h + ',width=' + w + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=' + scroll + ',resizable'
            win = window.open(pagina, nome, settings);
        }
    </script>

    <style type="text/css">
    </style>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>

<body style="display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">
<table cellspacing="0" cellpadding="0" width="100%" align="center">
    <td width="400" height="" valign="top" align="center" bgcolor="330000">
        <form action="ver.php" method="post" style="margin-top:14px">
            <input type="text" name="busca" value="" style="margin-top:1opx;width:350px;background-color:#ffffff;border-color:#ffc6c6;color:#003366;font-weight:none;padding:5px;border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px;"/>
            <input type="submit" value="Busca" style="background-color:#ff3300;color:#ffffff;height:31px;font-weight:none;font-size:10pt"/>
        </form>

        <br>
        <div style="background-color:#ff3300;">
            <span style="font-size:10pt;color:#ffffff;text-align:left"><?php echo date("d /m/y"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brazil, América do Sul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php // date("H:i:s");?></span>
        </div>
        <br>
    </td>
</table>
<tr>
    <table cellspacing="0" cellpadding="0" width="100%" align="center">
        <td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#cdcdcd;padding:2px;padding-left:15px color:#000000;height:20px;width:100px">
            <fieldset style="border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;height:400px">
                <?php
                // Certificando-se de que a sessão foi iniciada
                if (!isset($_SESSION)) {
                    session_start();
                }
                
                // Substituindo a chamada de mysql por mysqli
                $stmt = $conn->prepare("SELECT * FROM perfil WHERE nome=? LIMIT 1"); // Assumindo que $conn é a sua conexão mysqli
                $stmt->bind_param("s", $_SESSION['nome']);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($linha = $result->fetch_assoc()) {
                    $id = $linha['id'];
                    $nome = $linha['nome'];
                    $foto = $linha['foto'];
                    $picture = '<img alt="?" style="margin-right:2px;color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="' . $foto . '" width="100" height="117">';
                    
                    if (file_exists("perfil/" . $nome . ".jpg")) {
                        echo '<div style="background-color:none;width:105px;height:115px;"><br>' . $picture . '</div>';
                    } else {
                        echo '<img alt="?" style="color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="img/figura.jpg" width="90" height="90"><br>';
                    }

                    echo '<br><a style="text-decoration:none" href="#"><span style="color:#003399;font-size:10pt;font-weight:none"><br>' . ucwords($nome) . '&nbsp;&nbsp;</span></a>';
                    echo '<br><br>';
                }
                $stmt->close();
                ?>
            </fieldset>
        </td>

        <td style="padding-left:5px;padding-right:10px;border:10px" width="980" valign="top" align="left" height="490" bgcolor="#ccccff">
            <fieldset style="border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px;border:none;margin-top:12px;background-color:#ffffff;border-color:#e1e1e1">
                <br>
                <b><font color="#003399">Estes são os depoimentos enviados para <?php echo $nome; ?>:</font></b>
                <hr>
                <?php
                // Certificando-se de que a sessão foi iniciada
                if (!isset($_SESSION)) {
                    session_start();
                }
                
                $stmt = $conn->prepare("SELECT * FROM comentados WHERE comentado=?");
                $stmt->bind_param("s", $_SESSION['nome']);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($linha = $result->fetch_assoc()) {
                    // Processa cada linha de resultado aqui...
                }
                $stmt->close();
                ?>
            </fieldset>
            <br>
        </td>
    </table>
</tr>
</body>
</html>
