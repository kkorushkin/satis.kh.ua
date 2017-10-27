<?php $data=get_fields(99);
if($data['block_on']){ ?>
<div class="text-center">
    <img src="<?=get_template_directory_uri();?>/img/box_bg.png" style="width:100%" alt="САТИС"/>
</div>
<div id="block5" class="blockz container-fluid">
    <div class="container">
        <div class="heading-title text-center"><?=$data['title'];?></div>
        <div class="row">
            <ul id="imageGallery">
                <?php foreach($data['images'] as $image){ ?>
                    <li data-thumb="<?=$image['image']['sizes']['custom-size'];?>" data-src="<?=$image['image']['url'];?>">
                        <img src="<?=$image['image']['url'];?>" alt="IMG2" />
                    </li>
                <?php } ?>
            </ul>
        </div>
        <?php if($data['text']){ ?>
            <div class="row text-justify">
                <hr/>
                <?=$data['text'];?>
            </div>
        <?php } ?>
    </div>
</div>
<?php }else{
    return false;
}?>