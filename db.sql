CREATE DATABASE blogpp;

USE blogpp;

CREATE TABLE posts (
   id INT AUTO_INCREMENT PRIMARY KEY,
   content VARCHAR(1000) NOT NULL
);

INSERT INTO posts (content) VALUES
    ('Šī ir mana pirmā bloga ieraksta satura teksts. Te varētu būt garāks teksts par kādu interesantu tēmu.'),
    ('Otrais bloga ieraksts ar citu saturu. Šeit varētu būt stāsts par kādu notikumu vai pārdomas.'),
    ('Trešais ieraksts blogā. Šis teksts demonstrē, ka varam pievienot dažāda garuma saturu.');