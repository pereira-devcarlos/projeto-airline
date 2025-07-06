<?php 

require_once 'conexao.php'; // Importa a classe de conexão com o banco de dados

/**
 * Classe Usuario - Representa um usuário do sistema de companhia aérea
 * Contém informações pessoais e de login do usuário
 */
class Usuario {
    
    // Propriedades privadas da classe
    private $idUsuario;     // ID único do usuário
    private $nomeUsuario;   // Nome completo do usuário
    private $email;         // Email para login e contato
    private $dtaNasc;       // Data de nascimento
    private $paisNasc;      // País de nascimento/residência
    private $numTel;        // Número de telefone
    private $cpf;           // CPF do usuário
    private $senha;         // Senha criptografada
    private $sexo;          // Sexo do usuário (M/F/O)

    public function cadastrarUsuario() {
        try{
            $conn = Conexao::conectar(); // Obtém a conexão com o banco de dados
            $sql = $conn->prepare("insert into rotaairlines.tabelausuario (nomeUsuario, email, dtaNasc, paisNasc, numTel, cpf, senha, sexo) 
            values (:nome, :email, :dtaNasc, :paisNasc, :numTel, :cpf, :senha, :sexo)");
            $sql->bindParam("nome", $nomeUsuario);
            $sql->bindParam("email", $email);
            $sql->bindParam("dtaNasc", $dtaNasc);
            $sql->bindParam("paisNasc", $paisNasc);
            $sql->bindParam("numTel", $numTel);
            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("senha", $senha);
            $sql->bindParam("sexo", $sexo);
            
            $nomeUsuario = $this->nomeUsuario;
            $email = $this->email;
            $dtaNasc = $this->dtaNasc;
            $paisNasc = $this->paisNasc;
            $numTel = $this->numTel;
            $cpf = $this->cpf;
            $senha = $this->senha; 
            $sexo = $this->sexo;
            
            $sql->execute();
        }
        catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
            return false; // Retorna falso em caso de erro
        }
    }

    /**
     * Construtor da classe Usuario
     * @param string $nomeUsuario Nome completo do usuário
     * @param string $email Email do usuário
     * @param string $dtaNasc Data de nascimento
     * @param string $paisNasc País de nascimento
     * @param string $numTel Número de telefone
     * @param string $cpf CPF do usuário
     * @param string $senha Senha do usuário
     * @param string $sexo Sexo do usuário
     */
    public function __construct($nomeUsuario = null, $email = null, $dtaNasc = null, $paisNasc = null, $numTel = null, $cpf = null, $senha = null, $sexo = null) {
        $this->nomeUsuario = $nomeUsuario;
        $this->email = $email;
        $this->dtaNasc = $dtaNasc;
        $this->paisNasc = $paisNasc;
        $this->numTel = $numTel;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->sexo = $sexo;
    }

    // GETTERS - Métodos para obter valores das propriedades

    /**
     * Obtém o ID do usuário
     * @return int ID do usuário
     */
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    /**
     * Obtém o nome do usuário
     * @return string Nome completo do usuário
     */
    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    /**
     * Obtém o email do usuário
     * @return string Email do usuário
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Obtém a data de nascimento do usuário
     * @return string Data de nascimento
     */
    public function getDtaNasc() {
        return $this->dtaNasc;
    }

    /**
     * Obtém o país de nascimento do usuário
     * @return string País de nascimento
     */
    public function getPaisNasc() {
        return $this->paisNasc;
    }

    /**
     * Obtém o número de telefone do usuário
     * @return string Número de telefone
     */
    public function getNumTel() {
        return $this->numTel;
    }

    /**
     * Obtém o CPF do usuário
     * @return string CPF do usuário
     */
    public function getCpf() {
        return $this->cpf;
    }

    /**
     * Obtém a senha do usuário
     * @return string Senha do usuário
     */
    public function getSenha() {
        return $this->senha;
    }

    /**
     * Obtém o sexo do usuário
     * @return string Sexo do usuário (M/F/O)
     */
    public function getSexo() {
        return $this->sexo;
    }

    // SETTERS - Métodos para definir valores das propriedades

    /**
     * Define o ID do usuário
     * @param int $idUsuario ID do usuário
     * @return self Retorna a própria instância para method chaining
     */
    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    /**
     * Define o nome do usuário
     * @param string $nomeUsuario Nome completo do usuário
     * @return self Retorna a própria instância para method chaining
     */
    public function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
        return $this;
    }

    /**
     * Define o email do usuário
     * @param string $email Email do usuário
     * @return self Retorna a própria instância para method chaining
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Define a data de nascimento do usuário
     * @param string $dtaNasc Data de nascimento
     * @return self Retorna a própria instância para method chaining
     */
    public function setDtaNasc($dtaNasc) {
        $this->dtaNasc = $dtaNasc;
        return $this;
    }

    /**
     * Define o país de nascimento do usuário
     * @param string $paisNasc País de nascimento
     * @return self Retorna a própria instância para method chaining
     */
    public function setPaisNasc($paisNasc) {
        $this->paisNasc = $paisNasc;
        return $this;
    }

    /**
     * Define o número de telefone do usuário
     * @param string $numTel Número de telefone
     * @return self Retorna a própria instância para method chaining
     */
    public function setNumTel($numTel) {
        $this->numTel = $numTel;
        return $this;
    }

    /**
     * Define o CPF do usuário
     * @param string $cpf CPF do usuário
     * @return self Retorna a própria instância para method chaining
     */
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * Define a senha do usuário (já deve vir criptografada)
     * @param string $senha Senha do usuário
     * @return self Retorna a própria instância para method chaining
     */
    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }

    /**
     * Define o sexo do usuário
     * @param string $sexo Sexo do usuário (M/F/O)
     * @return self Retorna a própria instância para method chaining
     */
    public function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }

    // MÉTODOS AUXILIARES

    /**
     * Valida se o CPF tem o formato correto (11 dígitos)
     * @return bool True se o CPF é válido, false caso contrário
     */
    public function validarCpf() {
        return strlen($this->cpf) === 11 && is_numeric($this->cpf);
    }

    /**
     * Valida se o email tem um formato válido
     * @return bool True se o email é válido, false caso contrário
     */
    public function validarEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Criptografa a senha usando password_hash
     * @param string $senhaPlana Senha em texto plano
     * @return self Retorna a própria instância para method chaining
     */
    public function criptografarSenha($senhaPlana) {
        $this->senha = password_hash($senhaPlana, PASSWORD_DEFAULT);
        return $this;
    }

    /**
     * Verifica se uma senha em texto plano corresponde à senha criptografada
     * @param string $senhaPlana Senha em texto plano para verificar
     * @return bool True se as senhas coincidem, false caso contrário
     */
    public function verificarSenha($senhaPlana) {
        return password_verify($senhaPlana, $this->senha);
    }

    /**
     * Retorna uma representação em string do objeto Usuario
     * @return string Representação do usuário
     */
    public function __toString() {
        return "Usuário: {$this->nomeUsuario} (ID: {$this->idUsuario}, Email: {$this->email})";
    }
}

?>