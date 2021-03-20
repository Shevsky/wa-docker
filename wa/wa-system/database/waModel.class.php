<?php

class waModel
{
	const INSERT_ON_DUPLICATE_KEY_UPDATE = 1;
	const INSERT_IGNORE = 2;

	public function __construct($type = null, $writable = false)
	{
	}

	public function getMetadata()
	{
		return [];
	}

	public function clearMetadataCache()
	{
		return [];
	}

	public function getEmptyRow()
	{
		return [];
	}

	private function getFields()
	{
		return [];
	}

	public function database($database)
	{
	}

	public function describe($table = null, $keys = false)
	{
		return [];
	}

	public function autocommit($flag)
	{
	}

	public function commit()
	{
	}

	public function rollback()
	{
	}

	public function setCache(waiCache $cache = null)
	{
	}

	public function addCacheCleaner(waiCache $cache)
	{
	}

	private function cleanCache()
	{
	}

	private function run($sql, $unbuffer = false)
	{
	}


	public function exec($sql, $params = null)
	{
		return true;
	}

	public function query($sql)
	{
	}

	public function updateById($id, $data, $options = null, $return_object = false)
	{
	}

	public function updateByField($field, $value, $data = null, $options = null, $return_object = false)
	{
		return null;
	}

	public function replace($data)
	{
		return true;
	}

	protected function getFieldValue($field, $value)
	{
	}

	protected function castValue($type, $value, $is_null = false)
	{
		return '';
	}

	public function insert($data, $type = 0)
	{
		return true;
	}

	public function multiInsert($data)
	{
	}

	public function multipleInsert($data)
	{
		return true;
	}

	public function isAutoIncrement()
	{
		return false;
	}

	public function getAll($key = null, $normalize = false)
	{
		return [];
	}

	public function countAll()
	{
		return 0;
	}

	public function escape($data, $type = null)
	{
		return '';
	}

	protected function escapeField($field)
	{
		return '';
	}

	public function getQueryConstructor()
	{
		return new waDbQuery($this);
	}

	public function getTableName()
	{
		return '';
	}

	public function getTableId()
	{
		return '';
	}

	public function getById($value)
	{
		return [];
	}

	public function getByField($field, $value = null, $all = false, $limit = false)
	{
		return [];
	}

	protected function getWhereByField($field, $value = null, $add_table_name = false)
	{
		return '';
	}

	public function countByField($field, $value = null)
	{
		return 0;
	}

	public function deleteById($value)
	{
	}

	public function deleteByField($field, $value = null)
	{
	}

	public function truncate()
	{
	}

	public function prepare($sql)
	{
	}

	public function fieldExists($field)
	{
		return false;
	}

	public function select($select)
	{
	}

	public function where($where)
	{
	}

	public function order($order)
	{
	}

	public function ping()
	{
		return true;
	}

	public function createSchema($schema)
	{
	}

	public function addColumn($column, $db_schema, $after_column = null, $table = null)
	{
	}

	public function modifyColumn($column, $db_schema, $after_column = null, $table = null, $emulate = false)
	{
	}

	protected function remapIds($id)
	{
	}

	private function formatSchema($schema)
	{
	}
}
