 Task Completed - 24 April 2025
# Admin Role Setup
To create an Admin userfor now, follow these steps:
Go to your users table in the database.
Update the user_type field:
Set user_type = 1 for the admin user.
Default users have user_type = 0.
During login, append /1 to the login URL to indicate you're logging in as admin.
Ex - http://localhost:8000/login/1

# For Table creation
Used Migrations files you can use but for now I am sending sql file also.


# Add to Cart Functionality (AJAX + UI Enhancements)
# Features Implemented:
AJAX-based Add to Cart
Implemented asynchronous cart addition without page reload.

# Dynamic Quantity Selector
Users can increment or decrement the quantity using + and – buttons beside each product. The input field is readonly to avoid manual input errors.

# Stock Availability Check
Prevents users from adding more items than the available stock. The system reads the current stock from a data-available attribute and validates it before adding.

# Dynamic Cart Count Update
After adding a product, the cart count badge in the navbar updates automatically via AJAX response.

# Live Update of Available Quantity
When a product is added, the available quantity in the product list updates in real-time without a page reload.

# Cart Persistence
The cart is stored in Laravel session and persists across page reloads.

# View Cart Items in Modal
On clicking the cart icon, Check cart list and with their Quantity

# Technical Details:
Frontend: jQuery, Bootstrap 5

 # Backend:  
Laravel Blade, Session, Route Controller


