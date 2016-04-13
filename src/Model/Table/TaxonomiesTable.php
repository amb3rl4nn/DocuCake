<?
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Class TaxonomiesTable
 * @package App\Model\Table
 */
class TaxonomiesTable extends Table {

	public function initialize(array $config) {
		$this->addBehavior('tree');
	}
}
