<?php  

class Product {
	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function verify_product($name_product, $id_usuario) { 
		$sql = "SELECT * FROM produto WHERE nome = :nome AND id_usuario = :id_usuario";
		$sql = $this->conn->prepare($sql);
		$find_array = array(
			":nome" => $name_product,
			":id_usuario" => $id_usuario
		);

		replace_values($sql, $find_array);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getProducts() {
		$data = array();
		$sql = "SELECT * FROM produto";
		$sql = $this->conn->query($sql);
		
		if ($sql->rowCount() > 0) {
			$data = $sql->fetchAll();
		}

		return $data;
	}

	public function getId($id_usuario, $data_validade, $imgperfil) {
		$id = null;

		$sql = "SELECT id FROM produto WHERE id_usuario = :id_usuario AND data_validade = :data_validade AND imgperfil = :imgperfil";
		$sql = $this->conn->prepare($sql);
		$find_array = array(
                "id_usuario" => $id_usuario,
                ":data_validade" => $data_validade,
                ":imgperfil" => $imgperfil
            );

		replace_values($sql, $find_array);
		$sql->execute();


		if ($sql->rowCount() > 0) {
			$id = $sql->fetch();
			$id = $id['id'];
		}
		
		return $id;
	}

	public function getProduct($id_product) {
		$product = array();

		$sql = "SELECT * FROM produto WHERE id = :id_product";
		$sql = $this->conn->prepare($sql);
		$sql->bindValue(":id_product", $id_product);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$product = $sql->fetchAll();
			$product = array_unique($product[0]);
		}

		return $product;
	}

	public function setNewProduct($arr_info = array()) {
		$isNewProduct = false;

		$sql = "
		INSERT INTO produto 
			(nome, data_validade, imgperfil, descricao, doador, id_usuario)
		VALUES
			(:nome, :data_validade, :imgperfil, :descricao, :doador, :id_usuario)
		";
		$sql = $this->conn->prepare($sql);

		foreach ($arr_info as $key => $info) {	
			$find_array[$key] = $info;
		}

		replace_values($sql, $find_array);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$isNewProduct = true;
		} else {
			$isNewProduct = false;
		}

		return $isNewProduct;
	}

	public function setImgProfile($name_product, $new_img) {
		$sql = "UPDATE produto SET imgperfil = :new_img WHERE nome = :name_product";

		$sql = $this->conn->prepare($sql);
		$find_array = array(
			":name_product" => $name_product,
			":new_img" => $new_img
		);

		replace_values($sql, $find_array);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

}

?>