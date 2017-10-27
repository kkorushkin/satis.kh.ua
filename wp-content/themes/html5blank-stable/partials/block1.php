<?php
$data=get_fields(6);$main_cta=explode(' ',$data['text_left']);
foreach($main_cta as $word){ $i+=0.2;
    $string .= '<span class="wow fadeInDown" data-wow-delay="'. $i .'s">'. $word .'</span>&nbsp;';
} ?>
<div id="block1" class="container-fluid">
    <div class="row">
        <div id="main-cta" class="col-sm-12">
            <?=$data['text_left'];?>
        </div>
    </div>
    <div class="container">
        <div  id="block1-1" class="row ptpb15 mb0 d-none d-sm-block">
            <div class="col-sm-7"></div>
            <div class="col-sm-5 text-right">
                <!--<img src="<?=get_template_directory_uri();?>/img/phone.png" alt="САТИС"/>&nbsp;<a href="tel:<?=$data['phone'];?>"><?=$data['phone'];?></a>&nbsp;&nbsp;
                <img src="<?=get_template_directory_uri();?>/img/mail.png" alt="САТИС"/>&nbsp;<?=$data['email'];?>-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
                <div class="row top-frm mb0">
                    <div class="col-sm-7">
                        <?=do_shortcode('[contact-form-7 id="4" title="callback1"]');?>
                    </div>
                    <div class="col-sm-5 d-none d-sm-block">
                        <img src="<?=$data['callback_frm_image']['sizes']['medium'];?>" alt="callback form"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <?=($data['work_hours']?'РЕЖИМ РАБОТЫ: '.$data['work_hours']:'');?>
                    </div>
                </div>
                <?php if($data['free_shipping']){ ?>
                    <div class="row">
                        <div class="col-sm-12 block-info text-right">
                            <span>БЕСПЛАТНАЯ ДОСТАВКА<br/>ОТ ОДНОГО БУТЫЛЯ</span><img src="<?=$data['free_shipping_image']['url'];?>" alt="!"/>
                        </div>
                    </div>
                <?php } ?>
                <?php if($data['proposal']){ ?>
                    <div class="row">
                        <div class="col-sm-12 block-info text-right">
                            <?=$data['proposal'];?>
                            <?php if($data['proposal_image']){ ?>
                                <img src="<?=$data['proposal_image']['url'];?>" alt="!"/>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if($data['proposal_2']){ ?>
                    <div class="row">
                        <div class="col-sm-12 block-info text-right">
                            <?=$data['proposal_2'];?>
                            <?php if($data['proposal2_image']){ ?>
                                <img src="<?=$data['proposal2_image']['url'];?>" alt="!"/>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div><!--top-form-->
        </div>
    </div>
</div>