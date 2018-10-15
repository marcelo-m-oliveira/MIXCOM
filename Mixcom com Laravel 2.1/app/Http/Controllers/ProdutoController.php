<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Produtos extends Controller {



  public function detalharProduto($id){

    $nome = ["Catraca de Inox RBC 5905","Catraca Balcão"];
    $descricao = ["descricao A","descricao B"];
    $preco = ["900,00","998,00"];
    $imagem = ["/imagens/imagensRedimencionadas/catraca1.png","/imagens/imagensRedimencionadas/catraca2.png"];
    $info = [$nome[$id], $descricao[$id], $preco[$id], $imagem[$id]];
       return view('produtoTeste', compact('info'));
  }

}
?>