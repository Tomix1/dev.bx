<?php

class Order
{
	protected $number;
	private $eventBus;

	public function __construct(EventBus $eventBus)
	{
		$this->number = rand(10000, 20000);
		$this->eventBus = $eventBus;
	}

	public function save(): void
	{
		echo "Order number {$this->number} was saved\n";
		$this->eventBus->publish('onOrderSave', $this);
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

class EventBus
{
	private $orders = [];

	public function save(string $eventType, callable $eventHandler): void
	{
		if(!isset($this->orders[$eventType]))
		{
			$this->orders[$eventType] = [];
		}

		$this->orders[$eventType][] = $eventHandler;
	}

	public function publish(string $eventType, $data): void
	{
		if(is_array($this->orders[$eventType]))
		{
			foreach ($this->orders[$eventType] as $eventHandler)
			{
				$eventHandler($data);
			}
		}
	}
}

$telegramSender = new TelegramSender();
$emailSender = new EmailSender();
$eventBus = new EventBus();

$order = new Order($eventBus);

$eventBus->save(
	'onOrderSave',
	function(Order $order) use ($telegramSender)
	{
		$telegramSender->send("{$order->getNumber()} saved");
	}
);

$eventBus->save(
	'onOrderSave',
	function(Order $order) use ($emailSender)
	{
		$emailSender->send("{$order->getNumber()} saved");
	}
);

$order->save();
