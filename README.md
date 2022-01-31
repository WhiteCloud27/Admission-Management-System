# Admission Management System

# Overview

---
- [Description](#section-1)
- [Goals](#section-2)
- [Contributors](#section-3)

<a name="section-1"></a>

## Description

JU Admission Management System is web softaware system where all the admission seeker students who wants to admit in Jahangirnahar University can Apply, download admit card, see seat plan,  get result, choose subject, get allocation hall, can contact with authority, can admit,  see FAQ and all the others things.

So It is a platform for the students starting from the apply and end with the get admitted.

<a name="section-2"></a>

## Goals

Implement the full project with all the features.

<a name="section-4"></a>

## Contributors

1. Mahbub Islam Mahim
2. Mallika Dey
3. Md. Azizul Islam
4. Rama Kundu Prova
5. Samin Yasar Chowdhury




# Contact with authority feature
---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Methods](#section-3)
- [Views-Route](#section-4)
- [Mail](#section-5)

<a name="section-2"></a>

## Description

Here we implements the contact feature where Candidate can contact with the authority.
Candidate can fill up a form and write message there and send message via email.
The email format will generate automatically using the candidate's given info.

<a name="section-2"></a>

## Active Controllers

1. ContactController.php

<a name="section-3"></a>

## Methods

1. `contact() : Returns view of 'contactus';`

```php
public function contact()
    {
        return view('contactus');
    }
```

2. `index() : Returns view of 'contacttable';`

```php
public function index()
    {
        return view('adminContact.contacttable');
    }
```

3. `sendEmail(Request $request) : Send email of candidate to the authority.`


```php
public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Mail::to('mahimislam70@gmail.com')->send(new ContactMail($details));

        return back()->with('message_sent','Your message has been sent successfully.');
    }
```

<a name="section-4"></a>

## Views-Route

| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET | /contactus  | Index | Null |
| 2 | POST  | /sendmessage  | sendemail | contact.send |


<a name="section-5"></a>

## Mail

## Class- ContactMail

> {success} ContactMail : Handles the logic behind sending email.

## Methods

1. `__construct() : initializes details;`

```php
public function __construct($details)
    {
        $this->details = $details;
    }
```

2. `build() : Returns view of 'ContactMail' and initializes the subject of mail.;`

```php
public function build()
    {
        return $this->subject('Contact message from JU Admission')->view('emails.ContactMail');
    }
```




# Get Admit

---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Functions](#section-3)
- [Views-Route](#section-4)
- [Models](#section-5)
<a name="section-1"></a>
## Description

Here we implements contact feature where Candidate can complete their admission process.
Candidate can fill up a form. 
<a name="section-2"></a>

## Active Controllers

1. GetAdmit.php

<a name="section-3"></a>

## Methods

1. `admit() : Accept form information via $request & 
			  verify student's given information and save them`
```php
 	public function admit(Request $request)
    {
        ......
    }
```
<a name="section-4"></a>
## Views-Route

| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | POST  | /getadmit  | admit | getadmit |

<a name="section-5"></a>

## Models

> {success} ArtStuApply : Contains the art_stu_applies table information.<br>
BioStuApply : Contains the bio_stu_applies table information.<br>
MathStuApply : Contains the math_stu_applies table information.<br>
BusinStuApply : Contains the busin_stu_applies table information.<br>
InsStuApply : Contains the ins_stu_applies table information.<br>
LawStuApply : Contains the law_stu_applies table information.<br>
SocialStuApply : Contains the social_stu_applies table information.<br>



# Confirm Submission

---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Functions](#section-3)
- [Views-Route](#section-4)
- [Models](#section-5)
<a name="section-1"></a>
## Description

Here students may fill a subject choice form and we save their subject choice list in a file.

<a name="section-2"></a>

## Active Controllers

1. ConfirmSubmission.php

<a name="section-3"></a>

## Methods

1. `done() : Accept form information via $request & save them`
```php
 	public function done(Request $request, $faculty)
    {

    }
```
<a name="section-4"></a>
## Views-Route

| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET  | /done/{faculty}  | done | done |

<a name="section-5"></a>

## Models

> {success} ArtStuApply : Contains the art_stu_applies table information.<br>
BioStuApply : Contains the bio_stu_applies table information.<br>
MathStuApply : Contains the math_stu_applies table information.<br>
BusinStuApply : Contains the busin_stu_applies table information.<br>
InsStuApply : Contains the ins_stu_applies table information.<br>
LawStuApply : Contains the law_stu_applies table information.<br>
SocialStuApply : Contains the social_stu_applies table information.<br>



# Overview

---
- [Task](#section-1)
- [Goals](#section-2)
- [Objectives](#section-3)
- [Contributors](#section-4)

<a name="section-1"></a>
## Task

Our task is to implement a system where students will be able to see what hall they are allocated to.

<a name="section-2"></a>
## Goals

Our goal is to provide students with all the information they need to start their journey at the campus.

<a name="section-3"></a>
## Objectives

1. Implement "Get allocated hall".
2. Merge it with the main project.

<a name="section-4"></a>
## Contributors

1. Samin
2. Mahim
3. Azizul
4. Prova
5. Mallika

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


# Get result

---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Functions](#section-3)
- [Views-Route](#section-4)
- [Models](#section-5)
 
<a name="section-2"></a>
 
## Description
 
Here we implement the result feature where admin can update result and user can get result.
 
 
<a name="section-2"></a>
 
## Active Controllers
 
1. AdminResultController.php
 
<a name="section-3"></a>
 
## Methods
 
1. `setResult() : Returns void; Through this function admin can set result`
 
```php
function setResult( Request $request)
    {
 
    }
```
 
2. `getResult() : Returns view of 'userDetails';User can get result through this method`
 
```php
function  getResult(Request $request)
    {    
        return view('details',['data'=>$data]);
    }
```
 
 
<a name="section-4"></a>
 
## Views-Route
 
| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET | /candidate  | getResult | candidate |
| 2 | POST  | /admin  | setResult | admins |
 
 
<a name="section-5"></a>
 
## Models
 
> {success} Class Get_result : Handles the logic behind setting get result.<br>


# SeatPlan


- [Description](#section-1)
- [Active Controllers](#section-2)
- [Functions](#section-3)
- [Views-Route](#section-4)
- [Models](#section-5)

<a name="section-2"></a>

## Description

Here we implement seat plan feature where admin can update seat plan and user can get seat plan.


<a name="section-2"></a>

## Active Controllers

1. AdminSeatPlanController.php

<a name="section-3"></a>

## Methods

1. `setSeatPlan() : Returns void; Through this function admin can set seat plan`

```php
function setSeatPlan( Request $request)
    {
 
    }
```

2. `getSeatPlan() : Returns view of 'userDetails';User can get seat plan through this method`

```php
function  getSeatPlan(Request $request)
    {    
        return view('userDetails',['data'=>$data]);
    }
```


<a name="section-4"></a>

## Views-Route

| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET | /userseatplan  | getSeatPlan | userseatplan |
| 2 | POST  | /adminseatplan  | setSeatPlan | adminseatplan |


<a name="section-5"></a>

## Models

> {success} Class Seat : Handles the logic behind setting seat plan.<br>
  Class User : Handles the logic behind getting seat plan.
  
  

