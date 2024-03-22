<h2>Cadastrar usuário</h2>

<?php
$key = "message";
$message = getFlashMessage('message');

if ($message !== "") {
    showFlashMessage($message);
}

clearFlashMessage($key);

?>

<form action="/pages/forms/create_user.php" method="POST" role="form">
    <div class="form-group mb-4">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group mb-4">
        <label>Sobrenome</label>
        <input type="text" class="form-control" name="lastname" placeholder="Digite seu sobrenome">
    </div>

    <div class="form-group mb-4">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite o email">
    </div>

    <div class="form-group mb-4">
        <label>Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Digite o senha">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
