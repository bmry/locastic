<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI76gbrv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI76gbrv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI76gbrv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI76gbrv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerI76gbrv\App_KernelDevDebugContainer([
    'container.build_hash' => 'I76gbrv',
    'container.build_id' => 'd1d08bd9',
    'container.build_time' => 1608149600,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI76gbrv');
