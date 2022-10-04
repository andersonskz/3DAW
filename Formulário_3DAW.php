<!DOCTYPE html>
	<html>
		<header>
			<title>Formulário</title>
		 </header>
<body>

    <form method="get">
        <fieldset name="userinfo">
            <label for="Nome">Nome</label>
            <input type="text" name="Nome" id ="Nome">
            <label for="Idade">Idade</label>
            <input type="text" name="Idade" id="Idade">
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>

<?php   

    $ehpost = true;
    if($_SERVER["REQUEST_METHOD"] == "GET"){

        $Nome = $_GET["Nome"];
        $Idade = $_GET["Idade"];
        $arquivo = fopen("Alunos.txt","w");
        $txt = "Nome  Idade\n";
        fwrite($arquivo,$txt);
        $txt ="$Nome  $Idade";  "\n";
        fwrite($arquivo,$txt);
        fclose($arquivo);
    }

?>