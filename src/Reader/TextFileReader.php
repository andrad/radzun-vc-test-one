<?php

namespace Dartius\FileSaver\Saver;

class TextFileReader implements \Dartius\FileSaver\Reader\ReaderInterface
{
    private $file;

    public function getInfo($file)
    {
        $this->file = $file;
        $this->process();

        return [];
    }

    public function getSpecificInfo($file)
    {
        $this->file = $file;
        $this->process();

        return [];
    }

    private function process()
    {
        return $this;
    }
}
