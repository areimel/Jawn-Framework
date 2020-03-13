<!-- Hero -->
<section id="home_1" class=" --oxford_hero_1" style="background-image: url('/img/boilerplate/hero-1.jpg');">
	<div class="container">
		<div class="copy">
			<h1 class="headline">
				WE CAN BE HEROES
			</h1>
			<h2 class="subhead">
				Just for one day
			</h2>
			<p class="body">
				<em>-David Bowie</em>
			</p>
		</div>
		
	</div>
</section>
<!-- Hero -->

<!-- Content -->
<section id="home_2">
	
	<div class="--oxford_template_1">
		
		<div class="image" style="background-image: url('/img/boilerplate/placeholder-1.jpg');"></div>
		
		<div class="copy">
			<div class="inner">
				<h2>
					Template 1 Element
				</h2>
				<p>
					This body element uses Flexbox and width:calc(); to achieve this layout.  Flexbox handles the row/column layout and keeps the 2 sections the same height, while width:calc(); allows us to set the image element to a static size, while the copy element gets a percent value, minus the static size of the image.  The order of the image/copy is determined by their order in the HTML, meaning that there is minimal code you'll need to change for the layout.  
				</p>
			</div>
		</div>

	</div>


	<div class="--oxford_template_1 mobile_reverse">
		
		<div class="copy">
			<div class="inner">
				<h2>
					Template 1 Element
				</h2>
				<p>
					You can also use :first-of-type and :last-of-type as catch-all selectors for when the image or copy is in a certain order.  For example, .template_1>.copy:first-of-type>.inner would select the .inner element of the copy <em>only</em> when it appears first in the image/copy order.  This method is being used to make the .inner background colors different in this example.  In short - this method lets you write a few lines of CSS early on, and then you control your styling all through your HTML layout.
				</p>
			</div>
		</div>

		<div class="image" style="background-image: url('/img/boilerplate/placeholder-1.jpg');"></div>

	</div>

</section>
<!-- Content -->




<!-- Content -->
<section id="home_3">
	<div class="--oxford_template_2">

		<div class="headline container">
			<h3>Template 2 Element</h3>
		</div>

		<div class="content container">
			
			<div class="cell">
				<div class="card">
					<p class="headline">Template 2 Card</p>
					<p class="body">
						The Template 2 element is your standard 3 card layout, although you can add more if you need to. The cards are handled by flexbox, and are set up by default to always keep the headline justified to the top, and they have a 100px space at the bottom that is a safe zone for the CTA to sit.  They adapt to any amount of copy while keeping all cards at the same height, without the need to set an explicit height.  This makes for a very easy and smooth dev experience. 
					</p>
					<div class="cta">
						<a class="--oxford_button_1" href="#" aria-label="Call to Action">CTA</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<p class="headline">Template 2 Card</p>
					<p class="body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="cta">
						<a class="--oxford_button_1" href="#" aria-label="Call to Action">CTA</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<p class="headline">Template 2 Card</p>
					<p class="body">
						This layout also uses a neat trick with :first-of-type and "last-of-type" selectors.  Notice how each of the 3 cards has a different shadow - but they're not all individually set.  Instead, all cards are given the main shadow styling, which is what you see on the middle card, and then just the first and last elements are overridden.  This can be used with any number of elements, and gives a nice bookending effect.
					</p>
					<div class="cta">
						<a class="--oxford_button_1"  href="https://google.com"  aria-label="Call to Action">CTA</a>
					</div>
					
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Content -->


<!-- Content -->
<section id="home_4">
	<div class="--oxford_template_2">

		<div class="headline container">
			<h3 data-tooltip="It's a joke about German electronic music pioneers Kraftwerk">Das Modal</h3>
		</div>

		<div class="content container">
			
			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>Standard Modal</p>
					</div>
					<div class="body">
						<p>
							Standard Modals are called by clicking on an element with the .modal_open class.  The specific modal that is called is controlled by setting the data-modal attribute.  Treat this value as a unique ID.  The background overlay is independent of the modals themselves.
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_1 modal_open" data-modal="thank_you" aria-label="Modal Open" >Standard Modal</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>Video Modal</p>
					</div>
					<div class="body">
						<p>
							The Video Modal is always the same element, but the video is controlled by setting the data-video-id attribute on the button.  Just paste in the ID of the YouTube video you want to show (only the ID, the 'v=' value), and the JS code will swap in that video.
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_1 video_modal_open" data-video-id="iYYRH4apXDo" aria-label="Video Modal Open">Video Modal</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>Form Modal</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_1 modal_open" data-modal="form" aria-label="Form Modal Open">Form Modal</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>Offsite Modal</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</div>
					<div class="cta">
						<a href="https://css-tricks.com/" class="--oxford_button_1 modal_open" data-modal="launch_checklist" aria-label="Form Modal Open">Form Modal</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>Launch Checklist Modal</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</div>
					<div class="cta">
						<a  class="--oxford_button_1 modal_open" data-modal="launch_checklist" aria-label="Form Modal Open">Launch Checklist Modal</a>
					</div>
					
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Content -->



