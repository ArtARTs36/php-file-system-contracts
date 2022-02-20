<?php

namespace ArtARTs36\FileSystem\Contracts;

/**
 * Interface for FileSystem.
 */
interface FileSystem
{
    /**
     * Remove file by path.
     */
    public function removeFile(string $path): bool;

    /**
     * Recursive remove dir by path.
     */
    public function removeDir(string $path): bool;

    /**
     * Get all file paths from directory.
     * @return array<string>
     */
    public function getFromDirectory(string $path): array;

    /**
     * Down path at 1 level.
     */
    public function downPath(string $path): string;

    /**
     * Create directory.
     */
    public function createDir(string $path, int $permissions = 0755): bool;

    /**
     * Check exists file or directory.
     */
    public function exists(string $path): bool;

    /**
     * Create File.
     */
    public function createFile(string $path, string $content): bool;

    /**
     * Get file content by path.
     * @throws FileNotFound
     */
    public function getFileContent(string $path): string;

    /**
     * Get updated date for file.
     * @throws FileNotFound
     */
    public function getLastUpdateDate(string $path): \DateTimeInterface;

    /**
     * Get real path for file.
     * @throws FileNotFound
     */
    public function getAbsolutePath(string $path): string;

    /**
     * Get temporary directory path.
     */
    public function getTmpDir(): string;
}
