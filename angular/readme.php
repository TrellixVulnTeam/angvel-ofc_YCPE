cd F:\xampp\htdocs\angvel\angular

ng new angular
npm install @angular/http@latest
https://www.codaffection.com/angular-article/angular-5-user-registration-web-api/
F:\xampp\htdocs\angvel\angular
npm i -s @angular/flex-layout @angular/cdk

ng add @angular/material
npm install bootstrap
npm i --save bootstrap@next and import in style.css


done-
login, register
validation
api call
logout
login redirect

issue-
without all value not call api
not geting proper db related error in api
validation error color or specific message show (html and api)
html not showing properly
clear form after submit
login token set wise work
access the route if login
login back to the previos url https://www.tektutorialshub.com/angular/angular-canactivate-guard-example/#logincomponentts
navbar bootstrap

http://localhost:4200/admin/products directly not data load in api all data cant set in edit page also
take not working in 307





showing current user name
hide links if not login https://loiane.com/2017/08/angular-hide-navbar-login-page/
few route only for admin

product form
category list
udeamy

304.https://github.com/yuyang041060120/ng2-validation
305.getbootstrap.com/docs/4.0/components/card/
312.https://www.npmjs.com/package/angular-4-data-table


ng g c product-form-add
<div class="row">
    <div class="col s8 offset-s2">
      <div class="card">
        <div class="sm-jumbotron center-align">
          <h2>User Registration</h2>
        </div>
        <form class="col s12 white" #userRegistrationForm="ngForm" (ngSubmit)="OnSubmit(userRegistrationForm)">
          <div class="row">
            <div class="input-field col s6">
              <input class="validate" type="text" name="UserName" #UserName="ngModel" [(ngModel)]="UserName" required>
              <label data-error="Required field!">UserName</label>
            </div>
            <div class="input-field col s6">
              <input class="validate" type="password" name="Password" #Password="ngModel" [(ngModel)]="Password" required  minlength="3">
              <label [attr.data-error]="Password.errors!=null?(Password.errors.required?'Required field!':'Minimum 3 characters needed'):''">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input class="validate" type="text" name="Email" #Email="ngModel" [(ngModel)]="Email" [pattern]="emailPattern">
              <label data-error="Invalid email!">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input type="text" name="FirstName" #FirstName="ngModel" [(ngModel)]="FirstName">
              <label>First Name</label>
            </div>
            <div class="input-field col s6">
              <input type="text" name="LastName" #LastName="ngModel" [(ngModel)]="LastName">
              <label>Last Name</label>
            </div>
          </div>
          <div class="row">
              <div class="input-field col s12">
                <button [disabled]="!userRegistrationForm.valid" class="btn-large btn-submit" type="submit">Submit</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
