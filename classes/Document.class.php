<?php

namespace ENVWordCount
{
	abstract class Document
	{
		abstract protected function parseContents();
		abstract protected function countWords();

		public function outputWordCount()
		{
			return $this->wordCount();
		}
	}
}