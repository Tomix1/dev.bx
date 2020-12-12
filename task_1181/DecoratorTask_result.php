<?php

interface Figure
{
	public function draw(): void;
}

class RedShape implements Figure
{
	public function draw(): void
	{
		echo "Red colored ";
	}
}

abstract class FigureDecorator implements Figure
{
	/** @var Figure  */
	protected $figure;

	public function __construct(Figure $figure)
	{
		$this->figure = $figure;
	}

	public function draw(): void
	{
		$this->figure->draw();
	}
}

class Square extends FigureDecorator
{
	public function draw(): void
	{
		parent::draw();
		echo "Shape Square\n";
	}
}

class Circle extends FigureDecorator
{
	public function draw(): void
	{
		parent::draw();
		echo "Shape Circle\n";
	}
}

$redShape = new RedShape();
$redShape = new Circle($redShape);

$redShape->draw();
