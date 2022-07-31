<?php
class User {
	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function verify_user($nickname, $password) { 
		$sql = 
		"SELECT 
			* 
		FROM 
			usuario
		 WHERE 
		 	nick = :nickname AND 
			senha = :password";

		$find_array = array(
			":nickname" => $nickname,
			":password" => $password
		);

		$sql = prepare_query($sql, $find_array, $this->conn);

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getId($nickname, $password) {
		$id = null;

		$sql = 
		"SELECT 
			id_usuario 
		FROM 
			usuario 
		WHERE 
			nick = :nickname AND 
			senha = :password";

		$find_array = array(
			":nickname" => $nickname,
			":password" => $password
		);

		$sql = prepare_query($sql, $find_array, $this->conn);

		if ($sql->rowCount() > 0) {
			$id = $sql->fetch();
			$id = $id[0];
		}
		
		return $id;
	}

	public function getImgProfile($id_usuario) {
		$data = null;

		$sql = 
		"SELECT imgperfil 
			FROM  usuario 
		WHERE id_usuario = :id_usuario
		";
		$find_array = array(":id_usuario", $id_usuario);

		$sql = prepare_query($sql, $find_array, $this->conn);

		if ($sql->rowCount() > 0) {
			$data = $sql->fetch();
		}

		return $data;
	}

	public function setImgProfile($nickname, $new_img) {
		$sql = 
		"UPDATE 
			usuario 
		SET 
			imgperfil = :new_img 
		WHERE nick = :nickname
		";
		$find_array = array(
			":nickname" => $nickname, ":new_img" => $new_img
		);

		$sql = prepare_query($sql, $find_array, $this->conn);

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	
	public function getUser($id_usuario) {
		$user = array();

		$sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
		$find_array = array(":id_usuario" => $id_usuario);

		$sql = prepare_query($sql, $find_array, $this->conn);

		if ($sql->rowCount() > 0) {
			$user = $sql->fetchAll();
			$user = del_redundance($user[0]);
		}

		return $user;
	}

	public function setNewUser($arr_info = array()) {
		$isNewUser = false;

		$sql = 
		"INSERT INTO usuario 
			(
				nome, nasc, cep, num, email, 
				fixo, cel, senha, nick
			)	
		VALUES
			(
				:nome, :idade, :cep, :ender, :mail, 
				:tel, :cel, :senha, :nick
			)
		";

		foreach ($arr_info as $key => $info) {	
			$find_array[$key] = $info;
		}

		$sql = prepare_query($sql, $find_array, $this->conn);

		if ($sql->rowCount() > 0) {
			$isNewUser = true;
		} else {
			$isNewUser = false;
		}

		return $isNewUser;
	}

}

?>