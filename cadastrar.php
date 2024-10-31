<?php
//chamando o bando de dados
include 'db.php';

/***
//pedando os dados do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    // inserindo os dados do formuário no banco de daddos
    $stmt = $pdo->prepare("INSERT INTO registros (nome, sobrenome, endereco, bairro, cidade, estado, cep) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nome, $sobrenome, $endereco, $bairro, $cidade, $estado, $cep]);
    echo "Registro cadastrado com sucesso!";
}
 */
if ($_SERVER['REQUES_METHOD']=='POST') {
    $nome = $_POST['use phpformbuilder\Form;
    use phpformbuilder\Validator\Validator;
    
    @session_start();
    include_once rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . '/phpformbuilder/Form.php';
    
    /* =============================================
        validation if posted
    ============================================= */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && Form::testToken('my-form') === true) {
    
        // create validator & auto-validate required fields
        $validator = Form::validate('my-form');
    
        // additional validation
        $validator->email()->validate('user-email');
    
        // check for errors
        if ($validator->hasErrors()) {
            $_SESSION['errors']['my-form'] = $validator->getAllErrors();
        } else {
            $email_config = array(
                'sender_email'    => 'you@your-email.com',
                'sender_name'     => 'Php Form Builder',
                'recipient_email' => addslashes($_POST['user-email']),
                'subject'         => 'Contact from Php Form Builder',
                'filter_values'   => 'my-form, submit-btn, token'
            );
            $sent_message = Form::sendMail($email_config);
            Form::clear('my-form');
        }
    }
    $form = new Form('my-form', 'horizontal', 'novalidate');
    $form->addInput('text', 'user-name', '', 'Name', 'required');
    $form->addInput('text', 'user-first-name', '', 'First name', 'required');
    $form->addInput('text', 'user-email', '', 'First name', 'required');
    $form->addTextarea('user-message', '', 'Message', 'required');
    $form->centerContent();
    $form->addBtn('submit', 'submit-btn', 1, 'Submit', 'class=btn btn-primary ladda-button, data-style=zoom-in');
    ']
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- criando o formulário de cadastro -->
    <h1>Cadastrar Registro</h1>
    <form method="post">
        Nome: <input type="text" name="nome" required>
        Sobrenome: <input type="text" name="sobrenome" required><br>
        Endereço: <input type="text" name="endereco" required>
        Bairro: <input type="text" name="bairro" required>
        Cidade: <input type="text" name="cidade" required>
        Estado: <input type="text" name="estado" required>
        CEP: <input type="text" name="cep" required><br>
        <button type="submit" name="btn-entrar">Salvar</button>
    </form>
    <a href="index.php">Voltar</a> <!-- retornando ao index -->
</body>

</html>
