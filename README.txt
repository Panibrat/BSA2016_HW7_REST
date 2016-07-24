Тестировал программой Postman www.getpostman.com

Добавление новой книги в библиотеку:
url: http://localhost:8000/books
POST
body:
       {"author": "Pushkin",
       "title": "King Kong",
       "year": "2000",
       "genre": "travel"}
	   
Списание книги из библиотеки:
url: http://localhost:8000/books/{book_id}
DELETE

Предоставление детальной инорфмации о книге
url: http://localhost:8000/books/{book_id}
GET

Предоставление списка книг, имеющихся в библиотеке
url: http://localhost:8000/books
GET

Предоставление списка книг, которые взял определенный пользователь:
url: http://localhost:8000/users/{user_id}/books
GET

Возвращать книгу от определенного пользователя в билиотеку
url: //http://localhost:8000/users/{user_id}/books/{book_id}
DELETE

Присваивать книгу определенному пользователю
url: //http://localhost:8000/users/{user_id}/books/{book_id}
GET

Возвращать данные профиля об определенном пользователе
url: http://localhost:8000/users/{id}
GET


