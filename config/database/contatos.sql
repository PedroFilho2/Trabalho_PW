CREATE TABLE alunos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  imagem VARCHAR(255),
  titulo VARCHAR(255) UNIQUE,
  descricao TEXT,
  data_criacao DATE
);