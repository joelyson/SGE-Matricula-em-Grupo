<?php

    class Matricular_aluno_grupo {

    public function dados_matricular_aluno_grupo($responsavel,$curso,$turma,$nomesAlunos){
    
    $sql = "INSERT INTO `alunos` (`id_aluno`, `id_curso`, `id_turma`, `resp_matricula`,......) VALUES";

    $i = 0;
    $nomesAlunos_1 = explode(";", $nomesAlunos);
    $quantos = count($nomesAlunos_1);

    foreach ($nomesAlunos_1 as $data) {
        if ($i < $quantos) {
            $sql .= " (NULL, '$curso', '$turma', '$responsavel', '3', NULL, '$nomesAlunos_1[$i]', .....),";
                    
            $i++;
        }
                
    }
    
    $sql = mb_substr($sql, 0, -1, "utf-8");

    mysql_query($sql);

    header("Location:../views/aluno_listar.php?id=$turma");
}
}
