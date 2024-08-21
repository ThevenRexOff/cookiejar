<?php

declare(strict_types=1);

namespace Thevenrex\CookieJar;

interface CookieJarInterface
{
    public function setFileName(string $filename);

    public function getFileName(): string;
}
