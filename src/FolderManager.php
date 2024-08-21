<?php

namespace Thevenrex\CookieJar;

class FolderManager
{
    private string $directory;

    protected function existDirectory(string $directory)
    {
        if (!is_dir($directory)) {
            mkdir($directory, 0777);
        }
    }

    public function setDirectory(string $directory, bool $create = true)
    {
        if ($create) {
            $this->existDirectory($directory);
        }

        $this->directory = $directory;
        return $this;
    }
    
    public function getDirectory()
    {
        return $this->directory;
    }
}
