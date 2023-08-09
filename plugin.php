<?php
/**
 * Plugin Name:       To Do List Info
 * Description:       Information about the todo list in the data store.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Shreyash Wadmalwar
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       todo-list-info
 *
 * @package           blocks_course
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function blocks_course_todo_list_info_block_init()
{
	register_block_type_from_metadata(__DIR__);
}

add_action('init', 'blocks_course_todo_list_info_block_init');
