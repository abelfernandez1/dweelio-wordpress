=== Dweelio Embed ===
Contributors: dweelio
Tags: embed, iframe, gutenberg, block
Requires at least: 5.8
Tested up to: 6.8
Stable tag: 1.0.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A simple WordPress plugin to embed Dweelio content using a Gutenberg block.

== Description ==

Dweelio is a comprehensive property rental management system designed for property owners and managers. It provides a complete solution for managing rental properties, handling bookings, setting availability and pricing, and integrating booking functionality into your existing website.

Dweelio Embed is a lightweight plugin that allows you to easily embed Dweelio content on your WordPress site using a custom Gutenberg block. This plugin enables you to integrate your Dweelio property booking widgets directly into your WordPress pages.

Simply add the Dweelio Embed block to your page or post, enter your Dweelio UUID, adjust the height if needed, and publish. The plugin will create an iframe that loads your Dweelio content, allowing your visitors to check availability, calculate prices, and make bookings without leaving your site.

For more information, visit [dweelio.com](https://dweelio.com) or email us at [info@dweelio.com](mailto:info@dweelio.com).

= Features =

* Easy-to-use Gutenberg block
* Customizable embed height
* Responsive design
* Minimal footprint

== External Services ==

This plugin connects to the Dweelio API to display a property booking widget.

**What it does:** When a visitor loads a page containing the Dweelio Embed block, the plugin renders an `<iframe>` that loads the Dweelio booking interface from `https://api.dweelio.com`. The visitor can then check availability, view pricing, and complete a booking without leaving your site.

**What data is sent:** The only data transmitted to Dweelio's servers is the property UUID that the site administrator entered in the block settings. No personal data of the page visitor is sent by the plugin itself; any personal data collected (e.g. guest name, email, payment details) is entered directly by the visitor inside the iframe and handled by Dweelio in accordance with its own policies.

**When data is sent:** Every time a visitor loads a page that contains the Dweelio Embed block.

**Service provider:** Dweelio (https://dweelio.com)

* [Terms of Service](https://dweelio.com/terms)
* [Privacy Policy](https://dweelio.com/privacy)

== Source Code ==

This plugin uses a JavaScript build step (via `@wordpress/scripts` / webpack) to produce the compiled `build/index.js` file that WordPress loads in the block editor. The uncompiled source code is included in the `src/` directory of this plugin.

To rebuild from source:

1. Install Node.js (v16+) and npm.
2. Run `npm install` in the plugin directory.
3. Run `npm run build` to produce the `build/` assets.

The full source is also publicly available on GitHub: https://github.com/abelfernandez1/dweelio-wordpress

== Frequently Asked Questions ==

= Where do I find my Dweelio UUID? =

You can find your Dweelio UUID in your Dweelio account dashboard. If you need assistance, please contact Dweelio support.

= Can I customize the appearance of the embed? =

Currently, you can adjust the height of the embed. Additional customization options may be added in future updates.

= How can I contact Dweelio Support? =

You can contact Dweelio support by visiting [dweelio.com](https://dweelio.com) or sending an email to [info@dweelio.com](mailto:info@dweelio.com).
