<?php
App::uses('CompaniesItemsImage', 'Model');

/**
 * CompaniesItemsImage Test Case
 *
 */
class CompaniesItemsImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companies_items_image',
		'app.companies_item',
		'app.company',
		'app.groups_user',
		'app.group',
		'app.user',
		'app.branch',
		'app.city',
		'app.country',
		'app.consultation',
		'app.deal',
		'app.ticket',
		'app.ad',
		'app.companies_image',
		'app.item',
		'app.sub_category',
		'app.category',
		'app.companies_sub_category',
		'app.tag',
		'app.companies_tag',
		'app.img'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompaniesItemsImage = ClassRegistry::init('CompaniesItemsImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompaniesItemsImage);

		parent::tearDown();
	}

}
