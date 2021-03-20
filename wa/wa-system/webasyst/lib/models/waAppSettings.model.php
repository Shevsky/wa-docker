<?php

class waAppSettingsModel extends waModel
{
	protected static $settings = array();
	protected $table = 'wa_app_settings';

	private function getCacheKey(&$app_id)
	{
	}

	public function get($app_id, $name = null, $default = '')
	{
		return '';
	}

	protected function getCache($app_id)
	{
	}

	public function set($app_id, $name, $value)
	{
		return true;
	}

	public function del($app_id, $name = null)
	{
	}

	public function clearCache($app_id, $only_file = false)
	{
	}

	public function describe($table = null, $keys = false)
	{
	}
}
