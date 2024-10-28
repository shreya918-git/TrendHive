Mnaging product 
-Add-
-UI
    HTML
    name 
    price 
    details 
    image(stored using a global variable)
    special uploading through forms using multipart/formdata
    enctype multipart/formdata for encoding any file/image upload in a form
-API
   -collect product details 
   -collect image
   -move image from tmp folder to relevant folder path(tmp folder is used to store temp variables which are accessed through pages).
   -store details and image into db.
-DB
   -pid(auto incrementing primary column)
   -name(varchar)
   -price(float)
   -details(text)
   -imgpath(varchar) wherever the image would be stored(the file) that would be stored as varchar 
   -owner(int) foreign key to userid(relating the tables to know who uploads the data)
-View
-Edit
-Delete
Manage the products-
View orders
assign to distributors
track the order
Customer-
-View
-Add to cart 
-Edit 
-Delete
-Place order 
-Mode of payment 
-Track Order 