<!-- Content -->
<section id="home_5">
	<div class="--oxford_template_3">
		<div class="headline container">
			<h3>Template 3: Grid</h3>
		</div>
		<div class="content container">
			
			<? for ($i=0; $i < 12; $i++){?>
				<div class="cell">
					<div class="card">
						<div class="headline">
							<p>Grid Card</p>
						</div>
						<div class="body">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</p>
						</div>
						<div class="cta">
							<a class="--oxford_button_1" aria-label="Call to Action">CTA</a>
						</div>
						
					</div>
				</div>
			<?}?>
			


	</div>
</section>
<!-- Content -->

<!-- Content -->
<section id="home_6">
	
	<div class="--oxford_template_6 container">
		<div class="container">
			<div class="headline ">
				<h3 data-tooltip="Work In Progress">Sliders: Swiper JS</h3>
			</div>
		</div>
		
		<div class="content ">
			
			<!-- Slider main container -->
			<div class="--oxford_swiper_1" data-slider="home_slider_1">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			        <!-- Slides -->
			        <div class="swiper-slide">
			        	<div class="card">
							<div class="image" style="background-image: url(https://source.unsplash.com/400x400/?tech);"></div>

							<div class="copy">
								<div class="inner">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								
							</div>
			        	</div>
			        </div>
			        
			        <div class="swiper-slide">
			        	<div class="card">
							<div class="image" style="background-image: url(https://source.unsplash.com/400x400/?dev);"></div>

							<div class="copy">
								<div class="inner">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								
							</div>
			        	</div>
			        </div>

			        <div class="swiper-slide">
			        	<div class="card">
							<div class="image" style="background-image: url(https://source.unsplash.com/400x400/?code);"></div>

							<div class="copy">
								<div class="inner">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								
							</div>
			        	</div>
			        </div>
			    </div>
			    <!-- If we need pagination -->
			    <div class="swiper-pagination"></div>

			    <!-- If we need navigation buttons -->
			    <div class="swiper-button-prev"></div>
			    <div class="swiper-button-next"></div>

			    
			</div>

		</div>
			
	</div>
</section>
<!-- Content -->



<!-- Content -->
<section id="home_6">
	
	<div class="--oxford_template_1">
		
		<div class="image" style="background-image: url('<?=$cdn_link;?>/6.jpg');"></div>
		
		<div class="copy">
			<div class="inner">
				<h2>
					Template Form
				</h2>
				<p>This is a basic form that can be copied and re-styled.  It is using 3 custom form elements, as well, which are alternative versions to common form elements to allow for far more styling options than their traditional versions. Right now, we have custom select boxes, radio buttons, and checkboxes. They're all built using FontAwesome to control the glyphs in the form elements.</p>
				<?echo $this->Element('forms/contact');?>
			</div>
		</div>

	</div>

</section>
<!-- Content -->


<!-- Content -->
<section id="home_7">
	<div class="--oxford_template_2 dynamic_shadows">

		<div class="headline container">
			<h3>Menu - 3D Body Animations</h3>
		</div>

		<div class="content container">
			
			<div class="cell">
				<div class="card">
					<p class="headline">3D Body Animations</p>
					<p class="body">
						These are modified versions of the sidebar menu button in the nav ( <i class="fas fa-bars"></i> ).  They apply an additional class the the body wrapper element, set by a data-attribute on the button.  This animates the inner content on the site.
					</p>
					<div class="cta">
						<a class="--oxford_button_1 nav_button" aria-label="body_transform_1" data-body-transform="body_transform_1">body_transform_1</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<p class="headline">3D Body Animations</p>
					<p class="body">
						Keeping the inner body content wrapped inside a div allows it to be manipulated without moving the surrounding elements, such as sidebars, modals, notices, headers, etc.
					</p>
					<div class="cta">
						<a class="--oxford_button_1 nav_button" aria-label="body_transform_2" data-body-transform="body_transform_2">body_transform_2</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<p class="headline">3D Body Animations</p>
					<p class="body">
						To apply this effect, simply add a data-attribute named 'data-body-transform' with a value of the animation you'd like to use.  The JS code is already set up to dynamically apply it.
					</p>
					<div class="cta">
						<a class="--oxford_button_1 nav_button" aria-label="body_transform_3" data-body-transform="body_transform_3">body_transform_3</a>
					</div>
					
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Content -->


<!-- Content -->
<section id="home_8">
	<div class="--oxford_template_3">
		<div class="headline container">
			<h3 data-tooltip="Work In Progress">Element: Buttons</h3>
		</div>
		<div class="content container">
			
			
			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>3D</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_1" aria-label="Call to Action">CTA</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>Color Change</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_2" aria-label="Call to Action">CTA</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>Icon</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_3" aria-label="Call to Action">CTA <i class="fas fa-chevron-right"></i></a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>Border Change</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_4" aria-label="Call to Action">CTA </a>
					</div>
					
				</div>
			</div>
			
			


	</div>
