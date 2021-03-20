<?php

class waVerificationChannelModel extends waModel
{
	protected $table = 'wa_verification_channel';

	protected static $static_cache = array();

	const TYPE_SMS = 'sms';
	const TYPE_EMAIL = 'email';

	public static $available_types = array(self::TYPE_SMS, self::TYPE_EMAIL);

	public function __construct($type = null, $writable = false)
	{
	}

	protected function getDefaultSystemEmail()
	{
		return '';
	}

	protected function createDefaultSystemEmailChannel()
	{
	}

	public function addChannel($data = array())
	{
		return 0;
	}

	public function updateChannel($id, $data, $delete_old_params = true)
	{
		return null;
	}

	public function getChannel($id)
	{
		return null;
	}

	public function getChannels($ids = null)
	{
		return [];
	}

	public function getDefaultSystemEmailChannel()
	{
		return [];
	}

	public function getByType($type, $is_system = null) {
		return [];
	}

	public function deleteChannel($id)
	{
	}

	public function deleteChannels($ids)
	{
	}

	public function typeExists($type)
	{
		return false;
	}

	public function typeMustExist($type)
	{
	}

	public function isAddressUnique($type, $address, $except_id = null)
	{
		return true;
	}

	public function getTypes($just_type_ids = false)
	{
	}

	protected function createTables()
	{
	}
}
