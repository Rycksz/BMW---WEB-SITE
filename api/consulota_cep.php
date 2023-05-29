<?php

function consultaCep() {
    // Validação
    $cep = $_POST['cep'];

    if (empty($cep)) {
        echo 'Digite um CEP para consulta!';
        return;
    }

    if (strlen($cep) < 8 || strlen($cep) >= 9) {
        echo 'CEP inválido!';
        return;
    }

    $url = "https://viacep.com.br/ws/{$cep}/json/";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    mostraDados($data);
}

function mostraDados($dados) {
    $consulta = $_POST['consulta'];

    if ($dados['erro']) {
        echo 'CEP não encontrado!';
    } else {
        $consulta = "<p>CEP: {$dados['cep']}</p>
                     <p>Endereço: {$dados['logradouro']}</p>
                     <p>DDD: {$dados['ddd']}</p>
                     <p>Complemento: {$dados['complemento']}</p>
                     <p>Bairro: {$dados['bairro']}</p>
                     <p>Cidade: {$dados['localidade']} - {$dados['uf']}</p>";
    }

    echo $consulta;
}

// Chamar a função consultaCep() quando o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    consultaCep();
}
?>