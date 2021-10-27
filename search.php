<?php include('auth.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/modal.css" />
    <script type="text/javascript" src="js/modal.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <?php include('nav.php') ?>
    <div class="search-section">
        <form method="get" action="search.php">
            <input name="term" placeholder="Enter keywords" />
            <button type="submit">Search</button>
        </form>
<?php 
    session_start();
    $db = mysqli_connect('localhost', 'monkeywings', '3p1cburg3r', 'eLearningDB');

    $search_terms = explode(' ', $_GET['term']);

    $search_terms_escaped = [];

    foreach ($search_terms as $term) {
        array_push($search_terms_escaped, mysqli_real_escape_string($db, strtolower($term)));
    }

    $query = "SELECT page, title FROM search_index WHERE ";
    $conditions = [];

    foreach ($search_terms_escaped as $term) {
        array_push($conditions, "keywords LIKE '%$term%'");
    }

    $query .= join(" OR ", $conditions) . ";";

    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "<p>$count results found for \"" . $_GET['term'] . "\"</p>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='card' onclick=\"window.location = '" . $row['page'] . "'\"><a href='#'>" . $row['title'] . "</a><br />https://webcoursera.com/" . $row['page'] . "</div>";
        }
    } else {
        echo "<p>No search results</p>";
    }
?>
</div>
<?php include('footer.php') ?>
</body>
</html>