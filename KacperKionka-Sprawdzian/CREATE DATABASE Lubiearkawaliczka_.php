CREATE DATABASE Lubiearkawaliczka;

USE Lubie_arka_waliczka;

CREATE TABLE ksiazk (
  tytul VARCHAR(255) PRIMARY KEY,
  rock_publikacji INT
);

INSERT INTO ksiazk (tytul, rock_publikacji) VALUES
  ('Harry Potter and the Sorcerer's Stone', 2001),
  ('The Lord of the Rings: The Fellowship of the Ring', 2001),
  ('The Catcher in the Rye', 2002),
  ('To Kill a Mockingbird', 2003),
  ('Pride and Prejudice', 2005);
