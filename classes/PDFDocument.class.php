<?php

namespace ENVWordCount
{
	class PDFDocument extends Document
	{
		protected $wordCount;

		protected function parseContents()
		{
			$this->document = fopen($this->file, 'r');

			//Logic to convert document to string goes here
		}

		protected function countWords()
		{
			$this->wordCount = str_word_count($this->document);
		}
	}
}