<? php 

function connectToDB()
{
    try{
        return new PDO('mysqli:host=127.0.0.1;dbname=mytodo','root','');
    }catch (PDOException $e){
        die($e->getMessage());
    }
}
fmewmodevmdvmdlspekfewfoefekwepof

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    
    $statement->execute(); 

    return $statement->fetchAll(PDO::FETCH_CLASS,'Task')
}