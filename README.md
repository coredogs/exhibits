exhibits
========

Server for the exhibits assignment, MIS 422/622, 2013.

Uses SQLite. The DB is in the db dir, and can be version controlled.

Tasks: 

### Prep the database.

(There are utilities to make this easier.)

* Go over the test scripts: create_db, add_test_data, query_test_data.
* Choose an exhibit domain. Art, cars, whatever. 
* Describe 6 exhibits. For each: name, description, images.
* Add 6 records to the exhibits table.

### Add the Puppy MVC library.

### Write two scripts. 

* URL command: exhibits. Returns id, name and thumbnail for every exhibit, 
sorted by name.

* URL command: exhibits&id=X. Returns name, description, and image file 
name for exhibit with id of X. 
