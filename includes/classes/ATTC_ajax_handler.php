<?php
// Prohibit direct script loading.
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

if(!class_exists('ATTC_ajax_handler')):

/**
 * Class ATTC_ajax_handler.
 * It handles all ajax requests 
 * */
class ATTC_ajax_handler {

    /**
     * Register  hooks for  ajax actions.
     */
    public function __construct(){
        $this->db = ATTC_database::get_instance();
        add_action('wp_ajax_attc_setting_handler', array($this, 'attc_setting_handler'));
        add_action('wp_ajax_delete_attc_table', array($this, 'delete_attc_table'));
        
    }

    public function attc_setting_handler()
    {
        if (!empty($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'ATTC_nonce')){
            // prepare all data from the post array
            $table_id = !empty($_POST['id'])? absint($_POST['id']) : null;
            $data = !empty($_POST['config']) ? $_POST['config'] : array();

            $updated = $this->db->update_table_meta($table_id, 'config', $data);
            // lets echo success as at this point even 0 means no error
            echo 'success';
        }

        wp_die();
    }

    public function delete_attc_table()
    {
        $ID = !empty($_POST['table']) ? absint($_POST['table']) : 0;

        if (!empty($ID) && !empty($_POST['action']) && ('delete_attc_table' == $_POST['action']) ) {
            $success = $this->db->delete($ID); // delete table
            if (!empty($success)){
                $this->db->delete_table_meta($ID); // delete meta table if available
                echo 'success';
            }

        }else{
            echo 'error';
        }
        wp_die();
    }
    

}


endif;