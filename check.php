<?php
    require('./util.php');
    /**
     * PHP version check
     */

    // This should be the version ID
    $requiredVersionID = 80100;

    $requiredVersion = convertPHPVersion($requiredVersionID);
    $currentVersion = convertPHPVersion(PHP_VERSION_ID);
    
    if (!PHP_VERSION_ID || PHP_VERSION_ID < $requiredVersionID) {
        fail("Current PHP version ($currentVersion) does not match the minimum required version ($requiredVersion)");
    } else {
        pass("Current PHP version ($currentVersion) matches the minimum required version ($requiredVersion)");
    }

    /**
     * Modules - Ctype
     */
    if (!check_functions(['ctype_alnum'])) {
        fail("Could not find ctype extension");
    } else {
        pass("Found ctype extension");
    }

    /**
     * Modules - cURL
     */
    if (!check_functions(['curl_close'])) {
        fail("Could not find cURL extension");
    } else {
        pass("Found cURL extension");
    }

    /**
     * Modules - DOM
     */
    if (!check_classes(['DOMAttr'])) {
        fail("Could not find DOM extension");
    } else {
        pass("Found DOM extension");
    }

    /**
     * Modules - fileinfo
     */
    if (!check_functions(['finfo_buffer'])) {
        fail("Could not find fileinfo extension");
    } else {
        pass("Found fileinfo extension");
    }

    /**
     * Modules - filter
     */
    if (!check_functions(['filter_has_var'])) {
        fail("Could not find filter extension");
    } else {
        pass("Found filter extension");
    }

    /**
     * Modules - hash
     */
    if (!check_functions(['hash_algos'])) {
        fail("Could not find hash extension");
    } else {
        pass("Found hash extension");
    }

    /**
     * Modules - mbstring
     */
    if (!check_functions(['mb_check_encoding'])) {
        fail("Could not find mbstring extension");
    } else {
        pass("Found mbstring extension");
    }

    /**
     * Modules - OpenSSL
     */
    if (!check_functions(['openssl_cipher_iv_length'])) {
        fail("Could not find OpenSSL extension");
    } else {
        pass("Found OpenSSL extension");
    }

    /**
     * Modules - PCRE
     */
    if (!check_functions(['preg_filter'])) {
        fail("Could not find PCRE extension");
    } else {
        pass("Found PCRE extension");
    }

    /**
     * Modules - PDO
     */
    if (!check_classes(['PDO'])) {
        fail("Could not find PDO extension");
    } else {
        pass("Found PDO extension");
    }

    /**
     * Modules - session
     */
    if (!check_functions(['session_abort'])) {
        fail("Could not find session extension");
    } else {
        pass("Found session extension");
    }

    /**
     * Modules - tokenizer
     */
    if (!check_functions(['token_get_all'])) {
        fail("Could not find tokenizer extension");
    } else {
        pass("Found tokenizer extension");
    }

    /**
     * Modules - XML
     */
    if (!check_functions(['xml_error_string'])) {
        fail("Could not find XML extension");
    } else {
        pass("Found XML extension");
    }

    /**
     * Summary
     */
    printSummary();