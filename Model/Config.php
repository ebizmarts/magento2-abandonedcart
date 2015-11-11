<?php
/**
 * Ebizmarts_Abandonedcart Magento JS component
 *
 * @category    Ebizmarts
 * @package     Ebizmarts_Abandonedcart
 * @author      Ebizmarts Team <info@ebizmarts.com>
 * @copyright   Ebizmarts (http://ebizmarts.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


namespace Ebizmarts\AbandonedCart\Model;

class Config
{
    const MAXTIMES_NUM              = 5;
    const IN_DAYS                   = 0;
    const IN_HOURS                  = 1;
    const ACTIVE                    = "abandonedcart/general/active";
    const SEND_COUPON               = "abandonedcart/coupon/create";
    const MAXTIMES                  = "abandonedcart/general/max";
    const PAGE                      = 'abandonedcart/general/page';
    const AUTOLOGIN                 = "abandonedcart/general/autologin";

    const MANDRILL_TAG              = 'abandonedcart/general/mandrill-tag';
    const CUSTOMER_GROUPS           = "abandonedcart/general/customer";
    const UNIT                      = "abandonedcart/general/unit";
    const SENDER                    = "abandonedcart/general/identity";
    // AB TESTING
    const AB_TESTING_ACTIVE         = 'abandonedcart/A_Btesting/active';
    const ABCOUNTER                 = "abandonedcart/A_Btesting/abcounter";
    const AB_TESTING_MANDRILL_SUFFIX= 'abandonedcart/A_Btesting/mandrill_suffix';
    const AB_TESTING_FIRST_EMAIL    = 'abandonedcart/A_Btesting/template1';
    const AB_TESTING_SECOND_EMAIL   = 'abandonedcart/A_Btesting/template2';
    const AB_TESTING_THIRD_EMAIL    = 'abandonedcart/A_Btesting/template3';
    const AB_TESTING_FOURTH_EMAIL   = 'abandonedcart/A_Btesting/template4';
    const AB_TESTING_FIFTH_EMAIL    = 'abandonedcart/A_Btesting/template5';
    const AB_TESTING_EMAIL_TEMPLATE = 'abandonedcart/A_Btesting/coupon_template';
    const AB_TESTING_FIRST_SUBJECT  = "abandonedcart/A_Btesting/subject1";
    const AB_TESTING_SECOND_SUBJECT = "abandonedcart/A_Btesting/subject2";
    const AB_TESTING_THIRD_SUBJECT  = "abandonedcart/A_Btesting/subject3";
    const AB_TESTING_FOURTH_SUBJECT = "abandonedcart/A_Btesting/subject4";
    const AB_TESTING_FIFTH_SUBJECT  = "abandonedcart/A_Btesting/subject5";
    const AB_TESTING_COUPON_SENDON  = "abandonedcart/A_Btesting/A_Btesting_sendon";

    const FIRST_EMAIL_TEMPLATE_XML_PATH     = 'abandonedcart/general/template1';
    const SECOND_EMAIL_TEMPLATE_XML_PATH    = 'abandonedcart/general/template2';
    const THIRD_EMAIL_TEMPLATE_XML_PATH     = 'abandonedcart/general/template3';
    const FOURTH_EMAIL_TEMPLATE_XML_PATH    = 'abandonedcart/general/template4';
    const FIFTH_EMAIL_TEMPLATE_XML_PATH     = 'abandonedcart/general/template5';
    const FIRST_SUBJECT             = "abandonedcart/general/subject1";
    const SECOND_SUBJECT            = "abandonedcart/general/subject2";
    const THIRD_SUBJECT             = "abandonedcart/general/subject3";
    const FOURTH_SUBJECT            = "abandonedcart/general/subject4";
    const FIFTH_SUBJECT             = "abandonedcart/general/subject5";

    const ENABLE_POPUP              = 'abandonedcart/emailcatcher/popup_general';
    const POPUP_HEADING             = 'abandonedcart/emailcatcher/popup_heading';
    const POPUP_TEXT                = 'abandonedcart/emailcatcher/popup_text';
    const POPUP_WIDTH               = 'abandonedcart/emailcatcher/popup_width';
    const POPUP_SUBSCRIPTION        = 'abandonedcart/emailcatcher/popup_subscription';
    const POPUP_CAN_CANCEL          = 'abandonedcart/emailcatcher/popup_cancel';
    const POPUP_COOKIE_TIME         = 'abandonedcart/emailcatcher/popup_cookie_time';
    const POPUP_INSIST              = 'abandonedcart/emailcatcher/popup_insist';
    const POPUP_CREATE_COUPON       = 'abandonedcart/emailcatcher/popup_coupon';
    const POPUP_COUPON_MANDRILL_TAG = 'abandonedcart/emailcatcher/popup_coupon_mandrill_tag';
    const POPUP_COUPON_MAIL_SUBJECT = 'abandonedcart/emailcatcher/popup_coupon_mail_subject';
    const POPUP_COUPON_TEMPLATE_XML_PATH = 'abandonedcart/emailcatcher/popup_coupon_template';
    const POPUP_COUPON_AUTOMATIC    = 'abandonedcart/emailcatcher/popup_automatic';
    const POPUP_COUPON_CODE         = 'abandonedcart/emailcatcher/popup_coupon_code';
    const POPUP_COUPON_EXPIRE       = 'abandonedcart/emailcatcher/popup_expire';
    const POPUP_COUPON_LENGTH       = 'abandonedcart/emailcatcher/popup_length';
    const POPUP_COUPON_DISCOUNTTYPE = 'abandonedcart/emailcatcher/popup_discounttype';
    const POPUP_COUPON_DISCOUNT     = 'abandonedcart/emailcatcher/popup_discount';
    const POPUP_COUPON_LABEL        = 'abandonedcart/emailcatcher/popup_couponlabel';

    const DAYS_1                    = "abandonedcart/general/days1";
    const DAYS_2                    = "abandonedcart/general/days2";
    const DAYS_3                    = "abandonedcart/general/days3";
    const DAYS_4                    = "abandonedcart/general/days4";
    const DAYS_5                    = "abandonedcart/general/days5";

    const COUPON_DAYS               = "abandonedcart/coupon/sendon";
    const FIRST_DATE                = "abandonedcart/general/firstdate";
    const COUPON_AMOUNT             = "abandonedcart/coupon/discount";
    const COUPON_AUTOMATIC          = "abandonedcart/coupon/automatic";
    const COUPON_CODE               = "abandonedcart/coupon/couponcode";
    const COUPON_EXPIRE             = "abandonedcart/coupon/expire";
    const COUPON_TYPE               = "abandonedcart/coupon/discounttype";
    const COUPON_LENGTH             = "abandonedcart/coupon/length";
    const COUPON_LABEL              = "abandonedcart/coupon/couponlabel";
}