<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\ProdutoImagem;
use App\Models\Categoria;








use Illuminate\Support\Facades\DB;

class PRODUTOController
{
    public function index()
    {
        
        $produtos = PRODUTO::all();
        $imagens = ProdutoImagem::all();
        $categoria = Categoria::all();
        $dados = ['produtos' => $produtos, 'imagens' => $imagens, 'categoria' =>$categoria];

        

        //dd($teste);
      

      
        return view('eventos.index', compact('dados'));
        
 
        
    }
    public function show($id){
        $produtos = PRODUTO::where('PRODUTO_ID', $id)->first();

        if (!$produtos) {
            abort(404); // Produto não encontrado
        }
    
        $imagens = ProdutoImagem::where('produto_id', $id)->get();
        $categorias = Categoria::all();
    
        return view('eventos.show', compact('produtos', 'imagens', 'categorias'));
    }

    
}
