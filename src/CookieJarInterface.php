<?php

namespace Thevenrex\CookieJar;

interface CookieJarInterface {

    public function setFileName(string $filename);

    public function getFileName(): string;
}
