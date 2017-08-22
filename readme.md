
## AfricaIsTalking Ussd

The project below is a demonstration of how you can develop a USSD application using laravel and africaistalking api. It simplifies how you can easily develop a USSD application using a very good php framework and another interesting africaistalking platform. 

## SetUp

You can clone the project into our local host and begin building on top and customize.
1 : Clone the project.
2 : Set up the .env file to connect to your database.
3 : Run composer install
4 : Run php artisan db:seed 
5 : In case you run into errors when seeding run, composer dump-autoload
6 : Run the application from the terminal
7 : you can test the code using postman.
8 : You are all set to customize the application by changing the UssdController mainly.

Testing on Postman
1 : All requests are POST requests according to hw africaistalking expects the request to be.
2 : The following are the expected parameters according to the documentation in africaistalking : http://docs.africastalking.com/ussd
3 : The main parameter that changes and one should focus on is the text field, it is the user input that changes based on the menu selected and dictates the next step.

## Questions
In case of any questions or need some help feel free to contact me via samlinncon@gmail.com

## Contributing

You can are always free to suggest new ways to improve the code.

## Security Vulnerabilities

If you discover a security vulnerability within the demo, please send an e-mail to me at samlinncon@gmail.com. All security vulnerabilities will be promptly addressed.
