<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDLXKxwD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDLXKxwD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDLXKxwD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDLXKxwD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDLXKxwD\App_KernelDevDebugContainer([
    'container.build_hash' => 'DLXKxwD',
    'container.build_id' => '4f1e8115',
    'container.build_time' => 1610490302,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDLXKxwD');
