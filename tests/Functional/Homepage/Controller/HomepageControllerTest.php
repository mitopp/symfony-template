<?php

declare(strict_types=1);

namespace App\Tests\Functional\Homepage\Controller;

use App\Homepage\Controller\HomepageController;
use PHPUnit\Framework\Attributes\CoversClass;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

#[CoversClass(HomepageController::class)]
final class HomepageControllerTest extends WebTestCase
{
    public function testRendering(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        self::assertResponseIsSuccessful();
    }
}
