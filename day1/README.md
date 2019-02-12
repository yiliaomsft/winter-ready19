PHP/Apache app journey: day #1

1. Create a MySQL database on an Azure MySQL Server
2. Include PHP code in index.php to create a connection to Azure MySQL server, and retrieve and display all rows from a database table.  Use app settings to store the MySQL database connection info, use getenv in PHP code to retrieve the setting values
3. In Dockerfile, add dependences pdo_mysql and mysqli using docker-php-ext-install command
4. docker build then push to a registry
5. Use the same web app created at day #0, udpate the container settings using the new docker image:tag, make sure to add the app settings for database connection. Test to make the app is running correctly
6. Enable MSI for the web app. Update the “DATABASE_PASSWORD” app setting to use a keyvault reference instead of plain string

