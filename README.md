### quintly api demo

A short demo on how to use the quintly api.

## Before you start
1. Make sure you have quintly api credentials.
2. Make sure you use php>=5.5
3. Install [composer](https://getcomposer.org/download)

## Getting started
1. Clone or download repository
2. In your terminal, go to the project folder
3. Execute `composer install`
4. Execute `cp config/credentials.json.dist config/credentials.json`
5. Edit the credentials.json file and fill in the username and password you've got from quintly.
6. In your terminal, inside of the project folder, execute `php demo.php`

You should see a json encoded string, listing your profiles
