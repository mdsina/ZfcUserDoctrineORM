<?php
namespace ZfcUserDoctrineORM\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class UserMapperFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new \ZfcUserDoctrineORM\Mapper\User(
            $container->get('zfcuser_doctrine_em'),
            $container->get('zfcuser_module_options')
        );
    }
}
