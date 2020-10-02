# README

This README would normally document whatever steps are necessary to get the
application up and running.

Things you may want to cover:

* create 2 db with name : 
  
  - sehatQ_development
  - sehatQ_test

* run rails db:migrate

* run rails db:seed

and also the results of application generated locally using postman

1. Create an API for login and register by using email
  
  a. signup 
  - url :127.0.0.1:3000/signup
  - param 
      { 
       "administrator" : {
        "username": "aditya",
        "email":"adite@gmail.com",
        "password":"123456",
        "password_confirmation":"123456"
       }
      }
   - result
   
   b. login 
   - url : 127.0.0.1:3000/auth/login
   - param 
      {"auth":
             {
               "email":"adite@gmail.com",
               "password":"123456"
             }
      }
    - result

2. Create an API list to display all doctors and hospitals
    
   - url : 127.0.0.1:3000/hospitalAndDoctor
   - result
   
3. Create an API where user can book a schedule with doctor
    
   - url : 127.0.0.1:3000/book/create
   - param 
      { 
       "book" : {
        "id_doctor_schedule": "2",
        "id_administrator":"1",
        "state":"0"
       }
      }
   - result

4. The maximum user can book within 30 minutes before the doctor starts the schedule.
  
   - url : 127.0.0.1:3000/book/create
   - param same like number 3
   - result

5. A total of 10 users can book the same doctor.
  
   - url : 127.0.0.1:3000/book/create
   - param same like number 3
   - result

6. Create an API to display doctor schedule with patients
   
   - url : 127.0.0.1:3000/book/show
   - result

7. Write unit test with Rspec

  - run rspec
