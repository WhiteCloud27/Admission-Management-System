<<<<<<< HEAD
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

=======
# Contact
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
>>>>>>> 0e187783f48acd90caaf978f811a62b609072d7e
