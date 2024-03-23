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


<div style="display: flex; justify-content: space-evenly;">
<form action="/pages/forms/delete_all.php" method="POST" role="form">
    <button type="submit" class="btn btn-primary">Apagar todos os usuários</button>
</form>

<form action="/pages/forms/delete_table.php" method="POST" role="form">
    <button type="submit" class="btn btn-primary">Apagar tabela</button>
</form>

<form action="/pages/forms/create_table.php" method="POST" role="form">
    <button type="submit" class="btn btn-primary">Criar tabela</button>
</form>
</div>

