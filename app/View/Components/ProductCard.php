<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
	public $id;
	public $name;
	public $unitaryCost;
	public $imgName;
    /**
	 * Create a new component instance.
     */
    public function __construct($id, $name, $unitaryCost, $imgName)
    {
		$this->id = $id;
		$this->name = $name;
        $this->unitaryCost = $unitaryCost;
        $this->imgName = $imgName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
