<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR78Phfx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR78Phfx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerR78Phfx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerR78Phfx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerR78Phfx\App_KernelDevDebugContainer([
    'container.build_hash' => 'R78Phfx',
    'container.build_id' => '98ba9e4a',
    'container.build_time' => 1741040428,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR78Phfx');
