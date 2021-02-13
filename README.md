# Prototype Website AkarIlmiah

## How to Install
1. git clone <thisRepository.git>
2. cd <thisRepository>
3. npm install && npm run dev

## How to Make Database and Table
1. mysql -u root -p
2. input password
3. > create database <databaseName>;
4. > quit
5. edit .env file:
    * DB_CONNECTION=mysql
    * DB_HOST=127.0.0.1
    * DB_PORT=3306
    * DB_DATABASE= <databaseName>
    * DB_USERNAME=root
    * DB_PASSWORD= <yourPassword>

## Note
change <> with appropriate input