<section id="section-products" class="section space--bottom">
    <div class="uk-grid">
        <div class="uk-width-large-1-1 space--top-3">
            <article class="content uk-container">
                <h1 class="content__header--title">Products</h1>
                <div class="content__article">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit distinctio corporis accusamus quae recusandae, nesciunt rem
                        voluptatem quo minus accusantium delectus dolore eum error debitis. Modi commodi quas expedita quis.
                    </p>
                </div>
            </article>
        </div>
    </div>

    <div class="uk-slidenav-position" data-uk-slider="{center:true}">
        <div class="uk-slider-container">
            <ul class=" uk-slider uk-grid-width-large-1-3">
                <li class="">
                    <div data-uk-modal="{target:'#my-id'}" class="img__container img__container--product">
                        <img class="img--product" src="assets/img/charcoal_soap.png" alt="">
                    </div>
                    <div class="text--product">
                        <h5 class="section--product-item-title">
                            Charcoal soap
                        </h5>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam sint possimus eaque sapiente architecto itaque nulla obcaecati
                            maiores accusamus libero.
                        </p>
                    </div>
                </li>
            </ul>
        </div>

        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
    </div>
</section>

<!-- product modal -->
<div id="my-id" class="uk-modal">
    <div class="uk-height-viewport uk-modal-dialog uk-modal-dialog-blank">
        <button id="modalClose" class="uk-modal-close uk-close" type="button"></button>
        <div class="uk-grid">
            <div class="uk-hidden-small uk-width-medium-1-2 uk-width-large-1-2">
                <img src="assets/img/charcoal_soap.png" alt="">
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                <div class="modal--content space--top-5">
                    <h1>Charcoal Soap</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis delectus quis, cumque ullam quaerat beatae repudiandae
                        impedit, amet fugit sint qui iste. Repellendus architecto libero minus aliquid, perspiciatis reprehenderit
                        necessitatibus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product modal -->