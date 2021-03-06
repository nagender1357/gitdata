@extends("admin.admin_app")

@section("content")
<?php
             $fa_icons = array(
        'fa-rub' =>     array('data-content'  => "<i class='fa fa-rub'></i>", 'value' => 'fa-rub'                           , 'name' => 'fa-rub'),
        'fa-ruble' =>   array('data-content'  => "<i class='fa fa-ruble'></i>", 'value' => 'fa-ruble'                           , 'name' => 'fa-ruble'),
        'fa-rouble' => array('data-content'  => "<i class='fa fa-rouble'></i>", 'value' => 'fa-rouble'                              , 'name' => 'fa-rouble'),
        'fa-pagelines' =>   array('data-content'  => "<i class='fa fa-pagelines'></i>", 'value' => 'fa-pagelines'                           , 'name' => 'fa-pagelines'),
        'fa-stack-exchange' =>  array('data-content'  => "<i class='fa fa-stack-exchange'></i>", 'value' => 'fa-stack-exchange'                         , 'name' => 'fa-stack-exchange'),
        'fa-arrow-circle-o-right' =>    array('data-content'  => "<i class='fa fa-arrow-circle-o-right'></i>", 'value' => 'fa-arrow-circle-o-right'                         , 'name' => 'fa-arrow-circle-o-right'),
        'fa-arrow-circle-o-left' =>     array('data-content'  => "<i class='fa fa-arrow-circle-o-left'></i>", 'value' => 'fa-arrow-circle-o-left'                           , 'name' => 'fa-arrow-circle-o-left'),
        'fa-caret-square-o-left' =>     array('data-content'  => "<i class='fa fa-caret-square-o-left'></i>", 'value' => 'fa-caret-square-o-left'                           , 'name' => 'fa-caret-square-o-left'),
        'fa-toggle-left' =>     array('data-content'  => "<i class='fa fa-toggle-left'></i>", 'value' => 'fa-toggle-left'                           , 'name' => 'fa-toggle-left'),
        'fa-dot-circle-o' =>    array('data-content'  => "<i class='fa fa-dot-circle-o'></i>", 'value' => 'fa-dot-circle-o'                         , 'name' => 'fa-dot-circle-o'),
        'fa-wheelchair' =>  array('data-content'  => "<i class='fa fa-wheelchair'></i>", 'value' => 'fa-wheelchair'                         , 'name' => 'fa-wheelchair'),
        'fa-vimeo-square' =>    array('data-content'  => "<i class='fa fa-vimeo-square'></i>", 'value' => 'fa-vimeo-square'                         , 'name' => 'fa-vimeo-square'),
        'fa-try' =>     array('data-content'  => "<i class='fa fa-try'></i>", 'value' => 'fa-try'                           , 'name' => 'fa-try'),
        'fa-turkish-lira' =>    array('data-content'  => "<i class='fa fa-turkish-lira'></i>", 'value' => 'fa-turkish-lira'                         , 'name' => 'fa-turkish-lira'),
        'fa-plus-square-o' =>   array('data-content'  => "<i class='fa fa-plus-square-o'></i>", 'value' => 'fa-plus-square-o'                           , 'name' => 'fa-plus-square-o'),
        'fa-adjust' =>  array('data-content'  => "<i class='fa fa-adjust'></i>", 'value' => 'fa-adjust'                         , 'name' => 'fa-adjust'),
        'fa-anchor' =>  array('data-content'  => "<i class='fa fa-anchor'></i>", 'value' => 'fa-anchor'                         , 'name' => 'fa-anchor'),
        'fa-archive' =>     array('data-content'  => "<i class='fa fa-archive'></i>", 'value' => 'fa-archive'                           , 'name' => 'fa-archive'),
        'fa-arrows' =>  array('data-content'  => "<i class='fa fa-arrows'></i>", 'value' => 'fa-arrows'                         , 'name' => 'fa-arrows'),
        'fa-arrows-h' =>    array('data-content'  => "<i class='fa fa-arrows-h'></i>", 'value' => 'fa-arrows-h'                         , 'name' => 'fa-arrows-h'),
        'fa-arrows-v' =>    array('data-content'  => "<i class='fa fa-arrows-v'></i>", 'value' => 'fa-arrows-v'                         , 'name' => 'fa-arrows-v'),
        'fa-asterisk' =>    array('data-content'  => "<i class='fa fa-asterisk'></i>", 'value' => 'fa-asterisk'                         , 'name' => 'fa-asterisk'),
        'fa-ban' =>     array('data-content'  => "<i class='fa fa-ban'></i>", 'value' => 'fa-ban'                           , 'name' => 'fa-ban'),
        'fa-bar-chart-o' =>     array('data-content'  => "<i class='fa fa-bar-chart-o'></i>", 'value' => 'fa-bar-chart-o'                           , 'name' => 'fa-bar-chart-o'),
        'fa-barcode' =>     array('data-content'  => "<i class='fa fa-barcode'></i>", 'value' => 'fa-barcode'                           , 'name' => 'fa-barcode'),
        'fa-bars' =>    array('data-content'  => "<i class='fa fa-bars'></i>", 'value' => 'fa-bars'                         , 'name' => 'fa-bars'),
        'fa-beer' =>    array('data-content'  => "<i class='fa fa-beer'></i>", 'value' => 'fa-beer'                         , 'name' => 'fa-beer'),
        'fa-bell' =>    array('data-content'  => "<i class='fa fa-bell'></i>", 'value' => 'fa-bell'                         , 'name' => 'fa-bell'),
        'fa-bell-o' =>  array('data-content'  => "<i class='fa fa-bell-o'></i>", 'value' => 'fa-bell-o'                         , 'name' => 'fa-bell-o'),
        'fa-bolt' =>    array('data-content'  => "<i class='fa fa-bolt'></i>", 'value' => 'fa-bolt'                         , 'name' => 'fa-bolt'),
        'fa-book' =>    array('data-content'  => "<i class='fa fa-book'></i>", 'value' => 'fa-book'                         , 'name' => 'fa-book'),
        'fa-bookmark' =>    array('data-content'  => "<i class='fa fa-bookmark'></i>", 'value' => 'fa-bookmark'                         , 'name' => 'fa-bookmark'),
        'fa-bookmark-o' =>  array('data-content'  => "<i class='fa fa-bookmark-o'></i>", 'value' => 'fa-bookmark-o'                         , 'name' => 'fa-bookmark-o'),
        'fa-briefcase' =>   array('data-content'  => "<i class='fa fa-briefcase'></i>", 'value' => 'fa-briefcase'                           , 'name' => 'fa-briefcase'),
        'fa-bug' =>     array('data-content'  => "<i class='fa fa-bug'></i>", 'value' => 'fa-bug'                           , 'name' => 'fa-bug'),
        'fa-building-o' =>  array('data-content'  => "<i class='fa fa-building-o'></i>", 'value' => 'fa-building-o'                         , 'name' => 'fa-building-o'),
        'fa-bullhorn' =>    array('data-content'  => "<i class='fa fa-bullhorn'></i>", 'value' => 'fa-bullhorn'                         , 'name' => 'fa-bullhorn'),
        'fa-bullseye' =>    array('data-content'  => "<i class='fa fa-bullseye'></i>", 'value' => 'fa-bullseye'                         , 'name' => 'fa-bullseye'),
        'fa-calendar' =>    array('data-content'  => "<i class='fa fa-calendar'></i>", 'value' => 'fa-calendar'                         , 'name' => 'fa-calendar'),
        'fa-calendar-o' =>  array('data-content'  => "<i class='fa fa-calendar-o'></i>", 'value' => 'fa-calendar-o'                         , 'name' => 'fa-calendar-o'),
        'fa-camera' =>  array('data-content'  => "<i class='fa fa-camera'></i>", 'value' => 'fa-camera'                         , 'name' => 'fa-camera'),
        'fa-camera-retro' =>    array('data-content'  => "<i class='fa fa-camera-retro'></i>", 'value' => 'fa-camera-retro'                         , 'name' => 'fa-camera-retro'),
        'fa-caret-square-o-down' =>     array('data-content'  => "<i class='fa fa-caret-square-o-down'></i>", 'value' => 'fa-caret-square-o-down'                           , 'name' => 'fa-caret-square-o-down'),
        'fa-caret-square-o-left' =>     array('data-content'  => "<i class='fa fa-caret-square-o-left'></i>", 'value' => 'fa-caret-square-o-left'                           , 'name' => 'fa-caret-square-o-left'),
        'fa-caret-square-o-right' =>    array('data-content'  => "<i class='fa fa-caret-square-o-right'></i>", 'value' => 'fa-caret-square-o-right'                         , 'name' => 'fa-caret-square-o-right'),
        'fa-caret-square-o-up' =>   array('data-content'  => "<i class='fa fa-caret-square-o-up'></i>", 'value' => 'fa-caret-square-o-up'                           , 'name' => 'fa-caret-square-o-up'),
        'fa-certificate' =>     array('data-content'  => "<i class='fa fa-certificate'></i>", 'value' => 'fa-certificate'                           , 'name' => 'fa-certificate'),
        'fa-check' =>   array('data-content'  => "<i class='fa fa-check'></i>", 'value' => 'fa-check'                           , 'name' => 'fa-check'),
        'fa-check-circle' =>    array('data-content'  => "<i class='fa fa-check-circle'></i>", 'value' => 'fa-check-circle'                         , 'name' => 'fa-check-circle'),
        'fa-check-circle-o' =>  array('data-content'  => "<i class='fa fa-check-circle-o'></i>", 'value' => 'fa-check-circle-o'                         , 'name' => 'fa-check-circle-o'),
        'fa-check-square' =>    array('data-content'  => "<i class='fa fa-check-square'></i>", 'value' => 'fa-check-square'                         , 'name' => 'fa-check-square'),
        'fa-check-square-o' =>  array('data-content'  => "<i class='fa fa-check-square-o'></i>", 'value' => 'fa-check-square-o'                         , 'name' => 'fa-check-square-o'),
        'fa-circle' =>  array('data-content'  => "<i class='fa fa-circle'></i>", 'value' => 'fa-circle'                         , 'name' => 'fa-circle'),
        'fa-circle-o' =>    array('data-content'  => "<i class='fa fa-circle-o'></i>", 'value' => 'fa-circle-o'                         , 'name' => 'fa-circle-o'),
        'fa-clock-o' =>     array('data-content'  => "<i class='fa fa-clock-o'></i>", 'value' => 'fa-clock-o'                           , 'name' => 'fa-clock-o'),
        'fa-cloud' =>   array('data-content'  => "<i class='fa fa-cloud'></i>", 'value' => 'fa-cloud'                           , 'name' => 'fa-cloud'),
        'fa-cloud-download' =>  array('data-content'  => "<i class='fa fa-cloud-download'></i>", 'value' => 'fa-cloud-download'                         , 'name' => 'fa-cloud-download'),
        'fa-cloud-upload' =>    array('data-content'  => "<i class='fa fa-cloud-upload'></i>", 'value' => 'fa-cloud-upload'                         , 'name' => 'fa-cloud-upload'),
        'fa-code' =>    array('data-content'  => "<i class='fa fa-code'></i>", 'value' => 'fa-code'                         , 'name' => 'fa-code'),
        'fa-code-fork' =>   array('data-content'  => "<i class='fa fa-code-fork'></i>", 'value' => 'fa-code-fork'                           , 'name' => 'fa-code-fork'),
        'fa-coffee' =>  array('data-content'  => "<i class='fa fa-coffee'></i>", 'value' => 'fa-coffee'                         , 'name' => 'fa-coffee'),
        'fa-cog' =>     array('data-content'  => "<i class='fa fa-cog'></i>", 'value' => 'fa-cog'                           , 'name' => 'fa-cog'),
        'fa-cogs' =>    array('data-content'  => "<i class='fa fa-cogs'></i>", 'value' => 'fa-cogs'                         , 'name' => 'fa-cogs'),
        'fa-comment' =>     array('data-content'  => "<i class='fa fa-comment'></i>", 'value' => 'fa-comment'                           , 'name' => 'fa-comment'),
        'fa-comment-o' =>   array('data-content'  => "<i class='fa fa-comment-o'></i>", 'value' => 'fa-comment-o'                           , 'name' => 'fa-comment-o'),
        'fa-comments' =>    array('data-content'  => "<i class='fa fa-comments'></i>", 'value' => 'fa-comments'                         , 'name' => 'fa-comments'),
        'fa-comments-o' =>  array('data-content'  => "<i class='fa fa-comments-o'></i>", 'value' => 'fa-comments-o'                         , 'name' => 'fa-comments-o'),
        'fa-compass' =>     array('data-content'  => "<i class='fa fa-compass'></i>", 'value' => 'fa-compass'                           , 'name' => 'fa-compass'),
        'fa-credit-card' =>     array('data-content'  => "<i class='fa fa-credit-card'></i>", 'value' => 'fa-credit-card'                           , 'name' => 'fa-credit-card'),
        'fa-crop' =>    array('data-content'  => "<i class='fa fa-crop'></i>", 'value' => 'fa-crop'                         , 'name' => 'fa-crop'),
        'fa-crosshairs' =>  array('data-content'  => "<i class='fa fa-crosshairs'></i>", 'value' => 'fa-crosshairs'                         , 'name' => 'fa-crosshairs'),
        'fa-cutlery' =>     array('data-content'  => "<i class='fa fa-cutlery'></i>", 'value' => 'fa-cutlery'                           , 'name' => 'fa-cutlery'),
        'fa-dashboard' =>   array('data-content'  => "<i class='fa fa-dashboard'></i>", 'value' => 'fa-dashboard'                           , 'name' => 'fa-dashboard'),
        'fa-desktop' =>     array('data-content'  => "<i class='fa fa-desktop'></i>", 'value' => 'fa-desktop'                           , 'name' => 'fa-desktop'),
        'fa-dot-circle-o' =>    array('data-content'  => "<i class='fa fa-dot-circle-o'></i>", 'value' => 'fa-dot-circle-o'                         , 'name' => 'fa-dot-circle-o'),
        'fa-download' =>    array('data-content'  => "<i class='fa fa-download'></i>", 'value' => 'fa-download'                         , 'name' => 'fa-download'),
        'fa-edit' =>    array('data-content'  => "<i class='fa fa-edit'></i>", 'value' => 'fa-edit'                         , 'name' => 'fa-edit'),
        'fa-ellipsis-h' =>  array('data-content'  => "<i class='fa fa-ellipsis-h'></i>", 'value' => 'fa-ellipsis-h'                         , 'name' => 'fa-ellipsis-h'),
        'fa-ellipsis-v' =>  array('data-content'  => "<i class='fa fa-ellipsis-v'></i>", 'value' => 'fa-ellipsis-v'                         , 'name' => 'fa-ellipsis-v'),
        'fa-envelope' =>    array('data-content'  => "<i class='fa fa-envelope'></i>", 'value' => 'fa-envelope'                         , 'name' => 'fa-envelope'),
        'fa-envelope-o' =>  array('data-content'  => "<i class='fa fa-envelope-o'></i>", 'value' => 'fa-envelope-o'                         , 'name' => 'fa-envelope-o'),
        'fa-eraser' =>  array('data-content'  => "<i class='fa fa-eraser'></i>", 'value' => 'fa-eraser'                         , 'name' => 'fa-eraser'),
        'fa-exchange' =>    array('data-content'  => "<i class='fa fa-exchange'></i>", 'value' => 'fa-exchange'                         , 'name' => 'fa-exchange'),
        'fa-exclamation' =>     array('data-content'  => "<i class='fa fa-exclamation'></i>", 'value' => 'fa-exclamation'                           , 'name' => 'fa-exclamation'),
        'fa-exclamation-circle' =>  array('data-content'  => "<i class='fa fa-exclamation-circle'></i>", 'value' => 'fa-exclamation-circle'                         , 'name' => 'fa-exclamation-circle'),
        'fa-exclamation-triangle' =>    array('data-content'  => "<i class='fa fa-exclamation-triangle'></i>", 'value' => 'fa-exclamation-triangle'                         , 'name' => 'fa-exclamation-triangle'),
        'fa-external-link' =>   array('data-content'  => "<i class='fa fa-external-link'></i>", 'value' => 'fa-external-link'                           , 'name' => 'fa-external-link'),
        'fa-external-link-square' =>    array('data-content'  => "<i class='fa fa-external-link-square'></i>", 'value' => 'fa-external-link-square'                         , 'name' => 'fa-external-link-square'),
        'fa-eye' =>     array('data-content'  => "<i class='fa fa-eye'></i>", 'value' => 'fa-eye'                           , 'name' => 'fa-eye'),
        'fa-eye-slash' =>   array('data-content'  => "<i class='fa fa-eye-slash'></i>", 'value' => 'fa-eye-slash'                           , 'name' => 'fa-eye-slash'),
        'fa-female' =>  array('data-content'  => "<i class='fa fa-female'></i>", 'value' => 'fa-female'                         , 'name' => 'fa-female'),
        'fa-fighter-jet' =>     array('data-content'  => "<i class='fa fa-fighter-jet'></i>", 'value' => 'fa-fighter-jet'                           , 'name' => 'fa-fighter-jet'),
        'fa-film' =>    array('data-content'  => "<i class='fa fa-film'></i>", 'value' => 'fa-film'                         , 'name' => 'fa-film'),
        'fa-filter' =>  array('data-content'  => "<i class='fa fa-filter'></i>", 'value' => 'fa-filter'                         , 'name' => 'fa-filter'),
        'fa-fire' =>    array('data-content'  => "<i class='fa fa-fire'></i>", 'value' => 'fa-fire'                         , 'name' => 'fa-fire'),
        'fa-fire-extinguisher' =>   array('data-content'  => "<i class='fa fa-fire-extinguisher'></i>", 'value' => 'fa-fire-extinguisher'                           , 'name' => 'fa-fire-extinguisher'),
        'fa-flag' =>    array('data-content'  => "<i class='fa fa-flag'></i>", 'value' => 'fa-flag'                         , 'name' => 'fa-flag'),
        'fa-flag-checkered' =>  array('data-content'  => "<i class='fa fa-flag-checkered'></i>", 'value' => 'fa-flag-checkered'                         , 'name' => 'fa-flag-checkered'),
        'fa-flag-o' =>  array('data-content'  => "<i class='fa fa-flag-o'></i>", 'value' => 'fa-flag-o'                         , 'name' => 'fa-flag-o'),
        'fa-flash' =>   array('data-content'  => "<i class='fa fa-flash'></i>", 'value' => 'fa-flash'                           , 'name' => 'fa-flash'),
        'fa-flask' =>   array('data-content'  => "<i class='fa fa-flask'></i>", 'value' => 'fa-flask'                           , 'name' => 'fa-flask'),
        'fa-folder' =>  array('data-content'  => "<i class='fa fa-folder'></i>", 'value' => 'fa-folder'                         , 'name' => 'fa-folder'),
        'fa-folder-o' =>    array('data-content'  => "<i class='fa fa-folder-o'></i>", 'value' => 'fa-folder-o'                         , 'name' => 'fa-folder-o'),
        'fa-folder-open' =>     array('data-content'  => "<i class='fa fa-folder-open'></i>", 'value' => 'fa-folder-open'                           , 'name' => 'fa-folder-open'),
        'fa-folder-open-o' =>   array('data-content'  => "<i class='fa fa-folder-open-o'></i>", 'value' => 'fa-folder-open-o'                           , 'name' => 'fa-folder-open-o'),
        'fa-frown-o' =>     array('data-content'  => "<i class='fa fa-frown-o'></i>", 'value' => 'fa-frown-o'                           , 'name' => 'fa-frown-o'),
        'fa-gamepad' =>     array('data-content'  => "<i class='fa fa-gamepad'></i>", 'value' => 'fa-gamepad'                           , 'name' => 'fa-gamepad'),
        'fa-gavel' =>   array('data-content'  => "<i class='fa fa-gavel'></i>", 'value' => 'fa-gavel'                           , 'name' => 'fa-gavel'),
        'fa-gear' =>    array('data-content'  => "<i class='fa fa-gear'></i>", 'value' => 'fa-gear'                         , 'name' => 'fa-gear'),
        'fa-gears' =>   array('data-content'  => "<i class='fa fa-gears'></i>", 'value' => 'fa-gears'                           , 'name' => 'fa-gears'),
        'fa-gift' =>    array('data-content'  => "<i class='fa fa-gift'></i>", 'value' => 'fa-gift'                         , 'name' => 'fa-gift'),
        'fa-glass' =>   array('data-content'  => "<i class='fa fa-glass'></i>", 'value' => 'fa-glass'                           , 'name' => 'fa-glass'),
        'fa-globe' =>   array('data-content'  => "<i class='fa fa-globe'></i>", 'value' => 'fa-globe'                           , 'name' => 'fa-globe'),
        'fa-group' =>   array('data-content'  => "<i class='fa fa-group'></i>", 'value' => 'fa-group'                           , 'name' => 'fa-group'),
        'fa-hdd-o' =>   array('data-content'  => "<i class='fa fa-hdd-o'></i>", 'value' => 'fa-hdd-o'                           , 'name' => 'fa-hdd-o'),
        'fa-headphones' =>  array('data-content'  => "<i class='fa fa-headphones'></i>", 'value' => 'fa-headphones'                         , 'name' => 'fa-headphones'),
        'fa-heart' =>   array('data-content'  => "<i class='fa fa-heart'></i>", 'value' => 'fa-heart'                           , 'name' => 'fa-heart'),
        'fa-heart-o' =>     array('data-content'  => "<i class='fa fa-heart-o'></i>", 'value' => 'fa-heart-o'                           , 'name' => 'fa-heart-o'),
        'fa-home' =>    array('data-content'  => "<i class='fa fa-home'></i>", 'value' => 'fa-home'                         , 'name' => 'fa-home'),
        'fa-inbox' =>   array('data-content'  => "<i class='fa fa-inbox'></i>", 'value' => 'fa-inbox'                           , 'name' => 'fa-inbox'),
        'fa-info' =>    array('data-content'  => "<i class='fa fa-info'></i>", 'value' => 'fa-info'                         , 'name' => 'fa-info'),
        'fa-info-circle' =>     array('data-content'  => "<i class='fa fa-info-circle'></i>", 'value' => 'fa-info-circle'                           , 'name' => 'fa-info-circle'),
        'fa-key' =>     array('data-content'  => "<i class='fa fa-key'></i>", 'value' => 'fa-key'                           , 'name' => 'fa-key'),
        'fa-keyboard-o' =>  array('data-content'  => "<i class='fa fa-keyboard-o'></i>", 'value' => 'fa-keyboard-o'                         , 'name' => 'fa-keyboard-o'),
        'fa-laptop' =>  array('data-content'  => "<i class='fa fa-laptop'></i>", 'value' => 'fa-laptop'                         , 'name' => 'fa-laptop'),
        'fa-leaf' =>    array('data-content'  => "<i class='fa fa-leaf'></i>", 'value' => 'fa-leaf'                         , 'name' => 'fa-leaf'),
        'fa-legal' =>   array('data-content'  => "<i class='fa fa-legal'></i>", 'value' => 'fa-legal'                           , 'name' => 'fa-legal'),
        'fa-lemon-o' =>     array('data-content'  => "<i class='fa fa-lemon-o'></i>", 'value' => 'fa-lemon-o'                           , 'name' => 'fa-lemon-o'),
        'fa-level-down' =>  array('data-content'  => "<i class='fa fa-level-down'></i>", 'value' => 'fa-level-down'                         , 'name' => 'fa-level-down'),
        'fa-level-up' =>    array('data-content'  => "<i class='fa fa-level-up'></i>", 'value' => 'fa-level-up'                         , 'name' => 'fa-level-up'),
        'fa-lightbulb-o' =>     array('data-content'  => "<i class='fa fa-lightbulb-o'></i>", 'value' => 'fa-lightbulb-o'                           , 'name' => 'fa-lightbulb-o'),
        'fa-location-arrow' =>  array('data-content'  => "<i class='fa fa-location-arrow'></i>", 'value' => 'fa-location-arrow'                         , 'name' => 'fa-location-arrow'),
        'fa-lock' =>    array('data-content'  => "<i class='fa fa-lock'></i>", 'value' => 'fa-lock'                         , 'name' => 'fa-lock'),
        'fa-magic' =>   array('data-content'  => "<i class='fa fa-magic'></i>", 'value' => 'fa-magic'                           , 'name' => 'fa-magic'),
        'fa-magnet' =>  array('data-content'  => "<i class='fa fa-magnet'></i>", 'value' => 'fa-magnet'                         , 'name' => 'fa-magnet'),
        'fa-mail-forward' =>    array('data-content'  => "<i class='fa fa-mail-forward'></i>", 'value' => 'fa-mail-forward'                         , 'name' => 'fa-mail-forward'),
        'fa-mail-reply' =>  array('data-content'  => "<i class='fa fa-mail-reply'></i>", 'value' => 'fa-mail-reply'                         , 'name' => 'fa-mail-reply'),
        'fa-mail-reply-all' =>  array('data-content'  => "<i class='fa fa-mail-reply-all'></i>", 'value' => 'fa-mail-reply-all'                         , 'name' => 'fa-mail-reply-all'),
        'fa-male' =>    array('data-content'  => "<i class='fa fa-male'></i>", 'value' => 'fa-male'                         , 'name' => 'fa-male'),
        'fa-map-marker' =>  array('data-content'  => "<i class='fa fa-map-marker'></i>", 'value' => 'fa-map-marker'                         , 'name' => 'fa-map-marker'),
        'fa-meh-o' =>   array('data-content'  => "<i class='fa fa-meh-o'></i>", 'value' => 'fa-meh-o'                           , 'name' => 'fa-meh-o'),
        'fa-microphone' =>  array('data-content'  => "<i class='fa fa-microphone'></i>", 'value' => 'fa-microphone'                         , 'name' => 'fa-microphone'),
        'fa-microphone-slash' =>    array('data-content'  => "<i class='fa fa-microphone-slash'></i>", 'value' => 'fa-microphone-slash'                         , 'name' => 'fa-microphone-slash'),
        'fa-minus' =>   array('data-content'  => "<i class='fa fa-minus'></i>", 'value' => 'fa-minus'                           , 'name' => 'fa-minus'),
        'fa-minus-circle' =>    array('data-content'  => "<i class='fa fa-minus-circle'></i>", 'value' => 'fa-minus-circle'                         , 'name' => 'fa-minus-circle'),
        'fa-minus-square' =>    array('data-content'  => "<i class='fa fa-minus-square'></i>", 'value' => 'fa-minus-square'                         , 'name' => 'fa-minus-square'),
        'fa-minus-square-o' =>  array('data-content'  => "<i class='fa fa-minus-square-o'></i>", 'value' => 'fa-minus-square-o'                         , 'name' => 'fa-minus-square-o'),
        'fa-mobile' =>  array('data-content'  => "<i class='fa fa-mobile'></i>", 'value' => 'fa-mobile'                         , 'name' => 'fa-mobile'),
        'fa-mobile-phone' =>    array('data-content'  => "<i class='fa fa-mobile-phone'></i>", 'value' => 'fa-mobile-phone'                         , 'name' => 'fa-mobile-phone'),
        'fa-money' =>   array('data-content'  => "<i class='fa fa-money'></i>", 'value' => 'fa-money'                           , 'name' => 'fa-money'),
        'fa-moon-o' =>  array('data-content'  => "<i class='fa fa-moon-o'></i>", 'value' => 'fa-moon-o'                         , 'name' => 'fa-moon-o'),
        'fa-music' =>   array('data-content'  => "<i class='fa fa-music'></i>", 'value' => 'fa-music'                           , 'name' => 'fa-music'),
        'fa-pencil' =>  array('data-content'  => "<i class='fa fa-pencil'></i>", 'value' => 'fa-pencil'                         , 'name' => 'fa-pencil'),
        'fa-pencil-square' =>   array('data-content'  => "<i class='fa fa-pencil-square'></i>", 'value' => 'fa-pencil-square'                           , 'name' => 'fa-pencil-square'),
        'fa-pencil-square-o' =>     array('data-content'  => "<i class='fa fa-pencil-square-o'></i>", 'value' => 'fa-pencil-square-o'                           , 'name' => 'fa-pencil-square-o'),
        'fa-phone' =>   array('data-content'  => "<i class='fa fa-phone'></i>", 'value' => 'fa-phone'                           , 'name' => 'fa-phone'),
        'fa-phone-square' =>    array('data-content'  => "<i class='fa fa-phone-square'></i>", 'value' => 'fa-phone-square'                         , 'name' => 'fa-phone-square'),
        'fa-picture-o' =>   array('data-content'  => "<i class='fa fa-picture-o'></i>", 'value' => 'fa-picture-o'                           , 'name' => 'fa-picture-o'),
        'fa-plane' =>   array('data-content'  => "<i class='fa fa-plane'></i>", 'value' => 'fa-plane'                           , 'name' => 'fa-plane'),
        'fa-plus' =>    array('data-content'  => "<i class='fa fa-plus'></i>", 'value' => 'fa-plus'                         , 'name' => 'fa-plus'),
        'fa-plus-circle' =>     array('data-content'  => "<i class='fa fa-plus-circle'></i>", 'value' => 'fa-plus-circle'                           , 'name' => 'fa-plus-circle'),
        'fa-plus-square' =>     array('data-content'  => "<i class='fa fa-plus-square'></i>", 'value' => 'fa-plus-square'                           , 'name' => 'fa-plus-square'),
        'fa-plus-square-o' =>   array('data-content'  => "<i class='fa fa-plus-square-o'></i>", 'value' => 'fa-plus-square-o'                           , 'name' => 'fa-plus-square-o'),
        'fa-power-off' =>   array('data-content'  => "<i class='fa fa-power-off'></i>", 'value' => 'fa-power-off'                           , 'name' => 'fa-power-off'),
        'fa-print' =>   array('data-content'  => "<i class='fa fa-print'></i>", 'value' => 'fa-print'                           , 'name' => 'fa-print'),
        'fa-puzzle-piece' =>    array('data-content'  => "<i class='fa fa-puzzle-piece'></i>", 'value' => 'fa-puzzle-piece'                         , 'name' => 'fa-puzzle-piece'),
        'fa-qrcode' =>  array('data-content'  => "<i class='fa fa-qrcode'></i>", 'value' => 'fa-qrcode'                         , 'name' => 'fa-qrcode'),
        'fa-question' =>    array('data-content'  => "<i class='fa fa-question'></i>", 'value' => 'fa-question'                         , 'name' => 'fa-question'),
        'fa-question-circle' =>     array('data-content'  => "<i class='fa fa-question-circle'></i>", 'value' => 'fa-question-circle'                           , 'name' => 'fa-question-circle'),
        'fa-quote-left' =>  array('data-content'  => "<i class='fa fa-quote-left'></i>", 'value' => 'fa-quote-left'                         , 'name' => 'fa-quote-left'),
        'fa-quote-right' =>     array('data-content'  => "<i class='fa fa-quote-right'></i>", 'value' => 'fa-quote-right'                           , 'name' => 'fa-quote-right'),
        'fa-random' =>  array('data-content'  => "<i class='fa fa-random'></i>", 'value' => 'fa-random'                         , 'name' => 'fa-random'),
        'fa-refresh' =>     array('data-content'  => "<i class='fa fa-refresh'></i>", 'value' => 'fa-refresh'                           , 'name' => 'fa-refresh'),
        'fa-reply' =>   array('data-content'  => "<i class='fa fa-reply'></i>", 'value' => 'fa-reply'                           , 'name' => 'fa-reply'),
        'fa-reply-all' =>   array('data-content'  => "<i class='fa fa-reply-all'></i>", 'value' => 'fa-reply-all'                           , 'name' => 'fa-reply-all'),
        'fa-retweet' =>     array('data-content'  => "<i class='fa fa-retweet'></i>", 'value' => 'fa-retweet'                           , 'name' => 'fa-retweet'),
        'fa-road' =>    array('data-content'  => "<i class='fa fa-road'></i>", 'value' => 'fa-road'                         , 'name' => 'fa-road'),
        'fa-rocket' =>  array('data-content'  => "<i class='fa fa-rocket'></i>", 'value' => 'fa-rocket'                         , 'name' => 'fa-rocket'),
        'fa-rss' =>     array('data-content'  => "<i class='fa fa-rss'></i>", 'value' => 'fa-rss'                           , 'name' => 'fa-rss'),
        'fa-rss-square' =>  array('data-content'  => "<i class='fa fa-rss-square'></i>", 'value' => 'fa-rss-square'                         , 'name' => 'fa-rss-square'),
        'fa-search' =>  array('data-content'  => "<i class='fa fa-search'></i>", 'value' => 'fa-search'                         , 'name' => 'fa-search'),
        'fa-search-minus' =>    array('data-content'  => "<i class='fa fa-search-minus'></i>", 'value' => 'fa-search-minus'                         , 'name' => 'fa-search-minus'),
        'fa-search-plus' =>     array('data-content'  => "<i class='fa fa-search-plus'></i>", 'value' => 'fa-search-plus'                           , 'name' => 'fa-search-plus'),
        'fa-share' =>   array('data-content'  => "<i class='fa fa-share'></i>", 'value' => 'fa-share'                           , 'name' => 'fa-share'),
        'fa-share-square' =>    array('data-content'  => "<i class='fa fa-share-square'></i>", 'value' => 'fa-share-square'                         , 'name' => 'fa-share-square'),
        'fa-share-square-o' =>  array('data-content'  => "<i class='fa fa-share-square-o'></i>", 'value' => 'fa-share-square-o'                         , 'name' => 'fa-share-square-o'),
        'fa-shield' =>  array('data-content'  => "<i class='fa fa-shield'></i>", 'value' => 'fa-shield'                         , 'name' => 'fa-shield'),
        'fa-shopping-cart' =>   array('data-content'  => "<i class='fa fa-shopping-cart'></i>", 'value' => 'fa-shopping-cart'                           , 'name' => 'fa-shopping-cart'),
        'fa-sign-in' =>     array('data-content'  => "<i class='fa fa-sign-in'></i>", 'value' => 'fa-sign-in'                           , 'name' => 'fa-sign-in'),
        'fa-sign-out' =>    array('data-content'  => "<i class='fa fa-sign-out'></i>", 'value' => 'fa-sign-out'                         , 'name' => 'fa-sign-out'),
        'fa-signal' =>  array('data-content'  => "<i class='fa fa-signal'></i>", 'value' => 'fa-signal'                         , 'name' => 'fa-signal'),
        'fa-sitemap' =>     array('data-content'  => "<i class='fa fa-sitemap'></i>", 'value' => 'fa-sitemap'                           , 'name' => 'fa-sitemap'),
        'fa-smile-o' =>     array('data-content'  => "<i class='fa fa-smile-o'></i>", 'value' => 'fa-smile-o'                           , 'name' => 'fa-smile-o'),
        'fa-sort' =>    array('data-content'  => "<i class='fa fa-sort'></i>", 'value' => 'fa-sort'                         , 'name' => 'fa-sort'),
        'fa-sort-alpha-asc' =>  array('data-content'  => "<i class='fa fa-sort-alpha-asc'></i>", 'value' => 'fa-sort-alpha-asc'                         , 'name' => 'fa-sort-alpha-asc'),
        'fa-sort-alpha-desc' =>     array('data-content'  => "<i class='fa fa-sort-alpha-desc'></i>", 'value' => 'fa-sort-alpha-desc'                           , 'name' => 'fa-sort-alpha-desc'),
        'fa-sort-amount-asc' =>     array('data-content'  => "<i class='fa fa-sort-amount-asc'></i>", 'value' => 'fa-sort-amount-asc'                           , 'name' => 'fa-sort-amount-asc'),
        'fa-sort-amount-desc' =>    array('data-content'  => "<i class='fa fa-sort-amount-desc'></i>", 'value' => 'fa-sort-amount-desc'                         , 'name' => 'fa-sort-amount-desc'),
        'fa-sort-asc' =>    array('data-content'  => "<i class='fa fa-sort-asc'></i>", 'value' => 'fa-sort-asc'                         , 'name' => 'fa-sort-asc'),
        'fa-sort-desc' =>   array('data-content'  => "<i class='fa fa-sort-desc'></i>", 'value' => 'fa-sort-desc'                           , 'name' => 'fa-sort-desc'),
        'fa-sort-down' =>   array('data-content'  => "<i class='fa fa-sort-down'></i>", 'value' => 'fa-sort-down'                           , 'name' => 'fa-sort-down'),
        'fa-sort-numeric-asc' =>    array('data-content'  => "<i class='fa fa-sort-numeric-asc'></i>", 'value' => 'fa-sort-numeric-asc'                         , 'name' => 'fa-sort-numeric-asc'),
        'fa-sort-numeric-desc' =>   array('data-content'  => "<i class='fa fa-sort-numeric-desc'></i>", 'value' => 'fa-sort-numeric-desc'                           , 'name' => 'fa-sort-numeric-desc'),
        'fa-sort-up' =>     array('data-content'  => "<i class='fa fa-sort-up'></i>", 'value' => 'fa-sort-up'                           , 'name' => 'fa-sort-up'),
        'fa-spinner' =>     array('data-content'  => "<i class='fa fa-spinner'></i>", 'value' => 'fa-spinner'                           , 'name' => 'fa-spinner'),
        'fa-square' =>  array('data-content'  => "<i class='fa fa-square'></i>", 'value' => 'fa-square'                         , 'name' => 'fa-square'),
        'fa-square-o' =>    array('data-content'  => "<i class='fa fa-square-o'></i>", 'value' => 'fa-square-o'                         , 'name' => 'fa-square-o'),
        'fa-star' =>    array('data-content'  => "<i class='fa fa-star'></i>", 'value' => 'fa-star'                         , 'name' => 'fa-star'),
        'fa-star-half' =>   array('data-content'  => "<i class='fa fa-star-half'></i>", 'value' => 'fa-star-half'                           , 'name' => 'fa-star-half'),
        'fa-star-half-empty' =>     array('data-content'  => "<i class='fa fa-star-half-empty'></i>", 'value' => 'fa-star-half-empty'                           , 'name' => 'fa-star-half-empty'),
        'fa-star-half-full' =>  array('data-content'  => "<i class='fa fa-star-half-full'></i>", 'value' => 'fa-star-half-full'                         , 'name' => 'fa-star-half-full'),
        'fa-star-half-o' =>     array('data-content'  => "<i class='fa fa-star-half-o'></i>", 'value' => 'fa-star-half-o'                           , 'name' => 'fa-star-half-o'),
        'fa-star-o' =>  array('data-content'  => "<i class='fa fa-star-o'></i>", 'value' => 'fa-star-o'                         , 'name' => 'fa-star-o'),
        'fa-subscript' =>   array('data-content'  => "<i class='fa fa-subscript'></i>", 'value' => 'fa-subscript'                           , 'name' => 'fa-subscript'),
        'fa-suitcase' =>    array('data-content'  => "<i class='fa fa-suitcase'></i>", 'value' => 'fa-suitcase'                         , 'name' => 'fa-suitcase'),
        'fa-sun-o' =>   array('data-content'  => "<i class='fa fa-sun-o'></i>", 'value' => 'fa-sun-o'                           , 'name' => 'fa-sun-o'),
        'fa-superscript' =>     array('data-content'  => "<i class='fa fa-superscript'></i>", 'value' => 'fa-superscript'                           , 'name' => 'fa-superscript'),
        'fa-tablet' =>  array('data-content'  => "<i class='fa fa-tablet'></i>", 'value' => 'fa-tablet'                         , 'name' => 'fa-tablet'),
        'fa-tachometer' =>  array('data-content'  => "<i class='fa fa-tachometer'></i>", 'value' => 'fa-tachometer'                         , 'name' => 'fa-tachometer'),
        'fa-tag' =>     array('data-content'  => "<i class='fa fa-tag'></i>", 'value' => 'fa-tag'                           , 'name' => 'fa-tag'),
        'fa-tags' =>    array('data-content'  => "<i class='fa fa-tags'></i>", 'value' => 'fa-tags'                         , 'name' => 'fa-tags'),
        'fa-tasks' =>   array('data-content'  => "<i class='fa fa-tasks'></i>", 'value' => 'fa-tasks'                           , 'name' => 'fa-tasks'),
        'fa-terminal' =>    array('data-content'  => "<i class='fa fa-terminal'></i>", 'value' => 'fa-terminal'                         , 'name' => 'fa-terminal'),
        'fa-thumb-tack' =>  array('data-content'  => "<i class='fa fa-thumb-tack'></i>", 'value' => 'fa-thumb-tack'                         , 'name' => 'fa-thumb-tack'),
        'fa-thumbs-down' =>     array('data-content'  => "<i class='fa fa-thumbs-down'></i>", 'value' => 'fa-thumbs-down'                           , 'name' => 'fa-thumbs-down'),
        'fa-thumbs-o-down' =>   array('data-content'  => "<i class='fa fa-thumbs-o-down'></i>", 'value' => 'fa-thumbs-o-down'                           , 'name' => 'fa-thumbs-o-down'),
        'fa-thumbs-o-up' =>     array('data-content'  => "<i class='fa fa-thumbs-o-up'></i>", 'value' => 'fa-thumbs-o-up'                           , 'name' => 'fa-thumbs-o-up'),
        'fa-thumbs-up' =>   array('data-content'  => "<i class='fa fa-thumbs-up'></i>", 'value' => 'fa-thumbs-up'                           , 'name' => 'fa-thumbs-up'),
        'fa-ticket' =>  array('data-content'  => "<i class='fa fa-ticket'></i>", 'value' => 'fa-ticket'                         , 'name' => 'fa-ticket'),
        'fa-times' =>   array('data-content'  => "<i class='fa fa-times'></i>", 'value' => 'fa-times'                           , 'name' => 'fa-times'),
        'fa-times-circle' =>    array('data-content'  => "<i class='fa fa-times-circle'></i>", 'value' => 'fa-times-circle'                         , 'name' => 'fa-times-circle'),
        'fa-times-circle-o' =>  array('data-content'  => "<i class='fa fa-times-circle-o'></i>", 'value' => 'fa-times-circle-o'                         , 'name' => 'fa-times-circle-o'),
        'fa-tint' =>    array('data-content'  => "<i class='fa fa-tint'></i>", 'value' => 'fa-tint'                         , 'name' => 'fa-tint'),
        'fa-toggle-down' =>     array('data-content'  => "<i class='fa fa-toggle-down'></i>", 'value' => 'fa-toggle-down'                           , 'name' => 'fa-toggle-down'),
        'fa-toggle-left' =>     array('data-content'  => "<i class='fa fa-toggle-left'></i>", 'value' => 'fa-toggle-left'                           , 'name' => 'fa-toggle-left'),
        'fa-toggle-right' =>    array('data-content'  => "<i class='fa fa-toggle-right'></i>", 'value' => 'fa-toggle-right'                         , 'name' => 'fa-toggle-right'),
        'fa-toggle-up' =>   array('data-content'  => "<i class='fa fa-toggle-up'></i>", 'value' => 'fa-toggle-up'                           , 'name' => 'fa-toggle-up'),
        'fa-trash-o' =>     array('data-content'  => "<i class='fa fa-trash-o'></i>", 'value' => 'fa-trash-o'                           , 'name' => 'fa-trash-o'),
        'fa-trophy' =>  array('data-content'  => "<i class='fa fa-trophy'></i>", 'value' => 'fa-trophy'                         , 'name' => 'fa-trophy'),
        'fa-truck' =>   array('data-content'  => "<i class='fa fa-truck'></i>", 'value' => 'fa-truck'                           , 'name' => 'fa-truck'),
        'fa-umbrella' =>    array('data-content'  => "<i class='fa fa-umbrella'></i>", 'value' => 'fa-umbrella'                         , 'name' => 'fa-umbrella'),
        'fa-unlock' =>  array('data-content'  => "<i class='fa fa-unlock'></i>", 'value' => 'fa-unlock'                         , 'name' => 'fa-unlock'),
        'fa-unlock-alt' =>  array('data-content'  => "<i class='fa fa-unlock-alt'></i>", 'value' => 'fa-unlock-alt'                         , 'name' => 'fa-unlock-alt'),
        'fa-unsorted' =>    array('data-content'  => "<i class='fa fa-unsorted'></i>", 'value' => 'fa-unsorted'                         , 'name' => 'fa-unsorted'),
        'fa-upload' =>  array('data-content'  => "<i class='fa fa-upload'></i>", 'value' => 'fa-upload'                         , 'name' => 'fa-upload'),
        'fa-user' =>    array('data-content'  => "<i class='fa fa-user'></i>", 'value' => 'fa-user'                         , 'name' => 'fa-user'),
        'fa-users' =>   array('data-content'  => "<i class='fa fa-users'></i>", 'value' => 'fa-users'                           , 'name' => 'fa-users'),
        'fa-video-camera' =>    array('data-content'  => "<i class='fa fa-video-camera'></i>", 'value' => 'fa-video-camera'                         , 'name' => 'fa-video-camera'),
        'fa-volume-down' =>     array('data-content'  => "<i class='fa fa-volume-down'></i>", 'value' => 'fa-volume-down'                           , 'name' => 'fa-volume-down'),
        'fa-volume-off' =>  array('data-content'  => "<i class='fa fa-volume-off'></i>", 'value' => 'fa-volume-off'                         , 'name' => 'fa-volume-off'),
        'fa-volume-up' =>   array('data-content'  => "<i class='fa fa-volume-up'></i>", 'value' => 'fa-volume-up'                           , 'name' => 'fa-volume-up'),
        'fa-warning' =>     array('data-content'  => "<i class='fa fa-warning'></i>", 'value' => 'fa-warning'                           , 'name' => 'fa-warning'),
        'fa-wheelchair' =>  array('data-content'  => "<i class='fa fa-wheelchair'></i>", 'value' => 'fa-wheelchair'                         , 'name' => 'fa-wheelchair'),
        'fa-wrench' =>  array('data-content'  => "<i class='fa fa-wrench'></i>", 'value' => 'fa-wrench'                         , 'name' => 'fa-wrench'),
        'fa-check-square' =>    array('data-content'  => "<i class='fa fa-check-square'></i>", 'value' => 'fa-check-square'                         , 'name' => 'fa-check-square'),
        'fa-check-square-o' =>  array('data-content'  => "<i class='fa fa-check-square-o'></i>", 'value' => 'fa-check-square-o'                         , 'name' => 'fa-check-square-o'),
        'fa-circle' =>  array('data-content'  => "<i class='fa fa-circle'></i>", 'value' => 'fa-circle'                         , 'name' => 'fa-circle'),
        'fa-circle-o' =>    array('data-content'  => "<i class='fa fa-circle-o'></i>", 'value' => 'fa-circle-o'                         , 'name' => 'fa-circle-o'),
        'fa-dot-circle-o' =>    array('data-content'  => "<i class='fa fa-dot-circle-o'></i>", 'value' => 'fa-dot-circle-o'                         , 'name' => 'fa-dot-circle-o'),
        'fa-minus-square' =>    array('data-content'  => "<i class='fa fa-minus-square'></i>", 'value' => 'fa-minus-square'                         , 'name' => 'fa-minus-square'),
        'fa-minus-square-o' =>  array('data-content'  => "<i class='fa fa-minus-square-o'></i>", 'value' => 'fa-minus-square-o'                         , 'name' => 'fa-minus-square-o'),
        'fa-plus-square' =>     array('data-content'  => "<i class='fa fa-plus-square'></i>", 'value' => 'fa-plus-square'                           , 'name' => 'fa-plus-square'),
        'fa-plus-square-o' =>   array('data-content'  => "<i class='fa fa-plus-square-o'></i>", 'value' => 'fa-plus-square-o'                           , 'name' => 'fa-plus-square-o'),
        'fa-square' =>  array('data-content'  => "<i class='fa fa-square'></i>", 'value' => 'fa-square'                         , 'name' => 'fa-square'),
        'fa-square-o' =>    array('data-content'  => "<i class='fa fa-square-o'></i>", 'value' => 'fa-square-o'                         , 'name' => 'fa-square-o'),
        'fa-bitcoin' =>     array('data-content'  => "<i class='fa fa-bitcoin'></i>", 'value' => 'fa-bitcoin'                           , 'name' => 'fa-bitcoin'),
        'fa-btc' =>     array('data-content'  => "<i class='fa fa-btc'></i>", 'value' => 'fa-btc'                           , 'name' => 'fa-btc'),
        'fa-cny' =>     array('data-content'  => "<i class='fa fa-cny'></i>", 'value' => 'fa-cny'                           , 'name' => 'fa-cny'),
        'fa-dollar' =>  array('data-content'  => "<i class='fa fa-dollar'></i>", 'value' => 'fa-dollar'                         , 'name' => 'fa-dollar'),
        'fa-eur' =>     array('data-content'  => "<i class='fa fa-eur'></i>", 'value' => 'fa-eur'                           , 'name' => 'fa-eur'),
        'fa-euro' =>    array('data-content'  => "<i class='fa fa-euro'></i>", 'value' => 'fa-euro'                         , 'name' => 'fa-euro'),
        'fa-gbp' =>     array('data-content'  => "<i class='fa fa-gbp'></i>", 'value' => 'fa-gbp'                           , 'name' => 'fa-gbp'),
        'fa-inr' =>     array('data-content'  => "<i class='fa fa-inr'></i>", 'value' => 'fa-inr'                           , 'name' => 'fa-inr'),
        'fa-jpy' =>     array('data-content'  => "<i class='fa fa-jpy'></i>", 'value' => 'fa-jpy'                           , 'name' => 'fa-jpy'),
        'fa-krw' =>     array('data-content'  => "<i class='fa fa-krw'></i>", 'value' => 'fa-krw'                           , 'name' => 'fa-krw'),
        'fa-money' =>   array('data-content'  => "<i class='fa fa-money'></i>", 'value' => 'fa-money'                           , 'name' => 'fa-money'),
        'fa-rmb' =>     array('data-content'  => "<i class='fa fa-rmb'></i>", 'value' => 'fa-rmb'                           , 'name' => 'fa-rmb'),
        'fa-rouble' =>  array('data-content'  => "<i class='fa fa-rouble'></i>", 'value' => 'fa-rouble'                         , 'name' => 'fa-rouble'),
        'fa-rub' =>     array('data-content'  => "<i class='fa fa-rub'></i>", 'value' => 'fa-rub'                           , 'name' => 'fa-rub'),
        'fa-ruble' =>   array('data-content'  => "<i class='fa fa-ruble'></i>", 'value' => 'fa-ruble'                           , 'name' => 'fa-ruble'),
        'fa-rupee' =>   array('data-content'  => "<i class='fa fa-rupee'></i>", 'value' => 'fa-rupee'                           , 'name' => 'fa-rupee'),
        'fa-try' =>     array('data-content'  => "<i class='fa fa-try'></i>", 'value' => 'fa-try'                           , 'name' => 'fa-try'),
        'fa-turkish-lira' =>    array('data-content'  => "<i class='fa fa-turkish-lira'></i>", 'value' => 'fa-turkish-lira'                         , 'name' => 'fa-turkish-lira'),
        'fa-usd' =>     array('data-content'  => "<i class='fa fa-usd'></i>", 'value' => 'fa-usd'                           , 'name' => 'fa-usd'),
        'fa-won' =>     array('data-content'  => "<i class='fa fa-won'></i>", 'value' => 'fa-won'                           , 'name' => 'fa-won'),
        'fa-yen' =>     array('data-content'  => "<i class='fa fa-yen'></i>", 'value' => 'fa-yen'                           , 'name' => 'fa-yen'),
        'fa-align-center' =>    array('data-content'  => "<i class='fa fa-align-center'></i>", 'value' => 'fa-align-center'                         , 'name' => 'fa-align-center'),
        'fa-align-justify' =>   array('data-content'  => "<i class='fa fa-align-justify'></i>", 'value' => 'fa-align-justify'                           , 'name' => 'fa-align-justify'),
        'fa-align-left' =>  array('data-content'  => "<i class='fa fa-align-left'></i>", 'value' => 'fa-align-left'                         , 'name' => 'fa-align-left'),
        'fa-align-right' =>     array('data-content'  => "<i class='fa fa-align-right'></i>", 'value' => 'fa-align-right'                           , 'name' => 'fa-align-right'),
        'fa-bold' =>    array('data-content'  => "<i class='fa fa-bold'></i>", 'value' => 'fa-bold'                         , 'name' => 'fa-bold'),
        'fa-chain' =>   array('data-content'  => "<i class='fa fa-chain'></i>", 'value' => 'fa-chain'                           , 'name' => 'fa-chain'),
        'fa-chain-broken' =>    array('data-content'  => "<i class='fa fa-chain-broken'></i>", 'value' => 'fa-chain-broken'                         , 'name' => 'fa-chain-broken'),
        'fa-clipboard' =>   array('data-content'  => "<i class='fa fa-clipboard'></i>", 'value' => 'fa-clipboard'                           , 'name' => 'fa-clipboard'),
        'fa-columns' =>     array('data-content'  => "<i class='fa fa-columns'></i>", 'value' => 'fa-columns'                           , 'name' => 'fa-columns'),
        'fa-copy' =>    array('data-content'  => "<i class='fa fa-copy'></i>", 'value' => 'fa-copy'                         , 'name' => 'fa-copy'),
        'fa-cut' =>     array('data-content'  => "<i class='fa fa-cut'></i>", 'value' => 'fa-cut'                           , 'name' => 'fa-cut'),
        'fa-dedent' =>  array('data-content'  => "<i class='fa fa-dedent'></i>", 'value' => 'fa-dedent'                         , 'name' => 'fa-dedent'),
        'fa-eraser' =>  array('data-content'  => "<i class='fa fa-eraser'></i>", 'value' => 'fa-eraser'                         , 'name' => 'fa-eraser'),
        'fa-file' =>    array('data-content'  => "<i class='fa fa-file'></i>", 'value' => 'fa-file'                         , 'name' => 'fa-file'),
        'fa-file-o' =>  array('data-content'  => "<i class='fa fa-file-o'></i>", 'value' => 'fa-file-o'                         , 'name' => 'fa-file-o'),
        'fa-file-text' =>   array('data-content'  => "<i class='fa fa-file-text'></i>", 'value' => 'fa-file-text'                           , 'name' => 'fa-file-text'),
        'fa-file-text-o' =>     array('data-content'  => "<i class='fa fa-file-text-o'></i>", 'value' => 'fa-file-text-o'                           , 'name' => 'fa-file-text-o'),
        'fa-files-o' =>     array('data-content'  => "<i class='fa fa-files-o'></i>", 'value' => 'fa-files-o'                           , 'name' => 'fa-files-o'),
        'fa-floppy-o' =>    array('data-content'  => "<i class='fa fa-floppy-o'></i>", 'value' => 'fa-floppy-o'                         , 'name' => 'fa-floppy-o'),
        'fa-font' =>    array('data-content'  => "<i class='fa fa-font'></i>", 'value' => 'fa-font'                         , 'name' => 'fa-font'),
        'fa-indent' =>  array('data-content'  => "<i class='fa fa-indent'></i>", 'value' => 'fa-indent'                         , 'name' => 'fa-indent'),
        'fa-italic' =>  array('data-content'  => "<i class='fa fa-italic'></i>", 'value' => 'fa-italic'                         , 'name' => 'fa-italic'),
        'fa-link' =>    array('data-content'  => "<i class='fa fa-link'></i>", 'value' => 'fa-link'                         , 'name' => 'fa-link'),
        'fa-list' =>    array('data-content'  => "<i class='fa fa-list'></i>", 'value' => 'fa-list'                         , 'name' => 'fa-list'),
        'fa-list-alt' =>    array('data-content'  => "<i class='fa fa-list-alt'></i>", 'value' => 'fa-list-alt'                         , 'name' => 'fa-list-alt'),
        'fa-list-ol' =>     array('data-content'  => "<i class='fa fa-list-ol'></i>", 'value' => 'fa-list-ol'                           , 'name' => 'fa-list-ol'),
        'fa-list-ul' =>     array('data-content'  => "<i class='fa fa-list-ul'></i>", 'value' => 'fa-list-ul'                           , 'name' => 'fa-list-ul'),
        'fa-outdent' =>     array('data-content'  => "<i class='fa fa-outdent'></i>", 'value' => 'fa-outdent'                           , 'name' => 'fa-outdent'),
        'fa-paperclip' =>   array('data-content'  => "<i class='fa fa-paperclip'></i>", 'value' => 'fa-paperclip'                           , 'name' => 'fa-paperclip'),
        'fa-paste' =>   array('data-content'  => "<i class='fa fa-paste'></i>", 'value' => 'fa-paste'                           , 'name' => 'fa-paste'),
        'fa-repeat' =>  array('data-content'  => "<i class='fa fa-repeat'></i>", 'value' => 'fa-repeat'                         , 'name' => 'fa-repeat'),
        'fa-rotate-left' =>     array('data-content'  => "<i class='fa fa-rotate-left'></i>", 'value' => 'fa-rotate-left'                           , 'name' => 'fa-rotate-left'),
        'fa-rotate-right' =>    array('data-content'  => "<i class='fa fa-rotate-right'></i>", 'value' => 'fa-rotate-right'                         , 'name' => 'fa-rotate-right'),
        'fa-save' =>    array('data-content'  => "<i class='fa fa-save'></i>", 'value' => 'fa-save'                         , 'name' => 'fa-save'),
        'fa-scissors' =>    array('data-content'  => "<i class='fa fa-scissors'></i>", 'value' => 'fa-scissors'                         , 'name' => 'fa-scissors'),
        'fa-strikethrough' =>   array('data-content'  => "<i class='fa fa-strikethrough'></i>", 'value' => 'fa-strikethrough'                           , 'name' => 'fa-strikethrough'),
        'fa-table' =>   array('data-content'  => "<i class='fa fa-table'></i>", 'value' => 'fa-table'                           , 'name' => 'fa-table'),
        'fa-text-height' =>     array('data-content'  => "<i class='fa fa-text-height'></i>", 'value' => 'fa-text-height'                           , 'name' => 'fa-text-height'),
        'fa-text-width' =>  array('data-content'  => "<i class='fa fa-text-width'></i>", 'value' => 'fa-text-width'                         , 'name' => 'fa-text-width'),
        'fa-th' =>  array('data-content'  => "<i class='fa fa-th'></i>", 'value' => 'fa-th'                         , 'name' => 'fa-th'),
        'fa-th-large' =>    array('data-content'  => "<i class='fa fa-th-large'></i>", 'value' => 'fa-th-large'                         , 'name' => 'fa-th-large'),
        'fa-th-list' =>     array('data-content'  => "<i class='fa fa-th-list'></i>", 'value' => 'fa-th-list'                           , 'name' => 'fa-th-list'),
        'fa-underline' =>   array('data-content'  => "<i class='fa fa-underline'></i>", 'value' => 'fa-underline'                           , 'name' => 'fa-underline'),
        'fa-undo' =>    array('data-content'  => "<i class='fa fa-undo'></i>", 'value' => 'fa-undo'                         , 'name' => 'fa-undo'),
        'fa-unlink' =>  array('data-content'  => "<i class='fa fa-unlink'></i>", 'value' => 'fa-unlink'                         , 'name' => 'fa-unlink'),
        'fa-angle-double-down' =>   array('data-content'  => "<i class='fa fa-angle-double-down'></i>", 'value' => 'fa-angle-double-down'                           , 'name' => 'fa-angle-double-down'),
        'fa-angle-double-left' =>   array('data-content'  => "<i class='fa fa-angle-double-left'></i>", 'value' => 'fa-angle-double-left'                           , 'name' => 'fa-angle-double-left'),
        'fa-angle-double-right' =>  array('data-content'  => "<i class='fa fa-angle-double-right'></i>", 'value' => 'fa-angle-double-right'                         , 'name' => 'fa-angle-double-right'),
        'fa-angle-double-up' =>     array('data-content'  => "<i class='fa fa-angle-double-up'></i>", 'value' => 'fa-angle-double-up'                           , 'name' => 'fa-angle-double-up'),
        'fa-angle-down' =>  array('data-content'  => "<i class='fa fa-angle-down'></i>", 'value' => 'fa-angle-down'                         , 'name' => 'fa-angle-down'),
        'fa-angle-left' =>  array('data-content'  => "<i class='fa fa-angle-left'></i>", 'value' => 'fa-angle-left'                         , 'name' => 'fa-angle-left'),
        'fa-angle-right' =>     array('data-content'  => "<i class='fa fa-angle-right'></i>", 'value' => 'fa-angle-right'                           , 'name' => 'fa-angle-right'),
        'fa-angle-up' =>    array('data-content'  => "<i class='fa fa-angle-up'></i>", 'value' => 'fa-angle-up'                         , 'name' => 'fa-angle-up'),
        'fa-arrow-circle-down' =>   array('data-content'  => "<i class='fa fa-arrow-circle-down'></i>", 'value' => 'fa-arrow-circle-down'                           , 'name' => 'fa-arrow-circle-down'),
        'fa-arrow-circle-left' =>   array('data-content'  => "<i class='fa fa-arrow-circle-left'></i>", 'value' => 'fa-arrow-circle-left'                           , 'name' => 'fa-arrow-circle-left'),
        'fa-arrow-circle-o-down' =>     array('data-content'  => "<i class='fa fa-arrow-circle-o-down'></i>", 'value' => 'fa-arrow-circle-o-down'                           , 'name' => 'fa-arrow-circle-o-down'),
        'fa-arrow-circle-o-left' =>     array('data-content'  => "<i class='fa fa-arrow-circle-o-left'></i>", 'value' => 'fa-arrow-circle-o-left'                           , 'name' => 'fa-arrow-circle-o-left'),
        'fa-arrow-circle-o-right' =>    array('data-content'  => "<i class='fa fa-arrow-circle-o-right'></i>", 'value' => 'fa-arrow-circle-o-right'                         , 'name' => 'fa-arrow-circle-o-right'),
        'fa-arrow-circle-o-up' =>   array('data-content'  => "<i class='fa fa-arrow-circle-o-up'></i>", 'value' => 'fa-arrow-circle-o-up'                           , 'name' => 'fa-arrow-circle-o-up'),
        'fa-arrow-circle-right' =>  array('data-content'  => "<i class='fa fa-arrow-circle-right'></i>", 'value' => 'fa-arrow-circle-right'                         , 'name' => 'fa-arrow-circle-right'),
        'fa-arrow-circle-up' =>     array('data-content'  => "<i class='fa fa-arrow-circle-up'></i>", 'value' => 'fa-arrow-circle-up'                           , 'name' => 'fa-arrow-circle-up'),
        'fa-arrow-down' =>  array('data-content'  => "<i class='fa fa-arrow-down'></i>", 'value' => 'fa-arrow-down'                         , 'name' => 'fa-arrow-down'),
        'fa-arrow-left' =>  array('data-content'  => "<i class='fa fa-arrow-left'></i>", 'value' => 'fa-arrow-left'                         , 'name' => 'fa-arrow-left'),
        'fa-arrow-right' =>     array('data-content'  => "<i class='fa fa-arrow-right'></i>", 'value' => 'fa-arrow-right'                           , 'name' => 'fa-arrow-right'),
        'fa-arrow-up' =>    array('data-content'  => "<i class='fa fa-arrow-up'></i>", 'value' => 'fa-arrow-up'                         , 'name' => 'fa-arrow-up'),
        'fa-arrows' =>  array('data-content'  => "<i class='fa fa-arrows'></i>", 'value' => 'fa-arrows'                         , 'name' => 'fa-arrows'),
        'fa-arrows-alt' =>  array('data-content'  => "<i class='fa fa-arrows-alt'></i>", 'value' => 'fa-arrows-alt'                         , 'name' => 'fa-arrows-alt'),
        'fa-arrows-h' =>    array('data-content'  => "<i class='fa fa-arrows-h'></i>", 'value' => 'fa-arrows-h'                         , 'name' => 'fa-arrows-h'),
        'fa-arrows-v' =>    array('data-content'  => "<i class='fa fa-arrows-v'></i>", 'value' => 'fa-arrows-v'                         , 'name' => 'fa-arrows-v'),
        'fa-caret-down' =>  array('data-content'  => "<i class='fa fa-caret-down'></i>", 'value' => 'fa-caret-down'                         , 'name' => 'fa-caret-down'),
        'fa-caret-left' =>  array('data-content'  => "<i class='fa fa-caret-left'></i>", 'value' => 'fa-caret-left'                         , 'name' => 'fa-caret-left'),
        'fa-caret-right' =>     array('data-content'  => "<i class='fa fa-caret-right'></i>", 'value' => 'fa-caret-right'                           , 'name' => 'fa-caret-right'),
        'fa-caret-square-o-down' =>     array('data-content'  => "<i class='fa fa-caret-square-o-down'></i>", 'value' => 'fa-caret-square-o-down'                           , 'name' => 'fa-caret-square-o-down'),
        'fa-caret-square-o-left' =>     array('data-content'  => "<i class='fa fa-caret-square-o-left'></i>", 'value' => 'fa-caret-square-o-left'                           , 'name' => 'fa-caret-square-o-left'),
        'fa-caret-square-o-right' =>    array('data-content'  => "<i class='fa fa-caret-square-o-right'></i>", 'value' => 'fa-caret-square-o-right'                         , 'name' => 'fa-caret-square-o-right'),
        'fa-caret-square-o-up' =>   array('data-content'  => "<i class='fa fa-caret-square-o-up'></i>", 'value' => 'fa-caret-square-o-up'                           , 'name' => 'fa-caret-square-o-up'),
        'fa-caret-up' =>    array('data-content'  => "<i class='fa fa-caret-up'></i>", 'value' => 'fa-caret-up'                         , 'name' => 'fa-caret-up'),
        'fa-chevron-circle-down' =>     array('data-content'  => "<i class='fa fa-chevron-circle-down'></i>", 'value' => 'fa-chevron-circle-down'                           , 'name' => 'fa-chevron-circle-down'),
        'fa-chevron-circle-left' =>     array('data-content'  => "<i class='fa fa-chevron-circle-left'></i>", 'value' => 'fa-chevron-circle-left'                           , 'name' => 'fa-chevron-circle-left'),
        'fa-chevron-circle-right' =>    array('data-content'  => "<i class='fa fa-chevron-circle-right'></i>", 'value' => 'fa-chevron-circle-right'                         , 'name' => 'fa-chevron-circle-right'),
        'fa-chevron-circle-up' =>   array('data-content'  => "<i class='fa fa-chevron-circle-up'></i>", 'value' => 'fa-chevron-circle-up'                           , 'name' => 'fa-chevron-circle-up'),
        'fa-chevron-down' =>    array('data-content'  => "<i class='fa fa-chevron-down'></i>", 'value' => 'fa-chevron-down'                         , 'name' => 'fa-chevron-down'),
        'fa-chevron-left' =>    array('data-content'  => "<i class='fa fa-chevron-left'></i>", 'value' => 'fa-chevron-left'                         , 'name' => 'fa-chevron-left'),
        'fa-chevron-right' =>   array('data-content'  => "<i class='fa fa-chevron-right'></i>", 'value' => 'fa-chevron-right'                           , 'name' => 'fa-chevron-right'),
        'fa-chevron-up' =>  array('data-content'  => "<i class='fa fa-chevron-up'></i>", 'value' => 'fa-chevron-up'                         , 'name' => 'fa-chevron-up'),
        'fa-hand-o-down' =>     array('data-content'  => "<i class='fa fa-hand-o-down'></i>", 'value' => 'fa-hand-o-down'                           , 'name' => 'fa-hand-o-down'),
        'fa-hand-o-left' =>     array('data-content'  => "<i class='fa fa-hand-o-left'></i>", 'value' => 'fa-hand-o-left'                           , 'name' => 'fa-hand-o-left'),
        'fa-hand-o-right' =>    array('data-content'  => "<i class='fa fa-hand-o-right'></i>", 'value' => 'fa-hand-o-right'                         , 'name' => 'fa-hand-o-right'),
        'fa-hand-o-up' =>   array('data-content'  => "<i class='fa fa-hand-o-up'></i>", 'value' => 'fa-hand-o-up'                           , 'name' => 'fa-hand-o-up'),
        'fa-long-arrow-down' =>     array('data-content'  => "<i class='fa fa-long-arrow-down'></i>", 'value' => 'fa-long-arrow-down'                           , 'name' => 'fa-long-arrow-down'),
        'fa-long-arrow-left' =>     array('data-content'  => "<i class='fa fa-long-arrow-left'></i>", 'value' => 'fa-long-arrow-left'                           , 'name' => 'fa-long-arrow-left'),
        'fa-long-arrow-right' =>    array('data-content'  => "<i class='fa fa-long-arrow-right'></i>", 'value' => 'fa-long-arrow-right'                         , 'name' => 'fa-long-arrow-right'),
        'fa-long-arrow-up' =>   array('data-content'  => "<i class='fa fa-long-arrow-up'></i>", 'value' => 'fa-long-arrow-up'                           , 'name' => 'fa-long-arrow-up'),
        'fa-toggle-down' =>     array('data-content'  => "<i class='fa fa-toggle-down'></i>", 'value' => 'fa-toggle-down'                           , 'name' => 'fa-toggle-down'),
        'fa-toggle-left' =>     array('data-content'  => "<i class='fa fa-toggle-left'></i>", 'value' => 'fa-toggle-left'                           , 'name' => 'fa-toggle-left'),
        'fa-toggle-right' =>    array('data-content'  => "<i class='fa fa-toggle-right'></i>", 'value' => 'fa-toggle-right'                         , 'name' => 'fa-toggle-right'),
        'fa-toggle-up' =>   array('data-content'  => "<i class='fa fa-toggle-up'></i>", 'value' => 'fa-toggle-up'                           , 'name' => 'fa-toggle-up'),
        'fa-arrows-alt' =>  array('data-content'  => "<i class='fa fa-arrows-alt'></i>", 'value' => 'fa-arrows-alt'                         , 'name' => 'fa-arrows-alt'),
        'fa-backward' =>    array('data-content'  => "<i class='fa fa-backward'></i>", 'value' => 'fa-backward'                         , 'name' => 'fa-backward'),
        'fa-compress' =>    array('data-content'  => "<i class='fa fa-compress'></i>", 'value' => 'fa-compress'                         , 'name' => 'fa-compress'),
        'fa-eject' =>   array('data-content'  => "<i class='fa fa-eject'></i>", 'value' => 'fa-eject'                           , 'name' => 'fa-eject'),
        'fa-expand' =>  array('data-content'  => "<i class='fa fa-expand'></i>", 'value' => 'fa-expand'                         , 'name' => 'fa-expand'),
        'fa-fast-backward' =>   array('data-content'  => "<i class='fa fa-fast-backward'></i>", 'value' => 'fa-fast-backward'                           , 'name' => 'fa-fast-backward'),
        'fa-fast-forward' =>    array('data-content'  => "<i class='fa fa-fast-forward'></i>", 'value' => 'fa-fast-forward'                         , 'name' => 'fa-fast-forward'),
        'fa-forward' =>     array('data-content'  => "<i class='fa fa-forward'></i>", 'value' => 'fa-forward'                           , 'name' => 'fa-forward'),
        'fa-pause' =>   array('data-content'  => "<i class='fa fa-pause'></i>", 'value' => 'fa-pause'                           , 'name' => 'fa-pause'),
        'fa-play' =>    array('data-content'  => "<i class='fa fa-play'></i>", 'value' => 'fa-play'                         , 'name' => 'fa-play'),
        'fa-play-circle' =>     array('data-content'  => "<i class='fa fa-play-circle'></i>", 'value' => 'fa-play-circle'                           , 'name' => 'fa-play-circle'),
        'fa-play-circle-o' =>   array('data-content'  => "<i class='fa fa-play-circle-o'></i>", 'value' => 'fa-play-circle-o'                           , 'name' => 'fa-play-circle-o'),
        'fa-step-backward' =>   array('data-content'  => "<i class='fa fa-step-backward'></i>", 'value' => 'fa-step-backward'                           , 'name' => 'fa-step-backward'),
        'fa-step-forward' =>    array('data-content'  => "<i class='fa fa-step-forward'></i>", 'value' => 'fa-step-forward'                         , 'name' => 'fa-step-forward'),
        'fa-stop' =>    array('data-content'  => "<i class='fa fa-stop'></i>", 'value' => 'fa-stop'                         , 'name' => 'fa-stop'),
        'fa-youtube-play' =>    array('data-content'  => "<i class='fa fa-youtube-play'></i>", 'value' => 'fa-youtube-play'                         , 'name' => 'fa-youtube-play'),
        'fa-adn' =>     array('data-content'  => "<i class='fa fa-adn'></i>", 'value' => 'fa-adn'                           , 'name' => 'fa-adn'),
        'fa-android' =>     array('data-content'  => "<i class='fa fa-android'></i>", 'value' => 'fa-android'                           , 'name' => 'fa-android'),
        'fa-apple' =>   array('data-content'  => "<i class='fa fa-apple'></i>", 'value' => 'fa-apple'                           , 'name' => 'fa-apple'),
        'fa-bitbucket' =>   array('data-content'  => "<i class='fa fa-bitbucket'></i>", 'value' => 'fa-bitbucket'                           , 'name' => 'fa-bitbucket'),
        'fa-bitbucket-square' =>    array('data-content'  => "<i class='fa fa-bitbucket-square'></i>", 'value' => 'fa-bitbucket-square'                         , 'name' => 'fa-bitbucket-square'),
        'fa-bitcoin' =>     array('data-content'  => "<i class='fa fa-bitcoin'></i>", 'value' => 'fa-bitcoin'                           , 'name' => 'fa-bitcoin'),
        'fa-btc' =>     array('data-content'  => "<i class='fa fa-btc'></i>", 'value' => 'fa-btc'                           , 'name' => 'fa-btc'),
        'fa-css3' =>    array('data-content'  => "<i class='fa fa-css3'></i>", 'value' => 'fa-css3'                         , 'name' => 'fa-css3'),
        'fa-dribbble' =>    array('data-content'  => "<i class='fa fa-dribbble'></i>", 'value' => 'fa-dribbble'                         , 'name' => 'fa-dribbble'),
        'fa-dropbox' =>     array('data-content'  => "<i class='fa fa-dropbox'></i>", 'value' => 'fa-dropbox'                           , 'name' => 'fa-dropbox'),
        'fa-facebook' =>    array('data-content'  => "<i class='fa fa-facebook'></i>", 'value' => 'fa-facebook'                         , 'name' => 'fa-facebook'),
        'fa-facebook-square' =>     array('data-content'  => "<i class='fa fa-facebook-square'></i>", 'value' => 'fa-facebook-square'                           , 'name' => 'fa-facebook-square'),
        'fa-flickr' =>  array('data-content'  => "<i class='fa fa-flickr'></i>", 'value' => 'fa-flickr'                         , 'name' => 'fa-flickr'),
        'fa-foursquare' =>  array('data-content'  => "<i class='fa fa-foursquare'></i>", 'value' => 'fa-foursquare'                         , 'name' => 'fa-foursquare'),
        'fa-github' =>  array('data-content'  => "<i class='fa fa-github'></i>", 'value' => 'fa-github'                         , 'name' => 'fa-github'),
        'fa-github-alt' =>  array('data-content'  => "<i class='fa fa-github-alt'></i>", 'value' => 'fa-github-alt'                         , 'name' => 'fa-github-alt'),
        'fa-github-square' =>   array('data-content'  => "<i class='fa fa-github-square'></i>", 'value' => 'fa-github-square'                           , 'name' => 'fa-github-square'),
        'fa-gittip' =>  array('data-content'  => "<i class='fa fa-gittip'></i>", 'value' => 'fa-gittip'                         , 'name' => 'fa-gittip'),
        'fa-google-plus' =>     array('data-content'  => "<i class='fa fa-google-plus'></i>", 'value' => 'fa-google-plus'                           , 'name' => 'fa-google-plus'),
        'fa-google-plus-square' =>  array('data-content'  => "<i class='fa fa-google-plus-square'></i>", 'value' => 'fa-google-plus-square'                         , 'name' => 'fa-google-plus-square'),
        'fa-html5' =>   array('data-content'  => "<i class='fa fa-html5'></i>", 'value' => 'fa-html5'                           , 'name' => 'fa-html5'),
        'fa-instagram' =>   array('data-content'  => "<i class='fa fa-instagram'></i>", 'value' => 'fa-instagram'                           , 'name' => 'fa-instagram'),
        'fa-linkedin' =>    array('data-content'  => "<i class='fa fa-linkedin'></i>", 'value' => 'fa-linkedin'                         , 'name' => 'fa-linkedin'),
        'fa-linkedin-square' =>     array('data-content'  => "<i class='fa fa-linkedin-square'></i>", 'value' => 'fa-linkedin-square'                           , 'name' => 'fa-linkedin-square'),
        'fa-linux' =>   array('data-content'  => "<i class='fa fa-linux'></i>", 'value' => 'fa-linux'                           , 'name' => 'fa-linux'),
        'fa-maxcdn' =>  array('data-content'  => "<i class='fa fa-maxcdn'></i>", 'value' => 'fa-maxcdn'                         , 'name' => 'fa-maxcdn'),
        'fa-pagelines' =>   array('data-content'  => "<i class='fa fa-pagelines'></i>", 'value' => 'fa-pagelines'                           , 'name' => 'fa-pagelines'),
        'fa-pinterest' =>   array('data-content'  => "<i class='fa fa-pinterest'></i>", 'value' => 'fa-pinterest'                           , 'name' => 'fa-pinterest'),
        'fa-pinterest-square' =>    array('data-content'  => "<i class='fa fa-pinterest-square'></i>", 'value' => 'fa-pinterest-square'                         , 'name' => 'fa-pinterest-square'),
        'fa-renren' =>  array('data-content'  => "<i class='fa fa-renren'></i>", 'value' => 'fa-renren'                         , 'name' => 'fa-renren'),
        'fa-skype' =>   array('data-content'  => "<i class='fa fa-skype'></i>", 'value' => 'fa-skype'                           , 'name' => 'fa-skype'),
        'fa-stack-exchange' =>  array('data-content'  => "<i class='fa fa-stack-exchange'></i>", 'value' => 'fa-stack-exchange'                         , 'name' => 'fa-stack-exchange'),
        'fa-stack-overflow' =>  array('data-content'  => "<i class='fa fa-stack-overflow'></i>", 'value' => 'fa-stack-overflow'                         , 'name' => 'fa-stack-overflow'),
        'fa-trello' =>  array('data-content'  => "<i class='fa fa-trello'></i>", 'value' => 'fa-trello'                         , 'name' => 'fa-trello'),
        'fa-tumblr' =>  array('data-content'  => "<i class='fa fa-tumblr'></i>", 'value' => 'fa-tumblr'                         , 'name' => 'fa-tumblr'),
        'fa-tumblr-square' =>   array('data-content'  => "<i class='fa fa-tumblr-square'></i>", 'value' => 'fa-tumblr-square'                           , 'name' => 'fa-tumblr-square'),
        'fa-twitter' =>     array('data-content'  => "<i class='fa fa-twitter'></i>", 'value' => 'fa-twitter'                           , 'name' => 'fa-twitter'),
        'fa-twitter-square' =>  array('data-content'  => "<i class='fa fa-twitter-square'></i>", 'value' => 'fa-twitter-square'                         , 'name' => 'fa-twitter-square'),
        'fa-vimeo-square' =>    array('data-content'  => "<i class='fa fa-vimeo-square'></i>", 'value' => 'fa-vimeo-square'                         , 'name' => 'fa-vimeo-square'),
        'fa-vk' =>  array('data-content'  => "<i class='fa fa-vk'></i>", 'value' => 'fa-vk'                         , 'name' => 'fa-vk'),
        'fa-weibo' =>   array('data-content'  => "<i class='fa fa-weibo'></i>", 'value' => 'fa-weibo'                           , 'name' => 'fa-weibo'),
        'fa-windows' =>     array('data-content'  => "<i class='fa fa-windows'></i>", 'value' => 'fa-windows'                           , 'name' => 'fa-windows'),
        'fa-xing' =>    array('data-content'  => "<i class='fa fa-xing'></i>", 'value' => 'fa-xing'                         , 'name' => 'fa-xing'),
        'fa-xing-square' =>     array('data-content'  => "<i class='fa fa-xing-square'></i>", 'value' => 'fa-xing-square'                           , 'name' => 'fa-xing-square'),
        'fa-youtube' =>     array('data-content'  => "<i class='fa fa-youtube'></i>", 'value' => 'fa-youtube'                           , 'name' => 'fa-youtube'),
        'fa-youtube-play' =>    array('data-content'  => "<i class='fa fa-youtube-play'></i>", 'value' => 'fa-youtube-play'                         , 'name' => 'fa-youtube-play'),
        'fa-youtube-square' =>  array('data-content'  => "<i class='fa fa-youtube-square'></i>", 'value' => 'fa-youtube-square'                         , 'name' => 'fa-youtube-square'),
        'fa-ambulance' =>   array('data-content'  => "<i class='fa fa-ambulance'></i>", 'value' => 'fa-ambulance'                           , 'name' => 'fa-ambulance'),
        'fa-h-square' =>    array('data-content'  => "<i class='fa fa-h-square'></i>", 'value' => 'fa-h-square'                         , 'name' => 'fa-h-square'),
        'fa-hospital-o' =>  array('data-content'  => "<i class='fa fa-hospital-o'></i>", 'value' => 'fa-hospital-o'                         , 'name' => 'fa-hospital-o'),
        'fa-medkit' =>  array('data-content'  => "<i class='fa fa-medkit'></i>", 'value' => 'fa-medkit'                         , 'name' => 'fa-medkit'),
        'fa-plus-square' =>     array('data-content'  => "<i class='fa fa-plus-square'></i>", 'value' => 'fa-plus-square'                           , 'name' => 'fa-plus-square'),
        'fa-stethoscope' =>     array('data-content'  => "<i class='fa fa-stethoscope'></i>", 'value' => 'fa-stethoscope'                           , 'name' => 'fa-stethoscope'),
        'fa-user-md' =>     array('data-content'  => "<i class='fa fa-user-md'></i>", 'value' => 'fa-user-md'                           , 'name' => 'fa-user-md'),
        'fa-wheelchair' =>  array('data-content'  => "<i class='fa fa-wheelchair'></i>", 'value' => 'fa-wheelchair', 'name' => 'fa-wheelchair'),

    
    );

 
  ?>
  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                               {{ isset($cat->id) ? 'Edit Category ' : 'Add Category' }}
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/categories') }}">Categories</a></li>
                                <li><a class="link-effect" href="">{{ isset($cat->id) ? 'Edit Category ' : 'Add Category' }}</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->
                <!-- Page Content -->
                <div class="content content-boxed">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="block">
                               <div class="block-content block-content-narrow"> 
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                 @if(Session::has('flash_message'))
                                                <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                                                    {{ Session::get('flash_message') }}
                                                </div>
                                @endif
                                {!! Form::open(array('url' => array('admin/categories/addcategory'),'class'=>'form-horizontal padding-15','name'=>'category_form','id'=>'category_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                                    <input type="hidden" name="id" value="{{ isset($cat->id) ? $cat->id : null }}">
                                    
                               <!--   <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Category Icon</label>
                                          <div class="col-sm-9">
                                             
                                            <select id="basic" name="category_icon" class="js-select2 form-control">
                                                <option value="">Select Icon</option>
                                                    @foreach ($fa_icons as $key => $value)
                                                    
                                                    @if(isset($cat->category_icon) && $cat->category_icon==$key)
                                                         <option value="{{$key}}" selected >{{$key}}</option>
                                                         
                                                    @else  
                                                        <option value="{{$key}}">{{$key}}</option>
                                                    @endif         
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
									-->
									<div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Category</label>
								
                                          <div class="col-sm-9">
										 
                                            <select id="basic2" name="category_id" class="js-select2 form-control">
                                                <option value="">Select Category</option>
												 <option value="0" @if(isset($cat->parent_id) && $cat->parent_id==0) selected @endif>--Top Category--</option>
                                                 				            @foreach($categories as $category)

				                <option  value="{{$category->id}}"  @if(isset($cat->parent_id) && $cat->parent_id==$category->id) selected="selected" @endif  >

				                    {{ $category->category_name }} 
								</option>
				                    @if(count($category->childs))
										@if(isset($cat->parent_id))
										@php ($parent_id=$cat->parent_id)
										@else
										@php ($parent_id='')
									@endif
									@include('admin.pages.manageChild',['childs' => $category->childs,'a'=>1,'parent_id'=>$parent_id])

				                    @endif
									@endforeach
                                                
									</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Category Name</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="category_name" value="{{ isset($cat->category_name) ? $cat->category_name : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Category Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="category_slug" value="{{ isset($cat->category_slug) ? $cat->category_slug : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
									<div class="form-group">
									   <label for="" class="col-sm-3 control-label">Category Image</label>
										<div class="col-sm-9">
										<input type="file" name="category_image" id="input-file" class="form-control input-md">  @if(isset($cat->category_image))
													 
									  <img src="{{ URL::asset('upload/category_image/'.$cat->category_image.'-s.jpg') }}" width="80" >
									@endif
										</div>
									</div>
									<div class="form-group">
									   <label for="" class="col-sm-3 control-label">Status</label>
										<div class="col-sm-9">
										 <select id="basic2" name="status" class="js-select2 form-control">
                                            <option value="">Select Status</option>
										   <option value="1" @if(isset($cat->status) && $cat->status==1) selected @endif>Active</option>
										   <option value="0" @if(isset($cat->status) && $cat->status==0) selected @endif>Inactive</option>
                                                 				            
									</select>
										</div>
									</div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-primary">{{ isset($cat->id) ? 'Edit Category ' : 'Add Category' }}</button>
                                             
                                        </div>
                                    </div>
                                    
                                    {!! Form::close() !!} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->            
@endsection