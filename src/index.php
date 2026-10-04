<?php
$host = 'db';
$dbname = '/firebird/data/agenda.fdb';
$user = 'SYSDBA';
$password = 'masterkey';

try {
    $dbh = new PDO("firebird:dbname={$host}:{$dbname};charset=UTF8", $user, $password);
    
    echo "<h2>Teste de Conexão - Agenda Telefônica</h2>";
    echo "<p style='color: green;'>Sucesso! O PHP conseguiu se conectar ao Firebird.</p>";
    
    $version = $dbh->getAttribute(PDO::ATTR_SERVER_VERSION);
    echo "<p>Versão do Banco: " . htmlspecialchars($version) . "</p>";

} catch (PDOException $e) {
    echo "<h2>Erro na conexão:</h2><p>" . $e->getMessage() . "</p>";
}
<?php echo '<p>Testando conexão com Firebird e agenda telefônica.</p>'; ?>
