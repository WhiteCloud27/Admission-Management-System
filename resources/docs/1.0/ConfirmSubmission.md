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
