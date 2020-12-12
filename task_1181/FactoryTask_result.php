<?php

interface Document
{
	public function print(): void;
}

class TextDocument implements Document
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

class PdfDocument implements Document
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

abstract class DocumentFactory
{
	protected $text;

	public function __construct(string $text)
	{
		$this->text = $text;
	}

	abstract public function createDocument(): Document;
}

class TextDocumentFactory extends DocumentFactory
{
	public function createDocument(): Document
	{
		$document = new TextDocument($this->text);
		return $document;
	}
}

class PdfDocumentFactory extends DocumentFactory
{
	public function createDocument(): Document
	{
		$document = new PdfDocument();
		$document->setText($this->text);
		return $document;
	}
}

class DocumentPrinter
{
	public const DOCUMENT_TYPE_TEXT = 'text';
	public const DOCUMENT_TYPE_PDF = 'pdf';

	public static function printDocument(DocumentFactory $factory): void
	{
		$document = $factory->createDocument();
		$document->print();
	}

	public static function printDocumentByType(string $type, string $text): void
	{
		if($type === self::DOCUMENT_TYPE_TEXT)
		{
			$factory = new TextDocumentFactory($text);
		}
		elseif($type === self::DOCUMENT_TYPE_PDF)
		{
			$factory = new PdfDocumentFactory($text);
		}
		else
		{
			throw new \RuntimeException('Wrong document type');
		}

		self::printDocument($factory);
	}
}

$text = "Текст";

DocumentPrinter::printDocument(new TextDocumentFactory($text));
DocumentPrinter::printDocument(new PdfDocumentFactory($text));

DocumentPrinter::printDocumentByType(DocumentPrinter::DOCUMENT_TYPE_TEXT, $text);
DocumentPrinter::printDocumentByType(DocumentPrinter::DOCUMENT_TYPE_PDF, $text);
