<?php
require 'conn.php';
require 'functions.php';
require 'undo.php';
require 'audiencia.php';
?>

<?php
$url = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>Peoples: você sempre conectado</title>
    <link rel="stylesheet" type="text/css" href="style/stylo.css">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>

<body style="display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">

<table cellspacing="0" cellpadding="0" width="100%" align="center">
    <td width="400" height="" valign="top" align="center" bgcolor="330000">
        <form action="ver.php" method="post" style="margin-top:14px">
            <input type="text" name="busca" value=""
                   style="margin-top:1opx;width:350px;background-color:#ffffff;border-color:#ffc6c6;color:#003366;font-weight:none;padding:5px;border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px;"/>
            <input type="submit" value="Busca" style="background-color:#ff3300;color:#ffffff;height:31px;font-weight:none;font-size:10pt"/>
        </form>
        <br>
        <div style="background-color:#ff3300;">
            <span style="font-size:10pt;color:#ffffff;text-align:left"><?php echo date("d /m/y"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brazil,
                América do Sul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php // date("H:i:s");?></span>
        </div>
        <br>
    </td>
</table>

<tr>
    <table cellspacing="0" cellpadding="0" width="100%" align="center">
        <td valign="top" align="center"
            style="color:#336600;font-size:10pt;background-color:#cdcdcd;padding:2px;padding-left:15px color:#000000;height:20px;width:100px">
            <fieldset style="border-radius:5px; -webkit-border-radius:5px; -moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;height:610px">
                <?php
                require 'conn.php';
                require 'undo.php';
                require 'audiencia.php';

                $url = $_SERVER['REQUEST_URI'];

                $nome = $_SESSION['nomeget'];
                $tipo = ".jpg";
                $folder = "perfil/";
                $imageget = $folder . $nome . $tipo;

                $_SESSION['album'] = $nome;

                $stmt = $conexao->prepare("SELECT * FROM perfil WHERE nome = ? LIMIT 1");
                $stmt->bind_param("s", $nome);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($linha = $result->fetch_assoc()) {
                    $url = $_SERVER['REQUEST_URI'];
                    $id = $linha['id'];
                    $nome = $linha['nome'];
                    $foto = $linha['foto'];
                    $picture = '<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="' . $foto . '" width="120" height="120">';
                    $picture2 = '<img align="left" src="' . $imageget . '" width="20%" height="">';

                    $_SESSION['foto'] = $picture2;
                    $_SESSION['userget'] = $nome;
                    $_SESSION['url'] = $url;
                }
                $stmt->close();
                ?>
                <br>
                <?php
                $nome = $_SESSION['nome'];
                fone();
                echo '<br><a href="configuracao.php?titular=' . $nome . '"><input name="botao" title="PERFIL PESSOAL" type="image" value="teste" src="img/profile.png" width="50" height="50"></a>';
                ; ?>
                <br>
                <?php
                $nome = $_GET['nome'];
                echo '<span style="color:#003399;font-size:11pt"><a href="inbox.php?nome=' . $nome . '"><input name="botao" title="MENSAGENS INBOX" type="image" value="teste" src="img/inbox.png" width="50" height="50"></a>';
                ; ?>
                <?php
                echo '<br><a href="anunciosamigos.php?nome=' . $nome . '"><input name="botao" title="DESAPEGANDO" type="image" value="teste" src="img/desapegando.png" width="50" height="50"></a>';
                ?>
                <br>
                <?php require 'maisamigo.php'; ?>
                <br>
                <a href="qalbum.php"><img title="ÁLBUM PESSOAL" src="img/albuns.png" width="40" height="40"></a>
                <br><br>
                <a href="whatch.php" style=""><img title="PÁGINA INICIAL" src="img/homepage.png" width="40" height="40"></a>
                <br>
            </fieldset>
        </td>

        <td style="padding-left:5px;padding-right:10px;border:10px" width="980" valign="top" align="left"
            height="" bgcolor="#ccccff">

            <fieldset style="border-radius:5px; -webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:12px;background-color:#ffffff;border-color:#e1e1e1">
                <? echo '<span style="font-size:12pt;color:#003399">Linha do tempo de '.ucwords($nome).':</span>'; ?>
                <hr style="background-color:#000099;">
                <br><br>
                <?php
                echo '<div class="excluir">';
                exibePostagens();
                echo '</div>';
                ?>
            </fieldset>
            <br>
        </td>

        <td valign="top" align="right" width="320" height="" bgcolor="#ccccff">

            <fieldset align="right" style="border-radius:5px; -webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px;height:490px">
                <div align="center"
                     style="background-color:#003399;color:#ffffff;text-align:center;width:200px;padding:2px;">
                    <?php
                    require 'conn.php';
                    require 'functions.php';
                    require 'undo.php';
                    require 'audiencia.php';

                    $url = $_SERVER['REQUEST_URI'];

                    $nome = $_SESSION['nomeget'];
                    $tipo = ".jpg";
                    $folder = "perfil/";
                    $imageget = $folder . $nome . $tipo;

                    $_SESSION['album'] = $nome;

                    $stmt = $conexao->prepare("SELECT * FROM perfil WHERE nome = ? LIMIT 1");
                    $stmt->bind_param("s", $nome);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($linha = $result->fetch_assoc()) {
                        $url = $_SERVER['REQUEST_URI'];
                        $id = $linha['id'];
                        $nome = $linha['nome'];
                        $foto = $linha['foto'];
                        $picture = '<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="' . $foto . '" width="120" height="120">';
                        $picture2 = '<img align="left" src="' . $imageget . '" width="20%" height="">';

                        $_SESSION['foto'] = $picture2;
                        $_SESSION['userget'] = $nome;
                        $_SESSION['url'] = $url;
                    }
                    $stmt->close();

                    $stmtAmigos = $conexao->prepare("SELECT * FROM amigos WHERE nome = ? ORDER BY ID DESC");
                    $stmtAmigos->bind_param("s", $nome);
                    $stmtAmigos->execute();
                    $resultAmigos = $stmtAmigos->get_result();
                    $amigosArray = [];
                    while ($amigo = $resultAmigos->fetch_assoc()) {
                        $amigosArray[] = $amigo;
                    }
                    $stmtAmigos->close();
                    ?>
                </div>
            </fieldset>
            <br>

            <fieldset align="right" style="border-radius:5px; -webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px;">
            </fieldset>

        </td>
    </table>
</tr>

<tr>
    <table cellspacing="0" cellpadding="0" width="100%" align="center">
        <td width="400" height="" valign="top" align="center"
            style="color:#336600;font-size:10pt;background-color:#ffffff; #0066cc;padding:15px;height:20px;">
        </td>
    </table>
</tr>

<?php
require 'setvisitou.php';
?>
</body>
</html>
