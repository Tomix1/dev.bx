<?php

abstract class ChessFigure{
	protected $name = "";
	protected $coord_x = 0;
	protected $coord_y = 0;

	public function setName(string $s)
	{
		$this->name = $s;
	}
	public function setCoord_X(int $x)
	{
		$this->coord_x = $x;
	}
	public function setCoord_Y(int $y)
	{
		$this->coord_y = $y;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getCoord_X()
	{
		return $this->coord_x;
	}
	public function getCoord_Y()
	{
		return $this->coord_y;
	}
	abstract public function checkMove(int $x, int $y);
	public function makeMove(int $x, int $y)
	{
		if ($this->checkMove($x, $y)){
			$this->coord_x = $x;
			$this->coord_y = $y;
		}
	}
}

class Rook extends ChessFigure{
	public function checkMove(int $x, int $y)
	{
		if ($x === $this->coord_x || $y === $this->coord_y){
			return true;
		}
		return false;
	}
}

class Bishop extends ChessFigure{
	public function checkMove(int $x, int $y)
	{
		if ($this->coord_x + $x === $this->coord_y + $y){
			return true;
		}
		return false;
	}
}

class Queen extends ChessFigure{
	public function checkMove(int $x, int $y)
	{
		if ($x === $this->coord_x || $y === $this->coord_y){
			return true;
		}
		if ($this->coord_x + $x === $this->coord_y + $y){
			return true;
		}
		return false;
	}
}

function task(int $x1, int $y1, int $x2, int $y2){
	$ferz = new Queen();
	$ferz->setCoord_X($x1);
	$ferz->setCoord_Y($y1);
	if ($ferz->checkMove($x2, $y2)){
		return "Да";
	}
	return "Нет";
}

function tests(){
	echo "test 1: " . (task(1, 1, 5, 1) === "Да" ? " passed" : " failed") . PHP_EOL;
	echo "test 2: " . (task(1, 1, 1, 5) === "Да" ? " passed" : " failed") . PHP_EOL;
	echo "test 3: " . (task(1, 1, 5, 5) === "Да" ? " passed" : " failed") . PHP_EOL;
	echo "test 4: " . (task(1, 1, 2, 3) === "Нет" ? " passed" : " failed") . PHP_EOL;
}

tests();
