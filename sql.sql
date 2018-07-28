UPDATE essentialmode.users
ALTER TABLE users; 
ADD password VARCHAR(255) NULL DEFAULT 'password' COLLATE 'utf8mb4_bin' 
SET password = 'password';

/* This doesnt work bc i dont know how to sql :( */
/* Make sure to change any admin's password to something else manually because if their value is left as password, then if their permission_level is >4 , they have full access.