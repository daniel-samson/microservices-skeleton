<?php

require_once __DIR__ . '/vendor/autoload.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL);

try {
    // home / landing page
    route(method(GET), url_path("/"), function () {
        render(200, json_out(['status' => 'up', 'volume'=> 'works']));
    });

    route(method(GET), url_path("/health"), function () {
        $pdo = new PDO('mysql:host='.getenv('MYSQL_HOST')
            .';port='.getenv('MYSQL_PORT')
            .';dbname='. getenv('MYSQL_DATABASE'),
            'root',
            getenv('MYSQL_ROOT_PASSWORD'));
        $result = array();
        foreach($pdo->query('SHOW TABLES') as $row) {
            $result[] = $row;
        }
        render(200, json_out(['status' => 'up', 'tables' => array_merge([], $result)]));
    });

    // Add your endpoints / routes here ...

    // route not found
    render(404, json_out(['error' => 'not found']));
} catch (Exception $e) {
    error_log($e->getMessage());
    error_log($e->getTraceAsString());
    render($e->getCode(), json_out(['error' => $e->getMessage()]));
} catch (Error $e) {
    error_log($e->getMessage());
    error_log($e->getTraceAsString());
    render($e->getCode(), json_out(['error' => $e->getMessage()]));
}