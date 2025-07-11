<script>
    (function($){
        "use strict";
        $(document).ready(function(){
            // if the wallet checkbox is checked need to show this value as current selected payment gateway
            $(document).on('click', '.wallet_selected_payment_gateway',function(){
                $('.payment-gateway-wrapper li').removeClass('active');
                $('.payment-gateway-wrapper li').removeClass('selected');
                $('.wallet-payment-gateway-wrapper .wallet_selected_payment_gateway').addClass('selected');
                $('.payment-gateway-wrapper #order_from_user_wallet').val('wallet');
            });

            //Payment gateway select
            $(document).on('click', '.payment_getway_image ul li',function(){
                //wallet start
                $('.wallet_selected_payment_gateway').removeClass('selected')
                $( ".wallet_selected_payment_gateway" ).prop( "checked", false );
                //wallet end

                //current balance start
                $('.current_balance_selected_gateway').addClass('selected');
                $( ".current_balance_selected_gateway" ).prop( "checked", false );
                //current balance end

                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                let payment_gateway_name = $(this).data('gateway');

                $('.kinetic_payment_show_hide').hide();
                if(payment_gateway_name == 'kineticpay'){
                    $('.kinetic_payment_show_hide').show();
                }

                $('#msform input[name=selected_payment_gateway]').val();

                $('.payment_gateway_extra_field_information_wrap > div').hide();
                $('.payment_gateway_extra_field_information_wrap div.'+payment_gateway_name+'_gateway_extra_field').show();

                $(this).addClass('selected').siblings().removeClass('selected');
                $('.payment-gateway-wrapper').find(('input')).val(payment_gateway_name);
            });
            $('.payment_getway_image ul li.selected.active').trigger('click');
        });
    }(jQuery));
</script>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/components/frontend/payment-gateway/gateway-select-js.blade.php ENDPATH**/ ?>