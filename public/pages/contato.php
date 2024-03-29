<h2>Contatos</h2>

<?php
$key = "message";
$message = getFlashMessage('message');

if ($message !== "") {
    showFlashMessage($message);
}

clearFlashMessage($key);

?>

<form action="/pages/forms/contato.php" method="POST" role="form">
    <div class="form-group mb-4">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group mb-4">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email">
    </div>

    <div class="form-group mb-4">
        <label>Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Digite o assunto">
    </div>

    <div class="form-group mb-4">
        <label>Mensagem</label>
        <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>
