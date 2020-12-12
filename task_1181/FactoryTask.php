<?php

class TextDocument
{
	protected $text;

	public function __construct(string $text)
	{
		$this->text = $text;
	}

	public function print(): void
	{
		echo "TextDocument: {$this->text}\n";
	}
}

class PdfDocument
{
	protected $text;

	public function setText(string $text): void
	{
		$this->text = $text;
	}

	public function print(): void
	{
		echo "PdfDocument: {$this->text}\n";
	}
}

/*
 	�������������� �������� �������������� "��������� �����"

	$documentText = 'Document text here';

	DocumentPrinter::print('text', $documentText);
	//TextDocument

	DocumentPrinter::print('pdf', $documentText);
	//PdfDocument
 */
