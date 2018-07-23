# LaravelCrud
 Simple Rest Laravel CRUD and MySQL

DB kulina.sql

# Get all review -> Method GET 
	url localhost/public/api/reviews

# Get review by ID -> Method GET 
	url localhost/public/api/review/{id}

# Create review -> Method POST 
	url localhost/public/api/review 
	form 	- order_id(int), 
		- product_id(int), 
		- user_id(int), 
		- rating(float), 
		- review(string)

# Update review by ID -> Method PUT 
	url localhost/public/api/review/{id} 
	form 	- order_id(int), 
		- product_id(int), 
		- user_id(int), 
		- rating(float), 
		- review(string)

# Delete review by ID -> Method Delete 
	url localhost/public/api/review/{id}
