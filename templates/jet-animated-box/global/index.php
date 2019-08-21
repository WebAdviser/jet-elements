<?php
/**
 * Loop item template
 */

$settings      = $this->get_settings();
$title_tag     = $this->__get_html( 'title_html_tag', '%s' );
$sub_title_tag = $this->__get_html( 'sub_title_html_tag', '%s' );

?><div class="jet-animated-box <?php $this->__html( 'animation_effect', '%s' ); ?>" <?php echo $this->generate_setting_json(); ?>>
	<div class="jet-animated-box__front"><?php

		if( 'toggle' === $settings['switch_event_type'] ) {
			?><div class="jet-animated-box__toggle jet-animated-box__toggle--front"><?php
				$this->__icon( 'front_side_toggle_icon', '<div class="jet-animated-box__toggle-icon"><span class="jet-elements-icon">%s</span></div>' );
			?></div><?php
		}
		?><div class="jet-animated-box__overlay"></div>
		<div class="jet-animated-box__inner"><?php

			if ( 'default' === $settings['front_side_content_type'] ) {
				$this->__icon( 'front_side_icon', '<div class="jet-animated-box__icon jet-animated-box__icon--front"><div class="jet-animated-box-icon-inner"><span class="jet-elements-icon">%s</span></div></div>' );
				?><div class="jet-animated-box__content"><?php
					$this->__html( 'front_side_title', '<' . $title_tag . ' class="jet-animated-box__title jet-animated-box__title--front">%s</' . $title_tag . '>' );
					$this->__html( 'front_side_subtitle', '<' . $sub_title_tag . ' class="jet-animated-box__subtitle jet-animated-box__subtitle--front">%s</' . $sub_title_tag . '>' );
					$this->__html( 'front_side_description', '<p class="jet-animated-box__description jet-animated-box__description--front">%s</p>' );
				?></div><?php
			} else {
				echo $this->get_template_content( $settings['front_side_template_id'] );
			}
		?></div>
	</div>
	<div class="jet-animated-box__back"><?php

		if( 'toggle' === $settings['switch_event_type'] ) {
			?><div class="jet-animated-box__toggle jet-animated-box__toggle--back"><?php
				$this->__icon( 'back_side_toggle_icon', '<div class="jet-animated-box__toggle-icon"><span class="jet-elements-icon">%s</span></div>' );
			?></div><?php
		}

		?><div class="jet-animated-box__overlay"></div>
		<div class="jet-animated-box__inner"><?php

		if ( 'default' === $settings['back_side_content_type'] ) {
			$this->__icon( 'back_side_icon', '<div class="jet-animated-box__icon jet-animated-box__icon--back"><div class="jet-animated-box-icon-inner"><span class="jet-elements-icon">%s</span></div></div>' );
			?><div class="jet-animated-box__content"><?php
				$this->__html( 'back_side_title', '<' . $title_tag . ' class="jet-animated-box__title jet-animated-box__title--back">%s</' . $title_tag . '>' );
				$this->__html( 'back_side_subtitle', '<' . $sub_title_tag . ' class="jet-animated-box__subtitle jet-animated-box__subtitle--back">%s</' . $sub_title_tag . '>' );
				$this->__html( 'back_side_description', '<p class="jet-animated-box__description jet-animated-box__description--back">%s</p>' );
				$this->__glob_inc_if( 'action-button', array( 'back_side_button_link', 'back_side_button_text' ) );
			?></div><?php
		} else {
			echo $this->get_template_content( $settings['back_side_template_id'] );
		}
		?></div>
	</div>
</div>
