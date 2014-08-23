blockify-ajax
=============

A blockify block ajax loader used to send ajax data directly to a block instead of loading a page

###To use

When you do an ajax call from another block (or even from another site) simply include the block name you want to send the data to as part of the ajax header

#####for example

```javascript
$.ajax({
    url : loc,
    type: "POST",
    headers: {
        blockName: "blockify-store",
    },
    data : message,
    success: function(data)
    {
        console.log(data);
    }
});
```

Then before the page loads directly after the blockify load be sure to call the blockify ajax block in 


```php
require 'blockify/load.php';
block('blockify-ajax');
```

Then handle $_POST data inside the block you send to 
