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
				<form id="form-simulador" method="post" action="<?php echo get_template_directory_uri() . '/js/form-ajax.js'; ?>">
					<input type="text" name="nomesimulador" id="nome" placeholder="Nome" />
                    <input type="text" name="emailsimulador" id="email" placeholder="Email" />
                    <input type="text" name="telefonesimulador" id="telefone" placeholder="Telefone" class="telefone" />
                    <label for="valor-de">Simular por valor de:</label>
                    <div style="display: flex;">
                    	<div class="radio-container">
	                    	<input type="radio" id="parcela" name="valor-de" value="Parcela" checked>
	                    	<span class="checkmark" id="parcela-checkmark">Parcela</span>
	                	</div>
	                    <div class="radio-container">
	                    	<input type="radio" id="credito" name="valor-de" value="Crédito">
	                    	<span class="checkmark" id="credito-checkmark">Crédito</span>
	                	</div>
	                </div>
	                <div class="range-parcela ativo">
	                	<label for="range"><span>Selecione o valor da parcela:</span> <output style="color: #3A9D12; font-family: Lato;font-size: 25px;font-weight: 900;line-height: 20px;float: right;"></output></label>
                    	<input type="range" min="300.00" max="3000.00" step="50" value="5000.00" data-rangeslider>	
	                </div>
	                <div class="range-credito">
	                	<label for="range"><span>Selecione o valor da crédito:</span> <output style="color: #3A9D12; font-family: Lato;font-size: 25px;font-weight: 900;line-height: 20px;float: right;"></output></label>
                    	<input type="range" min="30000.00" max="160000.00" step="50" value="75000.00" data-rangeslider>
	                </div>            		
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
                    <br>
                    <br>
                    <input type="submit" value="Quero receber uma simulação" id="salvar" />
                    <input type="hidden" name="action" value="custom_action">
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
				<form id="form-consultoria" action="index.html" method="post">
                    <input type="text" name="nome" id="nomeconsultoria" placeholder="Nome" />
                    <input type="text" name="email" id="emailconsultoria" placeholder="Email" />
                    <input type="text" name="telefone" id="telefoneconsultoria" placeholder="Telefone" class="telefone" />
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
		 			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 logo-rodape-container">
		 				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-rodape.png" title="Simulador Chevrolet" class="logo-rodape">
		 				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-rodape-2.png" title="Simulador Chevrolet" class="logo-rodape-2">
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
		 				<span class="footer-contato-header" style="">
		 					ENTRE EM CONTATO
		 				</span>
		 				<a href="mailto:atendimento@consorciochevroletonline.com.br">
		 					<p class="footer-email">atendimento@consorciochevroletonline.com.br  <i class="far fa-envelope" style="font-size: 14px;margin-left: 5px;"></i>
		 					</p>
		 				</a>
		 				<a href="tel:08000301471">
		 					<p class="footer-telefone">0800 030 1471  <i class="fas fa-phone" style="margin-left: 5px;"></i>
		 					</p>
		 				</a>
		 				<div class="footer-redes">
		 					<a href="https://www.facebook.com/consorciochevroletonlineoficial/" target="_blank" class="link-face-rodape"><i class="fab fa-facebook-f"></i></a>
		 					<a href="https://www.instagram.com/consorciochevroletonline/" target="_blank" class="link-insta-rodape"><i class="fab fa-instagram"></i></a>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>
	</div>
</footer>

	<?php wp_footer(); ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script type="text/javascript">
		jQuery("input.telefone").mask("(99) 9999-9999?9").focusout(function (event) {  
		    var target, phone, element;  
		    target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
		    phone = target.value.replace(/\D/g, '');
		    element = $(target);  
		    element.unmask();  
		    if(phone.length > 10) {  
		        element.mask("(99) 99999-999?9");  
		    } else {  
		        element.mask("(99) 9999-9999?9");  
		    }  
		});
	</script>

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
