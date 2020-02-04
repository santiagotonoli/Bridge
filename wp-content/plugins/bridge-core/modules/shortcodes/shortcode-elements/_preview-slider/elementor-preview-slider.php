<?php

class BridgeCoreElementorPreviewSlider extends \Elementor\Widget_Base{
    public function get_name() {
        return 'bridge_preview_slider';
    }

    public function get_title() {
        return esc_html__( 'Qode Preview Slider', 'bridge-core' );
    }

    public function get_icon() {
        return 'bridge-elementor-custom-icon bridge-elementor-preview-slider';
    }

    public function get_categories() {
        return [ 'qode' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'general',
            [
                'label' => esc_html__( 'General', 'bridge-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'big_image',
            [
                'label' => esc_html__( 'Main Image', 'bridge-core'),
                'type' => \Elementor\Controls_Manager::MEDIA
            ]
        );

        $repeater->add_control(
            'small_image',
            [
                'label' => esc_html__( 'Preview Image', 'bridge-core'),
                'type' => \Elementor\Controls_Manager::MEDIA
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label' => esc_html__( 'Link', 'bridge-core'),
                'type' => \Elementor\Controls_Manager::TEXT
            ]
        );

        $repeater->add_control(
            'target',
            [
                'label' => esc_html__( 'Link Target', 'bridge-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => bridge_qode_get_link_target_array(false),
                'default' => '_self'
            ]
        );

        $this->add_control(
            'preview_slider_items',
            [
                'label' => esc_html__( 'Preview Slider Items', 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => esc_html__('Preview Slider Item'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render(){
        $params = $this->get_settings_for_display();

        ?>

        <div class="qode-preview-slider">
            <div class="qode-presl-main-slider">
                <ul class="slides">
                    <?php
                        foreach ( $params['preview_slider_items'] as $slider_items ){

                            if( ! empty( $slider_items['big_image'] ) ){
                                $slider_items['big_image'] = $slider_items['big_image']['id'];
                            }

                            if( ! empty( $slider_items['small_image'] ) ){
                                $slider_items['small_image'] = $slider_items['small_image']['id'];
                            }

                            echo bridge_core_get_shortcode_template_part('templates/preview-slider-item', '_preview-slider', '', $slider_items);
                        }
                    ?>
                </ul>
            </div>
            <div class="qode-presl-small-slider-holder">
                <div class="qode-presl-small-slider">
                    <ul class="slides"></ul>
                </div>
                <img itemprop="image" class="qode-presl-phone" src="<?php echo esc_url( get_template_directory_uri() . '/img/bridge-phone-hollow.png' ); ?>" alt="<?php echo esc_html__('Phone', 'bridge-core'); ?>">
            </div>
        </div>

        <?php

    }

}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new BridgeCoreElementorPreviewSlider() );