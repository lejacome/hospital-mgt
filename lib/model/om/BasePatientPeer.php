<?php

/**
 * Base static class for performing query and update operations on the 'patient' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 06/28/11 12:06:05
 *
 * @package    lib.model.om
 */
abstract class BasePatientPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'patient';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.Patient';

	/** The total number of columns. */
	const NUM_COLUMNS = 21;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'patient.ID';

	/** the column name for the ID_NUMBER field */
	const ID_NUMBER = 'patient.ID_NUMBER';

	/** the column name for the CNIC field */
	const CNIC = 'patient.CNIC';

	/** the column name for the USERNAME field */
	const USERNAME = 'patient.USERNAME';

	/** the column name for the PASSWORD field */
	const PASSWORD = 'patient.PASSWORD';

	/** the column name for the NAME field */
	const NAME = 'patient.NAME';

	/** the column name for the FATHER_NAME field */
	const FATHER_NAME = 'patient.FATHER_NAME';

	/** the column name for the DOB field */
	const DOB = 'patient.DOB';

	/** the column name for the GENDER field */
	const GENDER = 'patient.GENDER';

	/** the column name for the ADDRESS field */
	const ADDRESS = 'patient.ADDRESS';

	/** the column name for the CONTACT_RES field */
	const CONTACT_RES = 'patient.CONTACT_RES';

	/** the column name for the CONTACT_CELL field */
	const CONTACT_CELL = 'patient.CONTACT_CELL';

	/** the column name for the EMERGENCY_CONTACT field */
	const EMERGENCY_CONTACT = 'patient.EMERGENCY_CONTACT';

	/** the column name for the EMAIL field */
	const EMAIL = 'patient.EMAIL';

	/** the column name for the BLOOD_GROUP field */
	const BLOOD_GROUP = 'patient.BLOOD_GROUP';

	/** the column name for the DISEASE field */
	const DISEASE = 'patient.DISEASE';

	/** the column name for the ALLERGY field */
	const ALLERGY = 'patient.ALLERGY';

	/** the column name for the DRUG_ALLERGY field */
	const DRUG_ALLERGY = 'patient.DRUG_ALLERGY';

	/** the column name for the STATUS field */
	const STATUS = 'patient.STATUS';

	/** the column name for the CREATED_AT field */
	const CREATED_AT = 'patient.CREATED_AT';

	/** the column name for the UPDATED_AT field */
	const UPDATED_AT = 'patient.UPDATED_AT';

	/**
	 * An identiy map to hold any loaded instances of Patient objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Patient[]
	 */
	public static $instances = array();

	/**
	 * The MapBuilder instance for this peer.
	 * @var        MapBuilder
	 */
	private static $mapBuilder = null;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IdNumber', 'Cnic', 'Username', 'Password', 'Name', 'FatherName', 'Dob', 'Gender', 'Address', 'ContactRes', 'ContactCell', 'EmergencyContact', 'Email', 'BloodGroup', 'Disease', 'Allergy', 'DrugAllergy', 'Status', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idNumber', 'cnic', 'username', 'password', 'name', 'fatherName', 'dob', 'gender', 'address', 'contactRes', 'contactCell', 'emergencyContact', 'email', 'bloodGroup', 'disease', 'allergy', 'drugAllergy', 'status', 'createdAt', 'updatedAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::ID_NUMBER, self::CNIC, self::USERNAME, self::PASSWORD, self::NAME, self::FATHER_NAME, self::DOB, self::GENDER, self::ADDRESS, self::CONTACT_RES, self::CONTACT_CELL, self::EMERGENCY_CONTACT, self::EMAIL, self::BLOOD_GROUP, self::DISEASE, self::ALLERGY, self::DRUG_ALLERGY, self::STATUS, self::CREATED_AT, self::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'id_number', 'cnic', 'username', 'password', 'name', 'father_name', 'dob', 'gender', 'address', 'contact_res', 'contact_cell', 'emergency_contact', 'email', 'blood_group', 'disease', 'allergy', 'drug_allergy', 'status', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdNumber' => 1, 'Cnic' => 2, 'Username' => 3, 'Password' => 4, 'Name' => 5, 'FatherName' => 6, 'Dob' => 7, 'Gender' => 8, 'Address' => 9, 'ContactRes' => 10, 'ContactCell' => 11, 'EmergencyContact' => 12, 'Email' => 13, 'BloodGroup' => 14, 'Disease' => 15, 'Allergy' => 16, 'DrugAllergy' => 17, 'Status' => 18, 'CreatedAt' => 19, 'UpdatedAt' => 20, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idNumber' => 1, 'cnic' => 2, 'username' => 3, 'password' => 4, 'name' => 5, 'fatherName' => 6, 'dob' => 7, 'gender' => 8, 'address' => 9, 'contactRes' => 10, 'contactCell' => 11, 'emergencyContact' => 12, 'email' => 13, 'bloodGroup' => 14, 'disease' => 15, 'allergy' => 16, 'drugAllergy' => 17, 'status' => 18, 'createdAt' => 19, 'updatedAt' => 20, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::ID_NUMBER => 1, self::CNIC => 2, self::USERNAME => 3, self::PASSWORD => 4, self::NAME => 5, self::FATHER_NAME => 6, self::DOB => 7, self::GENDER => 8, self::ADDRESS => 9, self::CONTACT_RES => 10, self::CONTACT_CELL => 11, self::EMERGENCY_CONTACT => 12, self::EMAIL => 13, self::BLOOD_GROUP => 14, self::DISEASE => 15, self::ALLERGY => 16, self::DRUG_ALLERGY => 17, self::STATUS => 18, self::CREATED_AT => 19, self::UPDATED_AT => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_number' => 1, 'cnic' => 2, 'username' => 3, 'password' => 4, 'name' => 5, 'father_name' => 6, 'dob' => 7, 'gender' => 8, 'address' => 9, 'contact_res' => 10, 'contact_cell' => 11, 'emergency_contact' => 12, 'email' => 13, 'blood_group' => 14, 'disease' => 15, 'allergy' => 16, 'drug_allergy' => 17, 'status' => 18, 'created_at' => 19, 'updated_at' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new PatientMapBuilder();
		}
		return self::$mapBuilder;
	}
	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. PatientPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(PatientPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(PatientPeer::ID);

		$criteria->addSelectColumn(PatientPeer::ID_NUMBER);

		$criteria->addSelectColumn(PatientPeer::CNIC);

		$criteria->addSelectColumn(PatientPeer::USERNAME);

		$criteria->addSelectColumn(PatientPeer::PASSWORD);

		$criteria->addSelectColumn(PatientPeer::NAME);

		$criteria->addSelectColumn(PatientPeer::FATHER_NAME);

		$criteria->addSelectColumn(PatientPeer::DOB);

		$criteria->addSelectColumn(PatientPeer::GENDER);

		$criteria->addSelectColumn(PatientPeer::ADDRESS);

		$criteria->addSelectColumn(PatientPeer::CONTACT_RES);

		$criteria->addSelectColumn(PatientPeer::CONTACT_CELL);

		$criteria->addSelectColumn(PatientPeer::EMERGENCY_CONTACT);

		$criteria->addSelectColumn(PatientPeer::EMAIL);

		$criteria->addSelectColumn(PatientPeer::BLOOD_GROUP);

		$criteria->addSelectColumn(PatientPeer::DISEASE);

		$criteria->addSelectColumn(PatientPeer::ALLERGY);

		$criteria->addSelectColumn(PatientPeer::DRUG_ALLERGY);

		$criteria->addSelectColumn(PatientPeer::STATUS);

		$criteria->addSelectColumn(PatientPeer::CREATED_AT);

		$criteria->addSelectColumn(PatientPeer::UPDATED_AT);

	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PatientPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PatientPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(PatientPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}


    foreach (sfMixer::getCallables('BasePatientPeer:doCount:doCount') as $callable)
    {
      call_user_func($callable, 'BasePatientPeer', $criteria, $con);
    }


		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Patient
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PatientPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return PatientPeer::populateObjects(PatientPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BasePatientPeer:doSelectStmt:doSelectStmt') as $callable)
    {
      call_user_func($callable, 'BasePatientPeer', $criteria, $con);
    }


		if ($con === null) {
			$con = Propel::getConnection(PatientPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			PatientPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Patient $value A Patient object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Patient $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Patient object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Patient) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Patient object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Patient Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol + 0] === null) {
			return null;
		}
		return (string) $row[$startcol + 0];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = PatientPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = PatientPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = PatientPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				PatientPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

  static public function getUniqueColumnNames()
  {
    return array();
  }
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * This uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass()
	{
		return PatientPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a Patient or Criteria object.
	 *
	 * @param      mixed $values Criteria or Patient object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BasePatientPeer:doInsert:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BasePatientPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(PatientPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Patient object
		}

		if ($criteria->containsKey(PatientPeer::ID) && $criteria->keyContainsValue(PatientPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.PatientPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		
    foreach (sfMixer::getCallables('BasePatientPeer:doInsert:post') as $callable)
    {
      call_user_func($callable, 'BasePatientPeer', $values, $con, $pk);
    }

    return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Patient or Criteria object.
	 *
	 * @param      mixed $values Criteria or Patient object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BasePatientPeer:doUpdate:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BasePatientPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(PatientPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(PatientPeer::ID);
			$selectCriteria->add(PatientPeer::ID, $criteria->remove(PatientPeer::ID), $comparison);

		} else { // $values is Patient object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$ret = BasePeer::doUpdate($selectCriteria, $criteria, $con);
	

    foreach (sfMixer::getCallables('BasePatientPeer:doUpdate:post') as $callable)
    {
      call_user_func($callable, 'BasePatientPeer', $values, $con, $ret);
    }

    return $ret;
  }

	/**
	 * Method to DELETE all rows from the patient table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PatientPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += PatientPeer::doOnDeleteCascade(new Criteria(PatientPeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(PatientPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Patient or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Patient object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(PatientPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			PatientPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Patient) {
			// invalidate the cache for this single object
			PatientPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PatientPeer::ID, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				PatientPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += PatientPeer::doOnDeleteCascade($criteria, $con);
			
				// Because this db requires some delete cascade/set null emulation, we have to
				// clear the cached instance *after* the emulation has happened (since
				// instances get re-added by the select statement contained therein).
				if ($values instanceof Criteria) {
					PatientPeer::clearInstancePool();
				} else { // it's a PK or object
					PatientPeer::removeInstanceFromPool($values);
				}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);

			// invalidate objects in VisitMedicinePeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			VisitMedicinePeer::clearInstancePool();

			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
	 * feature (like MySQL or SQLite).
	 *
	 * This method is not very speedy because it must perform a query first to get
	 * the implicated records and then perform the deletes by calling those Peer classes.
	 *
	 * This method should be used within a transaction if possible.
	 *
	 * @param      Criteria $criteria
	 * @param      PropelPDO $con
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
	{
		// initialize var to track total num of affected rows
		$affectedRows = 0;

		// first find the objects that are implicated by the $criteria
		$objects = PatientPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related VisitMedicine objects
			$c = new Criteria(VisitMedicinePeer::DATABASE_NAME);
			
			$c->add(VisitMedicinePeer::PATIENT_ID, $obj->getId());
			$affectedRows += VisitMedicinePeer::doDelete($c, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given Patient object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Patient $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Patient $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PatientPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PatientPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(PatientPeer::DATABASE_NAME, PatientPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = PatientPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
        }
    }

    return $res;
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Patient
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = PatientPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(PatientPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(PatientPeer::DATABASE_NAME);
		$criteria->add(PatientPeer::ID, $pk);

		$v = PatientPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PatientPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(PatientPeer::DATABASE_NAME);
			$criteria->add(PatientPeer::ID, $pks, Criteria::IN);
			$objs = PatientPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BasePatientPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the PatientPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the PatientPeer class:
//
// Propel::getDatabaseMap(PatientPeer::DATABASE_NAME)->addTableBuilder(PatientPeer::TABLE_NAME, PatientPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BasePatientPeer::DATABASE_NAME)->addTableBuilder(BasePatientPeer::TABLE_NAME, BasePatientPeer::getMapBuilder());

