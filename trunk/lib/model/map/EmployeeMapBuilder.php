<?php


/**
 * This class adds structure of 'employee' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 06/22/11 08:03:20
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class EmployeeMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.EmployeeMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(EmployeePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(EmployeePeer::TABLE_NAME);
		$tMap->setPhpName('Employee');
		$tMap->setClassname('Employee');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11);

		$tMap->addForeignKey('DEPARTMENT_ID', 'DepartmentId', 'INTEGER', 'department', 'ID', false, 11);

		$tMap->addForeignKey('DESIGNATION_ID', 'DesignationId', 'INTEGER', 'designation', 'ID', false, 11);

		$tMap->addForeignKey('ROLE_ID', 'RoleId', 'INTEGER', 'role', 'ID', false, 11);

		$tMap->addColumn('EMP_CATEGORY', 'EmpCategory', 'VARCHAR', false, 10);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', false, 100);

		$tMap->addColumn('CNIC', 'Cnic', 'VARCHAR', false, 50);

		$tMap->addColumn('DOB', 'Dob', 'DATE', false, null);

		$tMap->addColumn('GENDER', 'Gender', 'VARCHAR', false, 10);

		$tMap->addColumn('MAIL_ADDRESS', 'MailAddress', 'VARCHAR', false, 255);

		$tMap->addColumn('CONTACT_RES', 'ContactRes', 'VARCHAR', false, 50);

		$tMap->addColumn('CONTACT_CELL', 'ContactCell', 'VARCHAR', false, 50);

		$tMap->addColumn('CONTACT_OFF', 'ContactOff', 'VARCHAR', false, 50);

		$tMap->addColumn('EMERGENCY_CONTACT', 'EmergencyContact', 'VARCHAR', false, 50);

		$tMap->addColumn('EMPLOYMENT_DATE', 'EmploymentDate', 'DATE', false, null);

		$tMap->addColumn('LOCAL_RESIDENT', 'LocalResident', 'VARCHAR', false, 3);

		$tMap->addColumn('QUALIFICATION', 'Qualification', 'VARCHAR', false, 1000);

		$tMap->addColumn('STATUS', 'Status', 'VARCHAR', false, 10);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'DATE', false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'DATE', false, null);

	} // doBuild()

} // EmployeeMapBuilder