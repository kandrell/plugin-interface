<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Processor;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * to be written
 */
abstract class DocumentProcessor implements \Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface

{

	abstract public function process(
		array $data
	):array;

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

}