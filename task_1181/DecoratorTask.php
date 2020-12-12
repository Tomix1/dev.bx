<?php

class Square
{
	public function draw(): void
	{
		echo "Shape Square\n";
	}
}

class Circle
{
	public function draw(): void
	{
		echo "Shape Circle\n";
	}
}

/*
	Необходимо воспользоваться шаблоном проектирования "Декоратор" для того, чтобы иметь возможность
	"получать" в итоге фигуры разных цветов, например вызов декоратора:
	$redShape->draw();
	должен вывести:
	"Red colored Shape Square" либо "Red colored Shape Circle"
	в зависимости от того, какую фигуру мы оборачиваем декоратором.
 */

