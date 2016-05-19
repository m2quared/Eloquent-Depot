<?php

namespace M2quared\Repository\Events;

/**
 * Class RepositoryEntityUpdated.
 */
class RepositoryEntityUpdated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = 'updated';
}
