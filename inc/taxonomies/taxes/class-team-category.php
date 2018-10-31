<?php

namespace Chancelight\Sagecare\Taxonomies\Taxes;

use Chancelight\Sagecare\Taxonomies\Taxonomy;

class Team_Category extends Taxonomy {

	protected function set_labels() {
		$this->labels = [
			'name'              => _x( 'Team Categories', 'taxonomy general name', 'sagecare' ),
			'singular_name'     => _x( 'Team Category', 'taxonomy singular name', 'sagecare' ),
			'search_items'      => __( 'Search Team Categories', 'sagecare' ),
			'all_items'         => __( 'All Team Categories', 'sagecare' ),
			'parent_item'       => __( 'Parent Team Category', 'sagecare' ),
			'parent_item_colon' => __( 'Parent Team Category:', 'sagecare' ),
			'edit_item'         => __( 'Edit Team Category', 'sagecare' ),
			'update_item'       => __( 'Update Team Category', 'sagecare' ),
			'add_new_item'      => __( 'Add New Team Category', 'sagecare' ),
			'new_item_name'     => __( 'New Team Category Name', 'sagecare' ),
			'menu_name'         => __( 'Team Categories', 'sagecare' ),
		];
	}

	protected function set_args() {
		$this->args = [
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug'         => 'team-category',
				'hierarchical' => true,
			],
		];
	}

	protected function set_post_types() {
		$this->post_types = [ 'team' ];
	}
}
