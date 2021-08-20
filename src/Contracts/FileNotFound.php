<?php

namespace ArtARTs36\FileSystem\Contracts;

interface FileNotFound extends \Throwable
{
    /**
     * Get invalid file path
     */
    public function getInvalidFilePath(): string;
}
