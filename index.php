<form action="salvar.php" method="post">
    <label> Tipo: </label>
    <select name="tipo" required>
        <option value="Aluno">Aluno</option>
        <option value="Professor">Professor</option>
        <option value="Funcionário">Funcionário</option>
</select>
<label>Nome:</label>
<input type="text" name="nome" required>

<label>Email:</label>
<input type="email" name="email" required>

<label>Informação específica:</label>
<input type="text" name="extra" required>

<button type="submit">Cadastrar</button>
</form>

foreach ($usuarios as $dados) {
    if ($dados["tipo"] === "Aluno") {
        $objeto = new Aluno {
            $dados[]