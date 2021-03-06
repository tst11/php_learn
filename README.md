## SQL operations

SELECT, INSERT, DELETE, UPDATE

Select:
```sql
SELECT column1, column2  
FROM table_name;

SELECT *  
FROM table_name;

SELECT column1, column2  
FROM table_name  
WHERE condition;
```
conditions:
```sql
WHERE id = 2;  
WHERE title = 'title';  
WHERE title != 'title';  
WHERE condition1 OR condition2;  
WHERE condition1 AND condition2;
```
Create index on specific columns to search the database faster. But inserting or updating data in table with indexes takes more time, because indexes has to be updated. Only create indexed where date will be serched or ordered.

```sql
SELECT *  
FROM table_name  
ORDER BY column1, column2;

SELECT *  
FROM table_name  
ORDER BY column1 DESC;
```

## Database connection

```php
<?php
$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
```