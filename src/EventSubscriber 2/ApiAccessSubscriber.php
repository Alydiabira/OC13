<?php

namespace App\EventSubscriber;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ApiAccessSubscriber implements EventSubscriberInterface
{
    public function onAuthenticationSuccessEvent(AuthenticationSuccessEvent $event): void
    {
        // ...
    }

    public static function getSubscribedEvents(): array
    {
        return [
            AuthenticationSuccessEvent::class => 'onAuthenticationSuccessEvent',
        ];
    }
}
