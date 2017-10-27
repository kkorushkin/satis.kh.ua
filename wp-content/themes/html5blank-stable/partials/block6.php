<?php $data=get_fields(119);$data_head=get_fields(6);?>
<img id="block6-top-img" style="display:block;margin:0 auto -140px" src="<?=get_template_directory_uri();?>/img/kont_bg.jpg" alt="IMG"/>
<div id="block6" class="blockz container-fluid">
    <div class="container">
        <div class="heading-title text-center"><?=$data['title'];?></div>
        <div class="row">
            <div class="col-sm-6">
                <?php if($data_head['phone']){ ?>
                    <div class="contacts-item"><img src="<?=get_template_directory_uri();?>/img/phonef.png" alt="САТИС"/><a href="tel:<?=$data_head['phone'];?>"><?=$data_head['phone'];?></a></div>
                <?php } ?>
                <?php if($data_head['add_phones']){
                    $phones = explode(',',$data_head['add_phones']);
                    foreach($phones as $phone){ ?>
                        <div class="contacts-item add-phone"><a href="tel:<?=$phone;?>"><?=$phone;?></a></div>
                    <?php } ?>
                <?php } ?>
                <?php if($data_head['email']){ ?>
                    <div class="contacts-item"><img src="<?=get_template_directory_uri();?>/img/mailf.png" alt="САТИС"/>&nbsp;<?=$data_head['email'];?></div>
                <?php } ?>
                <?php if($data_head['address']){ ?>
                    <div class="contacts-item"><img src="<?=get_template_directory_uri();?>/img/geof.png" alt="САТИС"/>&nbsp;<?=$data_head['address'];?></div>
                <?php } ?>
                <?php if($data_head['work_hours']){ ?>
                    <div class="contacts-item"><img src="<?=get_template_directory_uri();?>/img/timef.png" alt="САТИС"/>&nbsp;Время роботы - <?=$data_head['work_hours'];?></div>
                <?php } ?>
                <div class="col-sm-12 top-frm">
                    <hr/>
                    <?=do_shortcode('[contact-form-7 id="4" title="callback1"]');?>
                </div>
            </div>
            <div id="gmap" class="col-sm-6">
                <?php if($data['gmap']){ ?>
                    <?=$data['gmap'];?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>