<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Symfony\Component\Panther\PantherTestCase;

class MyTest extends PantherTestCase
{
    public function testButtonClick()
    {
        $client = static::createPantherClient();
        $client->request('GET', '/usuario/new');
        $button = $client->getCrawler()->filter('.btn-success')->first();
        // $button = $client->getCrawler()->selectButton('Crear Nuevo');
        // $button = $client->getCrawler()->filterXPath('//a[contains(text(), "Crear Nuevo")]')->first();
        $button->click();
        $newUrl = $client->getCurrentURL();
        $this->assertNotEquals('/usuario', $newUrl);
    }
}

// class SecondTest extends WebTestCase
// {
//     public function testSomething(): void
//     {
//         $client = static::createClient();
//         $crawler = $client->request('GET', '/');

//         $this->assertResponseIsSuccessful();
//         $this->assertSelectorTextContains('h1', 'Hello World');
//     }
// }
