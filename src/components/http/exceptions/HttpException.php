<?php
namespace Blocks;

/**
 *
 */
class HttpException extends \CHttpException
{
	/**
	 * @param      $status
	 * @param null $message
	 * @param int  $code
	 */
	function __construct($status = '', $message = null, $code = 0)
	{
		$status = $status ? $status : '';
		Blocks::log(($status ? $status.' - ' : '').$message, \CLogger::LEVEL_ERROR);
		parent::__construct($status, $message, $code);
	}
}
