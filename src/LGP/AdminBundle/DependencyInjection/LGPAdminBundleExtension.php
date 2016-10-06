<?php

/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 06/10/16
 * Time: 07:35
 */

namespace LGP\AdminBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Config\FileLocator;

class   LGPAdminBundleExtension extends Extension
{
  public function load(array $configs, ContainerBuilder $container) {
    // ...
    $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
    $loader->load('admin.yml');
  }
}