<?php  

class Categoria {
	private $id;
	private $nome;

	//Getters e Setters classe Categoria

	// ID

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}


	// Nome
	
	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

}




?>