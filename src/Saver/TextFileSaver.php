<?php

namespace Dartius\FileSaver\Saver;

class TextFileSaver implements \Dartius\FileSaver\Saver\SaverInterface
{
    private $file;

    public function save($file)
    {
        $this->file = $file;
        $this->preSave();
        $this->process();

        return true;
    }

    private function preSave()
    {
        return $this->file;
    }

    private function process()
    {
        return $this;
    }
}
