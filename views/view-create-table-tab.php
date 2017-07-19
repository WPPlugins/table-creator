<?php
$table = !empty($args['table']) ? $args['table'] : array();
?>

<section class="edit_section_wrapper">
    <!-- <div class="container-fluid">
        <div class="row"> -->
            <div class="col-md-12 no_padding">
                <div class="top_color"></div>
                <div class="board">
                    <!--board-inner starts ::: Tab Menu-->
                    <div class="board-inner">
                        <ul class="nav nav-tabs" id="myTab">
                            <div class="liner"></div>

                            <li class="active"><a href="#home" data-toggle="tab">
                                 <p class="round-tabs one">
                                     <i class=" glyphicon glyphicon-edit"></i>
                                     <span>Edit Table</span>
                                 </p>
                                </a>


                            </li>

                            <li>
                                <a href="#table_setting" data-toggle="tab">
                                    <p class="round-tabs two">
                                        <i class="glyphicon glyphicon-cog"></i>
                                        <span>Table Settings</span>
                                    </p>
                                </a>
                            </li>

                        <!-- Include support tab only if the user is a pro user -->
                            <?php if (true == get_option('attc_user_is_pro')) {
                                ?>
                            <li>
                                <a href="#Support" data-toggle="tab">
                                     <p class="round-tabs three">
                                          <i class=" glyphicon glyphicon-tags"></i>
                                          <span>Get Support</span>
                                     </p>
                                </a>
                            </li>

                            <?php } ?>
                            

                        </ul>
                    </div>   <!--Ends board-inner-->


                    <div class="tab-content">

                        <div class="tab-pane fade in active" id="home">
                            <?php $ATTC->loadView('view-edit-table', array('table' => $table)); ?>
                        </div>  <!--ends .tab-pane   #home-->

                        <div class="tab-pane fade" id="table_setting">
                            <?php $ATTC->loadView('view-table-setting', array('table' => $table)); ?>
                        </div>  <!--ends .tab-pane   #table_setting-->

                        <!-- Include support tab only if the user is a pro user -->
                        <?php if (true == get_option('attc_user_is_pro')) {
                                ?>
                        <div class="tab-pane fade" id="Support">

                            <?php $ATTC->loadView('view-support'); ?>
                        </div> <!--ends .tab-pane   #Support-->

                        <?php } ?>

                        <div class="clearfix"></div>

                    </div> <!--Ends tab-content -->

                </div> <!--    end .board -->
            </div>
        <!-- </div>
    </div> -->
</section>
