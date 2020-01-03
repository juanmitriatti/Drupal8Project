<?php

namespace Drupal\module_hero\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
/**
 * Our events suscriber;
 */
class HeroInitSubscriber implements EventSubscriberInterface {


  public function __construct( ) {

  }

  public function onRequest($event) {
    // The first Event when the request is being processed
    var_dump("Hello from our event");
  }

  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = ['onRequest'];
    return $events;
  }
}