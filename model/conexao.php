<?php 

/**
 * Classe responsável por gerenciar a conexão com o banco de dados MySQL
 * Utiliza PDO (PHP Data Objects) para uma conexão mais segura e flexível
 */
class Conexao {

    /**
     * Método público que estabelece e retorna uma conexão com o banco de dados
     * @return PDO|null Retorna o objeto de conexão PDO ou null em caso de erro
     */
    public static function conectar(){
        // Configurações do servidor de banco de dados

        $servername = "localhost";  // Endereço do servidor MySQL (local neste caso)
        $username = "root";         // Nome de usuário do MySQL
        $password = "";             // Senha do MySQL (vazia no XAMPP por padrão)

        // Bloco try-catch para capturar possíveis erros de conexão
        try{
            // Criação da conexão PDO com o banco de dados MySQL
            $conn = new PDO("mysql:host=$servername;dbname=rotaairlines",$username,$password);
            
            // Configura o PDO para lançar exceções em caso de erro
            // Isso facilita o tratamento de erros durante operações no banco
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Exibir mensagem de sucesso 
            echo "Conexão foi Realizada com Sucesso!";
            
            // Retorna o objeto de conexão para ser usado em outras partes do sistema
            return $conn;
        }
        // Captura exceções específicas do PDO (erros de conexão/banco de dados)
        catch (PDOException $e) {
            // Exibe mensagem de erro com detalhes do problema
            echo "Conexão Falhou! " . $e->getMessage();
            
            // Retorna null indicando que a conexão falhou
            return null;
        }
    }
}

?>