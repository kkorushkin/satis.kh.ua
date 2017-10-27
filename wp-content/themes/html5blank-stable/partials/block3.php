<?php $data=get_fields(63);?>
<div id="block3" class="blockz container-fluid">
<div class="container">
    <div class="row mb0">
        <div class="col-sm-9">
            <div class="heading-title text-left"><?=$data['title'];?></div>
            <div class="row justify-content-center">

            </div>
            <div class="row d-none d-sm-block">
                <img class="mt-200" src="<?=get_template_directory_uri();?>/img/bl2_img2.png" style="width:100%" alt="САТИС"/>
            </div>
            <?php if($data['text']){ ?>
                <div class="row text-justify">
                    <?=$data['text'];?>
                </div>
            <?php } ?>
            <?php if($data['cta'][0]['enabled']){ ?>
                <div class="row float-left">
                    <div class="col-xs-12 <?=$data['cta'][0]['emodal_class'];?> all-cta">
                        <?=$data['cta'][0]['text'];?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-sm-3">
            <div class="image middleh wow fadeInRight" data-wow-delay="1s">
                <img src="<?=$data['image']['sizes']['medium'];?>" alt="19L"/>
            </div>
        </div>
    </div>
</div>
</div>
<div class="text-center">
    <img src="<?=get_template_directory_uri();?>/img/box_bg.png" style="width:100%" alt="САТИС"/>
</div>