<?php require_once("cabecalho.php");
 require_once("banco-categoria.php");
 require_once("banco-produto.php");
 require_once("logica-usuario.php");
 

 verificaUsuario();


 $id = $_GET["id"];
 $produto = buscaProduto($conexao, $id);
 $categorias = listaCategorias($conexao);
 //var_dump($categorias);

 $selecao_usado = $produto->isUsado() ? "checked='checked'" : "";
 $produto->setUsado($selecao_usado);

 ?>

<html>
  <h1 style="margin-bottom: 40px;">Alterar produto</h1>
  <div class="container">
        <form action="altera-produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produto->getId()?>">
        	<table class="table">
        
            <?php include("produto-formulario-base.php"); ?>
            
        		<tr>
        			<td style="border-top-width: 0px;">
                        <button class="btn btn-primary" type="submit">Alterar</button>
                    </td>	
        		</tr>
                  <tr>
                    <td style="border-top-width: 0px;"><a href="categoria-formulario.php" class="btn btn-primary">Gerenciar categorias</a></td>
                </tr>
    	        
            </table>
        </form>
  </div>      
</html>

<?php require_once("rodape.php") ?>