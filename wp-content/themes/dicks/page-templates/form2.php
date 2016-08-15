<?php
/**
 * Template Name: form2 Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

		<div class="container">
			<div class="gray_cell">
				<div class="form_head_part">
				<a href="http://www.whirlpool.se/">Felnamälan Whirlpool-produkter</a>
				<a href="http://garant.se/felanmalan/">Felnamälan Garant-produkter</a>
					<h2 class="form_head text-center">Felanmälan vitvaror</h2>
					<p class="sub_text less_padding">
						Vi hjälper Er gärna med service på Era vitvaror. Här nedan kan Ni enkelt boka service genom 
att fylla i formuläret. Om Ni lämnat en e-postadress, skickar vi en bekräftelse på Er felanmälan där Ni kan se till vilket 
serviceföretag den är skickad. Ni kan naturligtvis även kontakta Ert lokala serviceföretag direkt. 
					</p>
					<h3 class="bot_head text-center">OBS! Information märkt med* är nödvändig för att vi ska kunna behandla Era uppgifter.</h3>
					<p class="sub_text less_padding">Vid påkallande av service under garanti- och reklamationsrättstiden kommer kostnaden för service debiteras innehavaren av produkten om: </p>
				</div>
				<div class="row form_content">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="row">
							<ul class="col-sm-6 colnt_list">
								<li>Inget fel kan konstateras</li>
								<li>Felaktigheten beror på felaktig installation</li>
								<li>Felaktigheten beror på felaktig hantering</li>
								<li>Felaktigheten beror på bristande underhåll och rengöring</li>
							</ul>
							<ul class="col-sm-6 colnt_list">
								<li>Felaktigheten beror på ovarsamhet</li>
								<li>Om produkten använts till annat än vad den är till för</li>
								<li>Tidigare reparerats av ej behörig personal och/eller med annat än originaldelar</li>
							</ul>
						</div>
					</div>
				</div>	
				<?php echo do_shortcode('[contact-form-7 id="97" title="form2new"]');?>		
				<!-- <div class="form_content">
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Namn* (innehavarens för- och efternamn) </label>
							<input type="text" class="form_input" />
						</div>
						<div class="col-sm-6">
							<label class="form-label">Adress* (box, gata etc.) </label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Besöksadress* (om annan än ovan)</label>
							<input type="text" class="form_input" />
						</div>
						<div class="col-sm-6">
							<label class="form-label">Postadress* (postnummer och ord)</label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Telefonnummer* (till bostad)</label>
							<input type="text" class="form_input" />
						</div>
						<div class="col-sm-6">
							<label class="form-label">Telefon/mobil dagtid*</label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Kontaktperson (om annan än ovan)</label>
							<input type="text" class="form_input" />
						</div>
						<div class="col-sm-6">
							<label class="form-label">E-postadress* (dit bekräftelse skickas) </label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Produkt* (spis, kylskåp, frysbox etc) </label>
							<input type="text" class="form_input" />
						</div>
						<div class="col-sm-6">
							<label class="form-label">Fabrikat* </label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Modellbeteckning*</label>
							<input type="text" class="form_input" />
						</div>
						<div class="col-sm-6">
							<label class="form-label">Serienummer</label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Inköpsdatum* (kvitto obligatoriskt vid garantifel) Ange datumformat: åååå-mm-dd </label>
							<input type="text" class="form_input" />
						</div>
						<div class="col-sm-6">
							<label class="form-label">Inköpsställe* (vart är produkten köpt: namn, ort)</label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Felbeskrivning*</label>
							<textarea class="form_input"></textarea>
						</div>
						<div class="col-sm-6">
							<label class="form-label">Övrigt</label>
							<textarea class="form_input"></textarea>
						</div>
					</div>	
				</div>
				
				<div class="form_content">
					<div class="form_sub_head">Felanmälare (om annan än innehavaren) </div>
					<div class="row form_row">
						<div class="col-sm-6">
							<label class="form-label">Namn: (för- och efternamn)</label>
							<input type="text" class="form_input" />
						</div>
						<div class="col-sm-6">
							<label class="form-label">Företag (eventuellt) </label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row">
						<div class="col-sm-12">
							<label class="form-label">Telefonnr (där vi kan nå er dagtid) </label>
							<input type="text" class="form_input" />
						</div>
					</div>
					<div class="row form_row text-center">
						<button type="submit" class="submit_btn">skicka</button>
					</div>
				</div> -->
			</div>
		</div>
<?php
//get_sidebar();
get_footer();
