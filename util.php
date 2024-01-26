<?php
    $passes = 0;
    $fails = 0;

    function convertPHPVersion($versionId) {
        $major = ($versionId / 10000) % 100;
        $minor = ($versionId / 100) % 100;
        $patch = $versionId % 100;

        return "$major.$minor.$patch";
    }

    function pass($string) {
        global $passes;
        $passes++;
        echo("\033[0;32m✔ $string\e[0m\n");
    }

    function fail($string) {
        global $fails;
        $fails++;
        echo("\033[0;31m✘ $string\e[0m\n");
    }

    function printSummary() {
        global $passes, $fails;

        echo("\nPassed: $passes\nFailed: $fails\n");

        if ($fails === 0) { 
            echo("\n\033[0;32mYou're ready to deploy your Laravel project!\e[0m\n");
        } else {
            echo("\n\033[0;31mYou're missing one or more things before you can deploy your Laravel project\e[0m\n");
        }
    }

    function check_functions($list) {
        foreach ($list as $function) {
            if (!function_exists($function)) {
                return false;
            }
        }

        return true;
    }

    function check_classes($list) {
        foreach ($list as $class) {
            if (!class_exists($class)) {
                return false;
            }
        }

        return true;
    }