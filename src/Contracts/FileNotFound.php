<?php

namespace ArtARTs36\FileSystem\Contracts;

/**
 * Interface for exception "File not found".
 */
interface FileNotFound extends \Throwable
{
    /**
     * Get invalid file path
     */
    public function getInvalidFilePath(): string;
}
