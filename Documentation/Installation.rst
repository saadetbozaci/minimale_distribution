.. include:: Includes.txt

Installation
--------------

First downloaded and unpacked a full TYPO3 core.
In the last installation step you can select the option *Yes, download the list of distributions.* On
first backend login, you will be redirected to the extension manager "Get preconfigured
distribution" and can install the "Beispielprojekt T3 9LTS" with one click.

Note the extension can be unloaded and removed from the system after initial import,
but dont forget the code of the minimale_distribution loaded required content data into the database and
required files are put into fileadmin/minimale_distribution upon first installation.


Removal
-------

To remove the package from the instance, the following steps are needed:

* Unload extensions "minimale_distribution"

* Delete the extension in the extension manager

* Remove the page tree

* Remove all files from fileadmin/minimale_distribution using the backend Filelist module