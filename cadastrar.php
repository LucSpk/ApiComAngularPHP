<?php

    // - Incluir conexão
    include("conexao.php");

    // - Obter dados
    $obterDados = file_get_contents("php://input");

    // - Extrair dados JSON
    $extrairJSON = json_decode($obterDados);

    // - Separar os dados do JSON
    $nomeCurso = $extrairJSON->cursos->nomeCurso;
    $valorCurso = $extrairJSON->cursos->valorCurso;

    // - SQL
    //$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso',$valorCurso)";
    //mysqli_query($conexao, $sql);

    $sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
    mysqli_query($conexao, $sql);

    // - Exportar os dados cadastrados
    $curso = [
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ];

    echo json_encode(['curso' => $curso]);
    mysqli_close($conexao);
?>