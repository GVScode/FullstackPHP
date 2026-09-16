Comando SQL para criar a base de dados.
```
CREATE DATABASE nome_da_base_de_dados CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; 
```
```
CREATE DATABASE celke CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; 
```

Comando SQL para criar a tabela "users".
```
CREATE TABLE IF NOT EXISTS users( 
    id int NOT NULL AUTO_INCREMENT, 
    name varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL, 
    email varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL, 
    PRIMARY KEY (id) 
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

Comando SQL para apagar a tabela "users".
```
DROP TABLE IF EXISTS nome_da_tabela;
```
```
DROP TABLE IF EXISTS users;
```