<?php

namespace ArtARTs36\FileSystem\Contracts;

interface FileSystem
{
    /**
     * Remove file by path
     */
    public function removeFile(string $path): bool;

    /**
     * Recursive remove dir by path
     */
    public function removeDir(string $path): bool;

    /**
     * Get all file paths from directory
     * @return array<string>
     */
    public function getFromDirectory(string $path): array;

    /**
     * Down path at 1 level
     */
    public function downPath(string $path): string;

    /**
     * Create directory
     */
    public function createDir(string $path, int $permissions = 0755): bool;

    /**
     * Check exists file or directory
     */
    public function exists(string $path): bool;

    /**
     * Create File
     */
    public function createFile(string $path, string $content): bool;

    /**
     * @throws FileNotFound
     */
    public function getFileContent(string $path): string;

    /**
     * @throws FileNotFound
     */
    public function getLastUpdateDate(string $path): \DateTimeInterface;

    /**
     * @throws FileNotFound
     */
    public function getAbsolutePath(string $path): string;
}
