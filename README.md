# Don't override individual use coupons.

## Description

When a coupon marked for individual use is applied to the cart, don't allow other individual use coupons to replace it.

Normally, when a coupon marked for individual use is applied to the cart, any existing coupons applied to the cart are removed. This includes other coupons that may also be marked as individual use.

With this plugin, a coupon already applied to the cart and marked as individual use has priority over any other coupons the customer may want to apply. If the customer attempts to use another individual use coupon, they will instead see this standard WooCommerce message:

> Sorry, coupon "&lt;coupon code&gt;" has already been applied and cannot be used in conjunction with other coupons.

## Usage

This plugin does not have any settings. Simply activate the plugin, and the coupon behavior will be modified as described above.

## Installation

### Automatic installation

It is recommend to make use of the [GitHub Updater plugin](https://github.com/afragen/github-updater) for installing this plugin and keeping it up to date. This can be done by following the [remote installation](https://github.com/afragen/github-updater/wiki/Remote-Installation) guide for the GitHub updater plugin.

1. With GitHub Updater installed and activated, go to Settings > GitHub Updater
1. Click on the "Install Plugin" tab
1. Enter `PrysPlugins/wc-no-override-individual-use-coupon` into the "Plugin URI" field:

    <a href="https://cl.ly/572d528ebdbe" target="_blank"><img src="https://dzwonsemrish7.cloudfront.net/items/3w0o0w2M113V373Z2X2U/Image%202018-09-06%20at%2015.51.17.png" style="display: block;height: auto;width: 100%;"/></a>

1. Click the "Install Plugin" button. You should see a screen like this:

    <a href="https://cl.ly/61e18b7bc35f" target="_blank"><img src="https://dzwonsemrish7.cloudfront.net/items/2i2n3u141j221g412f1K/Image%202018-09-06%20at%2016.07.05.png" style="display: block;height: auto;width: 100%;"/></a>

1. You can now activate the plugin from the Plugins screen

### Manual Installation

1. From this page, click on "Clone or Download", then click the "Download Zip" button

    <a href="https://cl.ly/3d873a252f89" target="_blank"><img src="https://dzwonsemrish7.cloudfront.net/items/0X2k2J1G1B3B0E2M0R1q/Image%202018-09-06%20at%2016.41.52.png" style="display: block;height: auto;width: 100%;"/></a>
    
1. In your WordPress dashboard, go to Plugins > Add New.
1. Click the "Upload Plugin" button at the top of the page.
1. Use the "Choose File" button to select the zip file that was downloaded in step 1.
1. Click the "Install Now" button
