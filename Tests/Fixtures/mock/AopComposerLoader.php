<?php
/**
 * Go! AOP framework
 *
 * @copyright Copyright 2015, Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Go\Instrument\ClassLoading;

/**
 * Class AopComposerLoader
 *
 * A mock class for testing initialization flow.
 */
class AopComposerLoader
{
    public static $initialized = true;

    public static function init() { /* noop */ }

    public static function wasInitialized()
    {
        return self::$initialized;
    }
}
