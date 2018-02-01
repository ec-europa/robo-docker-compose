<?php

namespace EC\OpenEuropa\RoboDockerCompose\Task;

use EC\OpenEuropa\RoboDockerCompose\DockerServicesTrait;

/**
 * Define docker compose start command.
 */
class Start extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'start';
}
