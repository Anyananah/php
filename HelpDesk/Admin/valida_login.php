<?php
// echo '!Teste Ok!';
// print_r($_GET);
// echo '<br>';
// echo $_GET['Email'];
// echo '<br>';
// echo $_GET['Senha'];

// print_r($_POST);
// echo '<br>';
// echo $_POST['Email'];
// echo '<br>';
// echo $_POST['Senha'];

session_start();

$usuarios_autenticado = false;

$usuarios_app = array(
    array('Email' => 'adm@teste.com.br', 'Senha' => '1234'),
    array('Email' => 'user@teste.com.br', 'Senha' => '5678')
);

foreach($usuarios_app as $user){
    if($user['Email'] == $_POST['Email'] && $user['Senha'] == $_POST['Senha']){
        $usuarios_autenticado = true;
    };
};

if($usuarios_autenticado){
    // echo 'Usuário autenticado com sucesso';
    header('Location: home.php');
    $_SESSION['Autenticado'] = 'SIM';
} else {
    // echo 'Erro de autenticação'; 
    $_SESSION['Autenticado'] = 'NÃO';   
    header('Location: index.php?login=error');
};

?>