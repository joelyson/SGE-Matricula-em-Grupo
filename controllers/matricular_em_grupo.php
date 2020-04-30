<?php

 if($startaction == 1 && $acao=="matricular_em_grupo"){
        
        $responsavel=$_SESSION["id"];
        $curso=$_POST["curso"];
        $turma=$_POST["turma"];
        $nomesAlunos=$_POST["nomesAlunos"];
             
        
        $matricular_aluno_grupo=new Matricular_aluno_grupo;
        $matricular_aluno_grupo=$matricular_aluno_grupo->dados_matricular_aluno_grupo($responsavel,$curso,$turma,$nomesAlunos);
            
    }  
         

?>