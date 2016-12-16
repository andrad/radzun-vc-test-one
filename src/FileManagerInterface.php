<?php

namespace Dartius\FileSaver;

interface FileManagerInterface
{
    public function save();
    public function getInfo();
    public function getSpecificInfo();
}
