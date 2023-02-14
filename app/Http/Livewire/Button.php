<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $text;

    public function redirectTo($url)
    {
        echo '<script>window.location.href = "'.$url.'"</script>';
    }

    public function render()
    {
        return view('livewire.button');
    }
}