<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $num1 = 0;
    public $num2 = 0;
    public string $op = '+';
    public float $res = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $num1 = (float)$this->num1;
        $num2 = (float)$this->num2;

        if ($this->op == '-') {
            $this->res = $num1 - $num2;
        } elseif ($this->op == '+') {
            $this->res = $num1 + $num2;
        } elseif ($this->op == '*') {
            $this->res = $num1 * $num2;
        } elseif ($this->op == '/') {
            $this->res = $num1 / $num2;
        } elseif ($this->op == '%') {
            $this->res = $num1 % $num2;
        }
    }
    public function updated()
    {
        if ($this->num1 == '' || $this->num2 == '') {
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }
}
