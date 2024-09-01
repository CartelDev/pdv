<?php 

namespace App\Services;

use App\Repositories\ProdutoRepository;

class ProdutoService {
    protected $produtoRepository;

    public function __construct(ProdutoRepository $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    public function create(array $data) {
        return $this->produtoRepository->create($data);
    }

    public function addProduto(array $data) {
        try {
            $this->produtoRepository->addProduto($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
        return $this->produtoRepository->addProduto($data);
    }
}