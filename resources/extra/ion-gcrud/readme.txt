1.(to be done)application/config/config.php-->base url setting

2.(done)removing index.php-->local/.htaccess
                    -->local/app/config/config.php-->config['index_page'] = '';
                    -->local/app/config/config.php-->$config['uri_protocol'] = �AUTO�

3.resources=bootstrap+jQui+custom setup system
  resources/css-->bootstrap.min.css==bootstrap css
               -->jq-ui==for jqui css
               -->main.css==main custom css optimized by bootless(?bootless)
               -->custom.css==optimized by custom.less
               -->style.css==last layer of custom css
 resourse/js/vendor=jQ.js+bootstrap.js+jQ-ui.js+modernizr
 resourse/js=plugins.js+scripts.js
 resources/img=bootsrap icon images
 resources/ico=apple touch icons+favicon
 resources/ion-gcrud=(ion-auth+gcrud) sql file. 

4.views/core(head_main+foot_main+body_main+body_min)==core views
5.[site_controller] with view1 and min method where view1 is evocked by index method.[site_controller] is default route.
6.assets=for gcrud theming and maintenance
7.controllers/crud/(gcrud_sitectrl+gcrud_democtrl)=for initial crud operation
8.views/assets_views/gcrud/(gcrud_sitevw+gcrud_demovw)==view for initial crud operation
9.controller/auth=ion-auth controller
10.views/auth=ion-auth view files