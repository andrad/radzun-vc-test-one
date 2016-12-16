<?php

namespace Dartius\FileSaver\Reader;

interface ReaderInterface
{
    public function getInfo($file);
    public function getSpecificInfo($file);
}
