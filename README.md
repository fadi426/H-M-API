# H-M-API
An API to retrieve product information from the webshop "H&M"

# How to use
The root url ishttps://hmapi.azurewebsites.net/index.php/

The first parameter to put in is the gender of the product category.
The following genders are supported: 
-heren (men)
-dames (woman)
-divided (divided)

Gender is followed by the product category.
Only the exsisting categories used in the official H&M website are supported.
https://www2.hm.com/nl_nl/index.html

Full examples:

https://hmapi.azurewebsites.net/index.php/heren/schoenen
This endpoint will retrieve the product information of schoes for the men gender category.

https://hmapi.azurewebsites.net/index.php/dames/jurk
This endpoint will retrieve the product information of dresses for the woman gender category.

https://hmapi.azurewebsites.net/index.php/divided/Jeans
This endpoint will retrieve the product information of jeans for the divided gender category.
