<?php declare(strict_types=1);

namespace Codeplaza\HelloWorld\Storefront\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"storefront"})
 */
class HelloWorldController extends StorefrontController
{
    /**
    * @Route("/helloworld", name="frontend.helloworld.helloworld", methods={"GET"})
    */
    public function showHelloWorld(): Response
    {
        return $this->renderStorefront('@CodeplazaHelloWorld/storefront/page/helloworld/index.html.twig', [
            'helloworld' => 'Allhumdulliah!'
        ]);
    }
}