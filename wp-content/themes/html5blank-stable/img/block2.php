<?php $data=get_fields(30);?>
<div class="glue-box"></div>
<div id="block2" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="image middleh">
                    <img src="<?=$data['image']['sizes']['medium'];?>" alt="19L"/>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="heading-title"><?=$data['title'];?></div>
                <div class="row justify-content-center">
                    <?php $col=12/count($data['proposals']);
                    foreach($data['proposals'] as $proposal){ ?>
                        <div class="proposal-item col-sm-<?=$col;?> text-center">
                            <div>
                                <p><?=$proposal['price'];?></p>
                                <p><?=$proposal['qty'];?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <img src="<?=get_template_directory_uri();?>/img/bl2_img1.png" alt="САТИС"/>
                </div>
                <?php if($data['text']){ ?>
                    <div class="row text-justify">
                        <?=$data['text'];?>
                    </div>
                <?php } ?>
                <?php if($data['cta'][0]['enabled']){ ?>
                    <div class="row float-right">
                            <div class="col-xs-12 <?=$data['cta'][0]['emodal'];?> all-cta">
                                <?=$data['cta'][0]['text'];?>
                            </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>