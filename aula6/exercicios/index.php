<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <form action="programa.php" method="post">
        <div>
            <input type="text" name="nome_comprador">
            <input type="text" name="email_comprador">
        </div>

        <div>

            <h2>Produtos</h2>

            <?php for ($i = 1; $i < 4; $i++) : ?>
                <div>
                    Nome produto <?php echo $i;?>
                    <input type="text" name="nome_produto<?php echo $i; ?>" />

                    Valor produto <?php echo $i; ?>
                    <input type="text" name="valor_produto<?php echo $i; ?>">

                    Valor frete <?php echo $i; ?>
                    <input type="text" name="valor_frete_produto<?php echo $i; ?>">

                    Quantidade <?php echo $i; ?>
                    <input type="text" name="quantidade_produto<?php echo $i;
                    ?>">
                </div>
            <?php endfor; ?>
            <input type="submit" value="Finalizar compra" />
        </div>
    </form>
</body>
</html>