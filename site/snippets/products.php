<section id="section-products" class="section space--bottom">
    <div class="uk-grid">
        <div class="uk-width-large-1-1 space--top-3">
            <article class="content uk-container">
                <h1 class="content__header--title">
                    <?php echo $data->section_title()->title() ?>
                </h1>
                <div class="content__article">
                    <?php echo $data->section_text()->kt() ?>
                </div>
            </article>
        </div>
    </div>

    <div class="uk-slidenav-position" data-uk-slider="{center:true}">
        <div class="uk-slider-container">
            <ul class=" uk-slider uk-grid-width-large-1-3">
                <?php 
                $product_items = $data->product_items()->toStructure();
                foreach($product_items as $item): 
                // get data for modal
                if($img = $data->image($item->product_image())){ 
                $modalimg = thumb($img,array('width'=>2500, 'height'=>1500, 'crop'=>false))->url(); 
                $modalName = $item->product_name()->html();
                $modalDesc = $item->product_description()->kt();
                }
             
                ?>

                <script>
                
                // modal 

                function modalGetVal(img,name,desc) {
                    $('#modalTitle').html(name);
                    $('#modalText').html(desc);
                    $('#modalImage').attr("src",img);
                }
                </script>


                <li class="">
                    <div onClick="modalGetVal('<?php echo $modalimg; ?>','<?php echo $modalName; ?>','<?php echo $modalDesc; ?>')" data-uk-modal="{target:'#prodmodal'}" class="img__container img__container--product">
                        <img class="img--product" src="<?php if($img = $data->image($item->product_image())){ echo thumb($img,array('width'=>2500, 'height'=>1500, 'crop'=>false))->url(); }?> " alt="">
                    </div>
                    <div class="text--product space--top-3">
                        <h5 class="section--product-item-title">
                            <?php echo $item->product_name()->html() ?>
                        </h5>
                        <?php echo $item->product_description()->kt() ?> 
                    </div>
                </li>
                <?php endforeach ?>
            </ul>
        </div>

        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
    </div>
</section>

<!-- product modal -->

<div id="prodmodal" class="uk-modal">
    <div class="uk-height-viewport uk-modal-dialog uk-modal-dialog-blank">
        <button id="modalClose" class="uk-modal-close uk-close" type="button"></button>
        <div class="uk-grid">
            <div class="uk-hidden-small uk-width-medium-1-2 uk-width-large-1-2">
                <img id="modalImage" src="" alt="">
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                <div class="modal--content space--top-5">
                    <h1 id="modalTitle"></h1>
                    <div id="modalText">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- product modal -->