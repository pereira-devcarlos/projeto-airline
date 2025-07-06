# ROTA Airlines

Seja Bem-vindo! Este sistema simula funcionalidades de uma companhia aérea, proporcionando uma experiência de cadastro, login e gerenciamento de viagens para os usuários.

## ✈️ Visão Geral

O projeto foi desenvolvido com foco em fornecer uma estrutura básica para companhias aéreas, permitindo o gerenciamento de usuários, autenticação, cadastro de passageiros e funcionalidades de check-in.

## 🚀 Funcionalidades

- **Cadastro de Usuários:**  
  - Formulário de cadastro com campos como nome, data de nascimento, país, CPF, telefone, e-mail e senha.
  - Validação de e-mail e CPF.
  - Armazenamento seguro de senhas com criptografia.
- **Login e Autenticação:**  
  - Sistema de login para acesso ao painel de usuário.
- **Dashboard do Usuário:**  
  - Visualização de informações pessoais e opções de gerenciamento de conta.
- **Check-in Online:**  
  - Modal para iniciar o check-in utilizando o código da reserva.
- **Menu de Navegação:**  
  - Barra superior com acesso rápido às principais áreas: Minhas Viagens, Check-in, Dashboard, Login e Logout.

## 🧑‍💻 Estrutura do Projeto

- **/model**: Classes de domínio e conexão com o banco de dados (ex: `usuario.php`, `conexao.php`).
- **/controller**: Lógica de controle, recebendo dados dos formulários e executando operações.
- **/view**: Telas do sistema, como cadastro, login, dashboard, navbar e estilos CSS.

## 🗂️ Principais Arquivos

- `model/usuario.php`: Classe principal de usuário, responsável por cadastro, validação e autenticação.
- `model/conexao.php`: Gerencia a conexão com o banco de dados MySQL usando PDO.
- `controller/usuarioController.php`: Controlador responsável por processar ações relacionadas ao usuário.
- `view/cadastro.php`: Tela para cadastro de novos usuários.
- `view/navbar.php`: Menu superior com navegação entre áreas do sistema.

## 💾 Tecnologias Utilizadas

- **PHP**: Backend e lógica de negócio.
- **MySQL**: Banco de dados relacional.
- **HTML/CSS**: Estrutura e estilo das páginas.
- **Bootstrap**: Estilização e componentes responsivos.
- **JavaScript (jQuery)**: Interatividade (principalmente para modais e navegação).

## ⚙️ Como Executar Localmente

1. Clone este repositório.
2. Importe o banco de dados `rotaairlines` em seu MySQL.
3. Configure o usuário e senha do banco no arquivo `model/conexao.php`.
4. Inicie um servidor local (ex: XAMPP) e acesse o sistema via navegador.

## 📌 Observações

- Este projeto é um protótipo didático e pode ser expandido para incluir funcionalidades como reservas, emissão de passagens, gerenciamento de voos, etc.
- Certifique-se de proteger as credenciais do banco de dados em ambiente de produção.

## 📝 Licença

Este projeto está sob a licença MIT.

---

Desenvolvido por [Carlos Eduardo Pereira](https://github.com/pereira-devcarlos)
