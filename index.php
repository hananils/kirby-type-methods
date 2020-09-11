<?php

Kirby::plugin('hananils/type-methods', [
    'userMethods' => [
        'isUser' => function () {
            return true;
        },
        'isPage' => function () {
            return false;
        },
        'isFile' => function () {
            return false;
        },
        'isType' => function ($template = 'default') {
            return $this->blueprint()->name() === 'users/' . $template;
        }
    ],
    'pageMethods' => [
        'isUser' => function () {
            return false;
        },
        'isPage' => function () {
            return true;
        },
        'isFile' => function () {
            return false;
        },
        'isType' => function ($template = 'default') {
            return $this->intendedTemplate()->name() === $template;
        }
    ],
    'fileeMethods' => [
        'isUser' => function () {
            return false;
        },
        'isPage' => function () {
            return false;
        },
        'isFile' => function () {
            return true;
        },
        'isType' => function ($template = 'default') {
            return $this->template()->name() === $template;
        }
    ]
]);
