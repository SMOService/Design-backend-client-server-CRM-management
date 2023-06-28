<?php

namespace App\Http\Livewire\Pages;

use App\Services\Server\CategoryService;
use App\Services\Server\ProductService;
use Livewire\Component;

class SubCategory extends Component {

    public $email;
    public $url;
    public $count;
    public $product;
    public $cart;
    public $paymentSystems;
    public $paymentSystem;

    public $paymentForm;

    public $category;
    public $currentCategory;
    public $products;
    public $currentProduct;

    public $price;
    public $countProducts = 1;

    protected $rules = [
        'url'           => 'required|active_url',
        'count'         => 'required|numeric',
    ];

    public function mount() {

        $categories = app(CategoryService::class)->list();

        $category = $categories->where('id', $this->category['id'])->firstOrFail();

        if ($category['parent'] ?? null) {
            $category['parentCategory'] = $categories->where('id', $category['parent'])->first();
        }

        $this->currentCategory = $category;


        $this->products =  app(ProductService::class)->list($category);

        $this->currentProduct = $this->products->firstOrFail();

        $this->count = $this->currentProduct['multiplicity'];

        $this->price = $this->currentProduct['prices']['price'];

        return true;

    }

    public function selectProduct($id)
    {
        $this->currentProduct = $this->products->where('id', $id)->firstOrFail();
        $this->updatePrice();
    }

    public function updatedCount()
    {
        if ($this->count < $this->currentProduct['attributes']['min_count']['value']) {
            $this->count = $this->currentProduct['attributes']['min_count']['value'];
        }

        $this->countProducts = $this->count / $this->currentProduct['multiplicity'];

        $this->updatePrice();

    }
    public function clickCount($type) {

        if ($type === 'plus') {
            $this->count += $this->currentProduct['multiplicity'];
        } else {
            $this->count -= $this->currentProduct['multiplicity'];
        }

        if ($this->count < $this->currentProduct['attributes']['min_count']['value']) {
            $this->count = $this->currentProduct['attributes']['min_count']['value'];
        }

        $this->countProducts = $this->count / $this->currentProduct['multiplicity'];

        $this->updatePrice();
    }

    public function submit()
    {

        $this->validate();

        session([
            'cart' => [
                'product_id' => $this->currentProduct['id'],
                'count' => $this->countProducts,
                'url'=>$this->url,
            ],
        ]);

        return redirect()->route('cart');

    }

    private function updatePrice()
    {
        $this->price = round($this->currentProduct['prices']['price'] * $this->countProducts, 2);
    }

    public function render() {
        return view('livewire.pages.sub-category');
    }

}
