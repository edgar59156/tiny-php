<?php

namespace Tiny\View\Components;

class Table extends BaseComponent
{
    public function render(): string
    {
        $type = $this->e($this->props['type'] ?? 'button');
        $class = $this->e($this->props['class'] ?? '');
        $label = $this->e($this->props['label'] ?? 'Click');

        return <<<HTML
            <table class="table">
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
            </table>
        HTML;
    }
}
