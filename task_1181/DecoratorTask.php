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
	���������� ��������������� �������� �������������� "���������" ��� ����, ����� ����� �����������
	"��������" � ����� ������ ������ ������, �������� ����� ����������:
	$redShape->draw();
	������ �������:
	"Red colored Shape Square" ���� "Red colored Shape Circle"
	� ����������� �� ����, ����� ������ �� ����������� �����������.
 */

