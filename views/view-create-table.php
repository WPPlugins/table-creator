<?php
// add dynamic value so that this table can be used in two views. create view and edit view
$table = !empty($args['table']) ? $args['table'] : array();
$name = !empty($table['name']) ? esc_attr(trim($table['name'])) : '';
$description = !empty($table['description']) ? esc_attr(trim($table['description'])) : '';
$column = !empty($table['cols']) ? absint($table['cols']) : 0;
$row = !empty($table['rows']) ? absint($table['rows']) : 0;
$create_page = empty($_GET['action']) && 'edit' == empty($_GET['action']) ? true : false;

// var_dump($create_page);
?>



<div class="col-lg-6">
    <div class="table_info_form">
        <div class="info_form_title"><h4><?= empty($_GET['action']) ? 'Add New Table': 'Edit Table'; ?></h4></div>
        <?php if ($create_page) { //  form tab only on create page ?>
            <form role="form" action="" method="post">
        <?php
            wp_nonce_field('attc_create_table');
        } ?>
            <div class="row">
                <div class="col-md-8">
                    <label for="table_name">Table Name</label>
                    <input type="text" name="table[name]" id="table_name" value="<?= $name ?>" class="attc_input_field" placeholder="Enter a table name" tabindex="1">

                    <!-- <input id="table_name" class="attc_input_field" type="text" name="" value="" placeholder="Enter a table name"> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="table_desc">Table Description (optional)</label>
                    <textarea id="table_description" class="attc_input_field" name="table[description]" rows="8" cols="80" placeholder="Enter a short description for a table"><?= $description ?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="cols">No of cols</label>
                    <input id="table_column" class="attc_input_field"  type="number" name="table[column]" value="<?= $column ?>" placeholder="Enter the number of columns">
                </div>
                <div class="col-md-6">
                    <label for="rows">No of rows</label>
                    <input id="table_row" class="attc_input_field" type="number" name="table[row]" value="<?= $row ?>" placeholder="Enter the number of columns">
                </div>

        <?php if ($create_page) { // show form tab only on create page?>

                <div class="col-md-6">
                    <input type="submit" name="attc-create-table" value="Create table" class="attc_btn">
                    <!-- <button type="submit" class="attc_btn" name="button">Submit</button> -->
                </div>

            </form>
                <?php } ?>

            </div><!-- info_form_title -->
    </div><!-- table_info_form -->
</div><!-- col-lg-6" -->
