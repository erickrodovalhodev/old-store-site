# old-store-site

Store website and product catalogue. PHP 7 + MySQL, 2019, no framework.

First paid client work. Kept as a reference of the starting point, not as a
current showcase — the code is procedural and the queries are string-built.

## run

XAMPP, drop the folder into `htdocs`, create the `store` database from
`schema.sql`.

## known limits

- `mysqli_*` with no prepared statements
- no autoloader, every page includes `conexao.php` directly
- no tests
