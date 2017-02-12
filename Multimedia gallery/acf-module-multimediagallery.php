<?php
/**
 * Multimedia gallery
 * This file is intended for reference as a template part in a WordPress theme.
 * Since 12.2.2017
 */

// Does the top-level entry “rows” contain any entries?
if (have_rows('rows')) {

    // Loop through the rows
    while (have_rows('rows')) {
        the_row();

        switch (get_row_layout()) {
            case 'gallery':
                // Does this gallery have any sub-elements?
                if (have_rows('gallery_entries')) {
                    while (have_rows('gallery_entries')) {
                        the_row();
                        switch (get_row_layout()) {
                            case 'image':
                                $image = get_sub_field('gallery_entries_image');
                                echo '<div class="gallery_entry gallery_entry_image"><img src="' .$image['sizes']['large'].'" alt="' .$image['alt']. '" /></div>';
                            break;
                            case 'iframe':
                                echo '<div class="gallery_entry gallery_entry_iframe"><iframe style="width: 800px;height:600px" src="' .get_sub_field('url'). '"></iframe></div>';
                            break;
                        }
                    }
                }
                break;
        }
    }
}
