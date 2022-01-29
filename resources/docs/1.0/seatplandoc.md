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