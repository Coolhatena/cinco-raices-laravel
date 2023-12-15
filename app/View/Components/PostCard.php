<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
	public $id;
	public $title;
    public $body;
    public $imgName;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $title, $body, $imgName)
    {
		$this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->imgName = $imgName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
