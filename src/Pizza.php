<?php

declare(strict_types=1);

namespace PizzaFactory;

class Pizza
{
    protected string $name;
    protected string $sauce;
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топпинги: " . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }

    public function getName(): string
    {
        return $this->name;
    }
}