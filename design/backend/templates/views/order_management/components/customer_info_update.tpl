{include file="views/profiles/components/profiles_scripts.tpl"}

{$enable_required = $enable_required|default:true}
{$allow_email_required_contacts = $allow_email_required_contacts|default:true}
{$allow_email_required_profile = $allow_email_required_profile|default:true}

<div title="{__("customer_info")}" id="customer_info">
<form action="{""|fn_url}" method="post" enctype="multipart/form-data" class="form-horizontal form-edit cm-ajax cm-form-dialog-closer" name="om_customer_info_form">

<input type="hidden" name="result_ids" value="customer_info,{$result_ids}" />
<input type="hidden" name="order_id" value="{$cart.order_id}" />

{if $customer_auth.user_id && $settings.General.user_multiple_profiles == "Y"} {* Select user profile *}
    {assign var='current_profile_id' value=$user_data.profile_id|default:$cart.profile_id}
    <div class="control-group">
        <label class="control-label" for="profile_id">{__("select_profile")}</label>
        <div class="controls">
            <select name="profile_id" id="profile_id" class="select-expanded">
                {foreach from=$user_profiles item="user_profile"}
                    <option value="{$user_profile.profile_id}" {if $current_profile_id == $user_profile.profile_id}selected="selected"{/if}>{$user_profile.profile_name}</option>
                {/foreach}
            </select>
        </div>
    </div>
{/if}

<div id="profile_fields_c">
{include file="views/profiles/components/profile_fields.tpl"
    user_data=$user_data
    section="C"
    title=__("contact_information")
    enable_required=$enable_required
    allow_email_required=$allow_email_required_contacts
}
</div>

{if $settings.Checkout.address_position == 'shipping_first'}
    <div id="profile_fields_s">
        {include file="views/profiles/components/profile_fields.tpl"
            user_data=$user_data
            section="S"
            title=__("shipping_address")
            enable_required=$enable_required
            allow_email_required=$allow_email_required_profile
        }
    </div>
    <div id="profile_fields_b">
        {include file="views/profiles/components/profile_fields.tpl"
            user_data=$user_data
            section="B"
            title=__("billing_address")
            body_id="bi"
            shipping_flag=$profile_fields|fn_compare_shipping_billing
            ship_to_another=$cart.ship_to_another
            enable_required=$enable_required
            allow_email_required=$allow_email_required_profile
        }
    </div>
{else}
    <div id="profile_fields_b">
        {include file="views/profiles/components/profile_fields.tpl"
            user_data=$user_data
            section="B"
            title=__("billing_address")
            enable_required=$enable_required
            allow_email_required=$allow_email_required_profile
        }
    </div>
    <div id="profile_fields_s">
        {include file="views/profiles/components/profile_fields.tpl"
            user_data=$user_data
            section="S"
            title=__("shipping_address")
            body_id="sa"
            shipping_flag=$profile_fields|fn_compare_shipping_billing
            ship_to_another=$cart.ship_to_another
            enable_required=$enable_required
            allow_email_required=$allow_email_required_profile
        }
    </div>
{/if}

{if !$customer_auth.user_id && $settings.Checkout.disable_anonymous_checkout == "Y"}
    {include file="views/profiles/components/profiles_account.tpl" redirect_denied=true}
{/if}

{hook name="order_management:customer_info_buttons"}
<div class="buttons-container">
    <a class="cm-dialog-closer cm-cancel tool-link btn">{__("cancel")}</a>
    {if $cart.order_id}
        {include file="pickers/users/picker.tpl" extra_var="order_management.select_customer?page=`$smarty.request.page`&order_id=`$cart.order_id`" display="radio" but_text=__("choose_user") no_container=true but_meta="btn" shared_force=$users_shared_force}
    {/if}
    {include file="buttons/button.tpl"
        but_text=__("update")
        but_meta=""
        but_name="dispatch[order_management.customer_info]"
        but_role="button_main"
    }
</div>
{/hook}

</form>
<!--customer_info--></div>

<script>
(function(_, $) {
    $(_.doc).on('change', '#profile_id', function() {
        var data = {
            'result_ids' : 'customer_info'
        };

        $.ceAjax('request', '{"order_management.customer_info?profile_id="|fn_url nofilter}' + $(this).val(), data);
    });
}(Tygh, Tygh.$));
</script>
