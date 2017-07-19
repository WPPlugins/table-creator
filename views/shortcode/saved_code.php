<script>
    (function ($) {
        $('#<?= $ID ?>').DataTable({
            <?php if('Y' == $scroll_x) { ?>
            "scrollX": true,
            <?php } ?>

            <?php if('Y' == $scroll_y) { ?>
            "scrollY": <?= !empty($height)? absint(trim($height)) : '300'; ?>,
            <?php } ?>

            <?php if('N' == $entry_list) { ?>
            "lengthChange": false,// entry list
            <?php } ?>

            <?php if('N' == $pagination) { ?>
            "paging": false,
            <?php } ?>

            <?php if('N' == $search) { ?>
            "searching": false,
            <?php } ?>

            <?php if('N' == $sorting) { ?>
            "ordering": false,
            <?php } ?>

            <?php if('N' == $info) { ?>
            "info": false,
            <?php } ?>
            // "lengthMenu": [ [5,10, 25, 50, 75, 100, -1], [5,10, 25, 50,75, 100, "All"] ],
            "pageLength": 10


        });

    })(jQuery);
</script>