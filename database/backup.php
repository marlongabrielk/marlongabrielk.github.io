<?php
// Inclui o arquivo de configuração do banco de dados
include('config.php');

// Nome do arquivo de backup (pode incluir data/hora para torná-lo único)
$backup_file = 'backup_' . date('Y-m-d_H-i-s') . '.sql';

// Comando para exportar o banco de dados para um arquivo SQL
$command = "mysqldump -h " . DB_HOST . " -u " . DB_USER . " -p" . DB_PASSWORD . " " . DB_NAME . " > $backup_file";

// Executa o comando
exec($command);

echo "Backup do banco de dados foi criado em: " . $backup_file;

// Pasta onde os backups são armazenados
$backup_folder = 'caminho/para/a/pasta/database/backups/';

// Obtém a lista de arquivos na pasta de backups
$files = glob($backup_folder . '*');

// Verifica cada arquivo e exclui os que têm mais de 1 ano de idade
foreach ($files as $file) {
    if (is_file($file) && time() - filemtime($file) >= 365 * 24 * 60 * 60) { // 365 dias em segundos
        unlink($file);
        echo "Backup '$file' foi excluído.\n";
    }
}
?>


// Crontab para agendar tarefa
// 0 0 * * * php /caminho/para/o/script/backup.php
