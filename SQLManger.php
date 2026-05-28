<?php
include("contact.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// function SelectedData(string $sql, array $params = [], bool $debug = false): array
// {
//     global $conn;

//     try {

//         $stmt = $conn->prepare($sql);
//         $stmt->execute($params);

//         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//         if ($debug) {
//             echo "<pre>";
//             echo "SQL: $sql\n";
//             print_r($params);
//             print_r($result);
//             echo "</pre>";
//         }

//         return $result;

//     } catch (PDOException $e) {

//         if ($debug) {
//             echo "<pre>" . $e->getMessage() . "</pre>";
//         }

//         return [];
//     }
// }

function SelectedData(string $sql, array $params = [], bool $debug = false): array
{
    global $conn;

    try {

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        error_log("Database Error: " . $e->getMessage());

        if ($debug) {
            echo "Database operation failed.";
        }

        return [];
    }
}
function InsertData(string $sql, array $params = []): int
{
    global $conn;

    try {

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        return $stmt->rowCount();

    } catch (PDOException $e) {

        error_log("Insert Error: " . $e->getMessage());
        return 0;
    }
}
function InsertDataReturnID(string $sql, array $params = []): int|false
{
    global $conn;

    try {

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['id'] ?? false;

    } catch (PDOException $e) {

        error_log("Insert Return ID Error: " . $e->getMessage());
        return false;
    }
}
function DeleteData(string $sql, array $params = []): int
{
    global $conn;

    try {

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        return $stmt->rowCount();

    } catch (PDOException $e) {

        error_log("Delete Error: " . $e->getMessage());
        return 0;
    }
}

function UpdateData(string $sql, array $params = [], bool $debug = false): int
{
    global $conn;

    try {

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        $count = $stmt->rowCount();

        if ($debug && ($_ENV['APP_ENV'] ?? '') !== 'production') {

            echo "<pre>";
            echo "SQL: " . htmlspecialchars($sql) . "\n";
            print_r($params);
            echo "Updated Rows: " . $count;
            echo "</pre>";
        }

        return $count;

    } catch (PDOException $e) {

        error_log("Update Error: " . $e->getMessage());
        return 0;
    }
}