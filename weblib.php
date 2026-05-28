<?php
include_once("SQLManger.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function renderHeader($title = "Home", $description = "Welcome to our website")
{
    echo '<!DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . htmlspecialchars($title) . ' | LoveSign Hub</title>
        <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="favicons/favicon.svg" />
        <link rel="shortcut icon" href="favicons/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png" />
        <meta name="apple-mobile-web-app-title" content="LoveSign Hub" />
        <link rel="manifest" href="favicons/site.webmanifest" />
        <meta name="description" content="' . htmlspecialchars($description) . '">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic&#038;subset=latin,latin-ext&#038;display=swap" media="all"/>


         <script type="text/javascript">
    let jqueryParams = [],
        jQuery = function(r) {
            return jqueryParams = [...jqueryParams, r], jQuery
        },
        $ = function(r) {
            return jqueryParams = [...jqueryParams, r], $
        };
    window.jQuery = jQuery,
    window.$ = jQuery;
    let customHeadScripts = !1;
    jQuery.fn = jQuery.prototype = {},
    $.fn = jQuery.prototype = {},
    jQuery.noConflict = function(r) {
        if (window.jQuery)
            return jQuery = window.jQuery, $ = window.jQuery, customHeadScripts = !0, jQuery.noConflict
    },
    jQuery.ready = function(r) {
        jqueryParams = [...jqueryParams, r]
    },
    $.ready = function(r) {
        jqueryParams = [...jqueryParams, r]
    },
    jQuery.load = function(r) {
        jqueryParams = [...jqueryParams, r]
    },
    $.load = function(r) {
        jqueryParams = [...jqueryParams, r]
    },
    jQuery.fn.ready = function(r) {
        jqueryParams = [...jqueryParams, r]
    },
    $.fn.ready = function(r) {
        jqueryParams = [...jqueryParams, r]
    };
    </script>

        </head>
    <body>';
}


function testSelect()
{
    echo "<br> Testing select function <br>";

    $data = SelectedData(
        "SELECT name, email FROM users WHERE status = ?",
        ['active'],
        false
    );

    if (empty($data)) {
        echo "No active users found.";
        return;
    }

    echo "<pre>";
    print_r($data);
    echo "</pre>";

    echo "<br> Select list <br>";

    echo "name: " . htmlspecialchars($data[0]['name']) . "<br>";
    echo "email: " . htmlspecialchars($data[0]['email']) . "<br>";
}

function testInsert(): void
{
    echo "<br> Testing insert function <br>";

    $email = 'john' . time() . '@example.com';

    $result = InsertData(
        "INSERT INTO users (name, email, status)
         VALUES (?, ?, ?)",
        ['John Doe', $email, 'active']
    );

    if ($result > 0) {

        echo "Insert successful.";

    } else {

        echo "Insert failed.";
    }
}

function testInsertReturnID(): void
{
    echo "<br> Testing insert with return ID function <br>";

    $id = InsertDataReturnID(
        "INSERT INTO users (name, status)
         VALUES (?, ?)
         RETURNING id",
        ['John', 'active']
    );

    if ($id !== false) {

        echo "Inserted ID: "
            . htmlspecialchars((string)$id);

    } else {

        echo "Insert failed.";
    }
}

function testDelete(): void
{
    echo "<br> Testing delete function <br>";

    $result = DeleteData(
        "DELETE FROM users WHERE email = ?",
        ['john.doe@example.com']
    );

    echo "Deleted rows: "
        . htmlspecialchars((string)$result);
}
function testUpdate(): void
{
    echo "<br> Testing update function <br>";

    $result = UpdateData(
        "UPDATE users
         SET status = ?
         WHERE email = ?",
        ['inactive', 'john.doe@example.com']
    );

    echo "Updated rows: "
        . htmlspecialchars((string)$result);
}