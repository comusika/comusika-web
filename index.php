<?php include('header.php');
$query = getenv('QUERY_STRING');
if (empty($query)) {
  $include = 'pages/news.php';
} else {
  $paramPos = strpos($query, '&');
  if ($paramPos !== false) $query = substr($query, 0, $paramPos);
  $target = 'pages/'.$query.'.php';
  if (!(preg_match("/[a-z\/\_\-]+/", $query) === false) && file_exists($target)) {
    $include = $target;
  } else {
  	http_response_code(404);
    $include = 'pages/not-found.php';
  }
}

include $include;

include 'refer.php'; ?>