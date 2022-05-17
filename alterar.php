<?php

    // - Incluir conexão
    include("conexao.php");

    // - Obter dados
    $obterDados = file_get_contents("php://input");
    //print($obterDados);

    // - Extrair dados JSON
    $extrairJSON = json_decode($obterDados);

    //$idCurso= $_REQUEST['idCurso'];

    // - Separar os dados do JSON
    $idCurso = $extrairJSON->cursos->idCurso;
    $nomeCurso = $extrairJSON->cursos->nomeCurso;
    $valorCurso = $extrairJSON->cursos->valorCurso;

    // - SQL
    $sql = "UPDATE cursos SET nomeCurso='$nomeCurso',valorCurso=$valorCurso WHERE idCurso=$idCurso";
    mysqli_query($conexao, $sql);

    // - Exportar os dados cadastrados
    $curso = [
        'idCurso' => $idCurso,
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ];

    echo json_encode(['$curso' => $curso]);
    mysqli_close($conexao);

?>