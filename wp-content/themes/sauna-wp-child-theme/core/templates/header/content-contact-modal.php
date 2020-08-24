<?php
  $redux_ThemeTek = get_option( 'redux_ThemeTek' );
?>
  <div class="modal fade popup-modal" id="popup-modal" role="dialog">
    <div class="modal-content contact">
        <div class="row">
          <div class="col-sm-8 modal-content-contact">

<!--              <h2>--><?php //echo __("Let's do some cool stuff together", "sauna-modal-contact") ?><!--</h2>-->
<!--          --><?php //if (isset($redux_ThemeTek['tek-modal-subtitle']) && $redux_ThemeTek['tek-modal-subtitle'] != '' ) : ?>
<!--              <p>--><?php //echo wp_kses_post($redux_ThemeTek['tek-modal-subtitle']); ?><!--</p>-->
<!--          --><?php //endif; ?>
              <p>
                  <?php echo __("Have a project? Let's chat.", "sauna-modal-contact")?>
              </p>
              <div class="key-icon-box icon-default icon-left cont-left">
                  <i class="iconsmind-Phone fa"></i>
                  <h4 class="service-heading"><a href="tel:<?php echo __("+385953615202", "sauna-modal-contact")?>"><?php echo __("+385 95 3615 202", "sauna-modal-contact")?></a></h4>
              </div>
              <div class="key-icon-box icon-default icon-left cont-left">
                  <i class="iconsmind-Mail fa"></i>
                  <h4 class="service-heading"><a href="mailto:icn@softwaresauna.com">icn@softwaresauna.com</a></h4>
              </div>
              <div class="ceo-name">
                  <h4>Ilkka-Cristian Niemi (<?php echo __("CEO", "sauna-modal-contact")?>)</h4>
              </div>
          </div>
            <div class="col-sm-4 modal-content-contact ilkka">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ilkka.jpg"/>
            </div>
        </div>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
</div>
