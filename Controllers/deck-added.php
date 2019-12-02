
... <?php
    $deckTitle = $_POST['deckTitle'];
    var_dump($deckTitle);echo"<br>";
    //var_dump(DeckDAO::getAll());
    //echo "".DeckDAO::addDeck($deckTitle, null);
$db = new MysqliDb(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

try {
    $data = [
        'name' => $deckTitle,
        'createdAt' => $db->now(),
        'rights' => 1,
        'idUserOwner' => 1
    ];
} catch (Exception $e) {
    return $e;
}

$id = $db->insert('deck', $data);
echo $id;
