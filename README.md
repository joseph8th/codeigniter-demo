CodeIgniter Demo
================

A demo app to meet CinemaEquip.com development team's challenge.


Configuration
-------------

### VirtualHost:

Currently the demo is set to run from a virtualhost at `http://cinemaequip-demo.local`.

Two options: 

1. Change the `$config['base_url']` setting in `application/config/config.php` to your liking (ie, `localhost/~user/cinemaequip-demo`).
2. Alter the included `httpd-vhosts.conf.txt` file to create your own virtualhost serving `cinemaequip-demo.local`.
 
### MySQL Database: 

Sample data is in a file called `ci_demo.sql` in the project root.

* hostname: 'localhost'
* database: 'ci_demo' 
* username: 'cinemaequip'
* password: 'CinemaEquip'


Challenge Specs
---------------

* Initialize a new GIT repo on your GitHub account
* Branch off of master, and commit to your branch as you work, as if on a team
* Create a new MySQL Database on your LAMP stack
* Install CodeIgniter on your LAMP stack: http://ellislab.com/codeigniter
* Read the documentation, get vaguely familiar: http://ellislab.com/codeigniter/user-guide/
* Build us a sample CI application, including a page that has a form, with the following fields:
  - Name 
  - Date of Birth
  - Email
  - Favorite Color
  - Submit Button
* Perform some client-side validation using jquery.validate (plugs right in)
* Perform some server-side validation (this is the big test for you)
* Create a MySQL table with the same fields to catch this data
* Insert validated form data to the MySQL table, and display a friendly success message.
* OPTIONAL: submit the form via ajax
* Once finished, and satisfied with your work, pretend your pull request was approved, and merge you branch commits into master.
* Put a SQL dump into the code repo, so we can re-create your database
* push it all up to GitHub
* Email Monica a link to this GitHub repo
* Present this to us in the Meeting room

Feel free to get as creative as you like, but don't feel like you have to go nuts. The UI should be clean and useable, but we don't care about fancy CSS. We are looking mainly at your PHP code, and maybe some of your Javascript. Try to fall in line with the "CodeIgniter Way", to the best of your ability.
