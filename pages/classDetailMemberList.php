<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="section">
            <div class="section-title">Member List</div>
            <div class="section-body">
                <?php 
                    $memberlist = Model\classModel::getClassMember($code);
                    if(!empty($memberlist)){
                        foreach ($memberlist as $val) {
                ?>
                    <div class="media social-post">
                        <div class="media-left">
                            <a href="#">
                                <img src="../assets/images/profile4.png" />
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <h4 class="title"><?php echo $val['name'];?></h4>
                                <h5 class="timeing">Member Since <?php echo date('M j Y',strtotime($val['dateJoin']));?></h5>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</div>