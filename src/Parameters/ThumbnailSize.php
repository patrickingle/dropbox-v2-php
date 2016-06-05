<?php
    /**
 * Copyright (c) 2016 Alorel, https://github.com/Alorel
 * Licenced under MIT: https://github.com/Alorel/dropbox-v2-php/blob/master/LICENSE
 */

    namespace Alorel\Dropbox\Parameters;

    use Alorel\Dropbox\Options\Option;

    /**
     * The size for the thumbnail image. The default for this union is 64x64.
     *
     * @author Art <a.molcanovas@gmail.com>
     */
    class ThumbnailSize extends AbstractParameter {

        function __construct(int $width, int $height) {
            parent::__construct([Option::DOT_TAG => 'w' . $width . 'h' . $height]);
        }

        /**
         * Make the size 32 pixels wide, 32 pixels height
         *
         * @author Art <a.molcanovas@gmail.com>
         * @return ThumbnailSize
         */
        static function w32h32():self {
            return new self(32, 32);
        }

        /**
         * Make the size 64 pixels wide, 64 pixels high
         *
         * @author Art <a.molcanovas@gmail.com>
         * @return ThumbnailSize
         */
        static function w64h64():self {
            return new self(64, 64);
        }

        /**
         * Make the size 128 pixels wide, 128 pixels high
         *
         * @author Art <a.molcanovas@gmail.com>
         * @return ThumbnailSize
         */
        static function w128h128():self {
            return new self(128, 128);
        }

        /**
         * Make the size 640 pixels wide, 480 pixels high
         *
         * @author Art <a.molcanovas@gmail.com>
         * @return ThumbnailSize
         */
        static function w640h480():self {
            return new self(640, 480);
        }

        /**
         * Make the size 1024 pixels wide, 768 pixels high
         *
         * @author Art <a.molcanovas@gmail.com>
         * @return ThumbnailSize
         */
        static function w1024h768():self {
            return new self(1024, 768);
        }
    }