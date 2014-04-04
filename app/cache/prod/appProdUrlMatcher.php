<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // wolf_scm_city_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wolf_scm_city_homepage')), array (  '_controller' => 'Wolf\\ScmCityBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/comuni')) {
            // comuni
            if (rtrim($pathinfo, '/') === '/comuni') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'comuni');
                }

                return array (  '_controller' => 'Wolf\\ScmCityBundle\\Controller\\comuniAttivatiController::indexAction',  '_route' => 'comuni',);
            }

            // comuni_show
            if (preg_match('#^/comuni/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comuni_show')), array (  '_controller' => 'Wolf\\ScmCityBundle\\Controller\\comuniAttivatiController::showAction',));
            }

            // comuni_new
            if ($pathinfo === '/comuni/new') {
                return array (  '_controller' => 'Wolf\\ScmCityBundle\\Controller\\comuniAttivatiController::newAction',  '_route' => 'comuni_new',);
            }

            // comuni_create
            if ($pathinfo === '/comuni/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_comuni_create;
                }

                return array (  '_controller' => 'Wolf\\ScmCityBundle\\Controller\\comuniAttivatiController::createAction',  '_route' => 'comuni_create',);
            }
            not_comuni_create:

            // comuni_edit
            if (preg_match('#^/comuni/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comuni_edit')), array (  '_controller' => 'Wolf\\ScmCityBundle\\Controller\\comuniAttivatiController::editAction',));
            }

            // comuni_update
            if (preg_match('#^/comuni/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_comuni_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comuni_update')), array (  '_controller' => 'Wolf\\ScmCityBundle\\Controller\\comuniAttivatiController::updateAction',));
            }
            not_comuni_update:

            // comuni_delete
            if (preg_match('#^/comuni/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_comuni_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comuni_delete')), array (  '_controller' => 'Wolf\\ScmCityBundle\\Controller\\comuniAttivatiController::deleteAction',));
            }
            not_comuni_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
