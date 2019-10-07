<?php

namespace Lib\JsonFileCreator;

interface FileCreator
{
    /**
     * @param string $filepath
     */
    public function createFile(string $filepath): void;

    /**
     * @param array $data
     */
    public function writeToFile(array $data): void;

    /**
     * @return string
     */
    public function getCreatedFilepath(): string;
}
