<?php

namespace NotificationChannels\MobitelSMS;

use NotificationChannels\MobitelSMS\Exceptions\CouldNotSendNotification;
use NotificationChannels\MobitelSMS\Events\MessageWasSent;
use NotificationChannels\MobitelSMS\Events\SendingMessage;
use Illuminate\Notifications\Notification;

class MobitelSMSChannel
{
    public function __construct()
    {
        // Initialisation code here
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\MobitelSMS\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
