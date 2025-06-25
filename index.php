<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('hananils/type-methods', [
    'userMethods' => [
        /**
         * Checks if the current object is a user.
         */
        'isUser' => function (): bool {
            return true;
        },
        /**
         * Checks if the current object is a page.
         */
        'isPage' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a file.
         */
        'isFile' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a block.
         */
        'isBlock' => function (): bool {
            return false;
        },
        /**
         * Checks if the user has the given template.
         */
        'isType' => function (string $template = 'default'): bool {
            return $this->blueprint()->name() === 'users/' . $template;
        }
    ],
    'pageMethods' => [
        /**
         * Checks if the current object is a user.
         */
        'isUser' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a page.
         */
        'isPage' => function (): bool {
            return true;
        },
        /**
         * Checks if the current object is a file.
         */
        'isFile' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a block.
         */
        'isBlock' => function (): bool {
            return false;
        },
        /**
         * Checks if the page has the given template.
         */
        'isType' => function (string $template = 'default'): bool {
            return $this->intendedTemplate()->name() === $template;
        }
    ],
    'fileMethods' => [
        /**
         * Checks if the current object is a user.
         */
        'isUser' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a page.
         */
        'isPage' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a file.
         */
        'isFile' => function (): bool {
            return true;
        },
        /**
         * Checks if the current object is a block.
         */
        'isBlock' => function (): bool {
            return false;
        },
        /**
         * Checks if the file has the given template.
         */
        'isType' => function (string $template = 'default'): bool {
            return $this->template() === $template;
        }
    ],
    'blockMethods' => [
        /**
         * Checks if the current object is a user.
         */
        'isUser' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a page.
         */
        'isPage' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a file.
         */
        'isFile' => function (): bool {
            return false;
        },
        /**
         * Checks if the current object is a block.
         */
        'isBlock' => function (): bool {
            return true;
        },
        /**
         * Checks if the block has the given type.
         */
        'isType' => function ($type = 'text'): bool {
            return $this->type() === $type;
        }
    ]
]);
