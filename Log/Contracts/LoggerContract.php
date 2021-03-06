<?php
namespace Plenty\Log\Contracts;


/**
 * The contract for the logger.
 */
interface LoggerContract 
{

	/**
	 * Detailed debug information.
	 */
	public function debug(
		string $code, 
		 $additionalInfo = null
	);

	/**
	 * Interesting events.
	 */
	public function info(
		string $code, 
		 $additionalInfo = null
	);

	/**
	 * Normal but significant events.
	 */
	public function notice(
		string $code, 
		 $additionalInfo = null
	);

	/**
	 * Exceptional occurrences that are not errors.
	 */
	public function warning(
		string $code, 
		 $additionalInfo = null
	);

	/**
	 * Runtime errors that do not require immediate action but should typically
be logged and monitored.
	 */
	public function error(
		string $code, 
		 $additionalInfo = null
	);

	/**
	 * Critical conditions.
	 */
	public function critical(
		string $code, 
		 $additionalInfo = null
	);

	/**
	 * Action must be taken immediately.
	 */
	public function alert(
		string $code, 
		 $additionalInfo = null
	);

	/**
	 * System is unusable.
	 */
	public function emergency(
		 $code, 
		 $additionalInfo = null
	);

	/**
	 * Log exceptions.
	 */
	public function logException(
		\Exception $exception
	);

	/**
	 * The reference type.
	 */
	public function setReferenceType(
		string $referenceType
	):\Plenty\Log\Contracts\LoggerContract;

	/**
	 * The reference value.
	 */
	public function setReferenceValue(
		 $referenceValue
	):\Plenty\Log\Contracts\LoggerContract;

}