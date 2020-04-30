<?php

    class Matricular_aluno_grupo {

    public function dados_matricular_aluno_grupo($responsavel,$curso,$turma,$nomesAlunos){
    
    
    $sql = "INSERT INTO `alunos` (`id_aluno`, `id_curso`, `id_turma`, `resp_matricula`, `status`, `modalidade`, `nome`, `email`, `pai`, `mae`, `nacionalidade`, `naturalidade`, `cidade_nasc`, `contato_fixo`, `contato_celular1`, `contato_celular2`, `cidade`, `end`, `numero`, `cep`, `bairro`, `referencia`, `cpf`, `rg`, `data_expedicao`, `data_nasc`, `cart_prof`, `cert_nasc`, `compr_medio`, `historico_medio`, `titulo`, `cert_reservista`, `comp_residencia`, `mensalidade`, `diaDePG`, `nomeResp`, `rgResp`, `cpfResp`, `foto`, `boletim`, `reg_matricula`, `reg_livro`, `reg_folha`, `reg_sistec`, `data_entrada`, `data_saida`, `data_confec`, `seguro`, `exames`) VALUES";



            $i = 0;
            $nomesAlunos_1 = explode(";", $nomesAlunos);
            $quantos = count($nomesAlunos_1);

    foreach ($nomesAlunos_1 as $data) {
                
                if ($i < $quantos) {
                
            $sql .= " (NULL, '$curso', '$turma', '$responsavel', '3', NULL, '$nomesAlunos_1[$i]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),";
                    
                     $i++;
                }
                
            }
        
    


    $sql = mb_substr($sql, 0, -1, "utf-8");

    mysql_query($sql);

    
    if(isset($sql)){
        $_SESSION['mensagem'] ='<div class="alert alert-success">Matricula de <b>'.$quantos.'</b> aluno(s) realizada com Sucesso!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';    
    }else{
        $_SESSION['mensagem'] ='<div class="alert alert-danger">Ops... Algo deu errado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
    
    header("Location:../views/aluno_listar.php?id=$turma");
}
}
