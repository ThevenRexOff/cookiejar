<?php

declare(strict_types=1);

namespace Thevenrex\CookieJar;

class Cookie
{
    public const HTTP_ONLY = '#HttpOnly_';

    public array $cookie = [
        'domain' => '',
        'includeSubDomains' => 'FALSE',
        'path' => '/',
        'httpOnly' => 'TRUE',
        'expire' => '',
        'name' => '',
        'value' => '',
    ];

    public static function create(
        string $domain,
        bool $includeSubDomains,
        string $path,
        bool $httpOnly,
        int|string $expire,
        string $name,
        string $value
    ): self {
        return (new self())
            ->setDomain($domain)
            ->setIncludeSubDomains($includeSubDomains)
            ->setPath($path)
            ->setHttpOnly($httpOnly)
            ->setExpire($expire)
            ->setName($name)
            ->setValue($value);
    }

    public function setDomain(string $domain): self
    {
        $this->cookie['domain'] = $domain;

        return $this;
    }

    public function setIncludeSubDomains(bool $includeSubDomains): self
    {
        $this->cookie['includeSubDomains'] = $includeSubDomains ? 'TRUE' : 'FALSE';

        return $this;
    }

    public function setPath(string $path): self
    {
        $this->cookie['path'] = $path;

        return $this;
    }

    public function setHttpOnly(bool $httpOnly): self
    {
        $this->cookie['httpOnly'] = $httpOnly ? 'TRUE' : 'FALSE';

        return $this;
    }

    public function setExpire(int|string $expire): self
    {
        $this->cookie['expire'] = $expire;

        return $this;
    }

    public function setName(string $name): self
    {
        $this->cookie['name'] = $name;

        return $this;
    }

    public function setValue(string $value): self
    {
        $this->cookie['value'] = $value;

        return $this;
    }

    public function get(): string
    {
        $cookie = '';

        if ('TRUE' === $this->cookie['httpOnly']) {
            $this->cookie['domain'] = self::HTTP_ONLY . $this->cookie['domain'];
        }

        foreach ($this->cookie as $value) {
            $cookie .= $value . "\t";
        }

        return trim($cookie);
    }
}
