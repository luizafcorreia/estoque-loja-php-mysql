<?php 
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");  
require_once("class/Categoria.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId (1);
$produto = new Produto("", "", "", $categoria, "");

$categorias = listaCategorias($conexao);

?>

<html>
  <h1 style="margin-bottom: 40px;">Formulário de cadastro</h1>
  <div class="container">
        <form action="adiciona-produto.php" method="post">
        	<table class="table">
        		
                <?php include("produto-formulario-base.php"); ?>

        		<tr>
        			<td style="border-top-width: 0px;">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </td>	
        		</tr>
                  <tr>
                    <td style="border-top-width: 0px;"><a href="categoria-formulario.php" class="btn btn-primary">Gerenciar categorias</a></td>
                </tr>
    	        
            </table>
        </form>
  </div>      
</html>

<?php require_once("rodape.php"); ?>