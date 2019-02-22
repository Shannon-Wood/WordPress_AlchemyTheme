<?php

/**
 * A simple walker class for wordpress and the bulma css framework
 *
 * @category Wordpress_Nav_Walker
 * @package  Bulma_Walker
 * @author   Jason Hammock <jhammock@protonmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     github
 */

if (!class_exists('Walker_Nav_Menu')) {
    throw Exception('Class, Walker_Nav_Menu, does not exists');
}

final class BulmaNavMenu extends Walker_Nav_Menu
{

    private $_item;

    /**
     * Called at the beginning of a parent element
     *
     * @param  string  $output
     * @param  integer $depth
     * @param  array   $args
     * @return void
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        ob_start();
        ?>
        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
            <?php echo $this->_item->title; ?>
            </a>
            <div class="navbar-dropdown">
        <?php
        $output .= ob_get_clean();
    }

    /**
     * Called at the end of a parent element
     *
     * @param  string  $output
     * @param  integer $depth
     * @param  array   $args
     * @return void
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        ob_start();
        ?>
        </div></div>
        <?php
        $output .= ob_get_clean();
    }

    /**
     * Called at the beginning of a non-parent element
     *
     * @param  string  $output
     * @param  [type]  $item
     * @param  integer $depth
     * @param  array   $args
     * @return void
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $this->_item = $item;
        if ($args->walker->has_children) {
            return;
        };
        ob_start();
        ?>
        <a href="<?php echo $item->url; ?>" class="navbar-item"><?php echo $item->title; ?></a>
        <?php
        $output .= ob_get_clean();
    }

    /**
     * Called at the end of a non-parent element
     *
     * @param  string  $output
     * @param  [type]  $item
     * @param  integer $depth
     * @param  array   $args
     * @return void
     */
    public function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
    }
}
