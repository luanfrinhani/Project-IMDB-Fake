<?php

namespace DummyNamespace;

use App\DataManager\Base\DataManager;
use App\Model\System\Dummy;

class DummyClass extends DataManager
{
    public function __construct(Dummy $dummy)
    {
        parent::__construct($dummy);
    }
}
