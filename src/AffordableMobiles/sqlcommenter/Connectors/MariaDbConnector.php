<?php

declare(strict_types=1);

namespace AffordableMobiles\sqlcommenter\Connectors;

use Illuminate\Database\Connectors\MariaDbConnector as BaseMariaDbConnector;

class MariaDbConnector extends BaseMariaDbConnector
{
    use Concerns\ExtendsPDO;
}
