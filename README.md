# How to Create Test Case in Magento 2

Testing the e-commercial website operation or Magento 2 extensions is the daily job of every developer to ensure that all functionalities work well or even better. Besides performing manually, the testers must take automation tests into account in order to simplify procedures, save time and effort, flexibly control over the data and test result, etc. 
To make it easiest for developers to create the test in Magento 2 functional testing framework, BSS Commerce has built the **FREE Custom Test Create Synonym** file, along with the detailed guide to Magento 2 automation testing as below. Feel free to check the guide documentations and download the test case to relieve your workload.

## I. Documentation

- Functional Testing Framework Installation: <a href="https://devdocs.magento.com/guides/v2.0/mtf/mtf_installation.html" target="_blank">Check here</a>!
- Adjust Configuration: <a href="https://bsscommerce.com/confluence/a-quick-guide-to-automation-test-in-magento-2.html" target="_blank">Check here</a>!
- Premium Magento 2 Extensions: <a href="https://bsscommerce.com/magento-2-extensions.html" target="_blank">Check here</a>!
- Get Support: <a href="https://bsscommerce.freshdesk.com/support/home" target="_blank">https://bsscommerce.freshdesk.com/support/home</a>
- Contribute to BSSCommerce Github: <a href="https://github.com/BssGroup" target="_blank">https://github.com/BssGroup</a>

## II. How to install

After checking the installation, you must follow 5 steps, including:

- Adjust configuration
- Prepare Magento application
- Prepare environment for test run
- Test run
- See logs for fail tests

We have written a comprehensive post on a quick guide to automation test in Magento 2 with the step-by-step instruction to install automation test. Please visit <a href="https://bsscommerce.com/confluence/a-quick-guide-to-automation-test-in-magento-2.html#aI1" target="_blank">here</a>. 

## III. Create Test Case
**1. Example test case:**

**Variation 1:**

- Log in to **Admin**.
- Browse to **Marketing ⇒ SEO & Search ⇒ Search Synonyms**.
- Click the **New Synonyms Group** button.
- Enter data in the **Synonyms** field.
- Click the **Save Synonym Group** button.
- Verify the synonym group saved successfully

**Variation 2:**

- Log in to **Admin**.
- Browse to **Marketing ⇒ SEO & Search ⇒ Search Synonyms**.
- Click the **New Synonyms Group** button.
- Select **All Store Views** in the **Scope** field.
- Enter data in the **Synonyms** field.
- Click the **Save Synonym Group** button.
- Verify the synonym group saved successfully

**Variation 3:**

- Log in to **Admin**.
- Browse to **Marketing ⇒ SEO & Search ⇒ Search Synonyms**.
- Click the **New Synonyms Group** button.
- Select **Default Store View** in the **Scope** field.
- Enter data in the **Synonyms** field.
- Click the **Save Synonym Group** button.
- Verify the synonym group saved successfully

**2. Test**

**Enter in your terminal:**

cd <magento2_root_dir>/dev/tests/functional/utils php -f generateFixtureXml.php -- --name 

synonym     --entity_type search_synonyms      --collection Magento\\Search\\Model\\ResourceModel\\Query\\Collection

**Copy folder code to magento2_root_dir**

<a href="https://github.com/BssGroup/custom-test-case-create-synonym" target="_blank">https://github.com/BssGroup/custom-test-case-create-synonym </a>

**Detail:** <a href="https://devdocs.magento.com/guides/v2.2/mtf/create_test/create_new_test.html" target="_blank">https://devdocs.magento.com/guides/v2.2/mtf/create_test/create_new_test.html </a>

**Enter in your terminal:**
php <magento2_root_dir>/dev/tests/functional/utils/generate.php

cd <magento2_root_dir>/dev/tests/functional 

vendor/bin/phpunit --filter CreateSynonymEntityTest

**See log:** Visit <a href="https://bsscommerce.com/confluence/a-quick-guide-to-automation-test-in-magento-2.html" target="_blank">here</a> to view detailed images. 

## IV. Useful Magento 2 Extensions You Should Never Miss

- <a href="https://bsscommerce.com/magento-2-b2b-extensions.html" target="_blank">B2B Extensions</a>: Empower your wholesale business with premium Magento 2 B2B extensions. Explore right away!
- <a href="https://bsscommerce.com/magento-2-seo-extensions.html" target="_blank">SEO Extensions</a>: Enhance SEO performance to improve search engine ranking and earn more. Check now!
- <a href="https://bsscommerce.com/magento-2-sales-motivation.html" target="_blank">Sales Motivation</a>: Boost your revenue with most effective sales tactics: order, shipping, payment, etc. Ready to shop?
- <a href="https://bsscommerce.com/magento-2-user-experience.html" target="_blank">User Experience</a>: Satisfy users with the best shopping experience and trigger them to spend money. Purchase now!
- <a href="https://bsscommerce.com/magento-2-product-improvement.html" target="_blank">Product Improvement</a>: Optimize product and product page for the richer-in- feature and higher quality. Improve products - improve sales!
- <a href="https://bsscommerce.com/magento-2-customer.html" target="_blank">Customer Extensions</a>: Focus on customer experiences in the frontend and make them the best ever. Buy now!
- <a href="https://bsscommerce.com/magento-2-administration.html" target="_blank">Administration Extensions</a>: Save precious time & effort and relieve most of hard work in the backend. Get them now!

## V. BSSCommerce Best-Seller Extensions

- <a href="https://bsscommerce.com/magento2-checkout-custom-field.html" target="_blank">Magento 2 Checkout Custom Field</a>: Add more fields to the checkout and create the most informative and convenient page. Check now!
- <a href="https://bsscommerce.com/magento-2-wholesale-fast-order.html" target="_blank">Magento 2 Wholesale Fast Order</a>: Allow B2B quick order features to delight wholesale buyers. Try flash-fast experience now!
- <a href="https://bsscommerce.com/magento-multiple-store-view-pricing-for-magento-2.html" target="_blank">Magento 2 Multiple Store View Pricing</a>: Set up specific product price at the level of store view to satisfy local customer experience. Grab it now!
- <a href="https://bsscommerce.com/magento-configurable-product-grid-table-view-for-magento-2.html" target="_blank">Magento 2 Configurable Product Grid Table View</a>: Offer the smart display for all child items under configurable products. View it now!
- <a href="https://bsscommerce.com/magento-2-ajax-add-to-cart.html" target="_blank">Magento 2 Ajax Add to Cart</a>: Add multiple products to cart via the popup instead of loading the product page. Save time ever!
