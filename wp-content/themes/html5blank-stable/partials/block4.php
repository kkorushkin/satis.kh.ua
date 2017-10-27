<?php $data=get_fields(78);?>
<div id="block4" class="blockz container-fluid">
    <div class="container">
        <div class="heading-title text-center"><?=$data['title'];?></div>
        <div class="row text-center">
            <?php $cols = (count($data['products'])) ? " col-md-".(12 / count($data['products']))." col-sm-6" : "";?>
            <?php $i=0; foreach($data['products'] as $product){ $i+=0.2; ?>
                <div class="block-item <?=$cols;?> text-center">
                    <div class="image wow fadeIn" data-wow-delay="<?=$i;?>s">
                        <img src="<?=$product['image']['url'];?>" alt="img"/>
                    </div>
                    <div class="cupholder d-sm-block"></div>
                    <?if($product['volume']){ ?>
                        <div class="volume">
                            <?=$product['volume'];?>
                        </div>
                    <?php } ?>
                    <div class="block-item-purchase-btn eModal-3 all-cta" onclick='addDynamicToCF7("НА АССОРТИМЕНТ ПЭТФ","frm-dynamic-tag","value");'><?=$product['cta'][0]['text'];?></div>
                    <?php if($product['price']){ ?>
                        <div class="price">
                            <?=$product['price'];?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="row text-justify">
            <?php if($data['text']){ ?>
                <hr/>
                <?=$data['text'];?>
            <?php } ?>
        </div>
    </div>
</div>