<?php

class User {
	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function verify_user($nickname, $password) { 
		$sql = "SELECT * FROM usuario WHERE nick = :nickname AND senha = :password";
		$sql = $this->conn->prepare($sql);
		$find_array = array(
			":nickname" => $nickname,
			":password" => $password
		);

		replace_values($sql, $find_array);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getId($nickname, $password) {
		$id = null;

		$sql = "SELECT id_usuario FROM usuario WHERE nick = :nickname AND senha = :password";
		$sql = $this->conn->prepare($sql);
		$find_array = array(
			":nickname" => $nickname,
			":password" => $password
		);

		replace_values($sql, $find_array);
		$sql->execute();


		if ($sql->rowCount() > 0) {
			$id = $sql->fetch();
			$id = del_redundance($id[0]);
		}
		
		return $id;
	}

	public function getImgProfile($id_usuario) {
		$data = null;

		$sql = "SELECT imgperfil FROM  usuario WHERE id_usuario = :id_usuario";
		$sql = $this->conn->prepare($sql);
		$sql->bindValue(":id_usuario", $id_usuario);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$data = $sql->fetch();
		}

		return $data;
	}

	public function setImgProfile($nickname, $new_img) {
		$sql = "UPDATE usuario SET imgperfil = :new_img WHERE nick = :nickname";

		$sql = $this->conn->prepare($sql);
		$find_array = array(
			":nickname" => $nickname,
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

	
	public function getUser($id_usuario) {
		$user = array();

		$sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
		$sql = $this->conn->prepare($sql);
		$sql->bindValue(":id_usuario", $id_usuario);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$user = $sql->fetchAll();
			$user = del_redundance($user[0]);
		}

		return $user;
	}

	public function setNewUser($arr_info = array()) {
		$isNewUser = false;

		$sql = "
		INSERT INTO usuario 
			(nome, nasc, cep, num, email, fixo, cel, senha,nick)	
		VALUES
			(:nome, :idade, :cep, :end, :mail, :tel, :cel, :senha, :nick)
		";
		$sql = $this->conn->prepare($sql);

		foreach ($arr_info as $key => $info) {	
			$find_array[$key] = $info;
		}

		replace_values($sql, $find_array);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$isNewUser = true;
		} else {
			$isNewUser = false;
		}

		return $isNewUser;
	}

}

?>