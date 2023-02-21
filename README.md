# Glitty
A Lightweight Portal/Blogging platform written in PHP

Author: Alexia Rivera


About Glitty

Glitty, a portmanteau between Glitter and Pretty, is a lightweight blogging platform 
aimed at those looking for simplicity.

This platform only requires a mysql database and php in order to run. 
it's multi/user and pretty straight forward in the way it interacts with the data base
Very customisable and yet super easy to deploy and run. 



Installing Glitty:

1. unzip the latest release or clone the repo
2. look for glitty.sql in the /install dir. Run the script or copy/paste it in phpmyadmin or similar
3. Create a database user and password, grant all privileges on database Glitty.
4. Grant all privileges to the glitty database for said user.
5. Edit ge_conn.php and change the CHANGEME at the top for your database user and password. 
6. If, for whatever reason, your database is not called Glitty, change it in this file also.


To do: 
admin account that lists all posts, deletes or modifies a user, etc.
