<?php
/**
 * Checkout billing information form
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.9
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$shipping_countries  = WC()->countries->get_shipping_countries();
?>
<div class="form form--bg woocommerce-billing-fields">

    <div class="form__field">
        <h3 class="form__title">
            <?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>
                <?php esc_html_e( 'Billing &amp; Shipping', 'saleszone' ); ?>
            <?php else : ?>
                <?php esc_html_e( 'Billing details', 'saleszone' ); ?>
            <?php endif; ?>
        </h3>
    </div>

    <?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

    <div class="form__field woocommerce-billing-fields__field-wrapper">
        <?php $fields = $checkout->get_checkout_fields( 'billing' );
        foreach ($fields as $key => $field) {

            if ( isset( $field['country_field'], $fields[ $field['country_field'] ] ) ) {
                $field['country'] = $checkout->get_value( $field['country_field'] );
            }

            $field['class'][] = apply_filters('premmerce-checkout-filed-class', 'form__field form__field--hor form__field--hor-lg');
            $field['label_class'][] = 'form__label form__label--req';
            $field['input_class'][] = 'form-control';
            $field['label'] = isset($field['label']) ? $field['label'] : ' ';

            // Hide country field
            if ( $key == 'billing_country' && saleszone_option('checkout-billing-form-fields-list') == 'short' && !function_exists('wooccm_get_woo_version') && count($shipping_countries) == 1){
                $field['class'][] = 'hidden';
            }

            woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
        }?>
    </div>

	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>

    <?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
        <div class="form__field ">
            <?php if ( ! $checkout->is_registration_required() ) : ?>
                <div class="form__field woocommerce-account-fields">
                    <label class="form__checkbox" for="createaccount">
                        <span class="form__checkbox-field">
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ) ?> type="checkbox" name="createaccount" value="1" />
                        </span>
                        <span class="form__checkbox-inner">
                            <span>
                                <?php esc_html_e( 'Create an account?', 'saleszone' ); ?>
                            </span>
                        </span>
                    </label>
                </div>
            <?php endif; ?>

            <?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

            <?php if ( $checkout->get_checkout_fields( 'account' ) ) : ?>

                <div class="form__field create-account">
                    <?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
                        <?php
                        $field['class'][] = 'form__field form__field--hor form__field--hor-lg';
                        $field['label_class'][] = 'form__label form__label--req';
                        $field['input_class'][] = 'form-control';
                        $field['label'] = isset($field['label']) ? $field['label'] : ' ';
                        woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
                    <?php endforeach; ?>
                    <div class="clear"></div>
                </div>

            <?php endif; ?>

            <?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
        </div>
    <?php endif; ?>

</div>
