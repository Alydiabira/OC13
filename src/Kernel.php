<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        // Import des fichiers YAML standards
        $routes->import('../config/routes/{routes}.yaml');
        $routes->import('../config/routes/*.yaml');

        // Import des routes spécifiques à l'environnement DEV
        if ($this->environment === 'dev') {
            $routes->import('../config/routes/dev/*.yaml');
        }

        // Import des controllers par attributs
        $routes->import('../src/Controller/', 'attribute');
    }
}
