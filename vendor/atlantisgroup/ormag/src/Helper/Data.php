<?phpnamespace AtlantisGroup\OrmAG\Helper;class Data{    /**     * @var array     */    protected static array $entityFieldTypesCache = [];    public static function changeType($entityClassName, array &$data)    {        $changeableTypes = ['float', 'decimal', 'double', 'integer', 'int', 'boolean', 'bool', 'datetime', 'array'];        if (!isset(self::$entityFieldTypesCache[$entityClassName])) {            dump('noting to change');        }    }}