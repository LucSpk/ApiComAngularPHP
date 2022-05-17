<?php

    // - Incluir conexão
    include("conexao.php");

    // - Obter dados
    //$obterDados = file_get_contents("php://input");

    // - Extrair dados JSON
    //$extrairJSON = json_decode($obterDados);

    // - Separar os dados do JSON
    //$idCurso = $extrairJSON->cursos->idCurso;

    $idCurso= $_REQUEST['idCurso'];
   
    // - SQL
    //$sql = "DELETE FROM cursos WHERE idCurso = $idCurso";
    $sql = "DELETE FROM cursos WHERE idCurso=$idCurso";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
?>