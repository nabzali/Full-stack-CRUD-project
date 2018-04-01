# Front End CRUD Interface

Front end user-friednly database interface project. Involved are the following:
- HTML
- CSS
- JavaScript (+JQuery)
- PHP
- SQL

This project allows a user to easily create, read, update and delete data from a database (CRUD).

How it's run
--
This interface uses PHP, and therefore is used to connect to an outside server. [XAMPP](https://www.apachefriends.org/index.html) is a software package which gives you the priveledge of connecting to an Apache server. This capability allows for storing databases, which can be created using the phyMyAdmin (uses MySQL) software tool also provided. By default, all databases you create using the account you create with phpMyAdmin will be stored on that server. 

I have used PHP to connect to a database I have created, execute code on the server, and feed any necessary data back into the local HTML markup which is then executed in my local browser. For this to work the directory for all of the files is (crucially) located inside the htdocs folder which can be found in the xampp directory, once you have xampp installed.

Warning
--
Simply downloading this project won't guarantee that it will work. There are a few prerequesites before doing so:
- I have not provided an SQL file. Until I do so, you will have to make sure that you create your own database with phpMyAdmin, and then make sure its name and schema matches the variable names used in the dbi.php.php file.
- That you have this project in the correct directory (xampp/htdocs/)

Forking and Cloning
--
Easy copy & paste for cloning:
```bash
$ git clone https://github.com/nabzali/front-end-crud-interface.git
```
Nabeel Ali 2018 | [Computer Science](https://www.nottingham.ac.uk/computerscience/) at Nottingham
