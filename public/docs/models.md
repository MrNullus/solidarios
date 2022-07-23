# Models

Doc contendo informações dos models feitos no projeto  🙂

## User

A classe User faz intermedio com a tabela 'usuario' no banco de dados. Contento os métodos uteis para a interação das views e controllers.
<br><br>

### (method) User::verify_user

| Função |
-----------
Retorna `true`, se achar o usuario, senão `false`.

| Params       | Descrição
---------------|---------------|
**string** $nickname  | nome do usuario a ser verificado |
**string** $password    | senha do próprio |

**Sintaxe basica:**

```php
$nickname = "Anonimo666";
// Deve ser sempre convertida no padrão de criptografia md5
$password = md5("senhaSegura123");

echo "Usuario existe? ". User::verify_user($nickname, $password);
```

<br><br>

### (method) User::getId

| Função |
-----------
Retorna o `id` do usuario, que possui determinado `nickname` e `password`. Passados pelo metodo em questão.

| Params       | Descrição     |
---------------|---------------|
**string** $nickname    | nickname do usuario |
**string** $password    | senha do usuario |

**Sintaxe basica:**

```php
$nickname = "Godofredo";
// Deve ser sempre convertida no padrão de criptografia md5
$password = md5("1245")

$id_user = User::getId($nickname, $password);
```

<br><br>

### (method) User::getImgProfile

| Função |
-----------
Retorna a imagem de perfil do usuario, que possui determinado `id`.

| Params       | Descrição     |
---------------|---------------|
**number** $id_usuario  | id do usuario |

**Sintaxe basica:**

```php
$id_usuario = 1;

$imgprofile = User::getImgProfile($id_usuario);
```

<br><br>

### (method) User::setImgProfile

| Função |
-----------
Seta uma imagem de perfil

| Params       | Descrição     |
---------------|---------------|
**string** $nickname | nome do usuario
**string** $new_img | nova imagem a ser inserida no banco

**Sintaxe basica:**

```php
$nickname = "Lorem";
$new_img = "lipsum.png";

User::setImgProfile($nickname, $new_img);
```

<br><br>

### (method) User::getUser

| Função |
-----------
Retorna todos os dados de determinado usuario existente no banco, atraves do `id` do próprio.

| Params       | Descrição     |
---------------|---------------|
**number** $id_usuario | id do usuario |

**Sintaxe basica:**

```php
$id_usuario = 1;

$user = User::getUser($id_usuario);
```

<br><br>

### (method) User::setNewUser

| Função |
-----------
Insere um novo usuario no banco, usando um array para setar todas as informações requeridas

| Params       | Descrição     |
---------------|---------------|
**array** $arr_info | array com as informações a serem inseridas no banco |

**Sintaxe basica:**

```php
// Os nomes das keys (chaves) do `arr_info` devem ser respeitados, 
// caso contrario, não serão validos e então dará erro
$arr_info = array(
    ":nome" => addslashes($_POST['nome']),
    ":nick" => addslashes($_POST['user']),
    ":idade" => addslashes($_POST['idade']),
    ":cep" => addslashes($_POST['cep']),
    ":end" => addslashes($_POST['end']),
    ":mail" => addslashes($_POST['mail']),
    ":tel" => addslashes($_POST['tel']),
    ":cel" => addslashes($_POST['cel']),
    ":senha" => md5(addslashes($_POST['password']))
);

// retorna true se for criado, senão retorna false
User::setNewUser($arr_info);
```

<br><br>

---

## Product

A classe Product faz intermedio com a tabela 'produtos' no banco de dados. Contento os métodos uteis para a interação das views e controllers.
<br><br>

### (method) Product::verify_product

| Função |
-----------
Retorna `true`, se achar o produto, senão `false`.

| Params       | Descrição
---------------|---------------|
**string** $name_product  | nome do produto a ser verificado |
**number** $id_usuario    | id do usuario que cadastrou o produto |

**Sintaxe basica:**

```php
$name_product = "Produto A";
$id_usuario = 123;

Product::verify_product($name_product, $id_usuario);
```

<br><br>

### (method) Product::getId

| Função |
-----------
Retorna o `id` do produto.

| Params       | Descrição     |
---------------|---------------|
**number** $id_usuario    | id do usuario que cadastrou o produto |
**date** $data_validade   | validade do produto |
**string** $imgperfil     | imagem do perfil |

**Sintaxe basica:**

```php
$id_usuario = 123;

$data_validade = date('Y-m-d', $_POST['validade']);

$imgperfil = 'image.png';

$id_product = Product::getId($id_usuario, $data_validade, $imgperfil);
```

<br><br>

### (method) Product::getProduct

| Função |
-----------
Retorna todos os dados de determinado produto existente no banco, atraves do `id` do proprio.

| Params       | Descrição     |
---------------|---------------|
**number** $id_product | id do produto |

**Sintaxe basica:**

```php
$id_product = 123;

$product = Product::getProduct($id_product);
```

<br><br>

### (method) Product::setNewProduct

| Função |
-----------
Insere um novo produto no banco, usando um array para setar todas as informações requeridas

| Params       | Descrição     |
---------------|---------------|
**array** $arr_info | array com as informações a serem inseridas no banco |

**Sintaxe basica:**

```php
// Os nomes das keys (chaves) do `arr_info` devem ser respeitados, 
// caso contrario, não serão validos e então dará erro
$arr_info = array(
    "id_usuario" => $id_usuario,
    ":nome" => $nome_produto,
    ":data_validade" => $data_validade,
    ":doador" => $nickname,
    ":descricao" => $descricao,
    ":imgperfil" => $imgperfil
);

// retorna true se for criado, senão retorna false
Product::setNewProduct($arr_info);
```

<br><br>

### (method) Product::setImgProfile

| Função |
-----------
Seta uma imagem de perfil

| Params       | Descrição     |
---------------|---------------|
**string** $name_product | nome do produto
**string** $new_img | nova imagem a ser inserida no banco

**Sintaxe basica:**

```php
$name_product = "Lorem";
$new_img = "lipsum.png";

Product::setImgProfile($name_product, $new_img);
```
