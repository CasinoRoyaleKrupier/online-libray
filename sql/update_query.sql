-- Update rows in table 'books'
USE online_libray;

UPDATE books
SET
    is_available = false,
    borrower = 'user'
WHERE id = 12;	/* add search conditions here */

SELECT * FROM books WHERE id = 12;