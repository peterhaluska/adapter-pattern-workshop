<?php

namespace Lib\JsonFileCreator;


use Exception;

class JsonFileCreator implements FileCreator
{
    /** @var string */
    private $filepath = null;

    /**
     */
    public function __construct()
    {
    }

    /**
     * @param string $filepath
     *
     * @throws Exception
     */
    public function createFile(string $filepath): void
    {
        if (pathinfo($filepath, PATHINFO_EXTENSION) !== 'json') {
            throw new Exception('Something went terribly wrong...we should create JSON files only!');
        }

        $result = fopen($filepath, "w");

        if ($result === false) {
            throw new Exception('Could not create file ' . $filepath);
        }

        $this->filepath = $filepath;
    }

    /**
     * @param array $data
     *
     * @throws Exception
     */
    public function writeToFile(array $data): void
    {
        if ($this->filepath === null) {
            throw new Exception('Sorry, we cannot write to a non-existing file...');
        }

        $file = fopen($this->filepath, "a+");
        fwrite($file, json_encode($data));
        fclose($file);
    }

    /**
     * @return string
     */
    public function getCreatedFilepath(): string
    {
        return $this->filepath;
    }
}
