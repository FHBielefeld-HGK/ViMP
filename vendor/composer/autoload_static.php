<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64f7216efcdcf8ddae98e6499b2ca798
{
    public static $classMap = array (
        'ilObjViMP' => __DIR__ . '/../..' . '/classes/class.ilObjViMP.php',
        'ilObjViMPAccess' => __DIR__ . '/../..' . '/classes/class.ilObjViMPAccess.php',
        'ilObjViMPGUI' => __DIR__ . '/../..' . '/classes/class.ilObjViMPGUI.php',
        'ilObjViMPListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjViMPListGUI.php',
        'ilViMPConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilViMPConfigGUI.php',
        'ilViMPPlugin' => __DIR__ . '/../..' . '/classes/class.ilViMPPlugin.php',
        'xvmpConf' => __DIR__ . '/../..' . '/classes/Conf/class.xvmpConf.php',
        'xvmpConfFormGUI' => __DIR__ . '/../..' . '/classes/Conf/class.xvmpConfFormGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit64f7216efcdcf8ddae98e6499b2ca798::$classMap;

        }, null, ClassLoader::class);
    }
}