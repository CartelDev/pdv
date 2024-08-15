<?php 

namespace App\Repositories;

use App\Models\Produtos;
use App\Models\Venda;

class ProdutoRepository {
    protected $produto;
    protected $venda;

    public function __construct(Produtos $produto, Venda $venda)
    {
        $this->produto = $produto;
        $this->venda = $venda;
    }

    public function create(array $data) {
        return $this->produto->create($data);
    }

    public function addProduto(array $data) {
        return $this->venda->findOrfail($data['id_venda'])->produtos()->attach($data['id_produto'], ['quantidade' => $data['quantidade']]);
    }
}