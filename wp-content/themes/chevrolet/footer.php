<?php
/**
 * The footer for our theme.
 * 
 *
 * @package yuriTheme
 */

?>

<!-- Modal Simulador -->
<div class="modal fade" id="simulador" tabindex="-1" role="dialog" aria-labelledby="FAÇA UMA SIMULAÇÃO DO CONSÓRCIO">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<form id="form-simulador" action="" method="post">
					<input type="text" name="nome" id="nome" placeholder="Nome" />
                    <input type="text" name="email" id="email" placeholder="Email" />
                    <input type="text" name="telefone" id="telefone" placeholder="Telefone" />
                    <label for="valor-de">Simular por valor de:</label>
                    <div style="display: flex;">
                    	<div class="radio-container">
	                    	<input type="radio" id="parcela" name="valor-de" value="Parcela" checked>
	                    	<span class="checkmark">Parcela</span>
	                	</div>
	                    <div class="radio-container">
	                    	<input type="radio" id="credito" name="valor-de" value="Crédito">
	                    	<span class="checkmark">Crédito</span>
	                	</div>
	                </div>
                    <label for="range">Selecione o valor da parcela: <output style="color: #3A9D12;
  font-family: Lato;
  font-size: 25px;
  font-weight: 900;
  line-height: 20px;
  float: right;"></output></label>
                    <input type="range" min="0.00" max="10000.00" step="0.11" value="5000.00" data-rangeslider>
            		
                    <label form="modelo-select">Escolha o modelo:</label>
                    <select>
						<?php
							$arrayName = array(
							  "60% Onix 1.0 - Joy",
							  "70% Onix 1.0 - Joy ",
							  "75% Onix 1.0 - Joy",
							  "81%  Onix 1.0 - Joy ",
							  "93% Onix 1.0 - Joy",
							  "Cobalt 1.4 LTZ",
							  "Cruze Sedan  LT 1.4 Turbo",
							  "Cruze Sedan LTZ 1.4 Turbo",
							  "Cruze Sport6 LTZ 1.4 Turbo",
							  "Equinox 2.0 Premier",
							  "Montana",
							  "Nova S10 LT 2.5 Flex - CD 4x4",
							  "Nova S10 LT 2.5 Flex 4x4",
							  "Nova S10 LT 2.8 Diesel 4x4",
							  "Nova S10 LTZ 2.8 Diesel 4x4",
							  "Onix 1.0 - Joy",
							  "Onix 1.0 LT",
							  "Prisma 1.0",
							  "Prisma 1.4 LTZ",
							  "S10 High Country 2.8 Disel 4x4",
							  "Spin LT 1.8",
							  "Spin LTZ 1.8",
							  "Tracker 1.4 LT Turbo",
							  "Tracker 1.4 Premier Turbo",
							  "TrailBlaizer LTZ 3.6 4x4"
							);
							foreach ($arrayName as $value) {
								echo '<option value="'.$value.'">'.$value.'</option>';
							}
						?>
                    </select>
                    <input type="submit" value="Quero receber uma consultoria" id="salvar" />
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Modal Consultoria -->
<div class="modal fade" id="consultoria" tabindex="-1" role="dialog" aria-labelledby="FALE COM UM CONSULTOR">
  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<form id="form-consultoria" action="" method="post">
                    <input type="text" name="nome" id="nome" placeholder="Nome" />
                    <input type="text" name="email" id="email" placeholder="Email" />
                    <input type="text" name="telefone" id="telefone" placeholder="Telefone" />
                    <br/><br/>
                    <input type="submit" value="Quero receber uma consultoria" id="salvar" />
                </form>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="container-fluid" style="padding-top: 60px ; padding-bottom: 60px;background-color: #4A4D54;">
		 <div class="row">
		 	<div class="container">
		 		<div class="row">
		 			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
		 				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-rodape.png" title="Simulador Chevrolet" style="height: 70px;">
		 				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-rodape-2.png" title="Simulador Chevrolet" style="height: 70px;margin-left: 20px;">
		 			</div>
		 			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		 				<ul class="categorias-rodape">
						    <?php wp_list_categories( array(
						        'orderby'    => 'name',
						        'show_count' => false,
						        'hide_empty' => 0,
						        'include'    => array( 2, 3, 4 )
						    ) ); ?>
						</ul>
		 			</div>
		 			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		 				<span style="color: #DDBE6C;  font-family: Lato;  font-size: 22px;  font-weight: 700;  line-height: 28px;text-align: right; display: block;">
		 					ENTRE EM CONTATO
		 				</span>
		 				<p style="color: #FFFFFF;font-family: Lato;font-size: 14px;font-weight: 700;line-height: 23px;text-align: right;">atendimento@consorciochevroletonline.com.br  <i class="far fa-envelope" style="font-size: 14px;margin-left: 5px;"></i>
		 				<p style="color: #FFFFFF;font-family: Lato;font-size: 14px;font-weight: 700;line-height: 23px;text-align: right;">0800 030 1471  <i class="fas fa-phone" style="margin-left: 5px;"></i></p>
		 				<a href="" class="link-face-rodape"><i class="fab fa-facebook-f"></i></a>
		 				<a href="" class="link-insta-rodape"><i class="fab fa-instagram"></i></a>
		 			</div>
		 		</div>
		 	</div>
		 </div>
	</div>
