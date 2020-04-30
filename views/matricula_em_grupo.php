<!DOCTYPE html>
<html lang="en">

<head> </head>

<body>

    
                        
<div class="panel-body">
    <form action="../index.php?acao=matricular_em_grupo" method="post">
        <div class="row">
            <div class="col-md-2">
                <label for="curso">Curso: </label>
                    <select class="form-control" id="curso" name="curso" >
                    <option value="0"> --- </option>
                    <option value="1">Curso A</option>
                    <option value="1">Curso B</option>
                    </select>
            </div>
            <div class="col-md-3">
                <label for="turma">Turma: </label>
                    <select class="form-control" id="turma" name="turma" >
                    <option value="0"> --- </option>
                    <option value="1">Turma A</option>
                    <option value="1">Turma B</option>
                    </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <label for="nacionalidade">Nomes: </label>
                <textarea class="form-control" placeholder="nomes separedos por (;)" id="nomesAlunos" name="nomesAlunos" rows="3"></textarea>
            </div>
        </div>
                                    

        <button type="submit" class="btn btn-default">Enviar</button>
        <button type="reset" class="btn btn-default">Limpar</button>
    </form>
</div>
                              
                            
</body>

</html>
