# SCUbookstore (name will be changed in a short time)
a homework of php7.1.9 and mysql5.7.19, including login, register, user admin, book admin, shopping admin, friends admin, and integral.
We may do it online finally, also may not.
We use wamp(x64) to run php, use adobe dreamweaver cc2018 (update to adobe dreamweaver cc2019 at 30th.Oct,2018) and phpstorm to edit php, and use phpmyadmin to operate mysql.
To run this project, you need to create a database in phpmyadmin, and change dbconnection/db.php based on your own database info. Then import create/user_info.sql into your own database. 
classify the homework into 6 modulars: login, user info, book info, trade info, intergral info, and admin info.

By Oct.10th,2018:
login (including login and register) is already ok.

By Oct.25th,2018:
find_password by email (through mail.163.com and smtp) is ok.

By Nov.6th,2018:
user_info (including show and change user info)(without imgs) showing is already ok, but changing info is still debugging.
find_password (including email and telephone) by email is already ok, but by telephone is still debugging.
book_info: you can upload, change and delete books on this net. Book info can run independently, with its own database. 
You may change book_admin/config/dbconnection.php based on your own database and then can run it.

By Nov.8th,2018:
user_info: all functions can be operated normally without imgs.
book_info: you can search several words in the book name to find out if we have this book on sale.
Difficulty: How to select many datas in the database and save them in an array and then print them.
We use "Do-While" loop to print them one by one.


By Nov.13th,2018:
buy ecs through aliyun, we can visit website from ecs, but cannot visit website from any PC.
