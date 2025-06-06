<?php

namespace App\View\Components\Layout\Block;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Meta extends Component
{
    public $metaData;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($metaData, $title)
    {
        $this->metaData = $metaData;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.block.meta');
    }
}
