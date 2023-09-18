<?phpnamespace AtlantisGroup\OrmAGBundle\DependencyInjection;use Exception;use Symfony\Component\DependencyInjection\ContainerBuilder;use Symfony\Component\DependencyInjection\Loader;use Symfony\Component\Config\FileLocator;use Symfony\Component\HttpKernel\DependencyInjection\Extension;class OrmAGExtension extends Extension{    /**     * @var mixed     */    protected mixed $file = "services.yaml";    /**     * {@inheritDoc}     * @throws Exception     */    public function load(array $configs, ContainerBuilder $container)    {        $configuration = new Configuration();        $config = $this->processConfiguration($configuration, $configs);        foreach (array('server', 'user', 'pass', 'database', 'charset') as $attribute) {            var_dump($config);            $container->setParameter('ormAg.connection.' . $attribute, $config['connection'][$attribute]);        }        $loader = new Loader\YamlFileLoader(            $container,            new FileLocator(__DIR__ . '/../Resources/config')        );        $loader->load($this->file);    }}