<pre><?php passthru("locale -a"); ?></pre>
<?php
locale_set_default('es_ES');
echo locale_get_default();
phpinfo();