.. include:: Includes.txt

Maintenance
===========

This chapter is intended for developers who want to contribute to and maintain the expansion.
It can also serve as a kickstart for other extension authors who want to create
own distributions.

The basic setup of distributions in general is described
in the TYPO3 Documentation "Creating a new Distribution" 


General restrictions
--------------------

The extension is created in a way that as soon as the data import has
been performed by a user, the extension can be unloaded and removed from the system.
This should be kept. It means that all relevant data needs to either reside in 
minimale_distribution or in the database.


Content administration
----------------------

To prepare for a clean data export, the following steps are necessary:

* Install a fresh and empty TYPO3 core, easiest way is to clone current core master

* Install base system, select "Do nothing, just get me to the Backend." in last installer step

* Go to extension manager "Get Extensions".

* Clone minimale_distribution to file typo3conf/ext/

required data export
------------------

For data import upon loading minimale_distribution. There are one main
area:

* File Initialisation/data.xml - Include all main DB data as pages, tt_content and so on.

