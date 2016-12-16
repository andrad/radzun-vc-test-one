<?php

namespace Dartius\FileSaver;

class FileManager implements \Dartius\FileSaver\FileManagerInterface
{
    /**
     * @var \Dartius\FileSaver\Saver\SaverInterface
     */
    private $saver;

    /**
     * @var \Dartius\FileSaver\Reader\ReaderInterface
     */
    private $reader;

    /**
     * @var
     */
    private $file;

    public function __construct($file, \Dartius\FileSaver\Saver\SaverInterface $saver, \Dartius\FileSaver\Reader\ReaderInterface $reader)
    {
        $this->file = $file;
        $this->saver = $saver;
        $this->reader = $reader;
    }

    public function save()
    {
        $this->saver->save($this->file);

        return $this;
    }

    public function getInfo()
    {
        $this->reader->getInfo($this->file);
    }

    public function getSpecificInfo()
    {
        $this->reader->getSpecificInfo($this->file);
    }
}
