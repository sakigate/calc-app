<?php

use function Livewire\Volt\{state, mount};

state(['num1', 'operator', 'num2', 'result', 'calc']);

mount(function () {
    if ($this->operator == 'addition') {
        $this->result = $this->num1 + $this->num2;
        $this->calc = '+';
    } elseif ($this->operator == 'subtraction') {
        $this->result = $this->num1 - $this->num2;
        $this->calc = '-';
    } elseif ($this->operator == 'multiplication') {
        $this->result = $this->num1 * $this->num2;
        $this->calc = '×';
    } elseif ($this->operator == 'division') {
        $this->result = $this->num1 / $this->num2;
        $this->calc = '÷';
    } else {
        $this->result = '無効な演算子です。';
        $this->calc = '?';
    }
});

?>

<div>
    <h1>計算結果</h1>
    <p>
        {{ $num1 }} {{ $calc }} {{ $num2 }} = {{ $result }}
    </p>
</div>
