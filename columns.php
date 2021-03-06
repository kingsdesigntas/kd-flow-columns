<?php
/**
 * Plugin Name:       KD Flow Columns
 * Description:       KD Flow columns block.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            KingsDesign
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       columns
 *
 * @package           kd-flow
 */

function kd_flow_columns_init()
{
    register_block_type(__DIR__);
}
add_action('init', 'kd_flow_columns_init');