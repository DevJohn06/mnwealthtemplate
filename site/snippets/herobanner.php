<section id="section-home" class="section section--parallax overlay filter" style="background-image: <?php if($img = $data->image($data->bkg_img())): ?> url('<?php echo thumb($img,array('width'=>2000, 'height'=>1500, 'crop'=>true))->url() ?>') <?php endif ?>">
        <div class="uk-grid content--align-center container container--mobile uk-text-center">
            <div class="content uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-1">
                <div class="content--herobanner">
                    <h1 class="text--color-white content__header--banner-1">
                        <?php echo $data->banner_text()->title(); ?>
                    </h1>
                    <h5 class="text--color-white content__header content__header--banner-2">
                        <?php echo $data->banner_subtext()->html(); ?>
                    </h5>
                </div>

                <?php if ($data->button_text()->isNotEmpty()): ?>
                <div class="content--herobanner space--top-5 ">
                    <a href="#contact" class="mn-button button--banner"><?php echo $data->button_text()->html() ?></a>
                </div>
                <?php endif ?>
            </div>
        </div>
    </section>