<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public function __construct($type = 'info')
    {
        //
        switch ($type) {
            case 'info':
                $class = 'text-blue-800  bg-blue-50 dark:bg-gray-800 dark:text-blue-400"';
                break;
            case 'danger':
                $class = 'text-red-800  bg-red-50 dark:bg-gray-800 dark:text-blue-400"';
                break;
            case 'success':
                 $class = 'text-green-800  bg-green-50 dark:bg-gray-800 dark:text-blue-400"';
                break;
            case 'warning':
                $class = 'text-yellow-800  bg-yellow-50 dark:bg-gray-800 dark:text-blue-400"';
                break;
            case 'dark':
                $class = 'text-black-800  bg-black-50 dark:bg-gray-800 dark:text-blue-400"';
                break;
            default:
                $class = 'text-blue-800  bg-blue-50 dark:bg-gray-800 dark:text-blue-400"';
                break;
        }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
