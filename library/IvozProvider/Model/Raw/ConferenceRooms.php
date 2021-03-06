<?php

/**
 * Application Model
 *
 * @package IvozProvider\Model\Raw
 * @subpackage Model
 * @author Luis Felipe Garcia
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * [entity][rest]
 *
 * @package IvozProvider\Model
 * @subpackage Model
 * @author Luis Felipe Garcia
 */

namespace IvozProvider\Model\Raw;
class ConferenceRooms extends ModelAbstract
{


    /**
     * Database var type int
     *
     * @var int
     */
    protected $_id;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_companyId;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_name;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_pinProtected;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_pinCode;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_maxMembers;


    /**
     * Parent relation ConferenceRooms_ibfk_1
     *
     * @var \IvozProvider\Model\Raw\Companies
     */
    protected $_Company;


    /**
     * Dependent relation ConditionalRoutes_ibfk_9
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\ConditionalRoutes[]
     */
    protected $_ConditionalRoutes;

    /**
     * Dependent relation ConditionalRoutesConditions_ibfk_9
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\ConditionalRoutesConditions[]
     */
    protected $_ConditionalRoutesConditions;

    /**
     * Dependent relation DDIs_ibfk_11
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\DDIs[]
     */
    protected $_DDIs;

    /**
     * Dependent relation Extensions_ibfk_5
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\Extensions[]
     */
    protected $_Extensions;

    protected $_columnsList = array(
        'id'=>'id',
        'companyId'=>'companyId',
        'name'=>'name',
        'pinProtected'=>'pinProtected',
        'pinCode'=>'pinCode',
        'maxMembers'=>'maxMembers',
    );

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        $this->setColumnsMeta(array(
        ));

        $this->setMultiLangColumnsList(array(
        ));

        $this->setAvailableLangs(array('es', 'en'));

        $this->setParentList(array(
            'ConferenceRoomsIbfk1'=> array(
                    'property' => 'Company',
                    'table_name' => 'Companies',
                ),
        ));

        $this->setDependentList(array(
            'ConditionalRoutesIbfk9' => array(
                    'property' => 'ConditionalRoutes',
                    'table_name' => 'ConditionalRoutes',
                ),
            'ConditionalRoutesConditionsIbfk9' => array(
                    'property' => 'ConditionalRoutesConditions',
                    'table_name' => 'ConditionalRoutesConditions',
                ),
            'DDIsIbfk11' => array(
                    'property' => 'DDIs',
                    'table_name' => 'DDIs',
                ),
            'ExtensionsIbfk5' => array(
                    'property' => 'Extensions',
                    'table_name' => 'Extensions',
                ),
        ));


        $this->setOnDeleteSetNullRelationships(array(
            'ConditionalRoutes_ibfk_9',
            'ConditionalRoutesConditions_ibfk_9'
        ));


        $this->_defaultValues = array(
            'pinProtected' => '0',
            'maxMembers' => '0',
        );

