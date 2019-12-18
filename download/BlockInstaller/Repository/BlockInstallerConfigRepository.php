<?php
/*
* Plugin Name : BlockInstaller
*/

namespace Plugin\BlockInstaller\Repository;

use Eccube\Common\EccubeConfig;
use Eccube\Repository\AbstractRepository;
use Plugin\BlockInstaller\Entity\BlockInstallerConfig;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * BlockInstaller Config.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BlockInstallerConfigRepository extends AbstractRepository
{
    /**
     * @var ContainerInterface
     */
    protected $containerInterface;

    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * BlockInstallerConfigRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(
        RegistryInterface $registry,
        ContainerInterface $container
    )
    {
        parent::__construct($registry, BlockInstallerConfig::class);
        $this->containerInterface = $container;
    }

    /**
     * @param int $id
     *
     * @return null|BlockInstallerConfig
     */
    public function get($id = 1)
    {
        return $this->find($id);
    }
}
