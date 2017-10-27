<?php $data=get_fields(247);?>
<div class="text-center">
    <img src="<?=get_template_directory_uri();?>/img/box_bg_rev.png" style="width:100%" alt="САТИС"/>
</div>
<div id="block7" class="blockz container-fluid">
    <div class="container">
        <div class="row mb0">
            <div class="col-sm-9">
                <div class="heading-title text-left"><?=$data['title'];?></div>
                <?php if($data['text']){ ?>
                    <div class="row text-justify">
                        <?=$data['text'];?>
                    </div>
                <?php } ?>
                <div class="row justify-content-center">
                    <?php $col=12/count($data['proposals']);
                    foreach($data['proposals'] as $proposal){ ?>
                        <div class="proposal-item col-sm-<?=$col;?> text-center">
                            <div>
                                <p><?=$proposal['volume'];?></p>
                                <p><?=$proposal['price'];?></p>
                                <p><?=$proposal['qty'];?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row d-none d-sm-block">
                    <img class="mt-200" src="<?=get_template_directory_uri();?>/img/bl2_img3.png" style="width:100%" alt="САТИС"/>
                </div>

                <?php if($data['cta'][0]['enabled']){ ?>
                    <div class="row float-left">
                            <div class="col-xs-12 <?=$data['cta'][0]['emodal_class'];?> all-cta" onclick='addDynamicToCF7("ОТ 300L","frm-dynamic-tag","value");'><?=$data['cta'][0]['text'];?></div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-3 d-none d-sm-block">
                <div class="image middleh wow fadeInRight" data-wow-delay="1s">
                    <img src="<?=$data['image']['sizes']['medium'];?>" alt="19L"/>
                </div>
            </div>
        </div>
    </div>
</div>