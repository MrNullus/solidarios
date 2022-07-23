<?php
$product = new Product($pdo);
$products = $product->getProducts();
?>

<?php foreach($products as $item): ?>
    <table
        width="40%" cellspacing="6" cellpadding="12" align="center"
    >
        <tr>
            <td colspan="2">
                <?php if (!isset($item['imgperfil'])) {
                    echo "<img src='".URL_BASE_IMGS."/profile_default/perfilbase.png' alt='Foto de perfil' id='fotoperfil' />";
                } else {
                    $imglink = $item['imgperfil'];
                    $path = URL_BASE_IMGS."/profile_user/".$imglink;

                    if (file_exists($path)) {
                        echo "<img src='".URL_BASE_IMGS."/profile_user/".$imglink."' id='fotoperfil' alt='fotoperfil' />";
                    } else {
                        echo "<img src='".URL_BASE_IMGS."/presente.jpg' alt='Foto de perfil' id='fotoperfil' />";
                    }
                } ?>
            </td>
        </tr>

        <tr>
            <th>Nome</th>
            <th>Doador</th>
        </tr>

        <tr>
            <td>
                <?php echo $item['nome']; ?>
            </td>
            <td>
                <?php echo $item['doador']; ?>
            </td>
        </tr>

        <tr>
            <th colspan="2">Data Validade</th>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <?php echo $item['data_validade']; ?>
            </td>
        </tr>

        <tr>
            <th colspan="3">Descrição</th>
        </tr>
        <tr>
            <td>
                <?php echo $item['descricao']; ?>
            </td>
        </tr>

        <tr>
            <td>
                <a href="receber.php?p=<?php echo $item['id']; ?>">
                    Receber
                </a>
            </td>
        </tr>
    </table>
    <br><br>
<?php endforeach; ?>