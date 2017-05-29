<?php 

class Produto {

	private $id;
	private $nome;
	private $descricao;
	private $categoria;
	private $usado;
	private $preco;


	function __construct($nome, $preco, $descricao, Categoria $categoria, $usado) {
		$this->nome = $nome;
		$this->preco = $preco;
		$this->descricao = $descricao;
		$this->categoria = $categoria;
		$this->usado = $usado;
	}

	function __toString() {
		return $this->nome." : R$ ".$this->preco;
	}

	function __destruct() {
		
	}

	public function precoComDesconto($desconto) {
		if ($desconto>0 && $desconto<=70) {
			return $this->preco -= $this->preco * ($desconto/100);
		} else {
			return "Desconto inválido...";
		}	
	}

	//Getters e Setters classe Produto

	//Preço

	public function getPreco() {
		return $this->preco;
	}


	// Nome

	public function getNome() {
		return $this->nome;
	}



	// ID

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		if ($id != 0) {
			$this->id = $id;
		}
	}


	// Descricao

	public function getDescricao() {
		return $this->descricao;
	}


	// Usado

	public function isUsado() {
		return $this->usado;
	}

	public function setUsado($usado) {
			$this->usado = $usado;
	}


	// Categoria

	public function getCategoria() {
		return $this->categoria;
	}
}
	
 ?>