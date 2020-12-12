<?php

class Order
{
	protected $number;

	public function __construct()
	{
		$this->number = rand(10000, 20000);
	}

	public function save(): void
	{
		echo "Order number {$this->number} was saved\n";
	}

	public function getNumber(): string
	{
		return $this->number;
	}
}

class TelegramSender
{
	public function send($message): void
	{
		echo "Message was sent via telegram: {$message}\n";
	}
}

class EmailSender
{
	public function send($message): void
	{
		echo "Message was sent via e-mail: {$message}\n";
	}
}

/*
 * ���������� ��������������� �������� �������������� "�������� ���������"
 * ����� ��� ������ ���������� ������
 * $order->save();
 * ��������� �� ���� ������������ �����
 * TelegramSender � EmailSender
 */