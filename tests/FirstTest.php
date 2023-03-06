<?php

namespace App\Tests;

use Symfony\Component\Panther\PantherTestCase;

class FirstTest extends PantherTestCase
{
    public function testSomething(): void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/usuario');

        $this->assertSelectorTextContains('h1', 'Indice de Usuarios');
    }

    public function testSomething2(): void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/post');

        $this->assertSelectorTextContains('h1', 'Post index');
    }

    public function testSomething3(): void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/post/new');

        $this->assertSelectorTextContains('h1', 'Crear Nuevo Post');
    }
}