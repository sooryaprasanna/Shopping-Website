# Grab It Up

<img width="400" alt="image" src="https://github.com/user-attachments/assets/0c427181-83e1-4060-93a1-31201fbec815">

**Rules Implemented**
- ‘Grab it Up’ is an online technology store that offers wide range of latest tech products in the market.
- Users can register in the sign-up page to become a customer and to purchase a product.
- Enables people to ‘search’ and ‘filter by brand’.
- Customers can click buy button to purchase a product.
- Special deal of the month and deal of the week is showcased and is maintained by DBA.
- Clicking buy button adds the product to the cart.
- You have an option to modify / delete the products that are added to the cart.
- Once the checkout button is clicked, there is a confirmation page to double check on the products. Acknowledging in that page will result in purchasing the product.
- Maintaining purchase history of customers and total saved amount is displated by shopping using the site.
- Guests can browse all products, but will not be able to add any product to the cart without signing in. Not supporting guest checkout at this point.
- Guests can register as a new user.
- To be an admin, an account has to be created by a DBA.
- Shipping address, shipping charge and tax on final amount are not handled as of now.

**Database Design**
- Product — Holds the details of all our products.
- Product_deal — Holds the details of all our products that are on discounts.
- User — Holds the information about our customers.
- User_cart — Holds the details of all our products that are added to the cart by our customers.
- Order_history — Holds the purchase history of our customers.
- Order_detail — Holds details of the products purchased by our customers.
