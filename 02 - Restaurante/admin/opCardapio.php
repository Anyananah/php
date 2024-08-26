<?php
require_once "config.php";

if(!empty($_POST['txt_cardapio'])) {

    $cardapio = $_POST['txt_cardapio'];
    $foto = $_FILES['file_foto']['name'];

    $foto = str_replace("","", $foto);
    //Caminho Temporário
    $foto_temp = $_FILES['file_foto']['tmp_name'];
    $destino = "img/" . $foto;

};

// CADASTRAR
if(isset($_GET['acao']) && $_GET['acao'] == 'cadastrar'){

    if(move_uploaded_file($foto_temp, $destino)){
        $insert = $pdo->prepare("INSERT INTO cardapios (cardapio, foto) VALUES (?, ?)");
        $insert->bindParam(1, $cardapio);
        $insert->bindParam(2, $foto);
        $insert->execute();

        header("Location: pgCardapio.php");
    };
};

// EXCLUIR
if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){
    // echo "Cardápio excluído: id=" . $_GET['id'] . "<br>Fotos: " . $_GET['foto'];
    $id = $_GET['id'];
    $fato = $_GET['foto'];
    
    $del = $pdo->prepare("DELETE FROM cardapios WHERE idcardapio = ?");
    $del->bindValue(1, $id);
    $del->execute();

    unlink('img/' . $foto );
    header("Location: pgCardapio.php");
};


// echo "Carpádio: " . $cardapio . "<br> Foto: " . $foto;

