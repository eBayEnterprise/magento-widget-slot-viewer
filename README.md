# eBay Enterprise Magento Widget Slot Viewer

Adds a feature to visualize all available widget "slots" (really labeled blocks) on a
given page that are available for targeting through
[Magento's widget feature](http://merch.docs.magento.com/ce/user_guide/cms/widgets.html).

## Usage

To turn on the widget visualizer, choose System > Configuration from the main menu. Then
navigate in the sidebar to Advanced > Developer. From the "Debug" panel on this page
you can then set "Widget Slot Viewer Enabled" to "Yes" or "No."

Once enabled, you may browse to any page on the front end website to see slot placeholders
indicating the name of all available slots. (Depending on your store configuration, you
may need to flush or disable caches to see the slots after enabling.)

Naturally, this should only be enabled in a pre-production environment.

## Caveat

The displayed location of a visualized slot is correct the vast majority of the time, but
there are some instances where it will appear in the incorrect order relative to other
blocks under the same parent. This is due to the  multiple factors that affect Magento
block positioning and the way the visualized slots are added at runtime. Contributions
improving this accuracy are welcome.

## Contributing

[See contribution guidelines.](CONTRIBUTING.md)

## License

Licensed under the terms of the Open Software License v. 3.0 (OSL-3.0).
See [LICENSE.md](LICENSE.md) or http://opensource.org/licenses/OSL-3.0 for
the full text of the license.

- - -
Copyright © 2015 eBay Enterprise