</footer>

	<?php wp_footer(); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.css">
    <script>
    $(function() {
        var $document = $(document);
        var selector = '[data-rangeslider]';
        var $element = $(selector);
        // For ie8 support
        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';
        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
            var value = element.value;
            var output = element.parentNode.getElementsByTagName('output')[0] || element.parentNode.parentNode.getElementsByTagName('output')[0];
            output[textContent] = value;
        }
        $document.on('input', 'input[type="range"], ' + selector, function(e) {
            valueOutput(e.target);
        });
        // Example functionality to demonstrate disabled functionality
        $document .on('click', '#js-example-disabled button[data-behaviour="toggle"]', function(e) {
            var $inputRange = $(selector, e.target.parentNode);
            if ($inputRange[0].disabled) {
                $inputRange.prop("disabled", false);
            }
            else {
                $inputRange.prop("disabled", true);
            }
            $inputRange.rangeslider('update');
        });
        // Example functionality to demonstrate programmatic value changes
        $document.on('click', '#js-example-change-value button', function(e) {
            var $inputRange = $(selector, e.target.parentNode);
            var value = $('input[type="number"]', e.target.parentNode)[0].value;
            $inputRange.val(value).change();
        });
        // Example functionality to demonstrate programmatic attribute changes
        $document.on('click', '#js-example-change-attributes button', function(e) {
            var $inputRange = $(selector, e.target.parentNode);
            var attributes = {
                    min: $('input[name="min"]', e.target.parentNode)[0].value,
                    max: $('input[name="max"]', e.target.parentNode)[0].value,
                    step: $('input[name="step"]', e.target.parentNode)[0].value
                };
            $inputRange.attr(attributes);
            $inputRange.rangeslider('update', true);
        });
        // Example functionality to demonstrate destroy functionality
        $document
            .on('click', '#js-example-destroy button[data-behaviour="destroy"]', function(e) {
                $(selector, e.target.parentNode).rangeslider('destroy');
            })
            .on('click', '#js-example-destroy button[data-behaviour="initialize"]', function(e) {
                $(selector, e.target.parentNode).rangeslider({ polyfill: false });
            });
        // Example functionality to test initialisation on hidden elements
        $document
            .on('click', '#js-example-hidden button[data-behaviour="toggle"]', function(e) {
                var $container = $(e.target.previousElementSibling);
                $container.toggle();
            });
        // Basic rangeslider initialization
        $element.rangeslider({
            // Deactivate the feature detection
            polyfill: false,
            // Callback function
            onInit: function() {
                valueOutput(this.$element[0]);
            },
            // Callback function
            onSlide: function(position, value) {
                console.log('onSlide');
                console.log('position: ' + position, 'value: ' + value);
            },
            // Callback function
            onSlideEnd: function(position, value) {
                console.log('onSlideEnd');
                console.log('position: ' + position, 'value: ' + value);
            }
        });
    });
    </script>
</body>
</html>
