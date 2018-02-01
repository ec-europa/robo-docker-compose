<?php

namespace EC\OpenEuropa\RoboDockerCompose\Task;

use EC\OpenEuropa\RoboDockerCompose\DockerServicesTrait;

/**
 * Define docker compose pause command.
 */
class Pause extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'pause';
}
