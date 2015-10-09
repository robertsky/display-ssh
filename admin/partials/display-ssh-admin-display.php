<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://robertsky.com
 * @since      1.0.0
 *
 * @package    Display_Ssh
 * @subpackage Display_Ssh/admin/partials
 */
?>

<h3>SSH Keys</h3>
<table class="form-table">
    <tr>
        <th><label for="ssh_key">SSH Keys</label></th>
        <td>
            <textarea name="ssh_key" id="ssh-key" rows="5" cols="30" placeholder="Enter your SSH Keys here"><?php echo get_the_author_meta( 'ssh_key', $user->ID ); ?></textarea>
        </td>
    </tr>
</table>