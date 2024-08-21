<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Thevenrex\CookieJar\Cookie;
use Thevenrex\CookieJar\CookieJar;
use Thevenrex\CookieJar\FolderManager;

$cookieHandler = new CookieJar(
    (new FolderManager)->setDirectory(__DIR__ . '/Cache')
);

$cookieHandler->setFileName('cookies.txt')
    ->add(Cookie::create('.github.com', true, '/', false, '1755803519', '_octo', 'GH1.1.1500338968.1724267519'))
    ->add(Cookie::create('.github.com', true, '/', true, '0', '_gh_sess', 'DddcM%2B2tDfeeT3aGlAwzQ1K%2BS2TVp2k3XdE7MoatjJK8aGOjfty1gRUis4b4qGQ4EGyc%2BGtNS5r7VCf06K%2Fp5zmHFnz63HULpayqR0GtrqJLgri%2Bbjjv%2FoIcYrpH0eEWhilqiBd8CHA01JmffgsgETsn3TO4LptTInT6239SBWoMQlcubuIYxhqKJ4hV6L8uTFkzJWF283uTjqwBjIMacScYm9JCyoKPjxaobM5nx%2Fsb26QigjYeSjC2YsYNu8FbgSC5t9IlQaDykGDfLInzWw%3D%3D--0aeeGvlNwvFlJKBa--J%2Fo4%2FomX3tkauxXUuAKpTQ%3D%3D'))
;

echo $cookieHandler->get() . PHP_EOL;

$cookieHandler->save();

echo $cookieHandler->getFileName() . PHP_EOL;

// cleanup
unlink($cookieHandler->getFileName());
