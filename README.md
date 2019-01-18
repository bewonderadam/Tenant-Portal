# Tenant-Portal



In order to set up the tenant portal within a new theme, you will need to have the following dependencies installed and activated within WordPress: 

* Advanced Custom Fields Pro (ACF)
* Custom Post Type UI (CPT)

Once the above dependencies are installed and activated you will be able to get this setup within your WordPress theme by following the steps below:

1) You will need to create the "Tenant Portal" custom post type within CPT. You can either do this manually by using the plugin itself, or alternatively copy and paste the code within the functions.php file, in to your themes function.php file.

2) You will then need to create the "Tenant Portal Categories" taxonomy within CPT. You can either do this manually by using the CPT plugin, or copy and paste the code within the functions.php file, in to your themes function.php file.

3) Now you need to import the custom fields for your "Tenant Portal" into your WordPress install. You can do this by uploading the ACF export file into the "Tools" page of ACF. 