</section>
<!-- Content -->




<!-- Content -->
<section id="home_9">
	
	<div class="--oxford_template_1">
		
		<div class="image" style="background-image: url('https://source.unsplash.com/1000x1000/?code');"></div>
		
		<div class="copy">
			<div class="inner">
				<h2>
					Dynamic Placeholder Images
				</h2>
				<p>
					Many of the placeholder images on this site are handled by Unsplash Source, which allows you to pull in images at whatever size you'd like, with various settings to allow you to pull images from different categories, users, tags, etc.
					<br/>
					Examples:
				</p>
				<ul>
					<li>https://source.unsplash.com/1000x1000/?code</li>
					<li>https://source.unsplash.com/500x500/?dog</li>
					<li>https://source.unsplash.com/1920x600/?nature</li>
				</ul>
				<p>
					Using these URLs to reference images will load up a random image matching the search parameters you set, and is then served up in the size you set.
					<br/><br/>
					<a href="https://source.unsplash.com/" target="_blank" aria-label="Unsplash Source Link">https://source.unsplash.com/</a>
				</p>
			</div>
		</div>

	</div>

</section>
<!-- Content -->



<!-- Content -->
<section id="home_10">
	
	<div class="--oxford_template_4 container">
		
		<div class="cell">
			<div class="inner">
				<h2>
					ADA Compliance
				</h2>
				<p>Here's 2 forms, the Contact form from earlier, and a modified copy of it with no ADA compliance. With our ADA Compliance plugin, elements that fail to pass ADA are boldly highlighted in red so you can easily identify and take care of them. </p>
				<?echo $this->Element('forms/contact');?>
			</div>
		</div>
		
		<div class="cell">
			<div class="inner">
				<h2>
					ADA Compliance
				</h2>
				<p>Because it highlights the error so boldly, it will help keep ADA in the front of your mind. Simply fix the ADA issue, and then the error styling goes away. This plugin is only loaded in a staging environment, so it won't affect live sites, and nothing has to be updated to turn it off.</p>
				<?echo $this->Element('forms/contact_no_ada');?>
			</div>
		</div>

	</div>

</section>
<!-- Content -->



<!-- Content -->
<section id="home_11">
	
	<div class="--oxford_template_5">
		
		<div class="headline container">
			<h3 data-tooltip="Work In Progress">Element: Accordian</h3>
		</div>

		<div class="content container">
			
			<div class="cell">
				<div class="label">
					<div class="icon">
						<i class="fas fa-plus open"></i>
						<i class="fas fa-minus close"></i>
					</div>
					<p class="title">Lorum Ipsum</p>
				</div>

				<div class="copy">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>

			<div class="cell">
				<div class="label">
					<div class="icon">
						<i class="fas fa-plus open"></i>
						<i class="fas fa-minus close"></i>
					</div>
					<p class="title">Lorum Ipsum</p>
				</div>

				<div class="copy">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>

			<div class="cell">
				<div class="label">
					<div class="icon">
						<i class="fas fa-plus open"></i>
						<i class="fas fa-minus close"></i>
					</div>
					<p class="title">Lorum Ipsum</p>
				</div>

				<div class="copy">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>

			<div class="cell">
				<div class="label">
					<div class="icon">
						<i class="fas fa-plus open"></i>
						<i class="fas fa-minus close"></i>
					</div>
					<p class="title">Lorum Ipsum</p>
				</div>

				<div class="copy">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>

		</div>
		

	</div>

</section>
<!-- Content -->




<!-- Content -->
<section id="home_12">
	<div class="--oxford_template_3">
		<div class="headline container">
			<h3 data-tooltip="Work In Progress">GA Events</h3>
		</div>
		<div class="content container">
			
			
			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>GA Event</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_2" aria-label="Call to Action" href="https://css-tricks.com/" data-event="GAEvent" data-category="Home" data-label="CTA-Offsite" data-action="Click" data-value="undefined">CTA</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>GA Event</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_2" aria-label="Call to Action" href="https://css-tricks.com/" data-event="GAEvent" data-category="Home" data-label="" data-action="Click" data-value="undefined">CTA</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>GA Event</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_2" aria-label="Call to Action" href="" data-event="GAEvent" data-category="Home" data-label="CTA-Offsite" data-action="click" data-value="undefined">CTA</a>
					</div>
					
				</div>
			</div>

			<div class="cell">
				<div class="card">
					<div class="headline">
						<p>GA Event</p>
					</div>
					<div class="body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
					<div class="cta">
						<a class="--oxford_button_2" aria-label="Call to Action" href="https://css-tricks.com/" data-event="GAEvent" data-category="Home" data-label="CTA-Offsite" data-action="Click" data-value="undefined">CTA</a>
					</div>
					
				</div>
			</div>
			
			


	</div>
</section>
<!-- Content -->