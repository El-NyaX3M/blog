<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public function __construct($type = 'primary')
    {
        switch ($type) {
            case 'primary':
                $class = 'alert-primary';
                break;
            
            case 'success':
                $class = 'alert-success';
                break;

            case 'danger':
                $class = 'alert-danger';
                break;

            case 'info':
                $class = 'alert-info';
                break;

            case 'dark':
                $class = 'alert-dark';
                break;

            default:
                $class = 'alert-primary';
                break;
        }

        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
