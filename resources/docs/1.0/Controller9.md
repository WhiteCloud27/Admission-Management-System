# Controller

---
- [Active Controllers](#section-1)
- [Functions](#section-2)
- [Views](#section-3)
- [Models](#section-4)

<a name="section-1"></a>
## Active Controllers

1. StudentController.php

<a name="section-2"></a>
## Functions

### StudentController :

1. `index() : Returns view of 'welcome';`
2. `addData(Request $request) : Insert data into the student table.`
3. `destroy($id) : Deletes data from student table. `
4. `edit($id) : Edits data from student table.`
5. `search(Request $request) : Allows user to search his allocated hall using registration number. `

<a name="section-3"></a>
## Routes

### StudentController :

| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET | /admin  | Index | StudentCont.index |
| 2 | POST  | /admin  | Create | StudentCont.addData |
| 3 | GET  | /edit/{id}  | Edit | StudentCont.edit |
| 4 | PUT  | /edit/{id}  | Update | StudentCont.update |
| 5 | GET  | /delete/{id}  | Delete | StudentCont.destroy |
| 6 | POST  | /search-record  | Search | StudentCont.search |

<a name="section-4"></a>
## Models

### StudentController :

1. `student : Handles the logic behind student table.`

