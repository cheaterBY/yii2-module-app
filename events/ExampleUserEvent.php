<?php

namespace app\events;

use app\models\entities\ExampleUser;
use yii\base\Event;

class ExampleUserEvent extends Event
{
    public $user;

    /**
     * @param ExampleUser $user
     * @param array $config
     */
    public function __construct($user, $config = [])
    {
        parent::__construct($config);
        $this->user = $user;
    }
}