        $this->_initFileObjects();
        parent::__construct();
    }

    /**
     * This method is called just after parent's constructor
     */
    public function init()
    {
    }
    /**************************************************************************
    ************************** File System Object (FSO)************************
    ***************************************************************************/

    protected function _initFileObjects()
    {

        return $this;
    }

    public function getFileObjects()
    {

        return array();
    }


    /**************************************************************************
    *********************************** /FSO ***********************************
    ***************************************************************************/

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setId($data)
    {

        if ($this->_id != $data) {
            $this->_logChange('id', $this->_id, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_id = $data;

        } else if (!is_null($data)) {
            $this->_id = (int) $data;

        } else {
            $this->_id = $data;
        }
        return $this;
    }

    /**
     * Gets column id
     *
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setCompanyId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_companyId != $data) {
            $this->_logChange('companyId', $this->_companyId, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_companyId = $data;

        } else if (!is_null($data)) {
            $this->_companyId = (int) $data;

        } else {
            $this->_companyId = $data;
        }
        return $this;
    }

    /**
     * Gets column companyId
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->_companyId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setName($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_name != $data) {
            $this->_logChange('name', $this->_name, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_name = $data;

        } else if (!is_null($data)) {
            $this->_name = (string) $data;

        } else {
            $this->_name = $data;
        }
        return $this;
    }

    /**
     * Gets column name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setPinProtected($data)
    {

        if ($this->_pinProtected != $data) {
            $this->_logChange('pinProtected', $this->_pinProtected, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_pinProtected = $data;

        } else if (!is_null($data)) {
            $this->_pinProtected = (int) $data;

        } else {
            $this->_pinProtected = $data;
        }
        return $this;
    }

    /**
     * Gets column pinProtected
     *
     * @return int
     */
    public function getPinProtected()
    {
        return $this->_pinProtected;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setPinCode($data)
    {

        if ($this->_pinCode != $data) {
            $this->_logChange('pinCode', $this->_pinCode, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_pinCode = $data;

        } else if (!is_null($data)) {
            $this->_pinCode = (string) $data;

        } else {
            $this->_pinCode = $data;
        }
        return $this;
    }

    /**
     * Gets column pinCode
     *
     * @return string
     */
    public function getPinCode()
    {
        return $this->_pinCode;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setMaxMembers($data)
    {

        if ($this->_maxMembers != $data) {
            $this->_logChange('maxMembers', $this->_maxMembers, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_maxMembers = $data;

        } else if (!is_null($data)) {
            $this->_maxMembers = (int) $data;

        } else {
            $this->_maxMembers = $data;
        }
        return $this;
    }

    /**
     * Gets column maxMembers
     *
     * @return int
     */
    public function getMaxMembers()
    {
        return $this->_maxMembers;
    }

    /**
     * Sets parent relation Company
     *
     * @param \IvozProvider\Model\Raw\Companies $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setCompany(\IvozProvider\Model\Raw\Companies $data)
    {
        $this->_Company = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCompanyId($primaryKey);
        }

        $this->_setLoaded('ConferenceRoomsIbfk1');
        return $this;
    }

    /**
     * Gets parent Company
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\Companies
     */
    public function getCompany($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ConferenceRoomsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Company = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Company;
    }

    /**
     * Sets dependent relations ConditionalRoutes_ibfk_9
     *
     * @param array $data An array of \IvozProvider\Model\Raw\ConditionalRoutes
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setConditionalRoutes(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_ConditionalRoutes === null) {

                $this->getConditionalRoutes();
            }

            $oldRelations = $this->_ConditionalRoutes;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_ConditionalRoutes = array();

        foreach ($data as $object) {
            $this->addConditionalRoutes($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations ConditionalRoutes_ibfk_9
     *
     * @param \IvozProvider\Model\Raw\ConditionalRoutes $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function addConditionalRoutes(\IvozProvider\Model\Raw\ConditionalRoutes $data)
    {
        $this->_ConditionalRoutes[] = $data;
        $this->_setLoaded('ConditionalRoutesIbfk9');
        return $this;
    }

    /**
     * Gets dependent ConditionalRoutes_ibfk_9
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\ConditionalRoutes
     */
    public function getConditionalRoutes($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ConditionalRoutesIbfk9';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_ConditionalRoutes = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_ConditionalRoutes;
    }

    /**
     * Sets dependent relations ConditionalRoutesConditions_ibfk_9
     *
     * @param array $data An array of \IvozProvider\Model\Raw\ConditionalRoutesConditions
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setConditionalRoutesConditions(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_ConditionalRoutesConditions === null) {

                $this->getConditionalRoutesConditions();
            }

            $oldRelations = $this->_ConditionalRoutesConditions;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_ConditionalRoutesConditions = array();

        foreach ($data as $object) {
            $this->addConditionalRoutesConditions($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations ConditionalRoutesConditions_ibfk_9
     *
     * @param \IvozProvider\Model\Raw\ConditionalRoutesConditions $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function addConditionalRoutesConditions(\IvozProvider\Model\Raw\ConditionalRoutesConditions $data)
    {
        $this->_ConditionalRoutesConditions[] = $data;
        $this->_setLoaded('ConditionalRoutesConditionsIbfk9');
        return $this;
    }

    /**
     * Gets dependent ConditionalRoutesConditions_ibfk_9
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\ConditionalRoutesConditions
     */
    public function getConditionalRoutesConditions($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ConditionalRoutesConditionsIbfk9';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_ConditionalRoutesConditions = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_ConditionalRoutesConditions;
    }

    /**
     * Sets dependent relations DDIs_ibfk_11
     *
     * @param array $data An array of \IvozProvider\Model\Raw\DDIs
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setDDIs(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_DDIs === null) {

                $this->getDDIs();
            }

            $oldRelations = $this->_DDIs;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_DDIs = array();

        foreach ($data as $object) {
            $this->addDDIs($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations DDIs_ibfk_11
     *
     * @param \IvozProvider\Model\Raw\DDIs $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function addDDIs(\IvozProvider\Model\Raw\DDIs $data)
    {
        $this->_DDIs[] = $data;
        $this->_setLoaded('DDIsIbfk11');
        return $this;
    }

    /**
     * Gets dependent DDIs_ibfk_11
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\DDIs
     */
    public function getDDIs($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'DDIsIbfk11';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_DDIs = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_DDIs;
    }

    /**
     * Sets dependent relations Extensions_ibfk_5
     *
     * @param array $data An array of \IvozProvider\Model\Raw\Extensions
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function setExtensions(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Extensions === null) {

                $this->getExtensions();
            }

            $oldRelations = $this->_Extensions;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Extensions = array();

        foreach ($data as $object) {
            $this->addExtensions($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Extensions_ibfk_5
     *
     * @param \IvozProvider\Model\Raw\Extensions $data
     * @return \IvozProvider\Model\Raw\ConferenceRooms
     */
    public function addExtensions(\IvozProvider\Model\Raw\Extensions $data)
    {
        $this->_Extensions[] = $data;
        $this->_setLoaded('ExtensionsIbfk5');
        return $this;
    }

    /**
     * Gets dependent Extensions_ibfk_5
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\Extensions
     */
    public function getExtensions($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ExtensionsIbfk5';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Extensions = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Extensions;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return IvozProvider\Mapper\Sql\ConferenceRooms
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(true);

            if (class_exists('\IvozProvider\Mapper\Sql\ConferenceRooms')) {

                $this->setMapper(new \IvozProvider\Mapper\Sql\ConferenceRooms);

            } else {

                 new \Exception("Not a valid mapper class found");
            }

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(false);
        }

        return $this->_mapper;
    }

    /**
     * Returns the validator class for this model
     *
     * @return null | \IvozProvider\Model\Validator\ConferenceRooms
     */
    public function getValidator()
    {
        if ($this->_validator === null) {

            if (class_exists('\IvozProvider\\Validator\ConferenceRooms')) {

                $this->setValidator(new \IvozProvider\Validator\ConferenceRooms);
            }
        }

        return $this->_validator;
    }

    public function setFromArray($data)
    {
        return $this->getMapper()->loadModel($data, $this);
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
     * @see \Mapper\Sql\ConferenceRooms::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getId() === null) {
            $this->_logger->log('The value for Id cannot be null in deleteRowByPrimaryKey for ' . get_class($this), \Zend_Log::ERR);
            throw new \Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()->getDbTable()->delete(
            'id = ' .
             $this->getMapper()->getDbTable()->getAdapter()->quote($this->getId())
        );
    }

    public function mustUpdateEtag()
    {
        return true;
    }

}