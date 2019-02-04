# DBKiss

DBKiss is a database administration tool for MySQL and PostgreSQL.
It is only a single PHP file [dbkiss.php](dbkiss.php) and has a very
simple user interface.


## Screenshot

<img alt="DBKiss screenshot" src="https://raw.githubusercontent.com/cztomczak/dbkiss/master/screenshot.jpg">


## SQL editor tips

* You can precede a query or queries with `@` char and when
  executing SQL, only such marked queries will be executed,
  the rest of queries will be ignored.
* Ever forgot to put `WHERE` condition in your `UPDATE` or `DELETE`
  query? DBKiss will detect any queries missing `WHERE` condition
  and will inform you about it. If you still would like to execute
  such query just put `WHERE 1=1` condition and DBKiss will let you
  execute it.
* History of all your SQL queries is kept in "dbkiss_sql" directory.
  If in the past you've executed some sophisticated set of queries
  and need them again, just search for them in the "dbkiss_sql"
  directory. Use "Find in files" feature available in most modern
  text editors. For Linux "search in files" command see here:
  https://stackoverflow.com/a/16957078


## Helper scripts

The [auto_connect.php](auto_connect.php) script will automatically
connect to given database, so you don't have to fill data on
the connect screen anymore. This can be useful on a developer machine
or if you already have some directory protection and asking for password
is not required.

There is also [auto_fill_connect_data.php](auto_fill_connect_data.php)
script that will automatically fill all your connection data in the
log in form except for password.


## Notes

* Export of all structure and data does take into account table name
  filter on main page, so you can filter only specific tables.
* "pgsql" driver does not support export of structure.
* Some of SQL editor features require creating "dbkiss_sql"
  directory where history of queries and other data is kept. If
  the script has permissions it will create such directory automatically,
  otherwise you need to create it manually and make it
  writable. At the top of "dbkiss.php" script there is a 'DBKISS_SQL_DIR'
  constant defined, you can set it to an empty string and the script
  won't try to create or use "dbkiss_sql" directory anymore. Note
  however that this may cause some of SQL editor features not to work
  (templates, pagination). That directory is protected with two files
  which are created automatically: .htaccess (deny from all)
  and index.html.


## Donations

* 2019-02-04: Patrick McGovern sponsored the development of PHP 7 support.
* 2014-01-04: Patrick McGovern sponsored the development of the permalinks
              features for saved SQL templates.
* 2011-05-29: Patrick McGovern sponsored the development of the clickable
              links in data output and their safe redirection.
* 2011-03-09: Patrick McGovern sponsored the development of the Views
              feature.
* 2011-01-08: Patrick McGovern sponsored the development of the CSV export
              feature.
