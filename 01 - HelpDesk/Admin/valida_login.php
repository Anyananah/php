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
$usuario_id = null;

$usuarios_app = array(
    array('Id' => '1', 'Email' => 'adm@teste.com.br', 'Senha' => '1234'),
    array('Id' => '2', 'Email' => 'user@teste.com.br', 'Senha' => '5678'),
    array('Id' => '3', 'Email' => 'nana@nana.com.br', 'Senha' => '91011')
);

foreach($usuarios_app as $user){
    if($user['Email'] == $_POST['Email'] && $user['Senha'] == $_POST['Senha']){
        $usuarios_autenticado = true;
        $usuario_id = $user['Id'];
    };
};

if($usuarios_autenticado){
    // echo 'Usuário autenticado com sucesso';
    $_SESSION['Autenticado'] = 'SIM';
    $_SESSION['Id'] = $usuario_id;
    header('Location: home.php');
} else {
    // echo 'Erro de autenticação'; 
    $_SESSION['Autenticado'] = 'NÃO';   
    header('Location: index.php?login=error');
};

?>