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