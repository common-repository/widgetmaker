<?php

/*
Plugin Name: WidgetMaker
Plugin URI: http://www.widgetmaker.co.uk
Description: Providing content-enhancing widgets
Version: 1.4.0
Author: Widget Maker
Author URI: http://www.widgetmaker.co.uk
License: GPL2
*/

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerAmazonSearch($atts, $content = null)
{
    extract( shortcode_atts( array(
        'style' => 'default',
        'theme' => 'default',
        'title' => '',
        'affiliateid' => '',
        'locale' => ''
    ), $atts ) );


    $dataAttributes = 'data-affiliateid="' . $affiliateid . '"';
    $dataAttributes .= ' data-locale="' . $locale . '"';

    $titleAttribute = "";
    if(!empty($title)) {
        $titleAttribute = 'data-title="' . $title . '"';
    }

    $html = <<<EOD
<div class="widgetmaker" data-widget="amazon-discount-finder" data-theme="{$theme}" data-style="{$style}" {$dataAttributes} {$titleAttribute}></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerAmazonQuickSearch($atts, $content = null)
{
    extract( shortcode_atts( array(
        'affiliateid' => '',
        'theme' => 'default',
    ), $atts ) );

    $html = <<<EOD
<div class="widgetmaker" data-widget="amazon-quick-search" data-theme="{$theme}" data-style="default" data-affiliateid="{$affiliateid}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerAmazonPrime($atts, $content = null)
{
    extract( shortcode_atts( array(
        'affiliateid' => '',
    ), $atts ) );


    $dataAttributes = 'data-affiliateid="' . $affiliateid . '"';

    $html = <<<EOD
<div class="widgetmaker" data-widget="amazon-prime-wall" {$dataAttributes}></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerAmazonProduct($atts, $content = null)
{
    extract( shortcode_atts( array(
        'url' => '',
    ), $atts ) );
    $html = <<<EOD
<div class="widgetmaker" data-widget="amazon-product" data-theme="default" data-style="default" data-url="{$url}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerBlackFriday($atts, $content = null)
{
    extract( shortcode_atts( array(
        'affiliateonly' => '',
		'locale' => '',
    ), $atts ) );

    $html = <<<EOD
<div class="widgetmaker" data-widget="black-friday" data-theme="default" data-style="default" data-affiliate-only="{$affiliateonly}" data-locale="{$locale}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerEtsyProduct($atts, $content = null)
{
    extract( shortcode_atts( array(
        'url' => '',
        'position' => 'left',
    ), $atts ) );
    $html = <<<EOD
<div class="widgetmaker" data-widget="etsy-product" data-theme="default" data-style="default" data-url="{$url}" data-position="{$position}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerEbayCollection($atts, $content = null)
{
    extract( shortcode_atts( array(
        'epn' => '',
    ), $atts ) );
    $html = <<<EOD
<div class="widgetmaker" data-widget="ebay-collection" data-theme="default" data-style="default" data-epn="{$epn}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerFashionSlider($atts, $content = null)
{
    $content = wp_strip_all_tags($content);
    $html = <<<EOD
<div class="widgetmaker" data-widget="fashion-slider" data-theme="default" data-style="default" data-urls="{$content}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerExample($atts, $content = null)
{
    extract( shortcode_atts( array(
        'widget' => '',
    ), $atts ) );
    $html = <<<EOD
<div class="widgetmaker" data-widget="examples" data-example-widget="{$widget}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerProductBox($atts, $content = null)
{
    $content = wp_strip_all_tags($content);
    $html = <<<EOD
<div class="widgetmaker" data-widget="product-box" data-theme="default" data-style="default" data-url="{$content}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerFashionMannequin($atts, $content = null)
{
    $content = wp_strip_all_tags($content);
    $html = <<<EOD
<div class="widgetmaker" data-widget="fashion-mannequin" data-theme="default" data-style="default" data-urls="{$content}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerFashionAssembly($atts, $content = null)
{
    $content = wp_strip_all_tags($content);

    $html = <<<EOD
<div class="widgetmaker" data-widget="fashion-assembly" data-theme="default" data-style="default" data-urls="{$content}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerFashionOutfits($atts, $content = null)
{
    $doneContent = do_shortcode(wp_strip_all_tags($content));
    $doneContent = trim($doneContent);
    $html = <<<EOD
<div class="widgetmaker" data-widget="fashion-outfits" data-theme="default" data-style="default" {$doneContent}></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerG2a($atts, $content = null)
{
    extract( shortcode_atts( array(
        'position' => '',
    ), $atts ) );

    $doneContent = wp_strip_all_tags($content);
    $html = <<<EOD
<div class="widgetmaker" data-widget="g2a" data-theme="default" data-style="default" data-position="{$position}" data-urls="{$doneContent}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerSteamOffers($atts, $content = null)
{
    $html = <<<EOD
<div class="widgetmaker" data-widget="steam-offers" data-theme="default" data-style="default"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerFashionOutfit($atts, $content = null)
{
    $doneContent = wp_strip_all_tags($content);
    $doneContent = trim($doneContent);

    $s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);

    $html = <<<EOD
data-outfit-{$s}="{$doneContent}"
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerCalculatorDebtPaidOff($atts, $content = null)
{
    $html = <<<EOD
<div class="widgetmaker" data-widget="calculator-debt-paid-off" data-theme="default" data-style="default"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerPrice($atts, $content = null)
{
    extract( shortcode_atts( array(
        'url' => '',
    ), $atts ) );

    $html = <<<EOD
<div class="widgetmaker" data-widget="price" data-url="{$url}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerZeek($atts, $content = null)
{
    extract( shortcode_atts( array(
        'brand' => '',
        'deeplink' => '',
    ), $atts ) );

    $html = <<<EOD
<div class="widgetmaker" data-widget="zeek" data-theme="default" data-style="default" data-brand="{$brand}" data-deeplink="{$deeplink}"></div>
EOD;
    return $html;
}

/**
 * @param $atts
 * @param null $content
 * @return string
 */
function wm_WidgetMakerGenericWidget($atts, $content = null)
{
    extract( shortcode_atts( array(
        'position' => '',
        'theme' => '',
        'style' => '',
        'key' => '',
        'url' => '',
        'urls' => '',
    ), $atts ) );

    $html = <<<EOD
<div class="widgetmaker" data-widget="custom" data-theme="{$theme}" data-style="{$style}" data-position="{$position}" data-key="{$key}" data-urls="{$urls}" data-url="{$url}"></div>
EOD;
    return $html;
}

/**
 *
 */
function wm_WidgetMakerFooter()
{
    $accountUuid = get_option("widgetmaker-uuid");
    if(empty($accountUuid)) {
        return "";
    }

    $html = <<<EOD
<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','https://connect.widgetmaker.co.uk/api/{$accountUuid}/sdk.js');
</script>
EOD;
    echo $html;
}

/**
 *
 */
function wm_WidgetMakerCreateMenu()
{
    add_menu_page('WidgetMaker', 'WidgetMaker', 'administrator', 'widgetmaker', 'wm_WidgetMakerSettingsPage');
    add_submenu_page('widgetmaker', 'WidgetMaker', 'Shortcodes List', 'administrator', 'widgetmaker_shortcodes_list', 'wm_WidgetMakerListPage');
    add_action( 'admin_init', 'wm_WidgetMakerSettings' ); 
}

/**
 *
 */
function wm_WidgetMakerSettings()
{
    //register our settings
    register_setting( 'widgetmaker-settings-group', 'widgetmaker-uuid' );
}

/**
 *
 */
function wm_WidgetMakerListPage()
{
    $accountUuid = get_option("widgetmaker-uuid");
    $alertDisplay = "";
    if(!empty($accountUuid)) {
        $alertDisplay = "display: none;";
    }
    $html = <<<EOD
<div class="wrap">
    <h1>List of available WidgetMaker widgets</h1>
    <style>
    ul.tag-list li.shortcode-example {
        padding: 10px;
        width: 32%;
        display: inline-block;
        height: 470px;
        float: left;
        position: relative;
    }

    .shortcode-example-inner {
        background: #FFF;
        border: solid 1px #ccc;
        padding: 10px;
        display: block;
        height: 100%;
        width: 100%;
        box-sizing: border-box;
        margin-right: 0.6%;
    }

    ul.shortcode-options {
        margin-left: 20px;
    }

    span.option-intro {
        padding-left: 14px;
        display: block;
        padding-bottom: 8px;
    }

    span.shortcode-available {
        color: green;
    }
    span.required, span.shortcode-not-available {
        color: red;
    }
    .available-from {
        position: absolute;
        right: 20px;
        font-size: 10px;
        text-transform: uppercase;
        font-weight: bold;
    }
    .shortcode-example-inner pre {
        font-size: 11px;
    }
	p.first-line-intro {
		font-size: 15px;
		margin-bottom: 0px;
	}
	p.second-line-intro {
		font-size: 15px;
		margin-top: 0px;
	}
	.example-code {
        display: block;
        font-family: monospace;
        white-space: pre;
        margin: 1em 0px;
		font-size: 11px;
	}
	input.wm-filter-input {
        width: 100%;
        height: 40px;
    }
    .widgetmaker-alert {
        background-color: #d9534f!important;
        color: #FFF;
        padding: 15px;
        margin-top: 8px;
    }
</style>
<div class="widgetmaker-list">
    <div class="widgetmaker-shortcode">
        <p class="first-line-intro">To use the widget on your site, you need to copy + paste the shortcodes from the examples below into your blog post.</p>
		<p class="second-line-intro">Remember to replace our example URLs with your REAL affiliate (or non-affiliate) URLs.</p>
        <hr />
        <div class="filter-widgetmaker-widgets">
            <h3>Filter widgets</h3>
            <input class="wm-filter-input" name="wm-filter-text" placeholder="Search term.." value="" />
        </div>
        <div class="widgetmaker-alert" style="{$alertDisplay}">These are all the currently available widgets. Please set your account ID to see which widgets are available to you.</div>
        <ul class="tag-list">
			<li class="shortcode-example" data-widget="AmazonPrimeWall">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-amazon-prime-wall]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/amazon-prime-wall/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/amazon-prime-wall" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li><strong>affiliateid <span class="required">*</span></strong><br />
                            <span class="option-intro"><small>This is your Amazon Associates affiliate tag. This can be found at <a href="https://affiliate-program.amazon.co.uk/" target="_blank">Amazon Associates</a>.</small><br />
                            <i>e.g. [widgetmaker-amazon-prime-wall affiliateid="ama-zon-t1"]</i></span></li>
                    </ul>
                    <hr />
                    <p>Examples:</p>
                    <div class="example-code">&#91;widgetmaker-amazon-prime-wall affiliateid="ama-zon-t1"&#93;</div>
                </div>
            </li>
            <li class="shortcode-example" data-widget="AmazonProduct">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-amazon-product]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/amazon-product-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/amazon-product-widget" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li><strong>url <span class="required">*</span></strong><br />
                            <span class="option-intro"><small>This is your Amazon URL (from the Amazon Associate's SiteStrip Bar)..</small><br />
                            <i>e.g. [widgetmaker-amazon-product url=http://amzn.to/2sjpz5Q]</i></span></li>
                    </ul>
                    <p><i><span style="color:red;">Important:</span> The URL must be an "amazon.com", "amazon.co.uk" OR "amzn.to" (Amazon's URL shortener) URL.</i></p>
                    <hr />
                    <p>Examples:</p>
                    <div class="example-code">&#91;widgetmaker-amazon-product url=http://amzn.to/2sjpz5Q&#93;</div>
                    <div class="example-code">&#91;widgetmaker-amazon-product url="http://amzn.to/2sjpz5Q"&#93;</div>
                </div>
            </li>
            <li class="shortcode-example" data-widget="AmazonSearch">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-amazon-quick-search]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/amazon-quick-search-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/amazon-quick-search-widget/" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li><strong>affiliateid <span class="required">*</span></strong><br />
                            <span class="option-intro"><small>This is your Amazon Associates affiliate tag. This can be found at <a href="https://affiliate-program.amazon.co.uk/" target="_blank">Amazon Associates</a>.</small><br />
                            <i>e.g. [widgetmaker-amazon-quick-search theme="default" affiliateid="ama-zon-t1"]</i></span></li>
						<li><strong>theme</strong> <br />
                            <span class="option-intro"><small>The theme is the color scheme of the widget. This can be either 'default', 'light' or 'dark'. This is set to 'default' by default.</small><br />
                            <i>e.g. [widgetmaker-amazon-quick-search theme="light" affiliateid="ama-zon-t1"]</i></span></li>
                    </ul>
                    <hr />
                    <p>Examples:</p>
                    <div class="example-code">&#91;widgetmaker-amazon-quick-search theme="default" affiliateid="ama-zon-t1"&#93;</div>
                </div>
            </li>
            <li class="shortcode-example" data-widget="AmazonDiscountFinder">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-amazon-search]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/amazon-search-affiliate-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/amazon-search-affiliate-widget" target="_blank">Information</a>

                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li><strong>affiliateid <span class="required">*</span></strong><br />
                            <span class="option-intro"><small>This is your Amazon Associates affiliate tag. This can be found at <a href="https://affiliate-program.amazon.co.uk/" target="_blank">Amazon Associates</a>.</small><br />
                            <i>e.g. [widgetmaker-amazon-search affiliateid="ama-zon-t1"]</i></span></li>

                        <li><strong>style</strong> <br />
                            <span class="option-intro"><small>The style of the widget. This can be either 'default', 'thin' or 'full'. This is set to 'default' by default.</small></span></li>
                        <li><strong>theme</strong> <br />
                            <span class="option-intro"><small>The theme is the color scheme of the widget. This can be either 'default', 'light' or 'dark'.</small></span></li>
                        <li><strong>title</strong><br />
                            <span class="option-intro"><small>You can set a custom title within the tool. This can anything up to 255 characters long</small></span></li>
                        <li><strong>locale</strong><br />
                            <span class="option-intro"><small>You can set US, CA or UK</small></span></li>
                    </ul>
                    <hr />
                    <p>Examples:</p>
                    <div class="example-code">&#91;widgetmaker-amazon-search style="thin" theme="dark" affiliateid="gar-bot-t1"&#93;</div>
                    <div class="example-code">&#91;widgetmaker-amazon-search style="full" affiliateid="exa-amp-le" locale="US"&#93;</div>
                </div>
            </li>

			<li class="shortcode-example" data-widget="BlackFriday">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-black-friday]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/black-friday-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/black-friday-widget/" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul>
                        <li><strong>affiliateonly</strong> <i>yes/no</i><br />
                            <span class="option-intro"><small>Only show results for sites that have an affiliate deep-link URL.</small></span><br />
							<i>e.g. [widgetmaker-black-friday affiliateonly="yes"]</i></span></li>
                    </ul>
					<p>Requirements:</p>
                    <ul>
                        <li>Please set your deep-link URLs via the <a href="https://app.widgetmaker.co.uk/deeplink-urls" target="_blank">widgetmaker site</a>.</li>
                    </ul>
                    <hr />
                    <p>Example:</p>
                    <div class="example-code">&#91widgetmaker-black-friday&#93;</div>
					<div class="example-code">&#91widgetmaker-black-friday affiliateonly="yes"&#93;</div>
                </div>
            </li>

            <li class="shortcode-example" data-widget="CalculatorDebtPaidOff">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-debt-calculator]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/calculator-debt-paid-off/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/calculator-debt-paid-off/" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul>
                        <li>No options required</li>
                    </ul>
                    <hr />
                    <p>Example:</p>
                    <div class="example-code">&#91widgetmaker-debt-calculator&#93;</div>
                </div>
            </li>

			<li class="shortcode-example" data-widget="EbayCollection">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-ebay-collection]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/ebay-collection-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/ebay-collection-widget" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul>
                        <li><strong>epn<span class="required">*</span></strong><br />
                            <span class="option-intro"><small>This is your eBay Partner Network URL</small><br />
                            <i>e.g. [widgetmaker-ebay-collection epn="http://rover.ebay.com/rover/1/7.."]</i></span></li>
                    </ul>
                    <hr />
                    <p>Example:</p>
                    <div class="example-code">&#91widgetmaker-ebay-collection epn="http://rover.ebay.com/rover/1/7.."&#93;</div>
                </div>
            </li>

            <li class="shortcode-example" data-widget="EtsyProduct">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-etsy-product]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/etsy-product-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/etsy-product-widget" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul>
                        <li><strong>url <span class="required">*</span></strong><br />
                            <span class="option-intro"><small>This is the Etsy Product URL (this can also be a shortened URL, i.e. bit.ly)</small><br />
                            <i>e.g. [widgetmaker-etsy-product url="https://www.etsy.com/uk/listing/45.."]</i></span></li>

                        <li><strong>position</strong><br />
                            <span class="option-intro"><small>Position the widget to the left or right within content. This is set to 'left' by default.</small><br />
                            <i>e.g. [widgetmaker-etsy-product url="https://www.etsy.com/uk/listing/45.." position="left"]</i></span></li>
                    </ul>
                    <hr />
                    <p>Example:</p>
                    <div class="example-code">&#91widgetmaker-etsy-product url="https://www.etsy.com/uk/listing/45.." position="left"&#93;</div>
                    <div class="example-code">&#91widgetmaker-etsy-product url="https://www.etsy.com/uk/listing/45.." position="right"&#93;</div>
                </div>
            </li>

			 <li class="shortcode-example" data-widget="FashionOutfits">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-fashion-assembly]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/fashion-assembly-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/fashion-assembly-widget" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul>
                        <li>No options required</li>
                    </ul>
                    <hr />
                    <p>Example:</p>
                    <div class="example-code">&#91;widgetmaker-fashion-assembly]
    http://www.affiliateport.com/testlink1,
    http://www.affiliateport.com/testlink2,
    http://www.affiliateport.com/testlink3,
    http://www.affiliateport.com/testlink4
[/widgetmaker-fashion-assembly&#93;</div>
                </div>
            </li>

            <li class="shortcode-example" data-widget="FashionMannequin">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-fashion-mannequin]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/fashion-mannequin-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/fashion-mannequin-widget" target="_blank">Information</a>

                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li>No options required</li>
                    </ul>
                    <hr />
                    <p>Examples:
                    <div class="example-code">&#91;widgetmaker-fashion-mannequin]
    http://www.affiliateport.com/testlink1,
    http://www.affiliateport.com/testlink2,
    http://www.affiliateport.com/testlink3,
    http://www.affiliateport.com/testlink4
[/widgetmaker-fashion-mannequin&#93;</div>
                </div>
            </li>

			<li class="shortcode-example" data-widget="FashionSlider">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-fashion-slider]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/fashion-slider-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/fashion-slider-widget/" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li>No options required</li>
                    </ul>
                    <hr />
                    <p>Examples:</p>
                    <div class="example-code">&#91;widgetmaker-fashion-slider]
    http://www.affiliateport.com/testlink1,
    http://www.affiliateport.com/testlink2,
    http://www.affiliateport.com/testlink3,
    http://www.affiliateport.com/testlink4,
    http://www.affiliateport.com/testlink5,
[/widgetmaker-fashion-slider&#93;</div>
                </div>
            </li>

			<li class="shortcode-example" data-widget="FashionOutfits">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-outfits]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/fashion-outfits-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/fashion-outfits-widget" target="_blank">Information</a>

                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li>No options required</li>
                    </ul>
                    <p><i><span style="color:red;">Important:</span> There must be the same amount of URLs in each outfit</i></p>
                    <hr />
                    <p>Examples:</p>
<div class="example-code">&#91;widgetmaker-outfits]
    [widgetmaker-outfit]
        http://www.affiliateurl.com/scarf1,
        http://www.affiliateurl.com/bluetop,
        http://www.affiliateurl.com/jeans,
        http://www.affiliateurl.com/red-shoes,
    [/widgetmaker-outfit]

    [widgetmaker-outfit]
        http://www.affiliateurl.com/yellow-cap,
        http://www.affiliateurl.com/red-jumper,
        http://www.affiliateurl.com/pink-skirt,
        http://www.affiliateurl.com/red-shoes,
    [/widgetmaker-outfit]
[/widgetmaker-outfits&#93;</div>
                </div>
            </li>

			<li class="shortcode-example" data-widget="Price">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>&#91;widgetmaker-price&#93;</strong></span>
                    <a href="https://www.widgetmaker.co.uk/price-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/price-widget/" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul>
                        <li><strong>url <span class="required">*</span></strong><br />
                            <span class="option-intro"><small>This is the Product URL.</small><br />
                            <i>e.g. [widgetmaker-price url="http://www.affiliateurl.com/scarf1"]</i></span></li>
                    </ul>
                    <hr />
                    <p>Examples:</p>
					<div class="example-code">&#91;widgetmaker-price url=&quot;http://www.affiliateurl.com/scarf1&quot;]&#93;</div>
                </div>
            </li>
			
			<li class="shortcode-example" data-widget="ProductBox">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>[widgetmaker-product-box]</strong></span>
                    <a href="https://www.widgetmaker.co.uk/product-box-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/product-box-widget" target="_blank">Information</a>

                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li>No options required</li>
                    </ul>
                    <p><i><span style="color:red;">Important:</span> Just <u>one</u> URL is allowed.</i></p>
                    <hr />
                    <p>Examples:</p>
<div class="example-code">&#91;widgetmaker-product-box]
	http://www.affiliateurl.com/scarf1
[/widgetmaker-product-box&#93;</div>
                </div>
            </li>

			<li class="shortcode-example" data-widget="SteamOffers">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>&#91;widgetmaker-steam-offers&#93;</strong></span>
                    <a href="https://www.widgetmaker.co.uk/steam-offers-demo/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/steam-offers-demo/" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li>No options required</li>
                    </ul>
                    <hr />
                    <p>Examples:</p>
					<div class="example-code">&#91;widgetmaker-steam-offers&#93;</div>
                </div>
            </li>

            <li class="shortcode-example" data-widget="Zeek">
                <div class="shortcode-example-inner">
                    <span class="shortcode-available"><strong>&#91;widgetmaker-zeek&#93;</strong></span>
                    <a href="https://www.widgetmaker.co.uk/zeek-widget/" target="_blank">Demo</a> | <a href="https://www.widgetmaker.co.uk/zeek-widget/" target="_blank">Information</a>
                    <p>Options:</p>
                    <ul class="shortcode-options">
                        <li><strong>deeplink <span class="required">*</span></strong><br />
                            <span class="option-intro">This is your Affiliate deeplink for Zeek. This can be found at <a href="https://www.awin1.com/cread.php?awinmid=3&awinaffid=184207&clickref=&p=https%3A%2F%2Fui.awin.com%2Fmerchant-profile%2F7709" target="_blank">AWIN.com</a>. Remember, only paste the deeplink <strong><u>WITHOUT</u></strong> a direct Zeek URL in it.<br /><br />
                            <i>e.g. https://www.awin1.com/cread.php?awinmid=X&awinaffid=XX&clickref=&p=</i></span></li>

                        <li><strong>brand</strong> <br />
                            <span class="option-intro">If you'd like show the gift cards for a specific brand, enter the 'slug' (e.g., 'pizza-express' from https://www.zeek.me/gb/buy-gift-vouchers/<strong><u>pizza-express</u></strong>/</span></li>
                    </ul>
                    <hr />
                    <p>Examples:</p>
					<div class="example-code">&#91;widgetmaker-zeek deeplink="https://www.awin.com.."&#93;</div>
					<div class="example-code">&#91;widgetmaker-zeek deeplink="https://www.awin.com.." brand="pizza-express"&#93;</div>
                </div>
            </li>
        </ul>
    </div>
</div>
<script>
jQuery(document).ready(function() {
    wmJsLimitBySubscription();
    jQuery('.filter-widgetmaker-widgets input').keyup(function() {
        wmJsFilter(this);
    });

    function wmJsFilter(element) {
        var value = jQuery(element).val().toLowerCase();
        if(value == 0) {
            jQuery(document).find(".tag-list > li").show();
        } else {
            var results = jQuery(document).find(".tag-list > li:contains('" + value + "')");
            jQuery(document).find(".tag-list > li").hide();
            if(results.length > 0) {
                jQuery.each(results, function(key, value) {
                    jQuery(value).show();
                });
            }
        }
    }

    function wmJsLimitBySubscription() {
        var userId = "{$accountUuid}";
        if(userId.length <= 0) {
            return;
        }
        jQuery.ajax({
            url : "https://connect-dev.widgetmaker.co.uk/api/" + userId + "/widget-check.json",
            headers : {
                'X-Widget-Domain' : location.hostname
            }
        }).done(function(data) {
            jQuery.each(jQuery('.tag-list li.shortcode-example'), function(key, value) {
                if(jQuery.inArray(jQuery(value).attr("data-widget"), data.widgets) === -1) {
                    jQuery(value).remove();
                }
            });
        });
    }
});
</script>
EOD;
    echo $html;
}

/**
 *
 */
function wm_WidgetMakerSettingsPage()
{
    ?>
    <div class="wrap">
        <h1>WidgetMaker Settings</h1>

        <form method="post" action="options.php">
            <?php settings_fields( 'widgetmaker-settings-group' ); ?>
            <?php do_settings_sections( 'widgetmaker-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Account ID</th>
                    <td><input type="text" name="widgetmaker-uuid" value="<?php echo esc_attr( get_option('widgetmaker-uuid') ); ?>" />
                        <br /><small>Obtained from your <a href="https://app.widgetmaker.co.uk/account" target="_blank">WidgetMaker.co.uk Account</a></small></td>
                </tr>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
    <?php
}

/**
 *
 */
function wm_WidgetMakerInit()
{
    // Amazon Search Widget
    add_shortcode('widgetmaker-amazon-search','wm_WidgetMakerAmazonSearch');
    add_filter('widgetmaker-amazon-search', 'wm_WidgetMakerAmazonSearch');
    do_shortcode('[widgetmaker-amazon-search]');

    // Amazon Product Widget
    add_shortcode('widgetmaker-amazon-product','wm_WidgetMakerAmazonProduct');
    add_filter('widgetmaker-amazon-product', 'wm_WidgetMakerAmazonProduct');
    do_shortcode('[widgetmaker-amazon-product]');

    // Amazon Prime Widget
    add_shortcode('widgetmaker-amazon-prime-wall','wm_WidgetMakerAmazonPrime');
    add_filter('widgetmaker-amazon-prime-wall', 'wm_WidgetMakerAmazonPrime');
    do_shortcode('[widgetmaker-amazon-prime-wall]');

    // Amazon Quick Search Widget
    add_shortcode('widgetmaker-amazon-quick-search','wm_WidgetMakerAmazonQuickSearch');
    add_filter('widgetmaker-amazon-quick-search', 'wm_WidgetMakerAmazonQuickSearch');
    do_shortcode('[widgetmaker-amazon-quick-search]');

    // Black Friday
    add_shortcode('widgetmaker-black-friday','wm_WidgetMakerBlackFriday');
    add_filter('widgetmaker-black-friday', 'wm_WidgetMakerBlackFriday');
    do_shortcode('[widgetmaker-black-friday]');

    // Debt Calculator
    add_shortcode('widgetmaker-debt-calculator','wm_WidgetMakerCalculatorDebtPaidOff');
    add_filter('widgetmaker-debt-calculator', 'wm_WidgetMakerCalculatorDebtPaidOff');
    do_shortcode('[widgetmaker-debt-calculator]');

    // Etsy Product Widget
    add_shortcode('widgetmaker-ebay-collection','wm_WidgetMakerEbayCollection');
    add_filter('widgetmaker-ebay-collection', 'wm_WidgetMakerEbayCollection');
    do_shortcode('[widgetmaker-ebay-collection]');

    // Etsy Product Widget
    add_shortcode('widgetmaker-etsy-product','wm_WidgetMakerEtsyProduct');
    add_filter('widgetmaker-etsy-product', 'wm_WidgetMakerEtsyProduct');
    do_shortcode('[widgetmaker-etsy-product]');

    // Fashion Slider Widget
    add_shortcode('widgetmaker-fashion-slider','wm_WidgetMakerFashionSlider');
    add_filter('widgetmaker-fashion-slider', 'wm_WidgetMakerFashionSlider');
    do_shortcode('[widgetmaker-fashion-slider]');

    // Product Box Widget
    add_shortcode('widgetmaker-product-box','wm_WidgetMakerProductBox');
    add_filter('widgetmaker-product-box', 'wm_WidgetMakerProductBox');
    do_shortcode('[widgetmaker-product-box]');

    // Mannequin Widget
    add_shortcode('widgetmaker-fashion-mannequin','wm_WidgetMakerFashionMannequin');
    add_filter('widgetmaker-fashion-mannequin', 'wm_WidgetMakerFashionMannequin');
    do_shortcode('[widgetmaker-fashion-mannequin]');

    // Assembler Widget
    add_shortcode('widgetmaker-fashion-assembly','wm_WidgetMakerFashionAssembly');
    add_filter('widgetmaker-fashion-assembly', 'wm_WidgetMakerFashionAssembly');
    do_shortcode('[widgetmaker-fashion-assembly]');

    // Outfits wrapper Widget
    add_shortcode('widgetmaker-outfits','wm_WidgetMakerFashionOutfits');
    add_filter('widgetmaker-outfits', 'wm_WidgetMakerFashionOutfits');
    do_shortcode('[widgetmaker-outfits]');

    // Single outfit Widget
    add_shortcode('widgetmaker-outfit','wm_WidgetMakerFashionOutfit');
    add_filter('widgetmaker-outfit', 'wm_WidgetMakerFashionOutfit');
    do_shortcode('[widgetmaker-outfit]');

    // Single outfit Widget
    add_shortcode('widgetmaker-g2a','wm_WidgetMakerG2a');
    add_filter('widgetmaker-g2a', 'wm_WidgetMakerG2a');
    do_shortcode('[widgetmaker-g2a]');

    // Steam Offers Widget
    add_shortcode('widgetmaker-steam-offers','wm_WidgetMakerSteamOffers');
    add_filter('widgetmaker-steam-offers', 'wm_WidgetMakerSteamOffers');
    do_shortcode('[widgetmaker-steam-offers]');

	// Price Widget
	add_shortcode('widgetmaker-price', 'wm_WidgetMakerPrice');
    add_filter('widgetmaker-price', 'wm_WidgetMakerPrice');
    do_shortcode('[widgetmaker-price]');
	
	// Zeek Widget
    add_shortcode('widgetmaker-zeek', 'wm_WidgetMakerZeek');
    add_filter('widgetmaker-zeek', 'wm_WidgetMakerZeek');
    do_shortcode('[widgetmaker-zeek]');

    // Generic Widget
    add_shortcode('widgetmaker','wm_WidgetMakerGenericWidget');
    add_filter('widgetmaker', 'wm_WidgetMakerGenericWidget');
    do_shortcode('[widgetmaker]');

    // EXAMPLE WIDGET (Admin)
    add_shortcode('widgetmaker-examples','wm_WidgetMakerExample');
    add_filter('widgetmaker-examples', 'wm_WidgetMakerExample');
    do_shortcode('[widgetmaker-examples]');

    // Admin
    add_action('admin_menu', 'wm_WidgetMakerCreateMenu');

    // Add to Page
    add_action('wp_footer', 'wm_WidgetMakerFooter');
}

wm_WidgetMakerInit();