# magento-add-validation-functionality-to-widget-fields
Simple Magento module, that adds possibility to validate input fields in widgets creation process. Actually there is no possibility to add a &lt;validate/> tag and save it's functionality. With help of this simple extension, you can add your own validation to any fields, like 'validate-number', 'validate-email', 'validate-xxx validate-yyy validate-zzz'. 

# Usage
* install the module
* create your widget as usuall
* in widget.xml in <parameters/> node add <validate/> element, like:
```xml
<catalog_product_link type="catalog/product_widget_link" translate="name description" module="catalog">
        <name>Catalog Product Link</name>
        <description>Link to a Specified Product</description>
        <is_email_compatible>1</is_email_compatible>
        <parameters>
            <anchor_text translate="label description">
                <visible>1</visible>
                <label>Anchor Custom Text</label>
                <description>If empty, the Product Name will be used</description>
                <type>text</type>
                <validate>validate-number</validate>
            </anchor_text>
            <title translate="label">
                <visible>1</visible>
                <label>Anchor Custom Title</label>
                <validate>validate-email</validate>
                <type>text</type>
            </title>
```
* if you want to add more than one validation rule, simply separate them with space:
```xml
<validate>validate-email validate-ajax</validate>
```
