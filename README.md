# scad-test-project

I worked on developing this single page site for about 3 or 4 days after work. It's based on a mockup I was given and I definitely got a little caught up in the details of trying to make an accurate recreation.


## Front End

A fun extra I included was ElevatorJS instead of just having the "back to top" button simply scroll you to the top normally (I've always wanted an excuse to use it).

I used Bootstrap 4 for the layout since I noticed a few bootstrap components in the mockup and figured that made the most sense (also because the spec sheet I was given mentions boostrap as an example). Because I used Bootstrap that means I also had to include jQuery. I was originally using the slim build of jquery (no ajax or animations) but ended up switching to the full version for the smooth scroll animations after I had already written all the requests without `$.ajax()`.


## Back End

The database creation script connects to the MySQL server specified in `config.php` and creates a messages table if it doesn't already exist. So the process for starting it is supposed to just be to run `createDatabase.php` and then start the built in php server from the root of the directory.

`contactForm.php` sanitizes all user input before inserting it into the messages table and then `getSignups.php` sanitizes before putting it into an html table that can be viewed at `/signups`. 


The total size for the project with all assets comes out to about 4.4 MB.