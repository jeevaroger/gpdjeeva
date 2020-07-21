# PDO_ODBC 0.1#

Creates a odbc connection to MSSql server through pdo_odbc driver as a plugin for CakePHP 2.x

### Background ###

To many people on the Internet were looking for a simple way to connect to a MSSQL db from a linux installed cakePHP app.  But face getColumnMeta function not defined with pdo_odbc driver. This plugin consist of custom getColumnMeta alternative .

### Prerequisites? ###

* Latest updates on linux
* php5-odbc package installed on your linux system 
* Microsoft® ODBC Driver 13 (Preview) and 11 for SQL Server (https://www.microsoft.com/en-us/download/details.aspx?id=36437)
* Latest unixOdbc (http://www.unixodbc.org/)
* CakePHP 2.x app installed and baked on your server
* locate odbcinst.ini and check following configuration:

	[SQL Server Native Client 11.0]
	Description=Microsoft SQL Server ODBC Driver V1.0 for Linux
	Driver=/opt/microsoft/sqlncli/lib64/libsqlncli-11.0.so.1790.0
	Threading=1
	UsageCount=13

* locate odbc.ini and add following configuration:

	[YOUR_DSN_NAME]
	Driver = SQL Server Native Client 11.0
	Description = Sample Database 
	Trace = No 
	Server = [YOUR_SERVER_IP_ADDRESS]
	Port = [YOUR_SERVER_PORT] 
	Database = [YOUR_DATABASE_NAME]
	Trusted_Connection=False
	Regional=No

* If odbc.ini is not configured globally means '/user/local/etc' then add following lines in odbc.php 
putenv('ODBCSYSINI=/usr/local/etc');
putenv('ODBCINI=/usr/local/etc/odbc.ini');


### How to use the plugin ###

Download the package zipball/tarball and unzip to the `app/Plugin` folder.

Enable the Plugin in your `app/Config/bootstrap.php` file:

    <?php
    CakePlugin::load('PDO_ODBC');


If you are already using `CakePlugin::loadAll();`, then this step is not necessary.

Configure a database connection in `app/Config/database.php` file:

    <?php
    class DATABASE_CONFIG {

	    public $default = array(
		    'datasource' => 'PDO_ODBC.Odbc',
            'host' => 'YOUR_DSN_NAME',
            'login' => 'YOUR_LOGIN_CREDENTIALS',
            'password' => 'YOUR_LOGIN_CREDENTIALS',
            'database' => 'YOUR_DATABASE_NAME',
            'encoding'=>'utf8'
        );

    }

From here you can now access the data the normal cakePHP way:

    <?php
        $this->Model->find('first');



### Credit where it is due ###

Thanks to Infobeans 

#### Change Log ####
Version 0.1
