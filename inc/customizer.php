<?php
/*
 * Horizontal Holiday Customizer functionality
 *
 * @package WordPress
 * @subpackage Horizontal_Holiday
 * @since Horizontal Holiday 1.0
 */
// Add text field scheme setting and control.
function horizontalholiday_customize_register($wp_customize) {
    /*
     * Adds textarea support to the theme customizer
     */
    class Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';
        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
            </label>
            <?php
        }}

    $wp_customize->add_setting('phone_contact_setting');
    $wp_customize->add_control('phone_contact_control', array(
        'label'    => __('Contact number', 'Horizontal Holiday'),
        'section'  => 'title_tagline',
        'settings' => 'phone_contact_setting'
    ));

    $wp_customize->add_setting('сopyright_setting');
    $wp_customize->add_control('сopyright_text_control', array(
        'label'    => __('Copyright', 'Horizontal Holiday'),
        'section'  => 'title_tagline',
        'settings' => 'сopyright_setting'
    ));

    $wp_customize->add_setting('footer_setting');
    $wp_customize->add_control(new Customize_Textarea_Control(
            $wp_customize, 'footer_control', array(
        'label'    => __('The text in the footer', 'Horizontal Holiday'),
        'section'  => 'title_tagline',
        'settings' => 'footer_setting'
            )
    ));

    $wp_customize->add_setting('img_header_setting');
    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, 'img_header_setting', array(
        'label'    => __('Image caps', 'Horizontal Holiday'),
        'section'  => 'title_tagline',
        'settings' => 'img_header_setting'
    )));
}

add_action('customize_register', 'horizontalholiday_customize_register');
