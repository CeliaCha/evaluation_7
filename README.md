# Installation

1. Prepare a directory on your local server. 
1. Clone this repository (depending on your connection it may take some time.)
1. Import file eval_7_october.sql in your own database (may take some time too.)

## Minimum System Requirements

October CMS has a few system requirements:

* PHP 7.0 or higher
* PDO PHP Extension
* cURL PHP Extension
* MCrypt PHP Extension
* ZipArchive PHP Library
* GD PHP Library


## Database configuration

1. Open file ./config/database.php
1. In mysql properties, replace 'database' 'username' and 'password' values with your own identifiers.


## Access to website & website admin

* Website is located at this URL: path/to/yourlocalhost/october-celia/
* Use the following link to log into the administration area: path/to/yourlocalhost/october-celia/backend
* Admin identifiers -> login : simplon - password : plonsim


## Modules (plugins)

* In the admin area, navigate to Settings -> System -> Update & Plugins -> Manage Plugins
* "Raviraj.Rjsliders" is the plugin I used to display slide on the main page (https://octobercms.com/plugin/raviraj-rjsliders)
* "Celia.Simplon" is my own custom plugin. If you enable it, the url "./simplon" will work. If you disable it, this same url will send a 404 error. It's pure magic.


## Troubleshooting

* If something somewhere doesn't work, try to set folder permissions to 775. If it still doesn't work, try 777.
* I had to replace "localhost" by "127.0.0.1" on the initial installation to made it work.




