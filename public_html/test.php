<?php
require dirname(__DIR__).'/vendor/autoload.php';

$interfaces = get_declared_interfaces();
foreach ($interfaces as $interface) {
    if (str_starts_with($interface, 'PsrExt')) {
        echo "⚠️ Interface parasite trouvée : $interface\n";
    }
}