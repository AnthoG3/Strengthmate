<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRMaM3MU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRMaM3MU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRMaM3MU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRMaM3MU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRMaM3MU\App_KernelDevDebugContainer([
    'container.build_hash' => 'RMaM3MU',
    'container.build_id' => 'a96ec412',
    'container.build_time' => 1740261005,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRMaM3MU');
