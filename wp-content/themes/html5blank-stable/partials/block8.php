<?php $data=get_fields(264);?>
<div id="block8" class="blockz container-fluid">
    <div class="container">
        <div class="heading-title text-center"><?=$data['title'];?></div>
        <div class="row">
            <div class="col-sm-4">
                <?=$data['text_left'];?>
            </div>
            <div class="col-sm-4">
                <img style="width:100%" src="<?=$data['image']['url'];?>" alt="img"/>
            </div>
            <div class="col-sm-4">
                <?=$data['text_right'];?>
                <?php if($data['cta'][0]['enabled']){ ?>
                    <div class="row text-center">
                        <div class="col-sm-12 col-xs-12 <?=$data['cta'][0]['emodal_class'];?> all-cta" onclick='addDynamicToCF7("ГАЗИРОВАННОЙ ВОДЫ В СИФОНЕ","frm-dynamic-tag","value");'>
                            <?=$data['cta'][0]['text'];?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>