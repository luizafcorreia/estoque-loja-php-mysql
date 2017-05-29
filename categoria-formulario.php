<?php 
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

 verificaUsuario();

 $categorias = listaCategorias($conexao);

 ?>

<html>
  <h1 style="margin-bottom: 40px;">Adicionar nova categoria</h1>
  <div class="container">
        <form action="adiciona-categoria.php" method="post">
        	<table class="table">
        		<tr>
        			<td>Nome da categoria:</td>
        			<td><input class="form-control" type="text" name="nome"></td>   			 
        		</tr>
        		<tr>
        			<td style="border-top-width: 0px;">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </td>	
        		</tr>
    	        
            </table>
        </form>
  </div>      
    <h1 style="margin-bottom: 40px;">Categorias cadastradas</h1>

<?php 

    if(array_key_exists("removido", $_GET) && $_GET["removido"] == true) { 
?>
        <p class="alert-success">Categoria removida com sucesso.</p>
<?php   
    }
?>        

    <table class="table table-bordered table-hover">
        <thead>
            <td>#ID</td>
            <td>Nome da categoria</td>
            <td>Ação</td>
        </thead>

        <?php 
            $categorias = listaCategorias($conexao);
            foreach($categorias as $categoria) :
        ?>
            <tr>
                <td><?= $categoria->getId() ?></td>
                <td><?= $categoria->getNome() ?></td>
                <td>
                    <form action="remove-categoria.php" method="post">
                        <input type="hidden" name="id" value="<?=$categoria->getId()?>">
                        <button class="btn btn-danger">remover</button>
                    </form>
                </td>
            </tr>   
        <?php   
            endforeach  
        ?>

    </table>
</html>

<?php require_once("rodape.php") ?>