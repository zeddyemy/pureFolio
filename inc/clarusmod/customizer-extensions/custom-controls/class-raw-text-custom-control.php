<?php

/**
 * Custom Raw Text Control
 *
 * @author Zeddy Emmanuel <https://zeddyemy.github.io/>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

class Clarusmod_Raw_Text_Custom_Control extends Clarusmod_Customize_Control
{

    // The type of control being rendered
    public $type = 'simple_notice';

    // Render the control in the customizer
    public function render_content()
    {
        $allowed_html = array(
            'a' => array(
                'href' => array(),
                'title' => array(),
                'class' => array(),
                'target' => array(),
            ),
            'br' => array(),
            'em' => array(),
            'strong' => array(),
            'i' => array(
                'class' => array()
            ),
            'span' => array(
                'class' => array(),
            ),
            'code' => array(),
        ); ?>

        <div class="simple-notice-custom-control">
            <?php if (!empty($this->label)) { ?>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <?php } ?>
            <?php if (!empty($this->description)) { ?>
                <span class="customize-control-description"><?php echo wp_kses($this->description, $allowed_html); ?></span>
            <?php } ?>
        </div>
<?php
    }
}
