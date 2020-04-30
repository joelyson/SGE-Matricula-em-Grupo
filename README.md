# SGE-Matricula-em-Grupo

Solução para realizar múltiplos sql inserts. Aqui utilizado para realizar matrícula de um grupo de alunos em uma turma. Para isso os nomes foram separados por (;) e digitados em um <textarea>. 

## Estrutura
 * /views
 * /controller
 * /banco 
 
## /views
##### matricula_em_grupo.php
    <textarea class="form-control" placeholder="nomes separedos por (;)" name="nomesAlunos" rows="3"></textarea> 


## /controllers
##### matricula_em_grupo.php
    $_POST[" "]; 
    ...
    passa variaveis
    ...
    'new' Matricular_aluno_grupo


## /banco
##### Matricula_engrupo.class.php
    ....
    $i = 0;
    $nomesAlunos_1 = explode(";", $nomesAlunos);
    $quantos = count($nomesAlunos_1);
    ...
    foreach
    ...
    $sql = mb_substr($sql, 0, -1, "utf-8");
