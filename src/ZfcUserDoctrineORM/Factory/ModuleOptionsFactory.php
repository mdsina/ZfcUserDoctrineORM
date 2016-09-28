<?php
namespace ZfcUserDoctrineORM\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use ZfcUserDoctrineORM\Options\ModuleOptions;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $serviceLocator, $name, array $options = null)
    {
        $config = $serviceLocator->get('Config');

        return new ModuleOptions(isset($config['zfcuser']) ? $config['zfcuser'] : array());
    }
}
