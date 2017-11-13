<?php

namespace MR\BlizzardSdk\Test\Wow;

use MR\BlizzardSdk\Request\Endpoint\Wow\BossEndpoint;
use MR\BlizzardSdk\Test\AbstractTest;

class BossTest extends AbstractTest
{
    public function testSuccessfulSingleBoss(): void
    {
        $client = $this->createClient(
            $this->loadMockResponse('wow/boss_successfull')
        );


        $bossEndpoint = new BossEndpoint($client, 'eu');

        var_dump($bossEndpoint->get(1));
    }
}
