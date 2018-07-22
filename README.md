## SQL opperations

SELECT, INSERT, DELETE, UPDATE

Select:

SELECT column1, column2  
FROM table_name;

SELECT *  
FROM table_name;

SELECT column1, column2  
FROM table_name  
WHERE condition;

conditions:

WHERE id = 2;  
WHERE title = 'title';  
WHERE title != 'title';  
WHERE condition1 OR condition2;  
WHERE condition1 AND condition2;

Create index on specific columns to search the database faster. But inserting or updating data in table with indexes takes more time, because indexes has to be updated. Only create indexed where date will be serched or ordered.

SELECT *  
FROM table_name  
ORDER BY column1, column2;

SELECT *  
FROM table_name  
ORDER BY column1 DESC;