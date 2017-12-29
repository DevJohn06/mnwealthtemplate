<section id="section-about" class="section section--about">
        <div class="uk-grid">
            <div class="uk-width-large-1-2">
                <article class="content--about uk-container">
                    <h1 class="content__header--title">
                        <?php echo $data->section_title()->title();?>
                    </h1>
                    <div class="content__article">
                           <?php echo $data->section_text()->kt(); ?>
                    </div>
                    
                    <?php if($data->button_text()->isNotEmpty()):?>
                    <div class="space--top-2">
                        <a href="" class="mn-button button--green"><?php echo $data->button_text()->html(); ?></a>
                    </div>
                    <?php endif ?>
                </article>
            </div>
            <div class="uk-width-large-1-2">          
                <img class="img--about" src=" <?php if($img = $data->image($data->bkg_img())){ echo thumb($img,array('width'=>2500, 'height'=>1500, 'crop'=>true))->url(); }?> " alt="">
            </div>
        </div>
    </section>
