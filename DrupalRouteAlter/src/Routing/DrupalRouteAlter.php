<?php

namespace Drupal\DrupalRouteAlter\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events and enables us to alter them.
 */
class DrupalRouteAlter extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
  // Change path '/user/login' to '/login'.
    $user_login_route = $collection->get('user.login');
    $user_login_route->setPath('/login');

    $user_route = $collection->get('user.page');
    $user_route->setPath('/userDetails');

    // Remove the /search route. 
    $collection->remove('search.view'); 

  }

}
