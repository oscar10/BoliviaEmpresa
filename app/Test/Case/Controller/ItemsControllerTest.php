<?php
App::uses('ItemsController', 'Controller');

/**
 * ItemsController Test Case
 *
 */
class ItemsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item',
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
		'app.companies_item',
		'app.sub_category',
		'app.category',
		'app.companies_sub_category',
		'app.tag',
		'app.companies_tag'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
