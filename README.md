magento-yandex-metrika
======================

Admin module for adding YandexMetrika counter to a magento site.

In the current state the body of the counter is hardcoded into source (YandexMetrikaController.php)

More realistic version must provide an opportunity to enter the counter (with copy&paste) into a form in the admin interface.
There must be a DB table for storing this counter.

As far as Magento supports multi-sites, there should be a possibility to have distinct counters for different sites.