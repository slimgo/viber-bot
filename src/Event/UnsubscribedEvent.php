<?php
/**
 * Created by PhpStorm.
 * User: nemanja.ivankovic
 * Date: 12/24/2018
 * Time: 3:08 PM.
 */

namespace Paragraf\ViberBot\Event;

use Paragraf\ViberBot\Intefaces\EventInterface;

class UnsubscribedEvent extends Event implements EventInterface
{
    public $event = 'unsubscribed';

    public $user_id;

    public function __construct($timestamp, $message_token, $user_id)
    {
        parent::__construct($timestamp, $message_token);

        $this->user_id = $user_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }
}
